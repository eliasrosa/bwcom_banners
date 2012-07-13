<?

defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(1);
echo bwButton::redirect('Criar novo banner', 'adm.php?com=banners&view=cadastro');

class bwGridBannersLista extends bwGrid
{

    function __construct()
    {
        parent::__construct(
            Doctrine_Query::create()
                ->from('Banner')
        );

        $this->addCol('ID', 'id', 'tac', 30);
        $this->addCol('Nome', 'nome');
        $this->addCol('Observações', 'observacoes', NULL, '40%');
        $this->addCol('Status', 'status', 'tac', 30);

        $this->show();
    }

    function col0($i)
    {
        return sprintf('<a href="%s">%s</a>', $i->getUrl('/adm/banners/cadastro'), $i->id);
    }

    function col1($i)
    {
        return $i->nome;
    }

    function col2($i)
    {
        return $i->observacoes;
    }

    function col3($i)
    {
        return bwAdm::getImgStatus($i->status);
    }

}

new bwGridBannersLista();
?>



