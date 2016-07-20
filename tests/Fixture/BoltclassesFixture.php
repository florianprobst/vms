<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BoltclassesFixture
 *
 */
class BoltclassesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'festigkeitsklasse' => ['type' => 'string', 'length' => 4, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nennzugfestigkeit' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Nennzugfestigkeit Rm, Nenn   N/mm2', 'precision' => null, 'autoIncrement' => null],
        'unterestreckgrenze' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'untere Streckgrenze ReL  N/mm2', 'precision' => null, 'autoIncrement' => null],
        'dehngrenze' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '0,2 %- Dehngrenze Rp 0,2  N/mm2', 'precision' => null, 'autoIncrement' => null],
        'bruchdehnung' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Bruchdehnung  A %', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'festigkeitsklasse' => ['type' => 'unique', 'columns' => ['festigkeitsklasse'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'festigkeitsklasse' => 'Lo',
            'nennzugfestigkeit' => 1,
            'unterestreckgrenze' => 1,
            'dehngrenze' => 1,
            'bruchdehnung' => 1
        ],
    ];
}
