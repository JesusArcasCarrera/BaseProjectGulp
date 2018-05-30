<?php


function star($x, $y, $z, $position,$n,$url,$link)
{
    return array(
    "id"=> (int)$n,
    "coordinates"=> array( 
        "x"=> (float)$x,
        "y"=> (float)$y,
        "z"=> (float)$z
    ),
    "position"=> array(
        "x"=>(float)$position['x'],
        "y"=>(float)$position['y'],
        "z"=>(float)$position['z'],
        ),
    "url"=>$url,
    "link"=>$link,
    "paid"=> true
        );
}
