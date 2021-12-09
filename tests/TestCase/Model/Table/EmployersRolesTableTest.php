<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployersRolesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployersRolesTable Test Case
 */
class EmployersRolesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployersRolesTable
     */
    public $EmployersRoles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EmployersRoles',
        'app.EmployersData',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmployersRoles') ? [] : ['className' => EmployersRolesTable::class];
        $this->EmployersRoles = TableRegistry::getTableLocator()->get('EmployersRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmployersRoles);

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
