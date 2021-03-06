<?php

/**
 * BaseTekst
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $contents
 * 
 * @method integer getId()       Returns the current record's "id" value
 * @method string  getContents() Returns the current record's "contents" value
 * @method Tekst   setId()       Sets the current record's "id" value
 * @method Tekst   setContents() Sets the current record's "contents" value
 * 
 * @package    clipboard
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTekst extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tekst');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('contents', 'string', 4096, array(
             'type' => 'string',
             'length' => 4096,
             ));

        $this->option('collate', 'utf8_polish_ci');
        $this->option('charset', 'utf8');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}