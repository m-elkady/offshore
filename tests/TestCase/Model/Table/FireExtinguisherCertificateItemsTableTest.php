<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FireExtinguisherCertificateItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FireExtinguisherCertificateItemsTable Test Case
 */
class FireExtinguisherCertificateItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FireExtinguisherCertificateItemsTable
     */
    public $FireExtinguisherCertificateItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fire_extinguisher_certificate_items',
        'app.fire_extinguisher_certificates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FireExtinguisherCertificateItems') ? [] : ['className' => FireExtinguisherCertificateItemsTable::class];
        $this->FireExtinguisherCertificateItems = TableRegistry::get('FireExtinguisherCertificateItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FireExtinguisherCertificateItems);

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
