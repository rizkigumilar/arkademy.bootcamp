<?php

        $programmer = array("P","R","O","G","R","A","M","M","E","R");

        for ($i = 0; $i < count($programmer); $i++){

            for ($j = 0; $j < count($programmer); $j++){


                if ($j == $i || $i + 1 == count($programmer) - $j ){
                    echo $programmer[$i];

                }else {
                    echo "=";
                }

            }
            
            
            echo "\n";
        }