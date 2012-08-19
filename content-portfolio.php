<?php
/**
 * @package Joesnellpdx
 * @since Joesnellpdx 1.0
 */
?>

<section id="portfolio">
    <div class="row">
        <div class="span8">
        
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            
                <header class="entry-header">
                
                    <div class="portfolio-image btn-inverse">
                    
                        <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'joesnellpdx' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
                        
                    	<h2 class="entry-title"><?php the_title(); ?></h2>
                        
                    </div>
                    
                 </header><!-- .entry-header page-header -->
                 
      		</article><!-- #post-<?php the_ID(); ?> -->
            
        </div> <!-- span8 -->
    </div> <!-- row -->
</section>

