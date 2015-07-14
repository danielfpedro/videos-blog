<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CategoriesVideo Entity.
 */
class CategoriesVideo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'id' => true,
        'category' => true,
        'video' => true,
    ];
}
