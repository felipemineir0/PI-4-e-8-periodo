     <?php
      ob_start();
     ?>
     
     <link rel="stylesheet" type="text/css" href="css/index.css" />
    <div>
      <form action="test.php" method="post">
        <fieldset>
          <legend>Title</legend>
          <input type="radio" id="radio" /> <label for="radio">Click me</label>
        </fieldset>
      </form>
    </div>

    <?php
      $conteudo = ob_get_contents();
      ob_end_clean();
      include "layout.php";
    ?>

