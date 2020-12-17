<?php

    require "deus.php";

    $d1 = new Deus(1, "Thor", "Asgard", "xxxxxxxx");
    $d1->setArma("Martelo");
    $d1->setArma("Marreta");
    $d1->setForca(70);
    $d1->setFoto("img/thor.jpg");
    $d1->setElemento("Trovão");
    $d1->setDescricao("Thor é um deus que percorre os céus com sua biga puxada por dois bodes. Apesar de viver em Asgard, está sempre ocupado em disputas com os gigantes, inimigos dos deuses, das quais sai vitorioso. Também tem um apetite imenso e dizem que é capaz de comer um boi inteiro durante uma refeição.
    Devido a sua bravura, os vikings costumavam fazer pingentes em forma de martelo a fim de serem protegidos por Thor.");

    echo $d1->toString();

    
     


?>