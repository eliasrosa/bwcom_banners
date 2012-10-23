<?php

class BannerSlide extends bwRecord
{
    var $labels = array(
        'id_banner' => 'ID Banner',
        'titulo' => 'Título',
        'descricao' => 'Descrição',
        'link' => 'Link',
        'link_target' => 'Target',
        'ordem' => 'Ordem'
    );
    
    public function setTableDefinition()
    {
        $this->setTableName('bw_banners_slides');
        $this->hasColumn('id', 'integer', 4, array(
            'type' => 'integer',
            'length' => 4,
            'fixed' => false,
            'unsigned' => false,
            'primary' => true,
            'autoincrement' => true,
        ));
        $this->hasColumn('id_banner', 'integer', 4, array(
            'type' => 'integer',
            'length' => 4,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notnull' => false,
            'notnull' => false,
            'notblank' => true,
            'autoincrement' => false,
        ));
        $this->hasColumn('titulo', 'string', 255, array(
            'type' => 'string',
            'length' => 255,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notnull' => true,
            'notblank' => true,
            'autoincrement' => false,
        ));
        $this->hasColumn('descricao', 'string', null, array(
            'type' => 'string',
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notnull' => false,
            'autoincrement' => false,
        ));
        $this->hasColumn('link', 'string', 255, array(
            'type' => 'string',
            'length' => 255,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notnull' => false,
            'autoincrement' => false,
        ));
        $this->hasColumn('link_target', 'string', 100, array(
            'type' => 'string',
            'length' => 100,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notnull' => false,
            'autoincrement' => false,
        ));
        $this->hasColumn('ordem', 'integer', 4, array(
            'type' => 'integer',
            'length' => 4,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notnull' => false,
            'autoincrement' => false,
            'integer' => true,
        ));
        $this->hasColumn('status', 'string', 4, array(
            'type' => 'string',
            'length' => 4,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notnull' => false,
            'autoincrement' => false,
        ));
    }

    public function setUp()
    {
        parent::setUp();

        $this->hasOne('Banner', array(
            'local' => 'id_banner',
            'foreign' => 'id'
        ));

        $this->addImagem();
    }

    public function salvar($dados)
    {
        $db = bwComponent::save('BannerSlide', $dados);
        $r = bwComponent::retorno($db);

        return $r;
    }

    public function remover($dados)
    {
        $db = bwComponent::remover('BannerSlide', $dados);
        $r = bwComponent::retorno($db);

        return $r;
    }

}
