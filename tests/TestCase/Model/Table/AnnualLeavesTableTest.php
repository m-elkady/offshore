<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnnualLeavesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnnualLeavesTable Test Case
 */
class AnnualLeavesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AnnualLeavesTable
     */
    public $AnnualLeaves;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.annual_leaves'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AnnualLeaves') ? [] : ['className' => AnnualLeavesTable::class];
        $this->AnnualLeaves = TableRegistry::get('AnnualLeaves', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AnnualLeaves);

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
