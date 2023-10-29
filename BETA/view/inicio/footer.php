<footer class="page-footer" style="margin-top: 120px; box-shadow: 0px 0px 2px white; background-color: rgb(17,17,17)">
  <div class="row wide-container">
    <div class="col s3">
      <h4 class="white-text bold underline">ETREVA TRAVEL</h4>
      <p class="grey-text text-lighten-4">Tu Agencia Turistica en línea favorita.</p>
    </div>
    <div class="col s2">
      <h5 class="white-text bold"  style=' text-decoration: underline'>Soporte</h5>
      <p><a class='dropdown-trigger white-text bold' href='#' data-target='dropdown1'>Atención al cliente 
        <i class='material-icons' style=' text-decoration: none !important; display: inline-flex; vertical-align: top;'>arrow_drop_down</i>
      </a></p>
      <ul id='dropdown1' class='dropdown-content white'>
        <li><a href='aboutUs.php' class='black-text bold'>Acerca de nosotros</a></li>
        <li class='divider' tabindex='-1'></li>
        <li><a href='warranty_page.php' class='black-text bold'>Garantía</a></li>
        <li class='divider' tabindex='-1'></li>
        <li><a href='contactUs.php' class='black-text bold'>Contáctanos</a></li>
      </ul>
    </div>
    <div class="col s2">
      <h5 class="white-text bold">Encuéntranos</h5>
      <p class="bold">
        Lunes a Domingo: <br> 11.00am a 8.00pm
      </p>
      <p class="bold">
        B-2-16, SD2, Dataran SD PJU9, <br>
        Jalan Dataran SD 2, Bandar <br> Sri Damansara, 52200 KL
      </p>
    </div>
    <div class="col s2">
      <h5 class="white-text bold">Redes Sociales</h5>
      <a class="waves-effect waves-light blue lighten-1 btn" style="margin: 2px;">
        <i class="fa fa-facebook fa-fw"></i> Facebook
      </a>
      <a class="waves-effect waves-light pink lighten-1 btn" style="margin: 2px;">
        <i class="fa fa-instagram fa-fw"></i> Instagram
      </a>
    </div>
    <div class="col s3">
      <h5 class="white-text bold">La Paz Ciudad Maravilla </h5>
      <img src="static/images/La-paz-maravilla.jpg" />
    </div>
  </div>
  <div class="footer-copyright" style="padding-bottom: 20px;">
    <div class="wide-container underline">© 2023 Etreva Todos los derechos reservados.</div>
  </div>
</footer>

  <script>
    $(document).ready(function() {
      $('.dropdown-trigger').dropdown({
        coverTrigger: false
      });

      $('#pagination').pageMe({
        pagerSelector:'#myPager',
        activeColor: 'blue',
        prevText:'Previous',
        nextText:'Next',
        showPrevNext:true,
        hidePageNumbers:false,
        perPage:5
      });
      
    })
  </script>

</footer>