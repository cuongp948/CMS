<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/module-3.css" type="text/css" media="screen" />
</head>
<?php

/**
 * Blog Section
 * 
 * @package JobScout
 */

$blog_heading = get_theme_mod('blog_section_title', __('NEWEST BLOG ENTRIES', 'jobscout'));
$sub_title    = get_theme_mod('blog_section_subtitle', __('We will help you find it. We are your first step to becoming everything you want to be.', 'jobscout'));
$blog         = get_option('page_for_posts');
$label        = get_theme_mod('blog_view_all', __('See More Posts', 'jobscout'));
$hide_author  = get_theme_mod('ed_post_author', false);
$hide_date    = get_theme_mod('ed_post_date', false);
$ed_blog      = get_theme_mod('ed_blog', true);

$args = array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 4,
    'ignore_sticky_posts' => true
);


$qry = new WP_Query($args);

if ($ed_blog && ($blog_heading || $sub_title || $qry->have_posts())) { ?>
    <section id="blog-section" class="article-section">
        <div class="container">
            <?php
            if ($blog_heading) echo '<h2 class="section-title">' . esc_html($blog_heading) . '</h2>';
            ?>

            <?php if ($qry->have_posts()) { ?>
                <div class="article-wrap">
                    <?php
                    while ($qry->have_posts()) {
                        $qry->the_post(); ?>
                        <article class="post post-col">
                            <figure class="post-thumbnail post-img">
                                <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('jobscout-blog', array('itemprop' => 'image'));
                                    } else {
                                        jobscout_fallback_svg_image('jobscout-blog');
                                    }
                                    ?>
                                </a>
                            </figure>
                            <header class="entry-header post-content">
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p>
                                    <?php the_excerpt(); ?>                                
                                </p>
                                <a class="more-post" href="<?php the_permalink(); ?>">Read More</a>
                            </header>
                               
                         </article>
                        
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div><!-- .article-wrap -->

                <?php if ($blog && $label) { ?>
                    <div class="btn-wrap">
                        <a href="<?php the_permalink($blog); ?>" class="btn"><?php echo esc_html($label); ?></a>
                    </div>
                <?php } ?>

            <?php } ?>
        </div>
    </section>
<?php
}
