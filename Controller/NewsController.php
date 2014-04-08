<?php  
/**
 * News Controller
 */
class NewsController extends AppController {

/**
 * cms index
 */
	public function cms_index()
	{
		$this->set('news',$this->paginate());
	}

/**
 * cms create
 */
	public function cms_create()
	{
		if(!empty($this->request->data)) {
			if(empty($this->request->data['News']['expires'])) {
				$this->request->data['News']['archive_date'] = '0000-00-00 00:00:00';
			}
			if($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('News story created'), 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
		}
	}

/**
 * cms edit
 */
	public function cms_edit($id=null)
	{
		$this->News->id = $id;
		if(!$this->News->exists()) {
			throw new NotFoundException(__('News item not found'));	
		}
		if(!empty($this->request->data)) {
			if(empty($this->request->data['News']['expires'])) {
				$this->request->data['News']['archive_date'] = '0000-00-00 00:00:00';
			}
			if($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('News story created'), 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
		} else {
			$this->request->data = $this->News->read(null, $id);
			if($this->request->data['News']['archive_date']=='0000-00-00') {
				unset($this->request->data['News']['archive_date']);
			} else {
				$this->request->data['News']['expires'] = true;
			}
		}
	}


/** 
 * delete
 */
	 public function cms_delete($id=null) {
	 	$this->News->id = $id;
		if(!$this->News->exists()) {
			throw new NotFoundExeption('News story not found');
		}
		$this->News->delete($id);
		$this->Session->setFlash('News story deleted','flash_success');
		$this->redirect(array('action'=>'index'));
	}


}
