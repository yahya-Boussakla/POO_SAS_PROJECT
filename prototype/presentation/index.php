<?php 

function ask($query){
    echo $query;
    return trim(fgets(STDIN));
}

$name = ask('enter your name : ');



?>