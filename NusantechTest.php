<?php


   function mazePattern(int $integer)
    {
        
        $road_line      = 0;
        $door_position  = 0;

        for($i = 1; $i <= $integer; $i++){
            
            for($j = 1; $j <= $integer; $j++){
                if($road_line == 0){
                    if(($j - 1) == 1 && $door_position == 0){
                       
                       echo " ";
                        
                    } else if(($j + 1) == $integer && $door_position == 1){
                        
                        echo " ";
                    } else {
                        echo "@";
                    }
                    
                } else {
                    
                    if($j == 1 || $j == $integer){
                        echo "@";
                    }else{
                        echo " ";
                    }
                }
                     
            }
            if($road_line == 1){
                $door_position = ($door_position == 1) ? 0 : 1;
            }
            $road_line = ($road_line == 1) ? 0 : 1;
           echo "\r\n"; 
        }
    }

mazePattern(15);