<?php
/**
 * Title: 404
 * Slug: lexicona17s/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"className":"single-content","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group single-content" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|custom-contrasting-ink","style":"dashed","width":"2px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--custom-contrasting-ink);border-top-style:dashed;border-top-width:2px;margin-top:0;padding-top:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/peugeot-404-scaled-1.jpg" alt=""/><figcaption class="wp-element-caption"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element, 3. is the start of a 'a' HTML element, 4. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Image %1$sAlf van Beem%2$s (%3$sCC0 1.0 Public Dedication%4$s).', 'lexicona17s' ), '<a href="' . esc_url( 'https://commons.wikimedia.org/wiki/File:Peugeot_404_(1974)_,_Dutch_licence_registration_03-YA-61_pic3.JPG' ) . '" data-type="link" data-id="https://commons.wikimedia.org/wiki/File:Peugeot_404_(1974)_,_Dutch_licence_registration_03-YA-61_pic3.JPG">', '</a>', '<a href="' . esc_url( 'https://creativecommons.org/publicdomain/zero/1.0/' ) . '">', '</a>' ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"var:preset|spacing|60","bottom":"0"},"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"right","level":1,"className":"align","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-contrasting-ink"}}}},"textColor":"custom-contrasting-ink"} -->
<h1 class="wp-block-heading has-text-align-right align has-custom-contrasting-ink-color has-text-color has-link-color"><?php esc_html_e('This page couldn’t be found', 'lexicona17s');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"right","className":"align","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-faded-ink"}}}},"textColor":"custom-faded-ink","fontSize":"small"} -->
<p class="has-text-align-right align has-custom-faded-ink-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Error 404', 'lexicona17s');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element, 3. is the start of a 'a' HTML element, 4. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'This is most unfortunate. This page might have been removed… or never existed in the first place. You can try to %1$ssearch it%2$s or %3$sgo back to the homepage%4$s. ', 'lexicona17s' ), '<a href="' . esc_url( '/?s=' ) . '">', '</a>', '<a href="' . esc_url( '/' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->