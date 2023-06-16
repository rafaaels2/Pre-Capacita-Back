<?php
    // imprime todas as strings que possuem oito letras
    function oitoLetras ($vetor) {
        $vetorTam = count ($vetor, 0);

        for ($i = 0; $i < $vetorTam; $i++) {
            if (strlen ($vetor[$i]) == 8) {
                echo "$vetor[$i]\n";
            }
        }
    }
?>