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
 * @property string $typ
 * @property int $dn
 * @property int $pn
 * @property int $einbaulaenge
 * @property string $besonderheiten
 * @property int $report_id
 *
 * @property \App\Model\Entity\Manufacturer $manufacturer
 * @property \App\Model\Entity\Stock $stock
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Report $report
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
