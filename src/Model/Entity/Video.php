<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

use Cake\Utility\Inflector;

/**
 * Video Entity.
 */
class Video extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'youtube_code' => true,
        'description' => true,
        'duration' => true,
        'tags' => true,
        'photo' => true,
        'photo_dir' => true,
        'slug' => true,
        'categories' => true,
        'full_photo_box_horizontal' => true,
        'full_photo_portrait_md' => true,
    ];

    protected function _setTitle($title){
        $this->set('slug', strtolower(Inflector::slug($title)));
        return $title;
    }
    protected function _getFullPhotoBoxHorizontal(){
        return $this->_getImageDirName('box_horizontal');
    }
    protected function _getFullPhotoPortraitMd(){
        return $this->_getImageDirName('portrait_md');
    }
    protected function _getImageDirName($prefix){
        return '../files/videos/photo/' . $this->_properties['photo_dir'] . '/' . $prefix . '_'. $this->_properties['photo']; 
    }
}
