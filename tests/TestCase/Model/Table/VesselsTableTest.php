<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VesselsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VesselsTable Test Case
 */
class VesselsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VesselsTable
     */
    public $Vessels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vessels',
        'app.countries',
        'app.clients',
        'app.quotations',
        'app.employees',
        'app.quotation_items',
        'app.fire_extinguisher_certificates',
        'app.fire_extinguisher_certificate_items',
        'app.certificate_texts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vessels') ? [] : ['className' => VesselsTable::class];
        $this->Vessels = TableRegistry::get('Vessels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vessels);

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
