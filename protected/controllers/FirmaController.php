<?php

class FirmaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/empty';
        
        public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('ceypa'),
				'users'=>array('*'),
			),
		);
	}
        
        public function actionCeypa()
	{
		$this->render('ceypa',array(
		));
	}
        
        
}