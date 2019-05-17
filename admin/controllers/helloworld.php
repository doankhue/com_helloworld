<?php 

defined('_JEXEC') or die('Restricted access');

/**
 * 
 */
class HelloWorldControllerHelloworld extends JControllerLegacy
{
	
	public function add(){
		$msg = "Redirecting from add";
		$this->setRedirect(JRoute::_('index.php?option=com_helloworld&view=helloworld&layout=edit&id=0',false),$msg);
	}

	public function edit(){
		$input = JFactory::getApplication()->input;
		$id = $input->get('id',0,'int');
		if($id==0){
			$ids = $input->get('cid',array(),'array');
			$id = $ids[0];
		}
		$msg = "Redirecting from edit";
		$this->setRedirect(JRoute::_("index.php?option=com_helloworld&view=helloworld&layout=edit&id=$id",false),$msg);
	}

	public function save(){
		$input = JFactory::getApplication()->input;
		$form_data = $input->get('jform',array(),'array');
		$model = $this->getModel();
		$model->save($form_data);
		$this->setRedirect(JRoute::_("index.php?option=com_helloworld",false),"Record saved");
	}

	public function cancel(){
		$this->setRedirect(JRoute::_("index.php?option=com_helloworld",false),"Operation cancelled");
	}
}