<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CertificateTextsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CertificateTextsTable Test Case
 */
class CertificateTextsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CertificateTextsTable
     */
    public $CertificateTexts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.certificate_texts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CertificateTexts') ? [] : ['className' => CertificateTextsTable::class];
        $this->CertificateTexts = TableRegistry::get('CertificateTexts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CertificateTexts);

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
