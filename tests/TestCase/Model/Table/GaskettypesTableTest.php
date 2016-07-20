<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GaskettypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GaskettypesTable Test Case
 */
class GaskettypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GaskettypesTable
     */
    public $Gaskettypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gaskettypes',
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
        'app.materials'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Gaskettypes') ? [] : ['className' => 'App\Model\Table\GaskettypesTable'];
        $this->Gaskettypes = TableRegistry::get('Gaskettypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gaskettypes);

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
