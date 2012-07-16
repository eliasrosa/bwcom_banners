<?
defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(0);

$id = bwRequest::getVar('id', 0, 'get');
$i = bwComponent::openById('BannerSlide', $id);

$form = new bwForm($i, bwRouter::_('/banners/task'));
$form->addH2('Dados do slide');
$form->addInputID();
$form->addSelectDB('id_banner', 'Banner');
$form->addInput('titulo');
$form->addTextArea('descricao');
$form->addInputInteger('ordem');
$form->addStatus();


$form->addH2('Link');
$form->addInput('link');
$form->addInput('link_target');

$form->addH2('Imagem');
$form->addInputFileImg();


$form->addBottonSalvar('slideSave');
$form->addBottonRemover('slideRemover');
$form->show();

?>
