<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActuatortypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActuatortypesTable Test Case
 */
class ActuatortypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActuatortypesTable
     */
    public $Actuatortypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actuatortypes',
        'app.actuators'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Actuatortypes') ? [] : ['className' => 'App\Model\Table\ActuatortypesTable'];
        $this->Actuatortypes = TableRegistry::get('Actuatortypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Actuatortypes);

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
