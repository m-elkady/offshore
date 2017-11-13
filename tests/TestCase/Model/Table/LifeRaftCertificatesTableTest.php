<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LifeRaftCertificatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LifeRaftCertificatesTable Test Case
 */
class LifeRaftCertificatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LifeRaftCertificatesTable
     */
    public $LifeRaftCertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.life_raft_certificates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LifeRaftCertificates') ? [] : ['className' => LifeRaftCertificatesTable::class];
        $this->LifeRaftCertificates = TableRegistry::get('LifeRaftCertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LifeRaftCertificates);

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
