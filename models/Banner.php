<?php

class Banner extends bwRecord
{
    var $labels = array(
        'nome' => 'Nome',
        'observacoes' => 'Observações',
        'params' => 'Parâmetros'
    );
    
    public function setTableDefinition()
    {
        $this->setTableName('bw_banners');
        $this->hasColumn('id', 'integer', 4, array(
            'type' => 'integer',
            'length' => 4,
            'fixed' => false,
            'unsigned' => false,
            'primary' => true,
            'autoincrement' => true,
        ));
        $this->hasColumn('nome', 'string', 255, array(
            'type' => 'string',
            'length' => 255,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notnull' => true,
            'notblank' => true,
            'unique' => true,
            'autoincrement' => false,
        ));
        $this->hasColumn('observacoes', 'string', null, array(
            'type' => 'string',
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notnull' => false,
            'autoincrement' => false,
        ));
        $this->hasColumn('status', 'integer', 4, array(
            'type' => 'integer',
            'length' => 4,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notnull' => true,
            'autoincrement' => false,
            'range' => array(0, 1),
        ));
    }

    public function setUp()
    {
        parent::setUp();

        $this->hasMany('BannerSlide as Slides', array(
            'local' => 'id',
            'foreign' => 'id_banner'
        ));
    }

    public function salvar($dados)
    {
        $db = bwComponent::save('Banner', $dados);
        $r = bwComponent::retorno($db);

        return $r;
    }

    public function remover($dados)
    {
        $dql = Doctrine_Query::create()
                  ->from('BannerSlide s')
                  ->where('s.id_banner = ?', $dados['id'])
                  ->execute();
        
        if(!$dql->count())
        {
            $db = bwComponent::remover('Banner', $dados);
            $r = bwComponent::retorno($db);
        }
        else
        {
            return array(
                'retorno' => false,
                'msg' => "Operação cancelada!\nExistem slides relacionados com este banner."
            );
        }

        return $r;
    }

}