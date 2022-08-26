<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ListSeriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ListSeriesTable Test Case
 */
class ListSeriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ListSeriesTable
     */
    protected $ListSeries;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ListSeries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ListSeries') ? [] : ['className' => ListSeriesTable::class];
        $this->ListSeries = $this->getTableLocator()->get('ListSeries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ListSeries);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ListSeriesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
