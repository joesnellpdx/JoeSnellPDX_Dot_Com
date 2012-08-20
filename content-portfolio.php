<?php
/**
 * @package Joesnellpdx
 * @since Joesnellpdx 1.0
 */
?>


            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'joesnellpdx' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
                <li class="menu-item btn btn-large btn-inverse landing-button>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                    
                        <header class="entry-header ">
                            <div class="portfolioimg">
								<?php the_post_thumbnail(); ?>
                          	</div>
                                
                            <h2 class="entry-title"><?php the_title(); ?></h2>
                        </header><!-- .entry-header page-header -->
                         
                    </article> 
                </li>
            </a>
   
 


