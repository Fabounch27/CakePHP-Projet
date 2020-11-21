<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AbsencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AbsencesTable Test Case
 */
class AbsencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AbsencesTable
     */
    protected $Absences;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Absences',
        'app.Courses',
        'app.Students',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Absences') ? [] : ['className' => AbsencesTable::class];
        $this->Absences = $this->getTableLocator()->get('Absences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Absences);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
