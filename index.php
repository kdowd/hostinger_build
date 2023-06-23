<?php
get_header();
?>

<?php if (is_front_page()) : ?>
<header class="page-header alignwide">
    <h1 class="page-title"><?php single_post_title(); ?></h1>
</header><!-- .page-header -->
<?php endif; ?>

<!-- Start the Loop. -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<main class="main-content">
    <?php the_content(); ?>
</main>

<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
?>