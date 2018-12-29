<?php 
       /**
        *  Template Name: Monkeys
        */
?>
<p>Template for monkeys-page.php</p>
<?php 
        $query = new WP_Query(array(
              'post_type' => 'monkey',
              'post_status' => 'publish',
              'posts_per_page' => -1,
          ));

          while ($query->have_posts()) {
              $query->the_post();
              $post_id = get_the_ID();
               
              echo "Monkeys with id ".$post_id." is  here.<br>";
              $meta = get_post_meta( get_the_ID() ); 
              echo($meta);
              echo('<pre>');
              print_r($meta);
              echo('</pre>');
            
              //https://developer.wordpress.org/reference/functions/get_post_meta/
          }

          wp_reset_query();