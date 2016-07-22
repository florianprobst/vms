<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Valf Entity
 *
 * @property int $id
 * @property int $manufacturer_id
 * @property int $stock_id
 * @property int $customer_id
 * @property string $etag
 * @property int $flangetype_id
 * @property int $valvetype_id
 * @property int $actuator_id
 * @property string $actuatorsn
 * @property int $dn
 * @property int $pn
 * @property int $einbaulaenge
 * @property string $besonderheiten
 * @property int $baujahr
 * @property int $material_id
 * @property int $d0
 * @property int $ansprechdruck
 * @property string $kopfdichtungabmessung
 * @property int $gasket_id
 * @property string $spindelabmessungen
 * @property string $stopfbuchsenbrilleabmessungen
 * @property int $anzahlpackungsringe
 * @property string $packungsringabmessung
 * @property string $grundringabmessung
 * @property int $bolting_id
 *
 * @property \App\Model\Entity\Manufacturer $manufacturer
 * @property \App\Model\Entity\Stock $stock
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Flangetype $flangetype
 * @property \App\Model\Entity\Valvetype $valvetype
 * @property \App\Model\Entity\Actuator $actuator
 * @property \App\Model\Entity\Material $material
 * @property \App\Model\Entity\Gasket $gasket
 * @property \App\Model\Entity\Bolting $bolting
 * @property \App\Model\Entity\Report[] $reports
 */
class Valf extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
