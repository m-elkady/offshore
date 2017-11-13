<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewsVideosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewsVideosTable Test Case
 */
class NewsVideosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NewsVideosTable
     */
    public $NewsVideos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.news_videos',
        'app.news',
        'app.categories',
        'app.editors',
        'app.groups',
        'app.users',
        'app.permissions',
        'app.groups_permissions',
        'app.reviewers',
        'app.publishers',
        'app.news_images',
        'app.youtubes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NewsVideos') ? [] : ['className' => 'App\Model\Table\NewsVideosTable'];
        $this->NewsVideos = TableRegistry::get('NewsVideos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NewsVideos);

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
