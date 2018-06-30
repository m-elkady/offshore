<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeliveryNoteItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeliveryNoteItemsTable Test Case
 */
class DeliveryNoteItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeliveryNoteItemsTable
     */
    public $DeliveryNoteItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.delivery_note_items',
        'app.delivery_notes',
        'app.quotations',
        'app.clients',
        'app.employees',
        'app.quotation_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DeliveryNoteItems') ? [] : ['className' => DeliveryNoteItemsTable::class];
        $this->DeliveryNoteItems = TableRegistry::get('DeliveryNoteItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DeliveryNoteItems);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
