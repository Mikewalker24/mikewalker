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
                        
                <p>Visit the <a href="<?php the_field('project_url'); ?>" target="_blank">live site</a></p>
                
                <p><?php the_field('project_credit_one'); ?></p>
          
          </div>
         
          <hr class="divider">
         
          <div class="description-container">

            <h3><?php the_field('description_heading'); ?></h3>
            <p><?php the_field('description_text'); ?></p>

          </div>

          <?php if( get_field('quote_text') ): ?>
            
            <div class="quote-container">
              
              <div class="lines"><img src="http://mikewalker.co/wp-content/uploads/2017/06/quotes.png" alt="quote-icon"></div>

              <h3><?php the_field('quote_text'); ?></h3>
              <p><?php the_field('quote_author'); ?></p>

            </div>
            
          <?php endif; ?>
            

          
         
         <div class="portfolio-images">



  <?php
    $leftImage = get_field('description_image_left');
    $rightImage = get_field('description_image_right');
			 

    if($leftImage && $rightImage): ?>
    <a href="<?php the_field('project_url'); ?>" target="_blank">
      <img src="<?php echo $leftImage; ?>" alt="" class="description-image">
    </a>
    <a href="<?php the_field('project_url'); ?>" target="_blank">
      <img src="<?php echo $rightImage; ?>" alt="" class="description-image">
    </a>
			 
    <?php elseif($leftImage): ?>
    <a href="<?php the_field('project_url'); ?>" target="_blank">
      <img src="<?php echo $leftImage; ?>" alt="" class="description-image full">
    </a>
    <?php endif; ?>

</div>


      <?php endwhile; // end of the loop. ?>
  
      <div class="more-work">
        
        <p><a href="http://mikewalker.co#recent">See More Work</a></p>

      </div>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>