<!-- header部分を　get_header()に置き換える -->
<?php get_header(); ?>
	<!-- breadcrumb -->
	<div class="breadcrumb">
		<?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
	</div><!-- /breadcrumb -->
		<div class="fh5co-narrow-content">
			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Read Our Blog</h2>
			<?php
				//記事があればentriesブロック以下を表示
				if (have_posts() ) : ?>
			<div class="row row-bottom-padded-md flex">
			<?php
			//記事数ぶんループ
			while (have_posts()) :
			the_post(); ?>
			<!-- blog entry -->
			<?php get_template_part('template-parts/blog-entry'); ?>
					<?php endwhile; ?>
			</div><!-- row row-bottom-padded-md -->
			<?php endif; ?>	
<!-- pagenation -->
<?php get_template_part('template-parts/pagenation'); ?>
		</div><!-- fh5co-narrow-content -->
    
    <?php get_footer(); ?>