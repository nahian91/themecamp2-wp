<?php get_header();?> 
      <div class="main-wrapper ">
         <?php get_template_part('template-parts/content', 'breadcumb'); ?>
         <section class="section blog-wrap bg-gray">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8">
                     <div class="row">

                     <?php
                        $args = array(
                           'post_type' => 'post'
                        );
                        $query = new WP_Query($args);
                        while($query->have_posts()) {
                           $query->the_post();
                        ?>
                           <div class="col-lg-6">
                              <div class="blog-item">
                                 <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="img-fluid rounded">				
                                 <div class="blog-item-content bg-white p-5">
                                    <div class="blog-item-meta bg-gray py-1 px-2">
                                       <span class="text-muted text-capitalize mr-3"><i class="fa fa-comment mr-2"></i><?php echo get_comments_number();?> Comments</span>
                                       <span class="text-black text-capitalize mr-3"><i class="fa fa-calendar mr-1"></i> <?php echo get_the_date();?></span>
                                    </div>
                                    <h3 class="mt-3 mb-3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                    <?php the_excerpt();?>
                                    <a href="<?php the_permalink();?>" class="btn btn-small btn-main btn-round-full">Learn More</a>
                                 </div>
                              </div>
                           </div>
                        <?php
                        }
                        wp_reset_postdata();
                     ?>
                        



                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="sidebar-wrap">
                        <?php
                              if(is_active_sidebar( 'sidebar' )) {
                                 dynamic_sidebar( 'sidebar' );
                              }
                        ?>
                     </div>                     
                  </div>
               </div>
            </div>
         </section>
         <?php get_footer();?>