<?php
/**
 * Big Title section for the homepage.
 *
 * @package WordPress
 * @subpackage Hestia
 * @since Hestia 1.0
 */

if ( ! function_exists( 'hestia_big_title' ) ) :
	/**
	 * Big title section content.
	 *
	 * @since Hestia 1.0
	 */
	function hestia_big_title() {
	?>
		<div id="carousel-hestia-generic" class="carousel slide" data-ride="carousel">
			<div class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<?php

					$hestia_big_title_background  = get_theme_mod( 'hestia_big_title_background', get_template_directory_uri() . '/assets/img/slider2.jpg' );
					$hestia_big_title_title       = get_theme_mod( 'hestia_big_title_title', __( 'Lorem Ipsum', 'hestia' ) );
					$hestia_big_title_text        = get_theme_mod( 'hestia_big_title_text', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'hestia' ) );
					$hestia_big_title_button_text = get_theme_mod( 'hestia_big_title_button_text', __( 'Button', 'hestia' ) );
					$hestia_big_title_button_link = get_theme_mod( 'hestia_big_title_button_link', '#' );

					if ( ! empty( $hestia_big_title_background ) || ! empty( $hestia_big_title_title ) || ! empty( $hestia_big_title_text ) || ( ! empty( $hestia_big_title_button_text ) && ! empty( $hestia_big_title_button_link ) ) ) { ?>
					<div class="item active">
						<?php if ( ! empty( $hestia_big_title_background ) ) { ?>
						<div class="page-header header-filter"
							 style="background-image: url('<?php echo esc_url( $hestia_big_title_background ); ?>');">
							<?php } else { ?>
							<div class="page-header header-filter">
								<?php } ?>
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2 text-center" style="padding-top: 30vh;">
											<h1>FB</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
					} ?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
endif;

if ( ! function_exists( 'hestia_slider_compatibility' ) ) :

	/**
	 * Check for previously set slider and make theme compatible.
	 */
	function hestia_slider_compatibility() {
		$hestia_big_title_background  = get_theme_mod( 'hestia_big_title_background' );
		$hestia_big_title_title       = get_theme_mod( 'hestia_big_title_title' );
		$hestia_big_title_text        = get_theme_mod( 'hestia_big_title_text' );
		$hestia_big_title_button_text = get_theme_mod( 'hestia_big_title_button_text' );
		$hestia_big_title_button_link = get_theme_mod( 'hestia_big_title_button_link' );

		$hestia_slider_content = get_theme_mod( 'hestia_slider_content' );

		if ( ! empty( $hestia_big_title_background ) || ! empty( $hestia_big_title_title ) || ! empty( $hestia_big_title_text ) || ! empty( $hestia_big_title_button_text ) || ! empty( $hestia_big_title_button_link ) ) {
			hestia_big_title();
		} else {
			if ( ! empty( $hestia_slider_content ) ) {
				hestia_slider();
			} else {
				hestia_big_title();
			}
		}
	}
endif;

add_action( 'hestia_header', 'hestia_slider_compatibility' );