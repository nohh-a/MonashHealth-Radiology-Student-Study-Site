<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MoncasesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MoncasesTable Test Case
 */
class MoncasesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MoncasesTable
     */
    protected $Moncases;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Moncases',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Moncases') ? [] : ['className' => MoncasesTable::class];
        $this->Moncases = $this->getTableLocator()->get('Moncases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Moncases);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MoncasesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
