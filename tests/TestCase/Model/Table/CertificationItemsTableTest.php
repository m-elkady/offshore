<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CertificationItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CertificationItemsTable Test Case
 */
class CertificationItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CertificationItemsTable
     */
    public $CertificationItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.certification_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CertificationItems') ? [] : ['className' => CertificationItemsTable::class];
        $this->CertificationItems = TableRegistry::get('CertificationItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CertificationItems);

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
