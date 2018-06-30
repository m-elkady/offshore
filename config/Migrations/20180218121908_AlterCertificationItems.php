<?php

use Migrations\AbstractMigration;

class AlterCertificationItems extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * @return void
     */
    public function change()
    {
        $table = $this->table('certification_items');
        $table->addColumn('parent_id', 'integer', [
            'default' => null,
            'null'    => true,
        ]);
        $table->update();
    }
}
