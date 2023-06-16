<?php
    function diasDaSemana ($dia) {
        switch ($dia) {
            case 2:
                echo "Segunda\n";
                break;
            
            case 3:
                echo "Terça\n";
                break;

            case 4:
                echo "Quarta\n";
                break;
            
            case 5:
                echo "Quinta\n";
                break;

            case 6:
                echo "Sexta\n";
                break;

            default:
                echo "erro\n";
        }
    }
?>