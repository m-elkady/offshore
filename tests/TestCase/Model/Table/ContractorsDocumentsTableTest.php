<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContractorsDocumentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContractorsDocumentsTable Test Case
 */
class ContractorsDocumentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContractorsDocumentsTable
     */
    public $ContractorsDocuments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contractors_documents',
        'app.contractors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ContractorsDocuments') ? [] : ['className' => 'App\Model\Table\ContractorsDocumentsTable'];
        $this->ContractorsDocuments = TableRegistry::get('ContractorsDocuments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContractorsDocuments);

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
