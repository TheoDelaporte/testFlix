<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ListSeries Controller
 *
 * @property \App\Model\Table\ListSeriesTable $ListSeries
 * @method \App\Model\Entity\ListSeries[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListSeriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'order' => ['serie_name' => 'asc'],
            'limit' => 12,
        ];

        $listSeries = $this->paginate($this->ListSeries);

        $this->set(compact('listSeries'));
    }

    /**
     * View method
     *
     * @param string|null $id List Series id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listSeries = $this->ListSeries->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('listSeries'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listSeries = $this->ListSeries->newEmptyEntity();
        if ($this->request->is('post')) {
            $listSeries = $this->ListSeries->patchEntity($listSeries, $this->request->getData());
            if ($this->ListSeries->save($listSeries)) {
                $this->Flash->success(__('The list series has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The list series could not be saved. Please, try again.'));
        }
        $this->set(compact('listSeries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id List Series id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listSeries = $this->ListSeries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listSeries = $this->ListSeries->patchEntity($listSeries, $this->request->getData());
            if ($this->ListSeries->save($listSeries)) {
                $this->Flash->success(__('The list series has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The list series could not be saved. Please, try again.'));
        }
        $this->set(compact('listSeries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id List Series id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listSeries = $this->ListSeries->get($id);
        if ($this->ListSeries->delete($listSeries)) {
            $this->Flash->success(__('The list series has been deleted.'));
        } else {
            $this->Flash->error(__('The list series could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
