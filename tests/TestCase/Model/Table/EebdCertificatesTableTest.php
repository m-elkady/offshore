<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EebdCertificatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EebdCertificatesTable Test Case
 */
class EebdCertificatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EebdCertificatesTable
     */
    public $EebdCertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.eebd_certificates',
        'app.eebd_certificate_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EebdCertificates') ? [] : ['className' => EebdCertificatesTable::class];
        $this->EebdCertificates = TableRegistry::get('EebdCertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EebdCertificates);

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
