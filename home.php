<!DOCTYPE html>
<html lang="en">

<head>

    <?php get_header(); ?>

</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">

        <?php get_template_part('inc/header'); ?>

        <!-- Header-->
        <section>
            <?php
            $wp_query = new WP_Query();
            $my_posts = array(
                'post_type' => 'post', //カテゴリは特定せず
                'posts_per_page' => '10', //とりあえず100件
            );
            $wp_query->query($my_posts);
            if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
                    <div class="team-2-box">
                        <div class="team-2-pic">
                            <?php the_post_thumbnail('index_thumbnail'); ?>
                        </div>
                        <div class="team-2-content">
                            <h5><?php the_title(); ?></h5>
                            <a class="theme-btn" href="<?php the_permalink(); ?>"><span>詳細はこちら</span></a>
                        </div>
                    </div>

            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
        </section>

        </section>
    </main>

    <?php get_template_part('inc/footer'); ?>

    <?php get_footer(); ?>
</body>

</html>