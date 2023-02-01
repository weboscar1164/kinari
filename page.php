<!-- header部分を　get_header()に置き換える -->
<?php get_header(); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb">
      <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述?>
    </div>
    <!-- /breadcrumb -->
    <!-- single-grog-content -->
    <div class="fh5co-narrow-content">
            <div class="row row-bottom-padded-md">
            <!-- blog entry -->
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="single-img">
                    <?php
                        if (has_post_thumbnail()) {
                            // アイキャッチ画像が設定されてれば大サイズで表示
                            the_post_thumbnail('large');
                        }
                    ?>
                  </div>  
                </div>
                    <div class="<? my_bootstrap_count($i) ?> animate-box single-text" data-animate-effect="fadeInLeft">
                      <h1 class="fh5co-heading"><?php the_title(); //タイトルを表示?></h1>
                        <div class="desc">
                          
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
                                    ?>
                          
                        </div><!--desc-->
                </div><!--blog entry-->
            </div><!--row row-bottom-padded-md-->
        </div>
 

<?php get_footer(); ?>