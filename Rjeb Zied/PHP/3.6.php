<?php

    $age=readline("Entrer Lage de lenfant : ");
    
   
   
        switch ($age) {
            case '6':
            case '7':
                echo "Poussin";
                break;
            
            case '8':
            case '9':
                echo "Pupille";
                break;
            case '10':
            case '11':
                echo "Minime";
                break;
            case '12':
            case '13':
                echo "Cadet";
                break;
            default :
                echo "Mauvaise réponse !";
        }