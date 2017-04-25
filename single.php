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
          echo '<p>Liðin má sjá neðst á síðunni ásamt hver er liðstjóri - Góða skemmtun og farið varlega!';
            echo the_content();
          echo '</p>';
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
          echo '</ul>'; ?>
          <div class="teams">
            <h5>Lið 1</h5>
            <ul class="">
             	<li>Jói Helga (Liðsstjóri)</li>
             	<li>Atli</li>
             	<li>Björn Þorkels</li>
             	<li>Einar</li>
             	<li>Biggi</li>
            </ul>
            <h5>Lið 2</h5>
            <ul>
             	<li>Ingi Þór (Liðsstjóri)</li>
             	<li>Björn</li>
             	<li>Helgi</li>
             	<li>Tómas</li>
             	<li>Árni</li>
             	<li>Steingrímur</li>
            </ul>
            <h5>Lið 3</h5>
            <ul>
             	<li>Pétur (Liðsstjóri)</li>
             	<li>Lilja</li>
             	<li>Sigurrós</li>
             	<li>Svanhvít</li>
             	<li>Bjarni</li>
            </ul>
            <h5>Lið 4</h5>
            <ul>
             	<li>Hulda (Liðsstjóri)</li>
             	<li>Sindri</li>
             	<li>Teddi</li>
             	<li>Sonja</li>
             	<li>Trigger</li>
            </ul>
            <h5>Lið 5</h5>
            <ul>
             	<li>Maddi (Liðsstjóri)</li>
             	<li>Ívar</li>
             	<li>Jói Más</li>
             	<li>Stefán H</li>
             	<li>Bragi</li>
            </ul>
            <h5>Lið 6</h5>
            <ul>
             	<li>Hjalti (Liðsstjóri)</li>
             	<li>Jón Bjarni</li>
             	<li>Geirlaugur</li>
             	<li>Brynjar Gústafs</li>
             	<li>Robbi</li>
            </ul>
            <h5>Lið 7</h5>
            <ul>
             	<li>Indriði (Liðsstjóri)</li>
             	<li>Örn</li>
             	<li>Stefán Jó</li>
             	<li>Hjálmur</li>
             	<li>Daði</li>
            </ul>
            <h5>Lið 8</h5>
            <ul>
             	<li>Unnar (Liðsstjóri)</li>
             	<li>Tryggvi G</li>
             	<li>Benedikt</li>
             	<li>Hanna</li>
            </ul>
            <h5>Lið 9</h5>
            <ul>
             	<li>Izaar (Liðsstjóri)</li>
             	<li>Sverrir</li>
             	<li>Heiðar</li>
             	<li>Kristinn Geir</li>
             	<li>Guðmundur</li>
            </ul>
            <h5>Lið 10</h5>
            <ul>
             	<li>Jón Kristinn (Liðsstjóri)</li>
             	<li>Sóli</li>
             	<li>Magnús</li>
             	<li>Kristján</li>
             	<li>Ármann</li>
            </ul>
          </div>
          <?php
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
