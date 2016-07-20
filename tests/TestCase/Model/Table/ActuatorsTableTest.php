<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActuatorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActuatorsTable Test Case
 */
class ActuatorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActuatorsTable
     */
    public $Actuators;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actuators',
        'app.actuatortypes',
        'app.manufacturers',
        'app.valves',
        'app.stocks',
        'app.customers',
        'app.contacts',
        'app.users',
        'app.flangetypes',
        'app.valvetypes',
        'app.materials',
        'app.gaskets',
        'app.gaskettypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Actuators') ? [] : ['className' => 'App\Model\Table\ActuatorsTable'];
        $this->Actuators = TableRegistry::get('Actuators', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Actuators);

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
