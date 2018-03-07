<?php 

function styleConnect(){
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.1.1.js');
	wp_enqueue_script( 'migrate', get_template_directory_uri() . '/js/jquery-migrate-1.4.1.min.js');
	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js');
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/script.js');
}
add_action( 'wp_enqueue_scripts', 'styleConnect' );

add_action( 'init', 'catalog_tech' ); // Использовать функцию только внутри хука init

grant_super_admin(1);


function catalog_tech() {
	$labels = array(
		'name' => 'Каталог техники',
		'singular_name' => 'Каталог техники', 
		'add_new' => 'Добавить технику',
		'add_new_item' => 'Добавить новую технику', 
		'edit_item' => 'Редактировать технику',
		'new_item' => 'Новая техника',
		'all_items' => 'Вся техника',
		'view_item' => 'Просмотр техники на сайте',
		'search_items' => 'Искать технику',
		'not_found' => 'Техники не найдено.',
		'not_found_in_trash' => 'В корзине нет техники.',
		'menu_name' => 'Каталог техники' 
	);
	$args = array(
		'labels' => $labels,
		'public' => true, 
		'menu_icon' => 'dashicons-carrot', 
		'menu_position' => 5,
		'has_archive' => true,
		'taxonomies' => array(
			'category',
		),

		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'catalog_technics', $args); 
}

add_theme_support( 'post-thumbnails' );


function add_new_taxonomies() {	
	register_taxonomy('tech_type',
		array('catalog_technics'),
		array(
			'hierarchical' => false,
			'labels' => array(
				'name' => 'Типы техники',
				'singular_name' => 'Тип техники',
				'search_items' =>  'Найти тип',
				'popular_items' => 'Популярные типы',
				'all_items' => 'Все типы техники',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать тип техники', 
				'update_item' => 'Обновить тип техники',
				'add_new_item' => 'Добавить новый тип техники',
				'new_item_name' => 'Название нового типа техники',
				'add_or_remove_items' => 'Добавить или удалить тип',
				'menu_name' => 'Типы техники'
			),
			'public' => true, 
			'show_in_nav_menus' => true,
			'show_ui' => true,
			'show_tagcloud' => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'tech_type', // ярлык
				'hierarchical' => false // разрешить вложенность
			),
		)
	);
}
add_action( 'init', 'add_new_taxonomies', 0 );

/* Редактирование админки */
function true_alert() {
	echo '<script>';
	echo 'var srcImgArr = [];';
	echo 'jQuery(".attachment-name").each(function(indx, element){';
	echo 'srcImgArr.push(jQuery(element).find("img").attr("src"));';
	echo '});';
	echo '</script>';
}
add_action('admin_footer', 'true_alert');

function login_customize() {
	?>
	<style>
	body{
		background-image: url('/wp-content/themes/dst.negabarite/images/404.jpg');
		background-position: center;
	}
	.login h1 a {
		/*display: none;*/
	}
</style>
<?php	
}
add_action('login_head','login_customize');


$meta_page = array(
	'id' =>	'meta_page',
	'capability' => 'edit_posts', 
	'name' => 'Мета информация',
	'post_type' => array('page'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'title',
			'label' => 'Title',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите title'
		),
		array(
			'id'	=> 'description',
			'label' => 'Description',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите description'
		),
		array(
			'id'	=> 'keywords',
			'label' => 'Keywords',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите ключевые слова'
		),
		array(
			'id'	=> 'h1',
			'label' => 'Заголовок H1',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите заголовок H1 '
		),
		array(
			'id'	=> 'type',
			'label' => 'Тип техники',
			'type'	=> 'select',
			'args'  => array(
				'Бульдозеры' => 'buldozer',
				'Экскаваторы' => 'excavator',
				'Погрузчики' => 'pogruzchik',
				'Самосвалы' => 'samosval',
				'Автокраны' => 'autokran',
				'Катки дорожные' => 'road_ratok',
				'Асфальтоукладчики' => 'asphaltoukladchik',
				'Буровые установки' => 'burovaya_ustanovka',
			),
			'default' => ''
		),
	)
);

new trueMetaBox( $meta_page );

/* Добавление рубрик для страниц */

function add_cities_page() {	
/* создаем функцию с произвольным именем и вставляем 
в неё register_taxonomy() */	
register_taxonomy('cities',
	array('page'),
	array(
		'hierarchical' => false,
			/* true - по типу рубрик, false - по типу меток, 
			по умолчанию - false */
			'labels' => array(
				/* ярлыки, нужные при создании UI, можете
				не писать ничего, тогда будут использованы
				ярлыки по умолчанию */
				'name' => 'Города',
				'singular_name' => 'Город',
				'search_items' =>  'Найти город',
				'popular_items' => 'Популярные города',
				'all_items' => 'Все города',
				'edit_item' => 'Редактировать город', 
				'update_item' => 'Обновить город',
				'add_new_item' => 'Добавить новый город',
				'new_item_name' => 'Название нового города',
				'add_or_remove_items' => 'Добавить или удалить город',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых городов',
				'menu_name' => 'Города'
			),
			'public' => true, 
			/* каждый может использовать таксономию, либо
			только администраторы, по умолчанию - true */
			'show_in_nav_menus' => true,
			/* добавить на страницу создания меню */
			'show_ui' => true,
			/* добавить интерфейс создания и редактирования */
			'show_tagcloud' => true,
			/* нужно ли разрешить облако тегов для этой таксономии */
			'update_count_callback' => '_update_post_term_count',
			/* callback-функция для обновления счетчика $object_type */
			'query_var' => true,
			/* разрешено ли использование query_var, также можно 
			указать строку, которая будет использоваться в качестве 
			него, по умолчанию - имя таксономии */
			'rewrite' => array(
				/* настройки URL пермалинков */
				'slug' => 'cities', // ярлык
				'hierarchical' => false // разрешить вложенность

			),
		)
);
}
add_action( 'init', 'add_cities_page', 0 );


add_shortcode('city', 'replace_cityname');
function replace_cityname($content){
	return $_GET['city'];
}


