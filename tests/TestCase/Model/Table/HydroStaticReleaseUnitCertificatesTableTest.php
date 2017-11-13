<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HydroStaticReleaseUnitCertificatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HydroStaticReleaseUnitCertificatesTable Test Case
 */
class HydroStaticReleaseUnitCertificatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HydroStaticReleaseUnitCertificatesTable
     */
    public $HydroStaticReleaseUnitCertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hydro_static_release_unit_certificates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HydroStaticReleaseUnitCertificates') ? [] : ['className' => HydroStaticReleaseUnitCertificatesTable::class];
        $this->HydroStaticReleaseUnitCertificates = TableRegistry::get('HydroStaticReleaseUnitCertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HydroStaticReleaseUnitCertificates);

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
