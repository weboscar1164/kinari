<!-- recent blog -->
	<div class="fh5co-narrow-content">
<?php 
wp_reset_query();
if ( !is_home()) : ?>
		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">最新記事</h2>
			<?php
			//記事があればentriesブロック以下を表示
			if (have_posts() ) : ?>
			<!-- blog-row -->
			<div class="row ">
				<?php
				//最新４記事ぶんループ
				$args = array(
					'posts_per_page' => 4 // 表示件数の指定
				  );
				  $posts = get_posts( $args );
				  foreach ( $posts as $post ): // ループの開始
				  setup_postdata( $post ); // 記事データの取得
				 ?>
					<!-- blog entry -->
					<?php get_template_part('template-parts/blog-entry'); ?>
					<?php endforeach; ?>	
				<!-- <div class="col-md-12 text-right" data-animate-effect="fadeInLeft">
					<a href="<?php //echo  get_template_directory_uri();?>/blog/">もっと見る＞＞</a>		
				</div> -->
				</div><!--blog row-->
				<?php endif; ?>
			</div>
				<?php endif; ?>
			<!-- recent blog end -->
			
			<nav id="fh5co-footer-menu" role="navigation">
				<?php
					wp_nav_menu(
					array(
					'depth' => 1,
					'theme_location' => 'global', //グローバルメニューをここに表示すると指定
					'container' => 'false',
					'menu_class' => 'footer-list',
					)
					);
				?>
			</nav>
		</div><!-- fh5co-main (header.php) -->
	</div><!-- fh5co-page (header.php)-->
<?php wp_footer(); ?>


	</body>
</html>