<!-- Blog template v. 1.013 -->
<!-- By Michal Futera -->
<!-- https://linktr.ee/mjfutera -->

<?php get_header(); ?>
                <!-- Blog posts -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="container">
                        <div class="row">
                            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3">
                            <a href="<?php echo get_permalink()?>">
                                <?php 
                                    if ( has_post_thumbnail() ) { 
                                        the_post_thumbnail( 'full', array( 'class' => 'size-post-thumbnail', 'data-aos' => 'fade-up-right' ) ); 
                                    } 
                                ?>
                            </a>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
                                <h2>
                                    <a href="<?php echo get_permalink()?>">
                                        <?php echo get_the_title(); ?>
                                    </a>
                                </h2>
                                    <?php echo get_the_post(); ?>
                                <br>
                                <a href="<?php echo get_permalink()?>">
                                    <div class="btn btn-success">Read article</div>
                                </a>
                            </div>
                        </div>
                    </article>
                    <hr>
                <?php endwhile; else : ?>
	                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                <!-- Blog posts -->
            </div>
            <?php get_sidebar(); ?>
        </div>

        <?php get_footer(); ?>