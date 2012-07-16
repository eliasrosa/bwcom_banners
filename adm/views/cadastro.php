<?
defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(1);
       
$id = bwRequest::getVar('id', 0, 'get');
$i = bwComponent::openById('Banner', $id);

$form = new bwForm($i, bwRouter::_('/banners/task'));
$form->addH2('Dados do banner');
$form->addInputID();
$form->addInput('nome');
$form->addTextArea('observacoes');
$form->addStatus();

$form->addBottonSalvar('bannerSave');
$form->addBottonRemover('bannerRemover');
$form->show();    

?>
