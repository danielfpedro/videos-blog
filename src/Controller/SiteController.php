<?php
namespace App\Controller;

use App\Controller\AppController;

class SiteController extends AppController
{
	public $layout = 'site';

	public function index()
	{
		$this->loadModel('Videos');

		$mainVideo1 = $this->Videos->find('all', [
			'fields' => [],
			'conditions' => ['Videos.id' => 2]
		])->first();
		$mainVideo2 = $this->Videos->find('all', [
			'fields' => []
		])->first();
		$mainVideo3 = $this->Videos->find('all', [
			'fields' => []
		])->first();

		$videos = $this->Videos->find('all', [
			'fields' => [],
			'contain' => ['Categories']
		]);

		$trendVideos = $this->Videos->find('all', [
			'fields' => []
		]);

		$this->set(compact('videos', 'trendVideos', 'mainVideo1', 'mainVideo2', 'mainVideo3'));
	}

	public function player($slug)
	{
		$this->loadModel('Videos');
		$relatedVideos = $this->Videos->find('all', [
			'fields' => [],
			'contain' => ['Categories']
		]);
		$video = $this->Videos->find('all', [
			'fields' => [],
			'conditions' => [
				'Videos.slug' => $slug
			],
		])
		->first();
		$this->set(compact('relatedVideos', 'video'));
	}
	public function category($categorySlug)
	{
		$this->loadModel('Videos');
		$this->loadModel('Categories');
		$category = $this->Categories->find('all', [
			'conditions' => ['Categories.slug' => $categorySlug]
		])->first();

		$videos = $this->Videos->find('all', [
			'fields' => [],
			'contain' => ['Categories']
		]);
		$this->set(compact('videos', 'category'));
	}
	public function search()
	{
		$this->loadModel('Videos');
		$videos = $this->Videos->find('all', [
			'fields' => [],
			'contain' => ['Categories']
		]);
		$this->set(compact('videos'));
	}
}
