<?php
//i want commit to this file to learn git... 

$deg = '20';
$min = '31';
$sec = '37';


$degree = '0.7144444444';


$test = DMStoDD($deg,$min,$sec);

$conver_to_deg_min_sec = DDtoDMS($deg,$min,$sec);

print_r($conver_to_deg_min_sec);




function DMStoDD($deg,$min,$sec)
{
    // Converting DMS ( Degrees / minutes / seconds ) to decimal format
    return $deg+((($min*60)+($sec))/3600);
}    

function DDtoDMS($dec)
{
    // Converts decimal format to DMS ( Degrees / minutes / seconds ) 
    $vars = explode(".",$dec);
    $deg = $vars[0];
    $tempma = "0.".$vars[1];

    $tempma = $tempma * 3600;
    $min = floor($tempma / 60);
    $sec = $tempma - ($min*60);

    return array("deg"=>$deg,"min"=>$min,"sec"=>$sec);
}    

?>