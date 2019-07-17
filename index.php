<?php
    $importacoes = ["header","navbar", "homeimg", "slider","sobrecomp", "parceiros","formcontato", "footer_escuro"];

    $title = "CELLIJ";
    
    foreach($importacoes as $importacao){
        require "components/".$importacao.".php";
    }
?>

