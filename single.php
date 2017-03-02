<?php include('header.php'); ?>
<div id="single-page">
  <div class="post-content">
    <!-- If post 28 (Veitingar) is present display list of available items. Else display standard Veitingar post. -->
    <?php if(is_single('28')) {
      $the_query = new WP_Query( array(
        'post_type' => 'veitingahus'
      ));

      if ( $the_query->have_posts() ) {
        echo '<ul>';
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
            echo '<li>';
              echo '<a href="';
                echo get_permalink();
              echo '">';
                the_post_thumbnail();
                // echo '<div>';
                //   echo '<h1>';
                //     echo get_the_title();
                //   echo '</h1>';
                //   echo '<div>';
                //     echo the_excerpt(); //Restaurant logo
                //   echo '</div>';
                // echo '</div>';
              echo '</a>';
            echo '</li>';
        }
        echo '</ul>';
        /* Restore original Post Data */
        wp_reset_postdata();
      } else {
        // no posts found
      }
    } else {
      if ( have_posts() ) : while ( have_posts() ) : the_post();
        echo '<h1>';
          the_title();
        echo '</h1>';
          the_content();

        include('google-map.php');
        endwhile; endif;
      }
    ?>
  </div>
</div>

<?php include('footer.php'); ?>
