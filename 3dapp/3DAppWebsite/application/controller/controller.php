<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageMethod = null)
	{
		$this->load = new Load();
		$this->model = new Model();
		// Determine what page you are on
		$this->chooseView($pageMethod);
	}
	
	//home view
	public function home() {

		$data['navbar'] = $this->addNavbar(0);
		$data['footer'] = $this->addFooter();
		$this->load->view('home', $data);
	}

	//extra view
	public function extras() {
		$data['navbar'] = $this->addNavbar(1);
		$data['footer'] = $this->addFooter();
		$this->load->view('extras', $data);
	}

	//model view
	public function models() {
		try{
			$model_Id = $_GET['model_Id'];
			if($model_Id == null)
			{
				$this->home();
				return;
			}
		}
		catch (Exception $e)
		{
			$this->home();
			return;
		}
		$data['model_names'] = $this->model->getAllModelNames();
		$data['navbar'] = $this->addNavbar(2);
		$data['footer'] = $this->addFooter();
		$data['model_information'] =  $this->model->getModel($model_Id);

		$this->load->view('models', $data);
	}

	//gets navbar to highlight current tab
	public function addNavbar($viewId) {
		ob_start();
		$data['$viewId'] = $viewId;
		$this->load->view('navbar', $data);
		return ob_get_clean();
	}

	//gets footer
	public function addFooter() {
		ob_start();
		$this->load->view('footer');
		return ob_get_clean();
	}


	//Chooses view to display
	public function chooseView($view = null) {
		if ($view == "home") {
			$this->home();
		}
		elseif ($view == "extras") {
			$this->extras();
		}
		elseif ($view == "models") {
			$this->models();
		}
		elseif($view == "createInitialiseTable") {
			$this->createInitialiseTable();
		}
		else{
			$this->home();
		}
	}

	function createInitialiseTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
}




















