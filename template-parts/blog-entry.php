<div class="col-lg-3 col-md-6 col-padding animate-box" data-animate-effect="fadeInLeft">
    <div class="blog-entry">
        <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="blog-img">
            <?php
                if (has_post_thumbnail() ) {
                // アイキャッチ画像が設定されてれば大サイズで表示
                the_post_thumbnail('large');
                } else {
                // なければnoimage画像をデフォルトで表示
                echo '<img class="wp-post-image" src="' . esc_url(get_template_directory_uri()) . '/images/noimg.png" alt="noimage">';
                }
            ?>
        </a>
        <div class="desc">
            <h3><a href="<?php the_permalink(); //記事のリンクを表示 ?>"><?php the_title(); //タイトルを表示 ?></a></h3>
            <span>
                <a href="<?php my_get_month_link( $year, $month) ?>">
                    <time class="entry-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                </a><br><!-- /entry-item-published -->
                <small>
                <?php my_category() ?>
                </small>
            </span>
            <p><?php the_excerpt(); //抜粋を表示 ?></p>
            <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="lead">Read More <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
</div><!--blog entry-->