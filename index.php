<?php get_header(); ?>

<?php while ( have_posts() ) : ?>
  <?php the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class("content-container text-[#4d4d4d] pt-12 pb-20"); ?>>
    <h1 class="text-4xl font-bold mb-2"><?php the_title(); ?></h1>
    <div class="post-meta border-t border-b border-[#BFBFBF] py-3 mb-8 text-lg">
      <?php the_time('F jS, Y'); ?> | <?php the_category( ' | ' ); ?>
    </div>
    <div class="post-content">
      <?php the_content(); ?>
    </div>
  </div>
<?php endwhile; ?>

<?php get_template_part( 'template-parts/components/dividers/basic', null, array("line-color" => "bg-[#BFBFBF]")); ?>

<?php get_footer(); ?>