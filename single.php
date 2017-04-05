<?php include('header.php'); ?>
<div id="single-page">
  <div class="post-content">


      <?php
      if(is_single('28')) {
        // If post 28 (Veitingar) is present display list of available items. Else display standard Veitingar post.
        $the_query = new WP_Query( array(
          'post_type' => 'veitingahus'
        ));
        if ( $the_query->have_posts() ) {
          echo '<div class="veitingar-listings">';
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
                echo '<p>' . the_title() . '</p>';
              echo '</li>';
          }
          echo '</ul>';
          echo '</div>';
          /* Restore original Post Data */
          wp_reset_postdata();
        } else {
          // no posts found
        }
      } elseif(is_single('57')) {
        // If post 57 (Ratleikur) is present display list of available items. Else display standard Ratleikur post.

       if ( post_password_required() ) {
              echo get_the_password_form();
       }
       else {

        $the_query = new WP_Query( array(
          'post_type' => 'ratleikur'
        ));
        if ( $the_query->have_posts() ) {
          echo '<div class="ratleikur-listings">';
          echo '<h4>';
            wp_title( $sep = '');
          echo '</h4>';
          echo the_content();
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
                echo '<p>';
                  the_title();
                echo '</p>';
              echo '</li>';
          }
          echo '</ul>';
          echo '</div>';
          /* Restore original Post Data */
          wp_reset_postdata();
        } else {
          // no posts found
        }
      }
      } elseif (in_category('3')) {
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          echo '<div class="restaurant">';
            echo '<div class="post-thumbnail">';
              the_post_thumbnail();
            echo '</div>';
              the_content();
          echo '</div>';
            include('google-map.php');
          endwhile; endif;
        } else {
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          echo '<h1>';
            the_title();
          echo '</h1>';
            the_content();
          echo '<div class="pagination">';
            echo '<div class="next">';
              next_post_link($format = '%link');
            echo '</div>';
            echo '<div class="previous">';
              previous_post_link($format = '%link');
            echo '</div>';
          echo '</div>';
          include('google-map.php');
          endwhile; endif;
        }

      ?>
  </div>
</div>

<?php include('footer.php'); ?>
