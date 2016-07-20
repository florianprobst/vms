<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BoltingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BoltingsTable Test Case
 */
class BoltingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BoltingsTable
     */
    public $Boltings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.boltings',
        'app.boltclasses',
        'app.materials',
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
        $config = TableRegistry::exists('Boltings') ? [] : ['className' => 'App\Model\Table\BoltingsTable'];
        $this->Boltings = TableRegistry::get('Boltings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Boltings);

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
