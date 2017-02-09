<?php include('header.php'); ?>
<div id="single-page">
  <div class="post-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1>
          <?php the_title(); ?>
        </h1>

        <?php the_content(); ?>

        <?php include('google-map.php'); ?>


    <?php endwhile; endif; ?>
  </div>
</div>

<?php include('footer.php'); ?>
