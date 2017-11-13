<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FixedSystemCertificatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FixedSystemCertificatesTable Test Case
 */
class FixedSystemCertificatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FixedSystemCertificatesTable
     */
    public $FixedSystemCertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fixed_system_certificates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FixedSystemCertificates') ? [] : ['className' => FixedSystemCertificatesTable::class];
        $this->FixedSystemCertificates = TableRegistry::get('FixedSystemCertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FixedSystemCertificates);

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
