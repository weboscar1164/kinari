
<?php
/**
* テーマのセットアップ
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
**/
function my_setup()
{
add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
add_theme_support('title-tag'); // タイトルタグ自動生成
add_theme_support(
'html5',
array( //HTML5でマークアップ
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
* CSSとJavaScriptの読み込み
*
* @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
*/
function my_script_init()
{
wp_enqueue_script('modernizer-js', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), '2.6.2', true);
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('noto', 'https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700', array(), '1.0.0', 'all');
wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all');
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0.0', 'all');
wp_enqueue_style('icomoon', get_template_directory_uri() . '/css/icomoon.css', array(), '1.0.0', 'all');
wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '1.0.0', 'all');

wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0', true);
wp_enqueue_script('jquery-easing-js', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.3', true);
wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
wp_enqueue_script('waypoints-js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
* アーカイブタイトル書き換え
*
* @param string $title 書き換え前のタイトル.
* @return string $title 書き換え後のタイトル.
*/
// function my_archive_title( $title ) {

//     if ( is_category() ) { // カテゴリーアーカイブの場合
//     $title = '' . single_cat_title( '', false ) . '';
//     } elseif ( is_tag() ) { // タグアーカイブの場合
//     $title = '' . single_tag_title( '', false ) . '';
//     } elseif ( is_post_type_archive() ) { // 投稿タイプのアーカイブの場合
//     $title = '' . post_type_archive_title( '', false ) . '';
//     } elseif ( is_tax() ) { // タームアーカイブの場合
//     $title = '' . single_term_title( '', false );
//     } elseif ( is_author() ) { // 作者アーカイブの場合
//     $title = '' . get_the_author() . '';
//     } elseif ( is_date() ) { // 日付アーカイブの場合
//     $title = '';
//     if ( get_query_var( 'year' ) ) {
//     $title .= get_query_var( 'year' ) . '年';
//     }
//     if ( get_query_var( 'monthnum' ) ) {
//     $title .= get_query_var( 'monthnum' ) . '月';
//     }
//     if ( get_query_var( 'day' ) ) {
//     $title .= get_query_var( 'day' ) . '日';
//     }
//     }
//     return $title;
//     };
//     add_filter( 'get_the_archive_title', 'my_archive_title' );
    
/*---------------------------------------------------------------------------
* 子テーマのCSS読み込み
*---------------------------------------------------------------------------*/
add_action( 'wp_enqueue_scripts', function() {
    
    $child_theme = wp_get_theme();
    $timestamp =  '?last_modified=' . date('Y-m-d-His', filemtime(get_stylesheet_directory() . '/style.css' )); 
    wp_enqueue_style( 'godios-child-style', get_theme_file_uri( '/style.css' ), [], $child_theme->Version . $timestamp);
    
}, 10 );

/**
* タグ取得
*
* @param integer $id 投稿id.
* @return void
*/
function my_the_tag(  $id = 0 ) {
    global $post;
    //引数が渡されなければ投稿IDを見るように設定
    if ( 0 === $id ) {
        $id = $post->ID;
        }  
 //tag一覧を取得
    $tags = get_the_tags( $id );
    if (is_array($tags) ) {
        foreach ( $tags as $tag ) {
        echo '<div class="entry-tag-item"><a href="'. esc_url( get_tag_link($tag->term_id) ) . ' ">'. esc_html( $tag->name ) . ' </a></div>';
        }
  
    }
}

/**
 * カテゴリリンク取得
 */
function my_category() {
    $category = get_the_category(); 
    if( $category[0] ){
        echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->name . '</a>';
    }
}

/**
* メニューの登録
*
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
*/
function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'footer' => 'フッターメニュー',
)
);
}
add_action('init', 'my_menu_init');

/**
 * page画像の有無によるカラム操作
 */
function my_bootstrap_count( $i='col-md-12'){
    if (has_post_thumbnail()) {
        // アイキャッチ画像が設定されてれば大サイズで表示
        $i='col-md-6';
        echo $i;
    } else {
        $i='col-md-12';
        echo $i;
    }
}

/**
 * 日付アーカイブへのリンク取得
 */
function my_get_month_link( $year, $month){
    $year   = get_the_date( 'Y' );
    $month  = get_the_date( 'm' );
    echo get_month_link( $year, $month );
}

/**
 * 
 */
function my_the_category(){
    $category = get_the_category(); 
    $args = array(
     'posts_per_category' => 3 // 表示件数の指定
   );
   $posts = get_posts( $args );
   $i = 0;
   foreach ( $posts as $post ){ // ループの開始
        if( $category[$i] ){
            echo '<a class="single-category-link" href="' . get_category_link( $category[$i]->term_id ) . '">' . $category[$i]->name . '</a>';
        }
        $i ++;
     }
}
?>