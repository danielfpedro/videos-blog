<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Artist Entity.
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $is_active
 * @property string $photo_dir
 * @property string $photo
 * @property \App\Model\Entity\Video[] $videos
 */
class Artist extends Entity
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
        'id' => false,
    ];

    protected function _getProfileFullUrl()
    {
        return ['controller' => 'Site', 'action' => 'artistProfile', $this->_properties['slug']];
    }
    protected function _getProfilePicture()
    {
        return '../files/artists/photo/' . $this->_properties['photo_dir'] . '/' . 'square_'. $this->_properties['photo']; 
    }
}
