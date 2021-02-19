<?php

function breadcrumbs($sep = '', $home = 'Accueil ') {
$bc     =   '<ul class="breadcrumb">';

$site   =   'http://'.$_SERVER['HTTP_HOST'];

$crumbs =   array_filter( explode("/",$_SERVER["REQUEST_URI"]) );

$bc    .=   '<li><a href="'.$site.'">'.$home.'</a>'.$sep.'>'.'</li>';

$nm     =   count($crumbs);
$i      =   1;

foreach($crumbs as $crumb){

$last_piece = end($crumbs);


    $link    =  ucfirst( str_replace( array(".php","-","_"), array(""," "," ") ,$crumb) );


    $sep     =  $i==$nm?'':$sep;

    $site   .=  '/'.$crumb;

    if ($last_piece!==$crumb){

    $bc     .= '<li><a href="'.$site.'">'.$link.'</a>'.$sep. '>' . '</li>';
    } else {

    $bc     .= '<li class="active">'.ucfirst( str_replace( array(".php","",""), array("","  "," ") ,$last_piece)).'</li>';
    }
    $i++;
}
$bc .=  '</ul>';

return $bc;
}
?>
