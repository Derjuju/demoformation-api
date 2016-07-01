<?php

use Phinx\Migration\AbstractMigration;

class Migration2 extends AbstractMigration
{
    public function up()
    {
        $videos = $this->table('videos', ['id' => false, 'primary_key' => array('id')]);
        $videos
            ->addColumn('id', 'integer')
            ->addColumn('name', 'string')
            ->save();
    }

    public function down()
    {
        $this->dropTable('videos');
    }
}
