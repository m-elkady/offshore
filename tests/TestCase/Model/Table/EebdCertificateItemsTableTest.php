<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EebdCertificateItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EebdCertificateItemsTable Test Case
 */
class EebdCertificateItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EebdCertificateItemsTable
     */
    public $EebdCertificateItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.eebd_certificate_items',
        'app.eebd_certificates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EebdCertificateItems') ? [] : ['className' => EebdCertificateItemsTable::class];
        $this->EebdCertificateItems = TableRegistry::get('EebdCertificateItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EebdCertificateItems);

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
