<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FireExtinguisherCertificatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FireExtinguisherCertificatesTable Test Case
 */
class FireExtinguisherCertificatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FireExtinguisherCertificatesTable
     */
    public $FireExtinguisherCertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('FireExtinguisherCertificates') ? [] : ['className' => FireExtinguisherCertificatesTable::class];
        $this->FireExtinguisherCertificates = TableRegistry::get('FireExtinguisherCertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FireExtinguisherCertificates);

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
