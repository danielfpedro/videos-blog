<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

use Cake\Network\Exception\NotFoundException;

class SiteController extends AppController
{

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->loadModel('Videos');

		$this->viewBuilder()->layout('site');
	}

	public function index()
	{
		$destaques = $this->Videos->getHomeDestaques(3)->toArray();
		$newestsVideos = $this->Videos->getNewests(20);

		$this->set(compact('newestsVideos', 'destaques'));
	}

	public function player($slug)
	{
		$video = $this->Videos->getPlayedVideo($slug);
		if (!$video) {
			throw new NotFoundException("Página não encontrada");
		}
		$this->set(compact('video'));
	}
	public function category($categorySlug)
	{
		$this->loadModel('Categories');

		$category = $this->Categories->find('all', [
			'fields' => ['id', 'name'],
			'conditions' => ['Categories.slug' => $categorySlug]
		])->first();


		if (!$category) {
			throw new NotFoundException("Página Não encontrada");
		}

		$this->paginate = [
			'fields' => [
				'Videos.title',
				'Videos.description',
				'Videos.slug',
				'Videos.duration',
				'Videos.photo_dir',
				'Videos.photo'
			],
			'conditions' => ['Videos.category_id' => $category->id],
			'contain' => ['Categories' => function($q){
				return $q->select(['Categories.name', 'Categories.slug']);
			}],
			'limit' => 20
		];

		$this->set('videos', $this->paginate($this->Videos));
		$this->set(compact('category'));
	}
	public function search()
	{
		if (!$this->request->query('q')) {
			throw new NotfoundException("Página não encontrada");
		}
		
		$q = str_replace(' ', '%', $this->request->query('q'));

		$this->paginate =[
			'fields' => [
				'Videos.title',
				'Videos.description',
				'Videos.slug',
				'Videos.duration',
				'Videos.photo_dir',
				'Videos.photo'
			],
			'conditions' => ['Videos.tags LIKE' => '%'.$q.'%'],
				'contain' => ['Categories' => function($q){
				return $q->select(['Categories.name', 'Categories.slug']);
			}],
			'limit' => 20
		];
		$this->set('videos', $this->paginate($this->Videos));
	}
}
