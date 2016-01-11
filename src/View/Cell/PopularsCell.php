<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Populars cell
 */
class PopularsCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display($limit = null, $excluirIds = [], $showDestaques = true)
    {
        $limit = (!$limit) ? 20 : $limit;
        $this->loadModel('Videos');

        $conditions = [];
        if ($excluirIds) {
            $conditions[] = ['Videos.id NOT IN' => $excluirIds];
        }
        if (!$showDestaques) {
            $conditions[] = ['Videos.destaque' => false];
        }

        $videos = $this->Videos->find('all', [
            'fields' => [
                'Videos.title',
                'Videos.slug',
                'Videos.duration',
                'Videos.photo_dir',
                'Videos.photo'
            ],
            'contain' => [
                'Categories' => function ($q){
                    return $q
                        ->select(['Categories.name', 'Categories.slug']);
            
                },
                'Artists' => function ($q){
                    return $q
                        ->select(['name', 'slug']);
            
                }
            ],
            'conditions' => $conditions,
            'limit' => $limit,
        ]);

        $this->set('videos', $videos);
    }


}
