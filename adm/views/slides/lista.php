<?

defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(0);
echo bwButton::redirect('Enviar novo slide', '/banners/slides/cadastro/0');

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
        $this->addCol('Banner', 'b.nome', 'tac', 200);
        $this->addCol('Status', 's.status', 'tac', 30);

        $this->show();
    }

    function col0($i)
    {
        return '<a href="' . $i->getUrl('/banners/slides/cadastro') . '">' . $i->id . '</a>';
    }

    function col1($i)
    {
        return $i->titulo;
    }

    function col2($i)
    {
        return $i->descricao;
    }

    function col3($i)
    {
        return $i->Banner->nome;
    }

    function col4($i)
    {
        return bwAdm::getImgStatus($i->status);
    }

}

new bwGridBannersSlidesLista();
