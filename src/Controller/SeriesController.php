<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Series Controller
 *
 * @property \App\Model\Table\SeriesTable $Series
 * @method \App\Model\Entity\Series[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SeriesController extends AppController
{
    /**
     * View method
     *
     * @param string|null $id Series id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
//        $series = $this->Series->get($id, [
//            'contain' => ['ListSeries'],
//        ]);

        $series = $this->Series->find()
            ->contain(['ListSeries'])
            ->where(['listSerie_id' => $id])
            ->orderAsc('episode_rank')
            ->toArray();
        dd($series);

        $this->set(compact('series'));
    }

    /**
     * Watch VIDEO method
     *
     * @param string|null $id Series id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function watch($id = null)
    {
        $series = $this->Series->find()
            ->contain(['ListSeries'])
            ->where(['listSerie_id' => $id])
            ->orderAsc('episode_rank')
            ->toArray();

        $this->set(compact('series'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $series = $this->Series->newEmptyEntity();
        if ($this->request->is('post')) {
            $series = $this->Series->patchEntity($series, $this->request->getData());
            if ($this->Series->save($series)) {
                $this->Flash->success(__('The series has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The series could not be saved. Please, try again.'));
        }
        $listSeries = $this->Series->ListSeries->find('list', ['limit' => 200])->all();
        $this->set(compact('series', 'listSeries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Series id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $series = $this->Series->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $series = $this->Series->patchEntity($series, $this->request->getData());
            if ($this->Series->save($series)) {
                $this->Flash->success(__('The series has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The series could not be saved. Please, try again.'));
        }
        $listSeries = $this->Series->ListSeries->find('list', ['limit' => 200])->all();
        $this->set(compact('series', 'listSeries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Series id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $series = $this->Series->get($id);
        if ($this->Series->delete($series)) {
            $this->Flash->success(__('The series has been deleted.'));
        } else {
            $this->Flash->error(__('The series could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
