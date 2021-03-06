<?php
/**
 * The default template for displaying content
 *
 * Used for 404 pages.
 *
 * @package WordPress
 * @subpackage Hestia
 * @since Hestia 1.0
 */
?>

					<article id="post-0" class="section section-text">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
							<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
								<p>
									<?php
									/* translators: %s is Link to new post */
									printf( esc_html__( 'Ready to publish your first post? %s.', 'hestia' ),
										/* translators: %1$s is Link to new post, %2$s is Get started here */
										sprintf( '<a href="%1$s">%2$s</a>',
											esc_url( admin_url( 'post-new.php' ) ),
											esc_html__( 'Get started here','hestia' )
										)
									); ?>
								</p>
							<?php elseif ( is_search() ) : ?>
								<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hestia' ); ?></p>
								<?php get_search_form(); ?>
							<?php else : ?>
								<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'hestia' ); ?></p>
								<?php get_search_form(); ?>
							<?php endif; ?>
							</div>
						</div>
					</article>
