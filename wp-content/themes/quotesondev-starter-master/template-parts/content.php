<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="main-quote">
            <header id="qod-quotes" class="entry-content">
                <?php the_excerpt(); ?>
            </header><!-- .entry-content -->
            <div id="author" class="entry-header">
                 
                    <?php the_title( '<h2 id="title" class="entry-author comma">&mdash; ', '</h2>' ); ?>
                    <?php if( $source && $source_url ): ?>
                        <span id="source" class="source">, <a href="<?php echo $source_url; ?>">
                        <?php echo $source; ?></a></span>
                        <?php elseif( $source ): ?>
                            <span class="source">, <?php echo $source; ?></span>
                        <?php else: ?>
                            <span class="source"></span>
                    
                        <?php endif; ?>
            </div><!-- .entry-header -->
    </div>
</article><!-- #post-## -->
