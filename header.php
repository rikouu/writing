<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?> >
  <header class="header">
    <nav class="navbar navbar-toggleable-md <?php
    switch (get_theme_mod( 'style-colors')) {
      case 'style-white':
        echo 'navbar-light bg-white';
        break;

        case 'style-faded':
          echo 'navbar-light bg-faded';
          break;

          case 'style-inverse':
            echo 'navbar-inverse bg-inverse';
            break;

            case 'style-danger':
              echo 'navbar-inverse bg-danger';
              break;

              case 'style-warning':
                echo 'navbar-inverse bg-warning';
                break;

                case 'style-info':
                  echo 'navbar-inverse bg-info';
                  break;

      case 'style-primary':
        echo 'navbar-inverse bg-primary';
        break;

      case 'style-success':
        echo 'navbar-inverse bg-success';
        break;

      default:
        echo 'navbar-light bg-white';
        break;
    } ?> fixed-top" id="primary-navbar" role="navigation">
      <div class="container">


          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

            <?php if ( get_theme_mod( 'custom_logo') ) {
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              echo '<img src="' . $image[0] . '" alt=">' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">';
            } else {
              echo esc_attr( get_bloginfo( 'name', 'display' ) );
            } ?>

          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php wp_nav_menu(
  					array(
  						'theme_location'  => 'primary',
  						'container_class' => 'collapse navbar-collapse',
  						'container_id'    => 'navbarNavDropdown',
  						'menu_class'      => 'navbar-nav',
  						'fallback_cb'     => '',
  						'menu_id'         => 'main-nav',
  						'walker'          => new WP_Bootstrap_Navwalker(),
  					)
  				);
          ?>

      </div>
    </nav>
  </header><!-- ./header -->

  <main class="site-content">
  <!-- 上面是复用的头部 -->

  <!-- <div class="header-bg">

  </div> -->
