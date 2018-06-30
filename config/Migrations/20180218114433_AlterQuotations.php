<?php

use Migrations\AbstractMigration;

class AlterQuotations extends AbstractMigration
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
        $table = $this->table('quotations');
        $table->removeColumn('serial_no');
        $table->removeColumn('date_of_issue');
        $table->removeColumn('client_name');
        $table->removeColumn('contact_person');
        $table->removeColumn('phone_number');
        $table->addColumn('client_id', 'integer', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('employee_id', 'integer', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('terms_conditions', 'text', [
            'default' => null,
            'null'    => true,
        ]);
        $table->addColumn('notes', 'text', [
            'default' => null,
            'null'    => true,
        ]);

        $table->addColumn('other_price', 'integer', [
            'default' => null,
            'null'    => true,
        ]);
        $table->update();
    }
}
