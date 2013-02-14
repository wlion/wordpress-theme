<? if (is_page()): the_post() ?>
	<article id="page_<? the_ID() ?>">
		<? the_content(); ?>
	</article>
<? else: ?>
	<? if (have_posts()):
		while (have_posts()) : the_post() ?>
			<article id="article_<? the_ID() ?>" >
				<? if (has_post_thumbnail() and !is_singular()): ?>
					<div class="featured_image">
						<a href="<? the_permalink() ?>" title="<? the_title_attribute() ?>"><? the_post_thumbnail() ?></a>
					</div>
				<? endif; ?>
				<header class="article_header">
					<div class="article_info">
						<span class="comments"><? comments_popup_link(__('Leave a comment'), __('1 Comment'), __('% Comments')) ?></span> <span class="date"><? the_date('m-d-Y') ?></span>
					</div>
					<h1 class="article_title"><? if(!is_singular()): ?><a href="<? the_permalink() ?>" title="<? the_title_attribute() ?>"><? endif; the_title() ?><? if(!is_singular()): ?></a><? endif; ?></h1>
				</header>
				<div class="article_content">
					<? (is_single()) ? the_content() : the_excerpt() ?>
				</div>
			</article>
		<? endwhile; ?>
	<? else: ?>
		<p>Nothing matches your query.</p>
	<?  endif; ?>
<?  endif; ?>
