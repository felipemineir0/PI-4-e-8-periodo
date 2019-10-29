<?php
  ob_start();
?>

<link rel="stylesheet" type="text/css" href="css/index.css" />

<?php
  $conteudo = ob_get_contents();
  ob_end_clean();
  include "layout.php";
?>
