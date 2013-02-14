<?php if (is_page()): the_post() ?>
	<article id="page_<?php the_ID() ?>">
		<?php the_content(); ?>
	</article>
<?php else: ?>
	<?php if (have_posts()):
		while (have_posts()) : the_post() ?>
			<article id="article_<?php the_ID() ?>" >
				<?php if (has_post_thumbnail() and !is_singular()): ?>
					<div class="featured_image">
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail() ?></a>
					</div>
				<?php endif; ?>
				<header class="article_header">
					<div class="article_info">
						<span class="comments"><?php comments_popup_link(__('Leave a comment'), __('1 Comment'), __('% Comments')) ?></span> <span class="date"><?php the_date('m-d-Y') ?></span>
					</div>
					<h1 class="article_title"><?php if(!is_singular()): ?><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php endif; the_title() ?><?php if(!is_singular()): ?></a><?php endif; ?></h1>
				</header>
				<div class="article_content">
					<?php (is_single()) ? the_content() : the_excerpt() ?>
				</div>
			</article>
		<?php endwhile; ?>
	<?php else: ?>
		<p>Nothing matches your query.</p>
	<?php  endif; ?>
<?php  endif; ?>
