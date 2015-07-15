<?php
namespace App\Controller;

use App\Controller\AppController;

class SiteController extends AppController
{
	public $layout = 'site';

	public function index()
	{
		$this->loadModel('Videos');
		$lastVideos = $this->Videos->find('all', [
			'fields' => []
		])->first();
		$videos = [];
		for ($i=0; $i < 25; $i++) { 
			$videos[] = $lastVideos;
		}

		$trendVideos = $this->Videos->find('all', [
			'fields' => []
		]);

		$this->set(compact('videos', 'trendVideos'));
	}

	public function player()
	{
		$this->loadModel('Videos');
		$relatedVideos = $this->Videos->find('all', [
			'fields' => [
				'Videos.title',
				'Videos.slug',
			]
		]);
		$video = $this->Videos->find('all', [
			'fields' => []
		])
		->first();
		$this->set(compact('relatedVideos', 'video'));
	}
	public function search()
	{
		$this->loadModel('Videos');
		$videos = $this->Videos->find('all', [
			'fields' => [
				'Videos.title',
				'Videos.slug',
			]
		]);
		$this->set(compact('videos'));
	}
}
