<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://lineadecodigo.net
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="wp-content/themes/twentyseventeen/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!--TODO: quitar una vez se incorpore a wordpress-->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=122026308404";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!---->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span>Brand</span></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-ex-collapse">
        <div class="navbar-right">
          <div>
            <ul class="nav navbar-nav social-icons">
              <li>
                <a href="#">
                  <img src="wp-content/themes/twentyseventeen/img/facebook.svg" class="yellow">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="wp-content/themes/twentyseventeen/img/twitter.svg" class="yellow">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="wp-content/themes/twentyseventeen/img/instagram.svg" class="yellow">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="wp-content/themes/twentyseventeen/img/snapchat.svg" class="yellow">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="wp-content/themes/twentyseventeen/img/googleplus.svg" class="yellow">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="wp-content/themes/twentyseventeen/img/linkedin.svg" class="yellow">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="wp-content/themes/twentyseventeen/img/youtube.svg" class="yellow">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="wp-content/themes/twentyseventeen/img/soundcloud.svg" class="yellow">
                </a>
              </li>
            </ul>
          </div>
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="#">conózcalo</a>
            </li>
            <li>
              <a href="#">biblioteca</a>
            </li>
            <li>
              <a href="#">prensa</a>
            </li>
            <li>
              <a href="#">agenda</a>
            </li>
            <li>
              <a href="#">voluntarios</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--End Header-->
<div class="container-fluid">
