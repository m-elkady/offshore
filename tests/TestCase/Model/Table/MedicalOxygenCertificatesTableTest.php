<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedicalOxygenCertificatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedicalOxygenCertificatesTable Test Case
 */
class MedicalOxygenCertificatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MedicalOxygenCertificatesTable
     */
    public $MedicalOxygenCertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.medical_oxygen_certificates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MedicalOxygenCertificates') ? [] : ['className' => MedicalOxygenCertificatesTable::class];
        $this->MedicalOxygenCertificates = TableRegistry::get('MedicalOxygenCertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MedicalOxygenCertificates);

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
