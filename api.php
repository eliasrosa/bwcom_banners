<?

defined('BW') or die("Acesso negado!");

class bwBanners extends bwComponent
{
    // variaveis obrigatórias
    var $id = 'banners';
    var $nome = 'Banners';
    var $adm_visivel = true;
    

    // getInstance
    function getInstance($class = false)
    {
        $class = $class ? $class : __CLASS__;
        return bwObject::getInstance($class);
    }
}
?>
