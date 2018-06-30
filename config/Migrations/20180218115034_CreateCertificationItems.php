<?php
use Migrations\AbstractMigration;

class CreateCertificationItems extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('certification_items');
        $table->addColumn('description', 'text', [
            'default' => null,
            'null'    => false,

        ]);
        $table->addColumn('taxed', 'boolean', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('quantity', 'integer', [
            'default' => null,
            'null'    => false,
        ]);

        $table->addColumn('unit_price', 'decimal', [
            'default' => null,
            'null'    => false,
        ]);

        $table->addColumn('type', 'integer', [
            'default' => null,
            'null'    => true,
        ]);

        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null'    => false,
        ]);
        $table->create();
    }
}
