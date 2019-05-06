<?php
    $importacoes = ["header","navbar", "homeimg", "slider","sobrecomp", "parceiros","formcontato", "footer_escuro"];

    $title = "EJCOMP";
    
    foreach($importacoes as $importacao){
        require "components/".$importacao.".php";
    }
?>

