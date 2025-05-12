<?php get_header(); ?>

<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>



<section class="maintit">
      <div class="inner-w">
        <h1 class="maintit__txt"><?php the_title(); ?></h1>
      </div>
    </section>

    <section class="sec">
      <div class="inner-n">


<?php if (has_post_thumbnail()){
	the_post_thumbnail('large',array('alt'=>get_the_title()));
} ?>
<?php the_content(); ?>

</div>
</section>

<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>
