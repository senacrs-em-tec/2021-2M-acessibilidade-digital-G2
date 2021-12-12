

<?php
include_once 'includes/_head.php';
include_once 'includes/_header.php';

?>




<!---------- Título principal ------------------------------------------->

<?php
?>
    <tr id="heading">
        <td colspan="6">
          <h1 align="center">Baixa visão e daltonismo </h1>
        </td>
      </tr>

<!---------- Modo escuro  ------------------------------------------->


    <div class="theme-switch-wrapper">
    <label style="margin-left: 10px;margin-top:10px;">Contraste</label>
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider round"></div>
        </label>
    </div><br> 

<script>
    $(document).ready(function(){
        $('#checkbox').click(function(){
            var element = document.body;         
            element.classList.toggle("dark"); 
        });
    });        
</script>

<!---------- Aumenta e diminui a letra  ------------------------------------------->




<div class="btn-container" id ="recurso-2">
 <button name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
 <button name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>
</div>


<script type="text/javascript">

  window.onload = function() {

      var elementBody = document.querySelector('body');
      var elementBtnIncreaseFont = document.getElementById('increase-font');
      var elementBtnDecreaseFont = document.getElementById('decrease-font');
      var fontSize = 100;
      var increaseDecrease = 10;

      elementBtnIncreaseFont.addEventListener('click', function(event) {
          fontSize = fontSize + increaseDecrease;
          elementBody.style.fontSize = fontSize + '%';

      });

      elementBtnDecreaseFont.addEventListener('click', function(event) {
          fontSize = fontSize - increaseDecrease;
          elementBody.style.fontSize = fontSize + '%';

      });

  }
</script>
    



<!---------- Foto Exemplo  ------------------------------------------->

<div id="foto">

<img src="imagens/foto.jpg">

</div>


<!---------- Links das notícias ------------------------------------------->


    <h1>Lista de notícias </h1>


 
<div id="lista-noticias" >

<ol>
    <li><a href="noticia1.php"> Como utilizar constraste no seu site</a></li>
    <li><a href="noticia2.php"> Ferramentas de acessibilidade para utilizar em seu site</a></li> 
    <li><a href="noticia3.php"> Pense bem na sua paleta de cores</a></li>
    <li><a href="noticia4.php"> Acessibilidade Web</a></li>
    <li><a href="noticia5.php">Dificuldade dos PCD's como usuários da internet</a></li>

</ol>

</div>


<!---------- Texto da página principal ------------------------------------------->

<div id="texto1">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus risus id tellus bibendum ornare. Nulla non commodo velit. 
  Ut euismod porta venenatis. Praesent sagittis elit at ultrices vestibulum. Curabitur vestibulum, arcu sit amet dignissim tristique, eros velit vestibulum massa, sed cursus tellus tellus vitae est. 
  Nulla in elit eu massa interdum dapibus. Nullam porttitor varius imperdiet. Integer at tellus ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque congue aliquet neque eu pellentesque.
   Nam egestas pretium lectus a interdum. Suspendisse potenti.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus risus id tellus bibendum ornare. Nulla non commodo velit. 
   Ut euismod porta venenatis. Praesent sagittis elit at ultrices vestibulum. Curabitur vestibulum, arcu sit amet dignissim tristique, eros velit vestibulum massa, sed cursus tellus tellus vitae est. 
  Nulla in elit eu massa interdum dapibus. Nullam porttitor varius imperdiet. Integer at tellus ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque congue aliquet neque eu pellentesque.
  Nam egestas pretium lectus a interdum. Suspendisse potenti.</p>
  
</div>


<!---------- Footer  ------------------------------------------->
<?php
 include_once 'includes/_footer.php';
?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

