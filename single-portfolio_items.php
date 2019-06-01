<?php get_header(); ?>

<div class="portfolio main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <h2 class="entry-title"><?php the_title(); ?></h2>
         
          <hr>
         
          <p class="subtitle"><?php the_field('project_subtitle'); ?></p>
         
          <a href="<?php the_field('project_url'); ?>" target="_blank">
         
          <figure>
            <img src="<?php the_field('project_image'); ?>" alt="" class="portfolio-image">
          </figure>
      
          </a>
         
          <div class="credit-container">
                        
              <div class="credit credit-left">
                <p><a href="<?php the_field('project_url'); ?>" target="_blank">See it live</a></p>
              </div>

              <div class="credit credit-right">
                <p><?php the_field('project_credit_one'); ?></p>
              </div>
          
          </div>
         
          <hr class="divider">
         
          <div class="description-container">

            <h3><?php the_field('description_heading'); ?></h3>
            <p><?php the_field('description_text'); ?></p>

          </div>
         
          <div class="portfolio-images">

            <a href="<?php the_field('project_url'); ?>" target="_blank"><img src="<?php the_field('description_image_left'); ?>" alt="" class="description-image"></a>
            <a href="<?php the_field('project_url'); ?>" target="_blank"><img src="<?php the_field('description_image_right'); ?>" alt="" class="description-image"></a>

          </div>


      <?php endwhile; // end of the loop. ?>
  
      <div class="more-work">
        
        <p><a href="http://mikewalker.co#recent">See More Work</a></p>

      </div>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>