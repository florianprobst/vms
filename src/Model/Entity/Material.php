<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Material Entity
 *
 * @property int $id
 * @property string $werkstoffnummer
 * @property string $bezeichnung
 * @property string $bezeichnungalt
 *
 * @property \App\Model\Entity\Valf[] $valves
 */
class Material extends Entity
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
    
    protected function _getFullName()
    {
        return $this->_properties['werkstoffnummer'] . ' | ' .
            $this->_properties['bezeichnung'] . ' | ' . $this->_properties['bezeichnungalt'];
    }
}
