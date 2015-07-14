<?php
namespace App\Model\Table;

use App\Model\Entity\Video;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Videos Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Categories
 */
class VideosTable extends Table
{
    protected function _initializeSchema(\Cake\Database\Schema\Table $table)
    {
        $table->columnType('photo', 'proffer.file');
        return $table;
    }

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('videos');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');

        $this->addBehavior('Proffer.Proffer', [
            'photo' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'photo_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'square' => ['w' => 200, 'h' => 200],   // Define the size and prefix of your thumbnails
                    'portrait_md' => ['w' => 300, 'h' => 100],     // Crop will crop the image as well as resize it
                    'lg' => ['w' => 600, 'h' => 200],
                    'box_horizontal' => ['w' => 400, 'h' => 300],
                ],
                'thumbnailMethod' => 'Gd'  // Options are Imagick, Gd or Gmagick
            ]
        ]);

        $this->belongsToMany('Categories', [
            'foreignKey' => 'video_id',
            'targetForeignKey' => 'category_id',
            'joinTable' => 'categories_videos'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');
            
        $validator
            ->requirePresence('youtube_code', 'create')
            ->notEmpty('youtube_code');
            
        $validator
            ->allowEmpty('description');
            
        $validator
            ->add('duration', 'valid', ['rule' => 'time'])
            ->requirePresence('duration', 'create')
            ->notEmpty('duration');
            
        $validator
            ->requirePresence('tags', 'create')
            ->notEmpty('tags');
            
        $validator
            ->allowEmpty('photo');
            
        $validator
            ->allowEmpty('folder_image');
            
        $validator
            ->allowEmpty('slug');

        return $validator;
    }
}
