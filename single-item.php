<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <?php get_header(); ?>

</head>

<body class="d-flex flex-column">

    <main class="flex-shrink-0">

        <?php get_template_part('inc/header'); ?>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <!-- Page Content-->
                <section class="py-5">
                    <div class="container px-5 my-5">
                        <div class="row gx-5">
                            <div class="col-lg-10">
                                <!-- Post content-->
                                <article>
                                    <!-- Post header-->
                                    <header class="mb-4">
                                        <!-- Post title-->
                                        <h1 class="fw-bolder mb-1"><?php the_title(); ?></h1>
                                        <!-- Post meta content-->
                                        <div class="text-muted fst-italic mb-2"><?php the_time('Y-m-d'); ?></div>
                                        <!-- Post categories-->
                                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                                    </header>
                                    <!-- Preview image figure-->
                                    <figure class="mb-4">
                                        <?php
                                        if (has_post_thumbnail()) :
                                            $id = get_post_thumbnail_id();
                                            $img = wp_get_attachment_image_src($id, 'large');
                                        else :
                                            $img = array(get_template_directory_uri() . '/assets/img/default.jpg');
                                        endif;
                                        ?>
                                        <div class="masthead" style="background-repeat: no-repeat; background-image: url('<?php echo $img[0]; ?>')">
                                        </div>
                                        <?php the_post_thumbnail(array(1000, 1000), array('alt' => 'アイキャッチ画像')); ?>
                                    </figure>
                                    <!-- Post content-->
                                    <section class="mb-5">
                                        <p class="fs-5 mb-4">
                                            <?php the_content(); ?>
                                        </p>
                                    </section>
                                </article>                                
                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex align-items-center mt-lg-5 mb-4">
                                    <img class="img-fluid rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                                    <div class="ms-3">
                                        <div class="fw-bold"><?php the_author(); ?></div>
                                        <div class="text-muted">News, Business</div>
                                    </div>
                                </div>
                            </div>
                <?php $price = get_post_meta(get_the_ID(), '価格', true); ?>
                <dl>
                    <dt>価格</dt>
                    <dd><?php echo number_format($price); ?>円</dd>
                </dl>
                </section>
                        </div>
                    </div>
                </section>
                <section>

            <?php endwhile; ?>
        <?php endif; ?>
    </main>
    <?php get_template_part('inc/footer'); ?>

    <?php get_footer(); ?>

</body>

</html>