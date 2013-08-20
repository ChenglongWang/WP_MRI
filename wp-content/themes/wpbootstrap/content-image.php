<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            	<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
				<h1 align ="center" style="color: #0066cc; font-size: 40px"><?php the_title(); ?></h1>
				<h2 align ="center" style="color: gray; font-size: 14px"><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time></h2>
		</a>
            
                <div class="entry-content">  <!--键入的内容-->
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
		</div><!-- .entry-content -->

                 <footer class="entry-meta">
                        <!--显示有几条回复，并链接到下方的评论内容 -->
			<?php if ( comments_open() ) : ?>
			<div class="comments-link">  <!--“发表回复”-->
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
			</div> 
			<?php endif; // comments_open() ?>
                        <!--“编辑”-->
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); // ?>
		</footer> 

	</article><!-- #post -->
