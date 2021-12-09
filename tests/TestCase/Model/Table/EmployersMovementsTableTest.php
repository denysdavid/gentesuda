<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployersMovementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployersMovementsTable Test Case
 */
class EmployersMovementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployersMovementsTable
     */
    public $EmployersMovements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EmployersMovements',
        'app.Employers',
        'app.Movements',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmployersMovements') ? [] : ['className' => EmployersMovementsTable::class];
        $this->EmployersMovements = TableRegistry::getTableLocator()->get('EmployersMovements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmployersMovements);

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
