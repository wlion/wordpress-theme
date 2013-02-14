<? get_header(); ?>
	<? if (have_posts()) : ?>
		<? $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<? if (is_category()): ?>
			<h2>Archive for the &#8216;<? single_cat_title(); ?>&#8217; Category</h2>
		<? elseif(is_tag()): ?>
			<h2>Posts Tagged &#8216;<? single_tag_title(); ?>&#8217;</h2>
		<? elseif (is_day()): ?>
			<h2>Archive for <? the_time('F jS, Y'); ?></h2>
		<? elseif (is_month()): ?>
			<h2>Archive for <? the_time('F, Y'); ?></h2>
		<? elseif (is_year()): ?>
			<h2 class="pagetitle">Archive for <? the_time('Y'); ?></h2>
		<? elseif (is_author()): ?>
			<h2 class="pagetitle">Author Archive</h2>
		<? elseif (isset($_GET['paged']) and !empty($_GET['paged'])): ?>
			<h2 class="pagetitle">Blog Archives</h2>
		<? endif; ?>
		<? get_template_part('loop', 'archive'); ?>
	<? else : ?>
		<h1>Nothing found</h1>
	<? endif; ?>
	<? get_sidebar(); ?>
<? get_footer(); ?>
