<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovementsTable Test Case
 */
class MovementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MovementsTable
     */
    public $Movements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Movements',
        'app.Employers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Movements') ? [] : ['className' => MovementsTable::class];
        $this->Movements = TableRegistry::getTableLocator()->get('Movements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Movements);

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
}
