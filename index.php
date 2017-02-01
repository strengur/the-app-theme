<?php include('header.php'); ?>

<div class="hero-buttons">
  <?php
    $the_query = new WP_Query( array('post_type' => 'forsidutakkar') );

    if ( $the_query->have_posts() ) {
        echo '<ul>';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<li>';
              echo '<a href="' . get_permalink() . '">';
                echo '<h1>' . get_the_title() . '</h1>';
                echo '<h3>';
                  the_field("field_5891c050731d1");
                echo '</h3>';
              echo '</a>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        // no posts found
    }
    wp_reset_postdata();
  ?>
</div>

<div class="logo">
  <?php get_template_part('assets/inline', 'logo.svg'); ?>
</div>

<?php include('footer.php'); ?>
