<?php
function add_css_js() {
    // すべてのページに読ますファイル
    // リセットCSS
    wp_enqueue_style('stylesheet', 'https://unpkg.com/ress/dist/ress.min.css');
    // style.css
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css' );
    // googleフォント　Bitter
    wp_enqueue_style('Bitter', 'https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap');
    //jquery3.5.1
    wp_enqueue_script('script','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    //vegas.css
    wp_enqueue_style(  'sub-style', get_template_directory_uri() . '/scripts/vegas/vegas.css'  );
    //vegasプラグイン
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/scripts/vegas/vegas.js'  );
    

  }
  
  add_action( 'wp_enqueue_scripts', 'add_css_js' );





