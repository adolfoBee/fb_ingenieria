<?php
/**
 * Big Title section for the homepage.
 *
 * @package WordPress
 * @subpackage Hestia
 * @since Hestia 1.0
 */

if (! function_exists('hestia_big_title')) :
    /**
     * Big title section content.
     *
     * @since Hestia 1.0
     */
    function hestia_big_title()
    {
        global $FBIngenieria;
        $headerImages = $FBIngenieria->getHeaderImagesUrl(); ?>
	<html>
	<div class="page-header" style="background-color: #0b465d;" id="fbi_big_title">
		<div style="position: relative; height: 100vh;">
            <?php
            if (!empty($headerImages)) {
                ?>
                <v-carousel>
                <?php
                foreach ($headerImages as $img) {
                    ?>
                    <v-carousel-item src="<?php echo $img ?>"></v-carousel-item>
                    <?php 
                } ?>
			</v-carousel>
            <?php 
            } ?>
			<div class="main-header-title">
				<h2 class="main-title"><b>FB</b> Ingeniería y Proyectos</h2>
				<hr style="width:50%; margin-left:25%"> VENEZUELA - PANAMÁ
			</div>
		</div>
	</div>
	<script>
		new Vue({
			el: '#fbi_big_title'
		})
	</script>
	</html>
	<?php

    }
endif;

if (! function_exists('hestia_slider_compatibility')) :

    /**
     * Check for previously set slider and make theme compatible.
     */
    function hestia_slider_compatibility()
    {
        $hestia_big_title_background  = get_theme_mod('hestia_big_title_background');
        $hestia_big_title_title       = get_theme_mod('hestia_big_title_title');
        $hestia_big_title_text        = get_theme_mod('hestia_big_title_text');
        $hestia_big_title_button_text = get_theme_mod('hestia_big_title_button_text');
        $hestia_big_title_button_link = get_theme_mod('hestia_big_title_button_link');

        $hestia_slider_content = get_theme_mod('hestia_slider_content');

        if (! empty($hestia_big_title_background) || ! empty($hestia_big_title_title) || ! empty($hestia_big_title_text) || ! empty($hestia_big_title_button_text) || ! empty($hestia_big_title_button_link)) {
            hestia_big_title();
        } else {
            if (! empty($hestia_slider_content)) {
                hestia_slider();
            } else {
                hestia_big_title();
            }
        }
    }
endif;

add_action('hestia_header', 'hestia_slider_compatibility');
