<?php
/**
 * Title: Latest News
 * Slug: cigma/latest-news
 * Categories: cigma, latest-news
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"className":"section_head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide section_head" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"1px"},"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"borderColor":"primary","layout":{"type":"constrained","contentSize":"150px"}} -->
<div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","className":"section_sub_title","fontSize":"medium"} -->
<h4 class="wp-block-heading section_sub_title has-primary-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Latest News &amp; Blogs','cigma'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|primary","width":"10px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-width:10px;margin-top:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"secondary","className":"section_title","fontSize":"big"} -->
<h2 class="wp-block-heading has-text-align-left section_title has-secondary-color has-text-color has-big-font-size" style="margin-right:0;margin-left:0;font-style:normal;font-weight:700"><?php esc_html_e('Whats New in Business Area to Know','cigma'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e('Proprietary data, expert analysis and provocative points of view for leaders seeking sustained, profitable growth points of view for<br>leaders seeking sustained, profitable growth.','cigma'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":3,"query":{"perPage":"2","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"pos-relative","layout":{"type":"constrained"}} -->
<div class="wp-block-group pos-relative"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"className":"news-thumb-wrap"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"25px","right":"25px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","className":"news-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group news-content has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:15px;padding-right:25px;padding-bottom:15px;padding-left:25px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px"},"margin":{"bottom":"5px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:5px;padding-top:5px;padding-bottom:5px"><!-- wp:post-author {"showAvatar":false,"byline":"","style":{"typography":{"textTransform":"capitalize"}}} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":5,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"regular"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('There is no post found','cigma'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->