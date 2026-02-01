<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CollectionsMoncasesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CollectionsMoncasesTable Test Case
 */
class CollectionsMoncasesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CollectionsMoncasesTable
     */
    protected $CollectionsMoncases;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CollectionsMoncases',
        'app.Collections',
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
        $config = $this->getTableLocator()->exists('CollectionsMoncases') ? [] : ['className' => CollectionsMoncasesTable::class];
        $this->CollectionsMoncases = $this->getTableLocator()->get('CollectionsMoncases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CollectionsMoncases);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CollectionsMoncasesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
