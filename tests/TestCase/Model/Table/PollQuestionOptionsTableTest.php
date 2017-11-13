<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PollQuestionOptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PollQuestionOptionsTable Test Case
 */
class PollQuestionOptionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PollQuestionOptionsTable
     */
    public $PollQuestionOptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.poll_question_options',
        'app.poll_questions',
        'app.polls',
        'app.poll_answers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PollQuestionOptions') ? [] : ['className' => 'App\Model\Table\PollQuestionOptionsTable'];
        $this->PollQuestionOptions = TableRegistry::get('PollQuestionOptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PollQuestionOptions);

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
