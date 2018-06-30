<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FireExtinguisherItemTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FireExtinguisherItemTypesTable Test Case
 */
class FireExtinguisherItemTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FireExtinguisherItemTypesTable
     */
    public $FireExtinguisherItemTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fire_extinguisher_item_types',
        'app.fire_extinguisher_certificate_items',
        'app.fire_extinguisher_certificates',
        'app.certificate_texts',
        'app.vessels',
        'app.countries',
        'app.clients',
        'app.quotations',
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
        $config = TableRegistry::exists('FireExtinguisherItemTypes') ? [] : ['className' => FireExtinguisherItemTypesTable::class];
        $this->FireExtinguisherItemTypes = TableRegistry::get('FireExtinguisherItemTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FireExtinguisherItemTypes);

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
