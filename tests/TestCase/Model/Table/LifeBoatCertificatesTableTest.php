<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LifeBoatCertificatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LifeBoatCertificatesTable Test Case
 */
class LifeBoatCertificatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LifeBoatCertificatesTable
     */
    public $LifeBoatCertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.life_boat_certificates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LifeBoatCertificates') ? [] : ['className' => LifeBoatCertificatesTable::class];
        $this->LifeBoatCertificates = TableRegistry::get('LifeBoatCertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LifeBoatCertificates);

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
