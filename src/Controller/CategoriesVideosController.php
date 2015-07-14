<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriesVideos Controller
 *
 * @property \App\Model\Table\CategoriesVideosTable $CategoriesVideos
 */
class CategoriesVideosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Videos']
        ];
        $this->set('categoriesVideos', $this->paginate($this->CategoriesVideos));
        $this->set('_serialize', ['categoriesVideos']);
    }

    /**
     * View method
     *
     * @param string|null $id Categories Video id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriesVideo = $this->CategoriesVideos->get($id, [
            'contain' => ['Categories', 'Videos']
        ]);
        $this->set('categoriesVideo', $categoriesVideo);
        $this->set('_serialize', ['categoriesVideo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriesVideo = $this->CategoriesVideos->newEntity();
        if ($this->request->is('post')) {
            $categoriesVideo = $this->CategoriesVideos->patchEntity($categoriesVideo, $this->request->data);
            if ($this->CategoriesVideos->save($categoriesVideo)) {
                $this->Flash->success(__('The categories video has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categories video could not be saved. Please, try again.'));
            }
        }
        $categories = $this->CategoriesVideos->Categories->find('list', ['limit' => 200]);
        $videos = $this->CategoriesVideos->Videos->find('list', ['limit' => 200]);
        $this->set(compact('categoriesVideo', 'categories', 'videos'));
        $this->set('_serialize', ['categoriesVideo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categories Video id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriesVideo = $this->CategoriesVideos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriesVideo = $this->CategoriesVideos->patchEntity($categoriesVideo, $this->request->data);
            if ($this->CategoriesVideos->save($categoriesVideo)) {
                $this->Flash->success(__('The categories video has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categories video could not be saved. Please, try again.'));
            }
        }
        $categories = $this->CategoriesVideos->Categories->find('list', ['limit' => 200]);
        $videos = $this->CategoriesVideos->Videos->find('list', ['limit' => 200]);
        $this->set(compact('categoriesVideo', 'categories', 'videos'));
        $this->set('_serialize', ['categoriesVideo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categories Video id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriesVideo = $this->CategoriesVideos->get($id);
        if ($this->CategoriesVideos->delete($categoriesVideo)) {
            $this->Flash->success(__('The categories video has been deleted.'));
        } else {
            $this->Flash->error(__('The categories video could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
