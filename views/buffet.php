<?php

exit('404 page not found');
require '../includes/setSessao.php';

require_once '../templates/head.php';

?>
<link rel="stylesheet" href="../css/buffet.css">
<div class="img container">
    <img class="food-img" src="../imagens/food.png">
    <img class="food-img" src="../imagens/food1.png">
    <img class="food-img" src="../imagens/food2.png">
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="overflow p-3 border bg-light">
                BEBIDAS<br>
                CERVEJAS<br>
                ÁGUA<br>
                CHÁS<br>
                ENERGÉTICOS<br>
                IISOTÔNICOS<br>
                REFRIGERANTES<br>
                SUCOS<br>
            </div>
        </div>
        <div class="col overflow">
            <div class="overflow p-3 border bg-light">
                COMIDAS<br>
                MASSAS<br>
                CARNES<br>
                GRÃOS<br>
                SALADAS<br>
                DOCES<br>
                SORVETES<br>
            </div>
        </div>
        <div class="col overflow">
            <div class="overflow p-3 border bg-light">
                TEMAS<br>
                GALA<br>
                SUPER-HEROI<br>
                HALLOWEEN<br>
                PASCOA<br>
                NATAL<br>
                ANO NOVO<br>
            </div>
        </div>
    </div>
</div>
<?php

require_once '../templates/footer.php';
