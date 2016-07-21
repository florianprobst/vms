<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Datasource\ConnectionManager;

/**
 * Bolting Entity
 *
 * @property int $id
 * @property int $boltclasse_id
 * @property int $schraubenanzahl
 * @property string $muttern
 * @property float $schraubenlaenge
 * @property int $material_id
 *
 * @property \App\Model\Entity\Boltclass $boltclass
 * @property \App\Model\Entity\Material $material
 * @property \App\Model\Entity\Valf[] $valves
 */
class Bolting extends Entity
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
    	//$var = $boltclasses->get($this->_properties['boltclasse_id']);
    	//$var = $boltclasses->get(1);
    	//print_r(var_dump($this->Boltclasses));
    	$connection = ConnectionManager::get('default');
    	$sql = 'SELECT festigkeitsklasse FROM boltclasses WHERE id = ' . $this->_properties['boltclasse_id'];
    	$results = $connection->execute($sql)->fetchAll('assoc');
    	foreach($results as $row){
    		$festigkeitsklasse = $row['festigkeitsklasse'];
    	}
    	
    	$sql = 'SELECT werkstoffnummer FROM materials WHERE id = ' . $this->_properties['material_id'];
    	$results = $connection->execute($sql)->fetchAll('assoc');
    	foreach($results as $row){
    		$werkstoff = $row['werkstoffnummer'];
    	}
    	
    	return $this->_properties['schraubenanzahl'] . ' x ' . $this->_properties['schraubenlaenge'] .' mm ' . $this->_properties['schraubenart'] . ' | Festigkeit: ' . $festigkeitsklasse . ' | Werkstoff: ' . $werkstoff . ' | Muttern: ' . $this->_properties['muttern'];
    }
}
