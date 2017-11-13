<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeliveryNotesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeliveryNotesTable Test Case
 */
class DeliveryNotesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeliveryNotesTable
     */
    public $DeliveryNotes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.delivery_notes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DeliveryNotes') ? [] : ['className' => DeliveryNotesTable::class];
        $this->DeliveryNotes = TableRegistry::get('DeliveryNotes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DeliveryNotes);

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
}
