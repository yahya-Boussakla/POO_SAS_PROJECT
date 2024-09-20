<?php 

function ask($query){
    echo $query;
    return trim(fgets(STDIN));
}


?>