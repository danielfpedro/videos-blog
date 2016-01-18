<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Playlists Controller
 *
 * @property \App\Model\Table\PlaylistsTable $Playlists
 */
class PlaylistsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->viewBuilder()->layout('site');

        $this->paginate = [
            'conditions' => ['user_id' => $this->Auth->user('id')],
            'contain' => ['Users']
        ];
        $this->set('playlists', $this->paginate($this->Playlists));
    }

    /**
     * View method
     *
     * @param string|null $id Playlist id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $playlist = $this->Playlists->get($id, [
            'contain' => ['Users', 'Videos']
        ]);
        $this->set('playlist', $playlist);
        $this->set('_serialize', ['playlist']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $playlist = $this->Playlists->newEntity();

        if ($this->request->is('post')) {

            $this->request->data['user_id'] = $this->Auth->user('id');

            $playlist = $this->Playlists->patchEntity($playlist, $this->request->data);
            if ($this->Playlists->save($playlist)) {
            } else {
            }
        }

        $response = 'Salvou jóia';

        $this->set(compact('response'));
        $this->set('_serialize', ['response']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Playlist id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $playlist = $this->Playlists->get($id, [
            'contain' => ['Videos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $playlist = $this->Playlists->patchEntity($playlist, $this->request->data);
            if ($this->Playlists->save($playlist)) {
                $this->Flash->success(__('The playlist has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The playlist could not be saved. Please, try again.'));
            }
        }
        $users = $this->Playlists->Users->find('list', ['limit' => 200]);
        $videos = $this->Playlists->Videos->find('list', ['limit' => 200]);
        $this->set(compact('playlist', 'users', 'videos'));
        $this->set('_serialize', ['playlist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Playlist id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $playlist = $this->Playlists->get($id);
        if ($this->Playlists->delete($playlist)) {
            $this->Flash->success(__('The playlist has been deleted.'));
        } else {
            $this->Flash->error(__('The playlist could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function addVideo()
    {
        $video = $this->Playlists->Videos->get($this->request->data('video_id'));
        $playlist = $this->Playlists->get($this->request->data('playlist_id'));

        if (!$this->Playlists->Videos->link($playlist, [$video])) {
            debug($playlist->errors());
        }

        $this->set('_serialize', ['foda-se']);
        
    }
    public function myPlayLists()
    {
        $userId = $this->Auth->user('id');
        $playlists = $this->Playlists->find('all', ['conditions' => ['user_id' => $userId]]);

        $this->set(compact('playlists'));
        $this->set('_serialize', ['playlists']);
    }

    public function videos($playlistId = null)
    {
        $page = (int)$this->request->query('page');

        $limit = 1;

        $playlist = $this->Playlists->get($playlistId, [
            'contain' => [
                'Videos' => function($q) use ($limit, $page){
                    return $q
                        ->limit($limit)
                        ->page($page);
                }
            ]
        ]);

        $this->set(compact('playlist'));
        $this->set('_serialize', ['playlist']);
    }
}
