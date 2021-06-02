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
                <!-- Header-->

                <!-- About section one-->
                <section class="py-5 bg-light" id="scroll-target">
                    <div class="container px-5 my-5">
                        <div class="row gx-5 align-items-center">
                            <h1 class="fw-bolder"><?php the_title(); ?></h1>
                            <div class="col-lg-6">
                            <?php
                                $media = get_attached_media('image'); ?>
                                <?php echo $media[0] ?>
                            </div>
                            <div class="col-lg-6">
                                <p class="lead fw-normal text-muted mb-0"><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- About section two-->
                <section class="py-5">
                    <div class="container px-5 my-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-first order-lg-last"><?php echo $media[1] ?> </div>
                            <div class="col-lg-6">
                                <h2 class="fw-bolder">Growth &amp; beyond</h2>
                                <p class="lead fw-normal text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>

    <?php get_template_part('inc/footer'); ?>

    <?php get_footer(); ?>
</body>

</html>