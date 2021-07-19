<?php get_header(); ?>

<div class="container latest_portfolio">
        <div class="row intro">
          <div class="col-md-4">
            <div class="contents shadow">
              <h2 class="heading2">I’m Adi</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contents shadow">
              <h2 class="heading2">I create super awesome stuff</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contents shadow">
              <h2 class="heading2">I’m available for freelance projects</h2>
            </div>
          </div>
        </div>
        <div class="row list"> <!-- list start -->
        <?php query_posts(array('post_type' => 'portfolio', 'posts_per_page' => 3)); ?>
        <?php while(have_posts()): the_post(); ?>
          <div class="col-md-4">
            <div class="contents shadow">
              <!-- <img
                src="images/latest_portfolio_01.jpg"
                alt="latest_portfolio_01"
              /> -->
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
          </div> <!-- list item -->
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
        </div> <!-- list end -->
        <p class="portfolio_readmore">
          <a href="" class="primary-btn">See my full portfolio</a>
        </p>
      </div>

<?php get_footer(); ?>