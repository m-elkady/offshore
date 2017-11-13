<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PollQuestionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PollQuestionsTable Test Case
 */
class PollQuestionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PollQuestionsTable
     */
    public $PollQuestions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.poll_questions',
        'app.polls',
        'app.poll_answers',
        'app.poll_question_options'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PollQuestions') ? [] : ['className' => 'App\Model\Table\PollQuestionsTable'];
        $this->PollQuestions = TableRegistry::get('PollQuestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PollQuestions);

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
