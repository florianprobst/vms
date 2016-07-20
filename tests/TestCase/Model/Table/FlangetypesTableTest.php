<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlangetypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlangetypesTable Test Case
 */
class FlangetypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FlangetypesTable
     */
    public $Flangetypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.flangetypes',
        'app.valves',
        'app.manufacturers',
        'app.stocks',
        'app.customers',
        'app.contacts',
        'app.users',
        'app.valvetypes',
        'app.actuators',
        'app.actuatortypes',
        'app.materials',
        'app.gaskets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Flangetypes') ? [] : ['className' => 'App\Model\Table\FlangetypesTable'];
        $this->Flangetypes = TableRegistry::get('Flangetypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Flangetypes);

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
