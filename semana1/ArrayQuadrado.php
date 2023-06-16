<?php
    function arrayQuadrado (&$vetor) {
        $vetorTam = count ($vetor, 0); 

        for ($i = 0; $i < $vetorTam; $i++) {
            $vetor[$i] = $vetor[$i] * $vetor[$i];
        }
    }
?>