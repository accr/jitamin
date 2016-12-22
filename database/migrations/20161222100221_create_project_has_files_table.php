<?php

use Phinx\Migration\AbstractMigration;

class CreateProjectHasFilesTable extends AbstractMigration
{
    /**
     * Change Method.
     */
    public function change()
    {
        $table = $this->table('project_has_files');
        $table->addColumn('project_id', 'integer')
              ->addColumn('name', 'string')
              ->addColumn('path', 'string')
              ->addColumn('is_image','boolean', ['null' => true, 'default' => 0])
              ->addColumn('size', 'integer', ['default' => 0])
              ->addColumn('user_id', 'integer', ['default' => 0])
              ->addColumn('date', 'integer', ['default' => 0])
              ->addForeignKey('project_id', 'projects', 'id', ['delete' => 'CASCADE'])
              ->create();
    }
}