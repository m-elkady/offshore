<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuotationItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuotationItemsTable Test Case
 */
class QuotationItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuotationItemsTable
     */
    public $QuotationItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quotation_items',
        'app.quotations',
        'app.certification_items',
        'app.clients',
        'app.employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('QuotationItems') ? [] : ['className' => QuotationItemsTable::class];
        $this->QuotationItems = TableRegistry::get('QuotationItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuotationItems);

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
