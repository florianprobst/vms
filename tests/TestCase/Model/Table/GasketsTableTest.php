<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GasketsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GasketsTable Test Case
 */
class GasketsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GasketsTable
     */
    public $Gaskets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gaskets',
        'app.manufacturers',
        'app.valves',
        'app.stocks',
        'app.customers',
        'app.contacts',
        'app.users',
        'app.flangetypes',
        'app.valvetypes',
        'app.actuators',
        'app.actuatortypes',
        'app.materials',
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
        $config = TableRegistry::exists('Gaskets') ? [] : ['className' => 'App\Model\Table\GasketsTable'];
        $this->Gaskets = TableRegistry::get('Gaskets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gaskets);

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
