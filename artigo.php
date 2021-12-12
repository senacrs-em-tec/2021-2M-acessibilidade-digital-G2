<?php

include_once 'includes/_db.php';

include_once 'includes/_header.php';

include_once 'includes/_head.php';

?>


<main>

<?php

$sid = $_REQUEST["cat"];
$sql = "SELECT* FROM noticias WHERE noticiaID=" . $id;
$result = mysqli_query($conn,$sql);

?>;


<h1 id= "titulo-pagina">*** </h1>


<?php

while ($dado =mysqli_fetch_array($resultado)) {

?>




<h1 id="inicio"><?php echo $dado[''];?></h1>

<br>

<h3  id= "noticias"><?php echo $dado[ 'titulo']?></h3>

<br>

<p id="texto=artigo"><?php echo $dado['texto'];?></p>

<?php
include_once 'includes/_footer.php';

?>