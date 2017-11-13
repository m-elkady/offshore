<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GroupPermissionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GroupPermissionsTable Test Case
 */
class GroupPermissionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GroupPermissionsTable
     */
    public $GroupPermissions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.group_permissions',
        'app.permissions',
        'app.groups',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GroupPermissions') ? [] : ['className' => 'App\Model\Table\GroupPermissionsTable'];
        $this->GroupPermissions = TableRegistry::get('GroupPermissions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GroupPermissions);

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
