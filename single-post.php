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
        <!-- <?php echo get_permalink(); ?> -->

        <?php the_title(); ?>
        <?php the_content(); ?>

        </section>
    </main>

    <?php get_template_part('inc/footer'); ?>

    <?php get_footer(); ?>
</body>

</html>