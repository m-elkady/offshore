<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShopBranchesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShopBranchesTable Test Case
 */
class ShopBranchesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShopBranchesTable
     */
    public $ShopBranches;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shop_branches',
        'app.shops',
        'app.clients',
        'app.categories',
        'app.news',
        'app.editors',
        'app.reviewers',
        'app.publishers',
        'app.news_images',
        'app.news_videos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ShopBranches') ? [] : ['className' => 'App\Model\Table\ShopBranchesTable'];
        $this->ShopBranches = TableRegistry::get('ShopBranches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ShopBranches);

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
