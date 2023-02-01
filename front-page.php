<!-- header部分を　get_header()に置き換える -->
<?php get_header(); ?>


<!-- hero -->
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
	<?php 
		$count = 3;
		for ($i = 1; $i <= $count; $i ++) : 
		?>
			<li style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/img_bg_<?php echo $i ?>.jpg);">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								<h1>旭川のハンドメイド作家 KINARI WORKS</h1>
								<h2>オリジナル布小物を作っています</h2>
									<p><a class="btn btn-primary btn-demo popup-vimeo" href="<?php echo get_permalink( get_page_by_path( '販売サイトのご案内' )->ID ); ?>"> <i class="fas fa-chevron-left"></i> 販売サイトへ</a> <a class="btn btn-primary btn-learn" href="<?php echo get_permalink( get_page_by_path( 'お問い合わせ' )->ID ); ?>">お問い合わせ<i class="fas fa-chevron-right"></i></a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<?php endfor ?>
		
			</ul>
		</div>
	</aside>
<!-- hero end -->
	<!-- About Me -->
	<div class="fh5co-narrow-content">
		<div class="row">
			<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
			<?php
                        if (has_post_thumbnail()) {
                            // アイキャッチ画像が設定されてれば大サイズで表示
                            the_post_thumbnail('large');
                        }
                    ?>
			</div>
			<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
				<?php
                                //本文を表示
                                $page_data = get_page_by_path('スラッグ');
                                $page = get_post($page_data);
                                $content = do_shortcode($page->post_content);
                                echo $content;
                                ?>
                                    <?php
                                    //改ページを有効にするための記述
                                    wp_link_pages(
                                        array(
                                    // 'before' => '<nav class="entry-links">',
                                    // 'after' => '</nav>',
                                    'link_before' => '',
                                    'link_after' => '',
                                    'next_or_number' => 'number',
                                    'separator' => '',
                                    )
                                    );
                                    ?>			</div>
		</div>
	</div>
	<!-- About Me end -->
<?php get_footer(); ?>
