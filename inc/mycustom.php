<?php

// //让归档页面显示内容类型主题
// add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
//
// function add_my_post_types_to_query( $query ) {
//   //if ( is_home() && $query->is_main_query() )
//   if ( $query->is_main_query() )
//     $query->set( 'post_type', array( 'post', 'themes' ) );
//   return $query;
// }
//

class LEANTHEMES{
  function __construct(){
    add_action( 'pre_get_posts', array( $this, 'lean_add_my_post_type_to_query' ) );
    add_action( 'pre_get_posts', array( $this, 'lean_category_archives' ) );
    add_action( 'pre_get_posts', array( $this, 'lean_tags_archives' ) );
  } // __construct

  function lean_add_my_post_type_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
      $query->set( 'post_type', array( 'post', 'themes' ) );
    return $query;
  }

  /**
   * 在标签存档中包含“页面”
   */
  function lean_tags_archives( $wp_query ) {

    if ( $wp_query->get( 'tag' ) )
      $wp_query->set( 'post_type', array( 'post', 'themes' ) );

  } // tags_archives

  /**
   * 在分类存档中包含“页面”
   */
  function lean_category_archives( $wp_query ) {

    if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
      $wp_query->set( 'post_type', array( 'post', 'themes' ) );

  } // category_archives

}

$LEANTHEMES = new LEANTHEMES;
