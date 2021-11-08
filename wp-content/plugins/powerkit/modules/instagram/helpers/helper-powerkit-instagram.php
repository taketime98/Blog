<?php
/**
 * Helpers Instagram
 *
 * @package    Powerkit
 * @subpackage Modules/Helper
 */

/**
 * Template handler
 *
 * @param string $name      Specific template.
 * @param array  $feed      Array of instagram feed.
 * @param array  $instagram Array of instagram items.
 * @param array  $params    Array of params.
 */
function powerkit_instagram_template_handler( $name, $feed, $instagram, $params ) {
	$templates = apply_filters( 'powerkit_instagram_templates', array() );

	$new = isset( $templates['default'] ) ? false : true;

	if ( $new && count( $templates ) > 0 ) {
		$first_item = array_shift( $templates );

		if ( function_exists( $first_item['func'] ) ) {
			call_user_func( $first_item['func'], $feed, $instagram, $params );
		} else {
			call_user_func( 'powerkit_instagram_default_template', $feed, $instagram, $params );
		}
	} elseif ( isset( $templates[ $name ] ) && function_exists( $templates[ $name ]['func'] ) ) {
		call_user_func( $templates[ $name ]['func'], $feed, $instagram, $params );
	} else {
		call_user_func( 'powerkit_instagram_default_template', $feed, $instagram, $params );
	}
}

/**
 * Get templates options
 *
 * @return array Items.
 */
function powerkit_instagram_get_templates_options() {
	$options = array();

	$templates = apply_filters( 'powerkit_instagram_templates', array() );

	if ( $templates ) {
		foreach ( $templates as $key => $item ) {
			if ( isset( $item['name'] ) ) {
				$options[ $key ] = $item['name'];
			}
		}
	}

	return $options;
}

/**
 * Get data (from json) of instagram response
 *
 * @param string $ins_request Instagram request.
 * @param array  $ins_params  Options.
 */
function powerkit_instagram_json_get_feed( $ins_request, $ins_params ) {

	$user_data = wp_remote_retrieve_body( $ins_request );

	// Json decode of user.
	$user_data = json_decode( $user_data );

	// Get data of user.
	if ( is_object( $user_data ) ) {

		if ( isset( $user_data->error->message ) ) {

			return sprintf( '%s <a href="%s">%s</a>', $user_data->error->message . esc_html__( ' Please check your ', 'powerkit' ), powerkit_get_page_url( 'connect&tab=instagram' ), esc_html__( ' Instagram Settings', 'powerkit' ) );

		} elseif ( isset( $user_data->username ) ) {

			if ( $ins_params['user_id'] !== $user_data->username ) {
				return esc_html__( 'Please check your Instagram User, you do not have access to this account.', 'powerkit' );
			}
		} else {

			return sprintf( '%s <a href="%s">%s</a>', esc_html__( 'Instagram data is not set. Please check your Instagram User or ', 'powerkit' ), powerkit_get_page_url( 'connect&tab=instagram' ), esc_html__( ' Instagram Settings', 'powerkit' ) );
		}
	} else {
		return esc_html__( 'Error decoding the instagram json.', 'powerkit' );
	}

	$media_data = wp_remote_retrieve_body( $ins_request['headers']['recent'] );

	// Json decode of media.
	$media_data = json_decode( $media_data );

	// Get data of media.
	if ( is_object( $media_data ) ) {

		if ( isset( $media_data->error->message ) ) {

			return sprintf( '%s <a href="%s">%s</a>', $media_data->error->message . esc_html__( ' Please check your ', 'powerkit' ), powerkit_get_page_url( 'connect&tab=instagram' ), esc_html__( ' Instagram Settings', 'powerkit' ) );

		} elseif ( isset( $media_data ) ) {

			// Images not found.
			if ( ! is_array( $media_data->data ) || count( $media_data->data ) <= 0 ) {
				return esc_html__( 'There are no images in your account.', 'powerkit' );
			}
		} else {

			return sprintf( '%s <a href="%s">%s</a>', esc_html__( 'Instagram data is not set. Please check your Instagram User or ', 'powerkit' ), powerkit_get_page_url( 'connect&tab=instagram' ), esc_html__( ' Instagram Settings', 'powerkit' ) );
		}
	} else {
		return esc_html__( 'Error decoding the instagram json.', 'powerkit' );
	}

	/* ------------- PARSE DATA -------------- */

	$feed = array();

	// Full name.
	$feed['name'] = null;

	if ( isset( $user_data->name ) ) {
		$feed['name'] = $user_data->name;
	}

	// Username.
	$feed['username'] = null;

	if ( isset( $user_data->username ) ) {
		$feed['username'] = $user_data->username;
	}

	// Liked count.
	$feed['following'] = null;

	if ( isset( $user_data->following_count ) ) {
		$feed['following'] = (int) $user_data->following_count;
	}

	// Liked count.
	$feed['followers'] = null;

	if ( isset( $user_data->followers_count ) ) {
		$feed['followers'] = (int) $user_data->followers_count;
	}

	// Avatar x1.
	$feed['avatar_1x'] = null;

	if ( isset( $user_data->profile_picture_url ) ) {
		$feed['avatar_1x'] = $user_data->profile_picture_url;
	}

	// Avatar x2.
	$feed['avatar_2x'] = null;

	if ( isset( $user_data->profile_picture_url ) ) {
		$feed['avatar_2x'] = $user_data->profile_picture_url;
	}

	// Images.
	$feed['images'] = array();

	foreach ( $media_data->data as $key => $media ) {
		// Thumbnail.
		$feed['images'][ $key ]['sizes']['thumbnail'] = null;

		if ( isset( $media->media_url ) ) {
			$feed['images'][ $key ]['sizes']['thumbnail'] = $media->media_url;
		}

		// Small.
		$feed['images'][ $key ]['sizes']['small'] = null;

		if ( isset( $media->media_url ) ) {
			$feed['images'][ $key ]['sizes']['small'] = $media->media_url;
		}

		// Large.
		$feed['images'][ $key ]['sizes']['large'] = null;

		if ( isset( $media->media_url ) ) {
			$feed['images'][ $key ]['sizes']['large'] = $media->media_url;
		}

		if ( isset( $media->thumbnail_url ) ) {
			$feed['images'][ $key ]['sizes']['thumbnail'] = $media->thumbnail_url;
			$feed['images'][ $key ]['sizes']['small']     = $media->thumbnail_url;
			$feed['images'][ $key ]['sizes']['large']     = $media->thumbnail_url;
		}

		// Item link.
		$feed['images'][ $key ]['link'] = null;

		if ( isset( $media->permalink ) ) {
			$feed['images'][ $key ]['link'] = $media->permalink;
		}

		// Desc.
		$feed['images'][ $key ]['text'] = null;

		if ( isset( $media->caption ) ) {
			$text = strtok( $media->caption, "\n" );

			$feed['images'][ $key ]['text'] = strip_tags( $text );
		}

		// Timestamp.
		$feed['images'][ $key ]['timestamp'] = null;

		if ( isset( $media->timestamp ) ) {
			$feed['images'][ $key ]['timestamp'] = powerkit_relative_time( $media->timestamp );
		}

		// Comment count.
		$feed['images'][ $key ]['comment_count'] = null;

		if ( isset( $media->comments_count ) ) {
			$feed['images'][ $key ]['comment_count'] = (int) $media->comments_count;
		}

		// Liked count.
		$feed['images'][ $key ]['liked_count'] = null;

		if ( isset( $media->like_count ) ) {
			$feed['images'][ $key ]['liked_count'] = (int) $media->like_count;
		}
	}

	// Number of images.
	if ( isset( $ins_params['number'] ) && intval( $ins_params['number'] ) > 0 ) {
		$feed['images'] = array_slice( $feed['images'], 0, $ins_params['number'], true );
	}

	return $feed;
}

/**
 * Get data (from html) of instagram response
 *
 * @param string $ins_request Instagram request.
 * @param array  $ins_params  Options.
 */
function powerkit_instagram_html_get_feed( $ins_request, $ins_params ) {

	$ins_response = wp_remote_retrieve_body( $ins_request );

	$feed = array();

	// Get the serialized data string present in the page script.
	preg_match( '/window\._sharedData = (.*);<\/script>/', $ins_response, $ins_data );

	$ins_data_full = array_shift( $ins_data );
	$ins_data_json = array_shift( $ins_data );

	if ( ! $ins_data_json ) {
		return sprintf( '%s <a href="%s">%s</a> %s', esc_html__( 'Instagram html data cannot be retrieved. Please try adding the ', 'powerkit' ), powerkit_get_page_url( 'connect&tab=instagram' ), esc_html__( 'Instagram Settings', 'powerkit' ), esc_html__( ' on the settings page.', 'powerkit' ) );
	}

	$instagram_json = json_decode( $ins_data_json, true );

	// Try to decode the json.
	if ( null === $instagram_json && JSON_ERROR_NONE !== json_last_error() ) {
		return sprintf( '%s <a href="%s">%s</a> %s', esc_html__( 'Error decoding the instagram json. Please try adding the ', 'powerkit' ), powerkit_get_page_url( 'connect&tab=instagram' ), esc_html__( 'Instagram Token', 'powerkit' ), esc_html__( ' on the settings page.', 'powerkit' ) );
	}

	// Current instagram data is not set.
	if ( ! isset( $instagram_json['entry_data']['ProfilePage'][0]['graphql']['user'] ) ) {
		return sprintf( '%s <a href="%s">%s</a> %s', esc_html__( 'Instagram data is not set, please check the ID. Please try adding the ', 'powerkit' ), powerkit_get_page_url( 'connect&tab=instagram' ), esc_html__( 'Instagram Settings', 'powerkit' ), esc_html__( ' on the settings page.', 'powerkit' ) );
	}

	$user_data = $instagram_json['entry_data']['ProfilePage'][0]['graphql']['user'];

	// Images not found.
	if ( ! isset( $user_data['edge_owner_to_timeline_media']['edges'] ) ) {
		return esc_html__( 'There are no images in your account.', 'powerkit' );
	}

	/* ------------- PARSE DATA -------------- */

	// Full name.
	$feed['name'] = null;

	if ( isset( $user_data['full_name'] ) ) {
		$feed['name'] = $user_data['full_name'];
	}

	// Username.
	$feed['username'] = null;

	if ( isset( $user_data['username'] ) ) {
		$feed['username'] = $user_data['username'];
	}

	// Liked count.
	$feed['following'] = null;

	if ( isset( $user_data['edge_follow']['count'] ) ) {
		$feed['following'] = (int) $user_data['edge_follow']['count'];
	}

	// Liked count.
	$feed['followers'] = null;

	if ( isset( $user_data['edge_followed_by']['count'] ) ) {
		$feed['followers'] = (int) $user_data['edge_followed_by']['count'];
	}

	// Avatar x1.
	$feed['avatar_1x'] = null;

	if ( isset( $user_data['profile_pic_url'] ) ) {
		$feed['avatar_1x'] = $user_data['profile_pic_url'];
	}

	// Avatar x2.
	$feed['avatar_2x'] = null;

	if ( isset( $user_data['profile_pic_url_hd'] ) ) {
		$feed['avatar_2x'] = $user_data['profile_pic_url_hd'];
	}

	// Images.
	$edges = $user_data['edge_owner_to_timeline_media']['edges'];

	$feed['images'] = array();

	foreach ( $edges as $key => $edge ) {
		if ( ! isset( $edge['node']['thumbnail_resources'] ) && $edge['node']['thumbnail_resources'] ) {
			continue;
		}

		// Resources.
		$resources = $edge['node']['thumbnail_resources'];

		// Get src thumbnail.
		foreach ( $resources as $resource ) {
			$feed['images'][ $key ]['sizes']['thumbnail'] = isset( $resource['src'] ) ? $resource['src'] : null;
			if ( isset( $resource['config_width'] ) && 150 === (int) $resource['config_width'] ) {
				break;
			}
		}

		// Get src small.
		foreach ( $resources as $resource ) {
			$feed['images'][ $key ]['sizes']['small'] = isset( $resource['src'] ) ? $resource['src'] : null;
			if ( isset( $resource['config_width'] ) && 320 === (int) $resource['config_width'] ) {
				break;
			}
		}

		// Get src large.
		foreach ( $resources as $resource ) {
			$feed['images'][ $key ]['sizes']['large'] = isset( $resource['src'] ) ? $resource['src'] : null;
			if ( isset( $resource['config_width'] ) && 640 === (int) $resource['config_width'] ) {
				break;
			}
		}

		// Item link.
		$feed['images'][ $key ]['link'] = null;

		if ( isset( $edge['node']['shortcode'] ) ) {
			$feed['images'][ $key ]['link'] = sprintf( 'https://www.instagram.com/p/%s', $edge['node']['shortcode'] );
		}

		// Desc.
		$feed['images'][ $key ]['text'] = null;

		if ( isset( $edge['node']['edge_media_to_caption']['edges'][0]['node']['text'] ) ) {
			$text = strtok( $edge['node']['edge_media_to_caption']['edges'][0]['node']['text'], "\n" );

			$feed['images'][ $key ]['text'] = strip_tags( $text );
		}

		// Timestamp.
		$feed['images'][ $key ]['timestamp'] = null;

		if ( isset( $edge['node']['taken_at_timestamp'] ) ) {
			$feed['images'][ $key ]['timestamp'] = powerkit_relative_time( $edge['node']['taken_at_timestamp'] );
		}

		// Comment count.
		$feed['images'][ $key ]['comment_count'] = null;

		if ( isset( $edge['node']['edge_media_to_comment']['count'] ) ) {
			$feed['images'][ $key ]['comment_count'] = (int) $edge['node']['edge_media_to_comment']['count'];
		}

		// Liked count.
		$feed['images'][ $key ]['liked_count'] = null;

		if ( isset( $edge['node']['edge_liked_by']['count'] ) ) {
			$feed['images'][ $key ]['liked_count'] = (int) $edge['node']['edge_liked_by']['count'];
		}
	}

	// Number of images.
	if ( isset( $ins_params['number'] ) && intval( $ins_params['number'] ) > 0 ) {
		$feed['images'] = array_slice( $feed['images'], 0, $ins_params['number'], true );
	}

	return $feed;
}

/**
 * Get data of instagram response
 *
 * @param string $ins_request Instagram request.
 * @param array  $ins_params  Options.
 */
function powerkit_instagram_get_feed( $ins_request, $ins_params ) {
	if ( powerkit_connect( 'instagram_app_access_token' ) ) {
		$feed = powerkit_instagram_json_get_feed( $ins_request, $ins_params );
	} else {
		$feed = powerkit_instagram_html_get_feed( $ins_request, $ins_params );
	}

	/* Manual Override */

	if ( is_array( $feed ) && get_option( 'powerkit_connect_instagram_custom_name' ) ) {
		$feed['name'] = get_option( 'powerkit_connect_instagram_custom_name' );
	}

	if ( is_array( $feed ) && get_option( 'powerkit_connect_instagram_following' ) ) {
		$feed['following'] = (int) get_option( 'powerkit_connect_instagram_following' );
	}

	if ( is_array( $feed ) && get_option( 'powerkit_connect_instagram_custom_followers' ) ) {
		$feed['followers'] = (int) get_option( 'powerkit_connect_instagram_custom_followers' );
	}

	if ( is_array( $feed ) && get_option( 'powerkit_connect_instagram_custom_avatar' ) ) {
		$feed['avatar_1x'] = get_option( 'powerkit_connect_instagram_custom_avatar' );
	}

	if ( is_array( $feed ) && get_option( 'powerkit_connect_instagram_custom_avatar' ) ) {
		$feed['avatar_2x'] = get_option( 'powerkit_connect_instagram_custom_avatar' );
	}

	return $feed;
}

/**
 * Get recent photos instagram
 *
 * @param array  $params     Recent options.
 * @param string $cache_name The cache name.
 */
function powerkit_instagram_get_recent( $params, $cache_name = 'powerkit_instagram_data' ) {

	$params = array_merge( array(
		'user_id'    => '',
		'header'     => false,
		'button'     => false,
		'number'     => 4,
		'columns'    => 1,
		'size'       => 'small',
		'target'     => '_blank',
		'template'   => 'default',
		'cache_time' => 720,
	), (array) $params );

	$cache_time = (int) $params['cache_time'];

	// Instagram trans name.
	$trans_name = $cache_name . '_' . md5( maybe_serialize( $params ) . powerkit_connect( 'instagram_app_access_token' ) );

	// Instagram request.
	$ins_request = get_transient( $trans_name );

	if ( ( false === $ins_request || 0 === $cache_time ) && apply_filters( 'powerkit_instagram_remote_connect', true ) ) {

		Powerkit_Connect::access_token_refresh( 'instagram' );

		if ( powerkit_connect( 'instagram_app_access_token' ) && powerkit_connect( 'instagram_app_user_id' ) ) {
			$access_token = powerkit_connect( 'instagram_app_access_token' );
			$user_id      = powerkit_connect( 'instagram_app_user_id' );

			// Get information about.
			if ( 'business' === powerkit_connect( 'instagram_app_type' ) ) {
				$ins_link = add_query_arg( array(
					'fields'       => 'biography,id,username,website,followers_count,media_count,profile_picture_url,name',
					'access_token' => $access_token,
				), 'https://graph.facebook.com/' . $user_id );
			} else {
				$ins_link = add_query_arg( array(
					'fields'       => 'id,username,media_count',
					'access_token' => $access_token,
				), 'https://graph.instagram.com/me' );
			}

			$ins_request = wp_safe_remote_get( $ins_link,
				array(
					'timeout'     => 120,
					'httpversion' => '1.1',
					'redirection' => 10,
					'sslverify'   => false,
				)
			);

			usleep( 100000 );

			// Get the most recent media published.
			if ( 'business' === powerkit_connect( 'instagram_app_type' ) ) {
				$ins_recent_link = add_query_arg( array(
					'fields'       => 'media_url,thumbnail_url,caption,id,media_type,timestamp,username,comments_count,like_count,permalink',
					'limit'        => min( $params['number'], 200 ),
					'access_token' => $access_token,
				), 'https://graph.facebook.com/' . $user_id . '/media' );
			} else {
				$ins_recent_link = add_query_arg( array(
					'fields'       => 'media_url,thumbnail_url,caption,id,media_type,timestamp,username,comments_count,like_count,permalink',
					'limit'        => min( $params['number'], 200 ),
					'access_token' => $access_token,
				), 'https://graph.instagram.com/' . $user_id . '/media' );
			}

			$ins_recent_request = wp_safe_remote_get( $ins_recent_link,
				array(
					'timeout'     => 120,
					'httpversion' => '1.1',
					'redirection' => 10,
					'sslverify'   => false,
				)
			);

			$ins_request['headers']['recent'] = $ins_recent_request;
		} else {

			$ins_link = sprintf( 'https://www.instagram.com/%s', $params['user_id'] );

			$ins_request = wp_safe_remote_get( $ins_link,
				array(
					'timeout'     => 120,
					'httpversion' => '1.1',
					'redirection' => 10,
					'sslverify'   => false,
				)
			);
		}

		set_transient( $trans_name, $ins_request, 60 * $cache_time );
	}

	// Instagram response.

	if ( ! is_wp_error( $ins_request ) ) {

		if ( apply_filters( 'powerkit_instagram_remote_connect', true ) ) {
			$instagram_feed = powerkit_instagram_get_feed( $ins_request, $params );
		} else {
			$instagram_feed = esc_html__( 'The connection to the server is denied.', 'powerkit' );
		}

		// Apply filters.
		$instagram_feed = apply_filters( 'powerkit_instagram_feed', $instagram_feed, $ins_request, $params );

		if ( is_string( $instagram_feed ) ) {

			powerkit_alert_warning( $instagram_feed );

		} else {
			$instagram = array();

			$placeholder_image = apply_filters( 'powerkit_lazyload_instagram_output', false );

			$ins_feed_class = null;

			$ins_feed_class .= ' pk-instagram-template-' . $params['template'];
			$ins_feed_class .= ' pk-instagram-size-' . $params['size'];
			$ins_feed_class .= ' pk-instagram-columns-' . $params['columns'];
			?>
			<div class="pk-instagram-feed <?php echo esc_attr( $ins_feed_class ); ?>">
				<?php
				foreach ( $instagram_feed['images'] as $item ) {

					$item = apply_filters( 'powerkit_instagram_item_data', $item );

					$class = 'pk-instagram-image';

					$image_thumbnail = $item['sizes']['thumbnail'];
					$image_small     = $item['sizes']['small'];
					$image_large     = $item['sizes']['large'];

					// Image Resolution.
					if ( 'thumbnail' === $params['size'] ) {
						$user_image = $image_thumbnail;
					} elseif ( 'small' === $params['size'] ) {
						$user_image = $image_small;
					} else {
						$user_image = $image_large;
					}

					// Columns.
					if ( 3 === (int) $params['columns'] ) {
						$user_image = $image_thumbnail;
					} elseif ( 2 === (int) $params['columns'] ) {
						$user_image = $image_small;
					} elseif ( 1 === (int) $params['columns'] ) {
						$user_image = $image_small;
					}

					// Retina sizes.
					if ( 'auto' === $params['size'] ) {
						if ( 3 === (int) $params['columns'] ) {
							$width = 150;
						} elseif ( 2 === (int) $params['columns'] ) {
							$width = 320;
						} elseif ( 1 === (int) $params['columns'] ) {
							$width = 640;
						}
					} elseif ( 'small' === $params['size'] ) {
						$width = 320;
					} elseif ( 'thumbnail' === $params['size'] ) {
						$width = 150;
					} else {
						$width = 640;
					}

					// Placeholder image.
					if ( $placeholder_image ) {
						$class .= ' pk-lazyload';
					}

					// Instagram item.
					$instagram[] = array(
						'class'       => $class,
						'description' => $item['text'],
						'link'        => $item['link'],
						'user_link'   => $item['link'],
						'comments'    => $item['comment_count'],
						'likes'       => $item['liked_count'],
						'time'        => $item['timestamp'],
						'thumbnail'   => $image_thumbnail,
						'small'       => $image_small,
						'large'       => $image_large,
						'user_image'  => $placeholder_image ? $placeholder_image : $user_image,
						'sizes'       => $placeholder_image ? 'auto' : sprintf( '(max-width: %1$spx) 100vw, %1$spx', $width ),
						'srcset'      => sprintf( '%s 150w, %s 320w, %s 640w', $image_thumbnail, $image_small, $image_large ),
					);
				}

				ob_start();

				powerkit_instagram_template_handler( $params['template'], $instagram_feed, $instagram, $params );

				$template_html = ob_get_clean();

				// Placeholder adaptation.
				if ( $placeholder_image ) {
					$placeholder_containers = apply_filters( 'powerkit_instagram_placeholder_containers', array( 'pk-instagram-items' ) );

					foreach ( $placeholder_containers as $container ) {
						preg_match( '/<div class="' . $container . '">.*?<\/div>/msU', $template_html, $template_match );

						if ( $template_match ) {
							$template_items = array_shift( $template_match );

							$output_items = str_replace( 'src=', sprintf( 'data-pk-src="%s" src=', $user_image ), $template_items );
							$output_items = str_replace( 'srcset=', 'data-pk-srcset=', $output_items );
							$output_items = str_replace( 'sizes=', 'data-pk-sizes=', $output_items );

							$template_html = str_replace( $template_items, $output_items, $template_html );
						}
					}
				}

				// Template Output.
				call_user_func( 'printf', '%s', $template_html );
				?>
			</div>
			<?php
		}
	} else {
		powerkit_alert_warning( esc_html__( 'This client has not been approved to access this resource.', 'powerkit' ) );
	}
}
