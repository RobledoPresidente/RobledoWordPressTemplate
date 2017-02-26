<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
</div>
		 <footer class="section bg-inverse py-4 px-3 text-white">
      <div class="row">
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-2">
              <h2>conócelo</h2>
            </div>
            <div class="col-md-2">
              <h2>biblioteca</h2>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action justify-content-between bg-inverse border-0">Videos <span class="badge badge-primary badge-pill">14</span></a>
                <a href="#" class="list-group-item list-group-item-action justify-content-between bg-inverse border-0">Boletines <span class="badge badge-primary badge-pill">14</span></a>
                <a href="#" class="list-group-item list-group-item-action justify-content-between bg-inverse border-0">Audios <span class="badge badge-primary badge-pill">14</span></a>
                <a href="#" class="list-group-item list-group-item-action justify-content-between bg-inverse border-0">Debates <span class="badge badge-primary badge-pill">14</span></a>
                <a href="#" class="list-group-item list-group-item-action justify-content-between bg-inverse border-0">Artículos <span class="badge badge-primary badge-pill">14</span></a>
              </div>
            </div>
            <div class="col-md-2">
              <h2>prensa</h2>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Robledo en medios</a>
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Artículo quincenal</a>
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Kit de prensa</a>
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Boletines</a>
              </div>
            </div>
            <div class="col-md-2">
              <h2>agenda</h2>
            </div>
            <div class="col-md-2">
              <h2>voluntarios</h2>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Registro</a>
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">En tu localidad</a>
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Kit del voluntario</a>
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Apps</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 text-center">
          <p>Todos los derechos reservados © 2017</p>
          <small><i class="fa fa-code" aria-hidden="true"></i> Desarrollado como un <a href="https://github.com/RobledoPresidente/WebCandidato" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> proyecto de código abierto</a> bajo GNU GENERAL PUBLIC LICENSE</small>
        </div>
      </div>
      <div class="row">
        <div class="col text-center pt-3">Hecho con <i class="fa fa-heart text-tertiary" aria-hidden="true"></i> por voluntarios</div>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="wp-content/themes/twentyseventeen/lib/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="wp-content/themes/twentyseventeen/lib/ImageMapster/dist/jquery.imagemapster.js" type="text/javascript"></script>
    <script>
      $(function () {

        $('#colombia').mapster('unbind').mapster({
          clickNavigate: true,
          render_highlight: {
            altImageOpacity: 1,
            fillOpacity: 1,
            fillColor: 'ffffff',
            altImage: 'img/map-highlight.png',
            fadeDuration: 100
          },
          mapKey: 'data-key',
          areas: [
          {
            key: 'north',
            isSelectable: false
          },
          {
            key: 'center',
            isSelectable: false
          },
          {
            key: 'south',
            isSelectable: false
          }]
        });
      })
    </script>
</body>

</html>


