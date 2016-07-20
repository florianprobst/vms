<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ValvesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ValvesTable Test Case
 */
class ValvesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ValvesTable
     */
    public $Valves;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.valves',
        'app.manufacturers',
        'app.stocks',
        'app.customers',
        'app.contacts',
        'app.users',
        'app.flangetypes',
        'app.valvetypes',
        'app.actuators',
        'app.actuatortypes',
        'app.materials',
        'app.gaskets',
        'app.gaskettypes',
        'app.boltings',
        'app.boltclasses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Valves') ? [] : ['className' => 'App\Model\Table\ValvesTable'];
        $this->Valves = TableRegistry::get('Valves', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Valves);

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
