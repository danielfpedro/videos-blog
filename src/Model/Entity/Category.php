<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

use Cake\Utility\Inflector;

/**
 * Category Entity.
 */
class Category extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'slug' => true,
        'videos' => true,
    ];

    protected function _setName($name){
        $this->set('slug', strtolower(Inflector::slug($name)));
        return $name;
    }

    protected function _getFullUrl()
    {
    	return ['action' => 'category', $this->_properties['slug']];
    }
}
