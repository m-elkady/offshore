<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BudgetItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BudgetItemsTable Test Case
 */
class BudgetItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BudgetItemsTable
     */
    public $BudgetItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.budget_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BudgetItems') ? [] : ['className' => 'App\Model\Table\BudgetItemsTable'];
        $this->BudgetItems = TableRegistry::get('BudgetItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BudgetItems);

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
