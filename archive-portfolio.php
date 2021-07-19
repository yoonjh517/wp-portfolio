<?php include_once('portfolio-list-header.php') ?>



<div class="container latest_portfolio">
        <div class="row list">
				<?php while(have_posts()): the_post(); ?>
          <div class="col-md-4">
            <div class="contents shadow">
              <?php the_post_thumbnail('full'); ?>
              <div class="hover_contents">
                <div class="list_info">
                  <h3>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                      </a
                    ><img
                      src="<?php bloginfo('template_url'); ?>/images/portfolio_list_arrow.png"
                      alt="list arrow"
                    />
                  </h3>
                  <p><a href="<?php the_permalink(); ?>">Click to see project</a></p>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        <!-- <p class="pagenation shadow">
          <a href="" class="secondary-btn active">1</a>
          <a href="" class="secondary-btn">2</a>
          <a href="" class="secondary-btn">3</a>
          <a href="" class="secondary-btn">4</a>
        </p> -->
				<?php jeonghwan_pagination(); ?>

				
      </div>

<?php get_footer(); ?>
