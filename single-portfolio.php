<?php get_header(); ?>

<div class="portfolio-single">
  <div class="container">
    <div class="row">
      <div class="col-md-8 description">
        <div class="contents shadow">
          <!-- <img src="images/portfolio_single_1.jpg" alt="img1" /> -->
          <img src="<?php the_field('rep_img1'); ?>" alt="<?php the_field('rep_img1_desc'); ?>">
          <!-- <p>img desc 1</p> -->
          <p><?php the_field('rep_img1_desc'); ?></p>
        </div>
        <div class="contents shadow">
          <!-- <img src="images/portfolio_single_2.jpg" alt="img2" /> -->
          <img src="<?php the_field('rep_img2'); ?>" alt="<?php the_field('rep_img2_desc'); ?>">
          <!-- <p>img desc 2</p> -->
          <p><?php the_field('rep_img2_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 portfolio_info">
        <div class="contents shadow">
          <h2><?php the_title(); ?></h2>
          <p>
          <?php the_content(); ?>
          </p> 
          
          <p class="link">
          <a href="<?php the_field('website_url'); ?>">some link &rarr;</a>
          </p>
          <hr class="double" />
          <blockquote>
            <p>
            <?php the_field('review_content'); ?>
            </p>
            <small><?php the_field('review_writer'); ?></small>
          </blockquote>
          
          <p class="nav">
            <a href="" class="secondary-btn">&larr; Previous Project</a>
            <a href="" class="secondary-btn">Next Project &rarr;</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>