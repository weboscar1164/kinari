<!-- header部分を　get_header()に置き換える -->
<?php get_header(); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb">
      <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述?>
    </div>
    <!-- /breadcrumb -->
    <!-- single-grog-content -->
    <div class="fh5co-narrow-content">
        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"></h2>
            <article <?php post_class(array( 'entry' )); ?>>
            <div class="row row-bottom-padded-md">
            <!-- blog entry -->
                <div class="blog-entry col-md-12 col-sm-12">
                    <h1 class="blog-single-title"><?php the_title(); //タイトルを表示?></h1>
                    <div class="blog-single-header">
                        <span> 
                        <a href="<?php my_get_month_link( $year, $month) ?>">
                        <time class="entry-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                        </a><br><!-- /entry-item-published -->
                        <?php 
                            my_the_category();
                        ?>
                        </span>
                    </div><!-- blog-single-header-->
                    <div class="single-img">
                        <?php
                        if (has_post_thumbnail()) {
                            // アイキャッチ画像が設定されてれば大サイズで表示
                            the_post_thumbnail('large');
                           
                        } 
                        // else {
                        //     // なければnoimage画像をデフォルトで表示
                        //     echo '<img class="wp-post-image" src="' . esc_url(get_template_directory_uri()) . '/images/noimg.png" alt="">';
                        // }
                        ?>
                    </div><!--sigle-img-->
                    <div class="desc">
                        <div>
                            <?php
                            //本文を表示
                            $this_content= wpautop($post->post_content);
                            echo $this_content;
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
                        </div>
                        <div class="entry-tag-items col-md-12 col-sm-12">
                            <div class="entry-tag-head">タグ:</div><!-- /entry-tag-head -->
                            <?php my_the_tag( ) ?>
                        </div><!-- /entry-tag-items -->
                        <div class="to-post-link col-md-12 col-sm-12">
                            <div class="to-old-post">
                                <?php previous_post_link('%link','<<古い記事へ'); ?>
                            </div>
                            <div class="to-new-post">
                                <?php next_post_link('%link','新しい記事へ>>'); ?>
                            </div>
                        </div>
                    </div><!--desc-->
                </div><!--blog entry-->
            </div><!--row row-bottom-padded-md-->
        </div>
 

<?php get_footer(); ?>