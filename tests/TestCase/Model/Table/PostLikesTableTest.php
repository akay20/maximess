<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostLikesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostLikesTable Test Case
 */
class PostLikesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PostLikesTable
     */
    public $PostLikes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PostLikes',
        'app.Users',
        'app.Posts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PostLikes') ? [] : ['className' => PostLikesTable::class];
        $this->PostLikes = TableRegistry::getTableLocator()->get('PostLikes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostLikes);

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
