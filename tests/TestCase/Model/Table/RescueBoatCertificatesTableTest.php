<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RescueBoatCertificatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RescueBoatCertificatesTable Test Case
 */
class RescueBoatCertificatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RescueBoatCertificatesTable
     */
    public $RescueBoatCertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rescue_boat_certificates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RescueBoatCertificates') ? [] : ['className' => RescueBoatCertificatesTable::class];
        $this->RescueBoatCertificates = TableRegistry::get('RescueBoatCertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RescueBoatCertificates);

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
