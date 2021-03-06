<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property int $KdNr_ERP
 * @property string $name
 * @property string $strasse
 * @property string $plz
 * @property string $ort
 *
 * @property \App\Model\Entity\Contact[] $contacts
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Valf[] $valves
 */
class Customer extends Entity
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
