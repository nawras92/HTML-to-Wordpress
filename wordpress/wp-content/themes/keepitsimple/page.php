<?php  get_header(); ?>

   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

        <?php

            if (have_posts()):
              while(have_posts()):

                  the_post(); ?>

                  <article class="entry">

                    <header class="entry-header">

                      <h2 class="entry-title">
                          <?php the_title(); ?>
                      </h2>

                      <div class="entry-meta">
                        <ul>
                          <li><?php the_date(); ?></li>
                          <span class="meta-sep">&bull;</span>
                          <li><?php the_author(); ?></li>
                        </ul>
                      </div>

                    </header>

                    <div class="entry-content">
                      <?php the_content(); ?>
                    </div>

                  </article> <!-- end entry -->

            <?php  endwhile;
            else:
              echo "There are NO articles";
            endif; ?>


   		</div> <!-- end main -->

      <?php get_sidebar(); ?>
   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->


<?php get_footer(); ?>
