<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FireExtinguisherTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FireExtinguisherTable Test Case
 */
class FireExtinguisherTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FireExtinguisherTable
     */
    public $FireExtinguisher;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fire_extinguisher'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FireExtinguisher') ? [] : ['className' => FireExtinguisherTable::class];
        $this->FireExtinguisher = TableRegistry::get('FireExtinguisher', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FireExtinguisher);

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
