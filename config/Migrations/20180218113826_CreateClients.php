<?php

use Migrations\AbstractMigration;

class CreateClients extends AbstractMigration
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
        $table = $this->table('clients');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => true,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => true,
        ]);
        $table->addColumn('phone', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => true,
        ]);

        $table->addColumn('contact_person', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => true,
        ]);

        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null'    => true,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null'    => true,
        ]);
        $table->create();
    }
}
