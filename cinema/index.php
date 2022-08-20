<?php include "header.php"; 
      include "dados.php";

      //echo "<pre>";
      //print_r($series);
      //echo "</pre>";
?>
<main>
    <h1>Series em destaques:</h1>
    <div class="grid">
        <?php
           $i = 0;
           shuffle($series);
           foreach ( $series as $serie) {
            $i++;
            if ($i > 4) break;
            $id = $serie["id"];
            $nome = $serie["nome"];
            $imagens = $serie["imagem"];

            echo "<div class='coluna'>
                <img src='imagens/{$imagens}'>
                <p><strong>{$nome}</strong></p>
                <p> 
                      <a href='serie.php?id={$id}'>
                           Detalhes
                      </a>
                </p>
            </div>";
           }
        ?>
    </div>
</main>

<?php include "footer.php"; ?>
