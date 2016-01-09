<?php
namespace App\Model\Table;

use App\Model\Entity\Artist;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Artists Model
 *
 * @property \Cake\ORM\Association\HasMany $Videos
 */
class ArtistsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('artists');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Videos', [
            'foreignKey' => 'artist_id'
        ]);

        $this->addBehavior('Proffer.Proffer', [
            'photo' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'photo_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'square' => ['w' => 500, 'h' => 500, 'crop' => true],
                ],
                'thumbnailMethod' => 'Imagick'  // Options are Imagick, Gd or Gmagick
            ]
        ]);
    }

    protected function _initializeSchema(\Cake\Database\Schema\Table $table)
    {
        $table->columnType('photo', 'proffer.file');
        return $table;
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
            ->allowEmpty('name');

        $validator
            ->add('is_active', 'valid', ['rule' => 'numeric'])
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');

        $validator
            ->allowEmpty('photo_dir');

        $validator
            ->allowEmpty('photo');

        return $validator;
    }
}
