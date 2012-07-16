<?

defined('BW') or die("Acesso negado!");
$task = bwRequest::getVar('task');


// BANNERS
////////////////////////////////////////////////////////////////

if ($task == 'bannerSave') {
    $r = Banner::salvar(bwRequest::getVar('dados'));
}

if ($task == 'bannerRemover') {
    $r = Banner::remover(bwRequest::getVar('dados'));
    $r['redirect'] = bwRouter::_('/banners/lista');
}




// SLIDES
////////////////////////////////////////////////////////////////

if ($task == 'slideSave') {
    $r = BannerSlide::salvar(bwRequest::getVar('dados'));
}

if ($task == 'slideRemover') {
    $r = BannerSlide::remover(bwRequest::getVar('dados'));
    $r['redirect'] = bwRouter::_('/banners/slides/lista');
}



die(json_encode($r));
?>
