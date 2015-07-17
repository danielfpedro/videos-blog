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
        'category' => true,
        'full_photo_box_horizontal' => true,
        'full_photo_portrait_md' => true,
        'full_photo_portrait_lg' => true,
        'full_photo_portrait_lg_from_template' => true,
        'url_full' => true,
    ];

    protected function _setTitle($title){
        $this->set('slug', strtolower(Inflector::slug($title)));
        return $title;
    }
    protected function _getFullPhotoPortraitLg(){
        return $this->_getImageDirName('portrait_lg');
    }
    protected function _getFullPhotoPortraitLgFromTemplate(){
        return $this->_getImageDirNameFromTemplate('portrait_lg');
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
    protected function _getImageDirNameFromTemplate($prefix){
        return '/files/videos/photo/' . $this->_properties['photo_dir'] . '/' . $prefix . '_'. $this->_properties['photo']; 
    }
    protected function _getUrlFull()
    {
        return ['action' => 'player', $this->_properties['slug']];
    }
}
