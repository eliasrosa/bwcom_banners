<?
defined('BW') or die("Acesso negado!");

$tituloPage = "Administração de Banners e Slides";

$menu = array(
    '0' => array(
        'url' => 'adm.php?com=banners&sub=slides&view=lista',
        'tit' => 'Slides'
    ),
    '1' => array(
        'url' => 'adm.php?com=banners&view=lista',
        'tit' => 'Banners'
    )    
);

?>
