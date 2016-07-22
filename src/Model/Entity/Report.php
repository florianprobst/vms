<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Report Entity
 *
 * @property int $id
 * @property int $valve_id
 * @property int $operation_id
 * @property \Cake\I18n\Time $datum
 * @property string $beschreibung
 * @property int $condition_id
 * @property string $bild
 *
 * @property \App\Model\Entity\Valf $valf
 * @property \App\Model\Entity\Operation $operation
 * @property \App\Model\Entity\Condition $condition
 */
class Report extends Entity
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
