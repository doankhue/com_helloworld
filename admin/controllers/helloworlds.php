<?php 

defined('_JEXEC') or die('Restricted access');

/**
 * 
 */
class HelloWorldControllerHelloworlds extends JControllerLegacy
{
	
	public function delete(){
		$input = JFactory::getApplication()->input;
		$recs = $input->get('cid',array(),'array');
		$nrecs = $input->get('boxchecked',0,'int');
		$model = $this->getModel('helloworld','helloworldmodel');
		var_dump($model);
		$model->delete($recs);
		$msg = "$nrecs record(s) deleted";
		$this->setRedirect(JRoute::_('index.php?option=com_helloworld'),$msg);
		// &view=helloworlds
	}
}