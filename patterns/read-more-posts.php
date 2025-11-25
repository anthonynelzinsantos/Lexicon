<?php
/**
 * Title: Read more posts
 * Slug: lexicon-a17s/read-more-posts
 * Categories: Publications
 */
?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"border":{"top":{"color":"var:preset|color|custom-contrasting-ink","style":"dashed","width":"2px"},"right":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--custom-contrasting-ink);border-top-style:dashed;border-top-width:2px;margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80);padding-top:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:heading {"textAlign":"right","className":"align","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-contrasting-ink"}}}},"textColor":"custom-contrasting-ink"} -->
<h2 class="wp-block-heading has-text-align-right align has-custom-contrasting-ink-color has-text-color has-link-color"><?php esc_html_e('Read more posts', 'lexicon-a17s');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:query {"queryId":11,"query":{"perPage":25,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"className":"ellipsis","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fill","flexSize":null}}} /-->

<!-- wp:post-date {"isLink":true,"style":{"layout":{"selfStretch":"fixed"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->