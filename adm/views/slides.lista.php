<?
defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(0);
echo bwButton::redirect('Enviar novo slide', 'adm.php?com=banners&sub=slides&view=cadastro');
    
class bwGridBannersSlidesLista extends bwGrid
{
    function __construct()
    {
        parent::__construct(
            Doctrine_Query::create()
                ->from('BannerSlide s')
                ->leftJoin('s.Banner b')
        );
        
        $this->addCol('ID', 's.id', 'tac', 30);
        $this->addCol('Título', 's.titulo');
        $this->addCol('Descrição', 's.descricao', NULL, 350);
        $this->addCol('Link', 's.link', NULL, 350);
        $this->addCol('Banner', 'b.banner', 'tac', 200);
        $this->addCol('Status', 's.status', 'tac', 30);
        
        $this->show();
    }
    
    function col0($i)
    {
        return $i->id;
    }
    
    function col1($i)
    {
        return '<a href="' . bwRouter::_('adm.php?com=banners&sub=slides&view=cadastro&id=' . $i->id) . '">'.$i->titulo.'</a>';
    }

    function col2($i)
    {
        return $i->descricao;
    }

    function col3($i)
    {
        $t = $i->link_target == '' ? '' : "({$i->link})";
        return $i->link.$t;
    }

    function col4($i)
    {
        return '<a href="' . bwRouter::_('adm.php?com=banners&view=cadastro&id=' . $i->Banner->id) . '">'.$i->Banner->nome.'</a>';
    }
    
    function col5($i)
    {
        return bwAdm::getImgStatus($i->status);
    }
}

new bwGridBannersSlidesLista();
