<?
defined('BW') or die("Acesso negado!");

// ADM
bwRouter::addUrl('/banners');
bwRouter::addUrl('/banners/task', array(), 'task');
bwRouter::addUrl('/banners/lista');
bwRouter::addUrl('/banners/cadastro/:id', array('id'));
bwRouter::addUrl('/banners/slides/lista');
bwRouter::addUrl('/banners/slides/cadastro/:id', array('id'));
