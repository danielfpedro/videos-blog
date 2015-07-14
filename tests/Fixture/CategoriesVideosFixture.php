<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriesVideosFixture
 *
 */
class CategoriesVideosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'category_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'video_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_categories_has_videos_videos1_idx' => ['type' => 'index', 'columns' => ['video_id'], 'length' => []],
            'fk_categories_has_videos_categories_idx' => ['type' => 'index', 'columns' => ['category_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_categories_has_videos_categories' => ['type' => 'foreign', 'columns' => ['category_id', 'category_id'], 'references' => ['categories', '1' => ['id', 'id']], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_categories_has_videos_videos1' => ['type' => 'foreign', 'columns' => ['video_id', 'video_id'], 'references' => ['videos', '1' => ['id', 'id']], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'category_id' => 1,
            'video_id' => 1
        ],
    ];
}
