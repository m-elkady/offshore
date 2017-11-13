<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ScapaCertificatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ScapaCertificatesTable Test Case
 */
class ScapaCertificatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ScapaCertificatesTable
     */
    public $ScapaCertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.scapa_certificates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ScapaCertificates') ? [] : ['className' => ScapaCertificatesTable::class];
        $this->ScapaCertificates = TableRegistry::get('ScapaCertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ScapaCertificates);

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
