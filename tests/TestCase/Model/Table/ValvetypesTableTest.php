<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ValvetypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ValvetypesTable Test Case
 */
class ValvetypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ValvetypesTable
     */
    public $Valvetypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.valvetypes',
        'app.valves',
        'app.manufacturers',
        'app.stocks',
        'app.customers',
        'app.contacts',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Valvetypes') ? [] : ['className' => 'App\Model\Table\ValvetypesTable'];
        $this->Valvetypes = TableRegistry::get('Valvetypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Valvetypes);

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
