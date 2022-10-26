<?php 

remove_action('wp_head', 'wp_generator');


add_action('wp_enqueue_scripts', 'site_scripts');
function site_scripts() {
    wp_enqueue_style('css',get_stylesheet_uri(), array(), '0.0.0.0');


    wp_enqueue_script('js', get_template_directory_uri() . '/example.js', [], '0.0.0.0', true);

    wp_enqueue_script('js', 'https://use.fontawesome.com/c762e1bb12.js', [], '0.0.0.0', true);
    
}


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once('includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', ( 'Настройки сайта' ) )
        ->add_tab('Общие настройки', [
            Field::make( 'image', 'site_logo', 'Логотип' ),

        ])

        ->add_tab('Контакты', [
            Field::make( 'text', 'site_phone', 'Телефон' ),
            Field::make( 'text', 'site_phone_digits', 'Телефон без пробелов в формате +375336666666' ),
            Field::make( 'text', 'site_address', 'Адрес' ),
            Field::make( 'text', 'site_strana', 'Город' ),
            Field::make( 'text', 'site_time', 'Время работы' ),
            Field::make( 'text', 'site_gmail', 'Электронная почта' ),

        ])

        ->add_tab('Текстовая информация', [
            Field::make( 'text', 'site_text', 'Текст колонки 1' ),
            Field::make( 'text', 'site_text1', 'Текст колонки 2' ),
            Field::make( 'text', 'site_text2', 'Текст колонки 3' ),
            Field::make( 'text', 'site_text3', 'Текст колонки 4' ),

        ])

        ->add_tab('Виды кофе', [
            Field::make( 'text', 'site_coffee1', 'Кофе 1' ),
            Field::make( 'text', 'site_coffee2', 'Кофе 2' ),
            Field::make( 'text', 'site_coffee3', 'Кофе 3' ),
            Field::make( 'text', 'site_coffee4', 'Кофе 4' ),
            Field::make( 'text', 'site_coffee5', 'Кофе 5' ),
            Field::make( 'text', 'site_coffee6', 'Кофе 6' ),
            Field::make( 'text', 'site_coffee7', 'Кофе 7' ),
            Field::make( 'text', 'site_coffee8', 'Кофе 8' ),
            Field::make( 'text', 'site_coffee9', 'Кофе 9' ),
            Field::make( 'text', 'site_coffee10', 'Кофе 10' ),
            Field::make( 'text', 'site_coffee11', 'Кофе 11' ),
            Field::make( 'text', 'site_coffee12', 'Кофе 12' ),
        
            

        ])

        ->add_tab('Меню', [
            Field::make( 'text', 'site_menu1', 'Цена 1' ),
            Field::make( 'text', 'site_menu2', 'Цена 2' ),
            Field::make( 'text', 'site_menu3', 'Цена 3' ),
            Field::make( 'text', 'site_menu4', 'Цена 4' ),
            Field::make( 'text', 'site_menu5', 'Цена 5' ),
            Field::make( 'text', 'site_menu6', 'Цена 6' ),
            Field::make( 'text', 'site_menu7', 'Цена 7' ),
            Field::make( 'text', 'site_menu8', 'Цена 8' ),
            Field::make( 'text', 'site_menu9', 'Цена 9' ),
            Field::make( 'text', 'site_menu10', 'Цена 10' ),
            Field::make( 'text', 'site_menu11', 'Цена 11' ),
            Field::make( 'text', 'site_menu12', 'Цена 12' ),            

        ]);
}