<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\VideosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\VideosController Test Case
 */
class VideosControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.videos',
        'app.news',
        'app.categories',
        'app.editors',
        'app.groups',
        'app.users',
        'app.writers',
        'app.articles',
        'app.reviewers',
        'app.publishers',
        'app.permissions',
        'app.groups_permissions',
        'app.news_images',
        'app.news_videos'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
