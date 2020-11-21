<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CourseTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CourseTable Test Case
 */
class CourseTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CourseTable
     */
    protected $Course;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Course',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Course') ? [] : ['className' => CourseTable::class];
        $this->Course = $this->getTableLocator()->get('Course', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Course);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
