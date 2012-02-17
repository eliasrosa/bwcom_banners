<?
defined('BW') or die("Acesso negado!");

$dados = bwRequest::getVar('dados', array(), 'post');

// BANNERS
////////////////////////////////////////////////////////////////

if ($task == 'bannerSave')
{
    $r = Banner::salvar($dados);
}

if ($task == 'bannerRemover')
{
    $r = Banner::remover($dados);  
    $r['redirect'] = bwRouter::_('adm.php?com=banners&view=lista');
}




// SLIDES
////////////////////////////////////////////////////////////////

if ($task == 'slideSave')
{
    $r = BannerSlide::salvar($dados);
}

if ($task == 'slideRemover')
{
    $r = BannerSlide::remover($dados);    
    $r['redirect'] = bwRouter::_('adm.php?com=banners&sub=slides&view=lista');
}



die(json_encode($r));
?>
