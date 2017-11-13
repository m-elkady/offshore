<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PriceListsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PriceListsTable Test Case
 */
class PriceListsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PriceListsTable
     */
    public $PriceLists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.price_lists'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PriceLists') ? [] : ['className' => PriceListsTable::class];
        $this->PriceLists = TableRegistry::get('PriceLists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PriceLists);

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
