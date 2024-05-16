<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageMethod = null) // contructor of the class
	{
		// Create new objects for Load and Model
		$this->load = new Load(); 
		$this->model = new Model();
		// Determine what page you are on
		$this->$pageMethod();

	}

    // home page function
	function home()
	{
		// Get data from the defined model method - model3D_info()
		//$data = $this->model->model3D_info();
		// Tell the loader what view to load and which dat to use
		$this->load->view('viewCocaCola');
	}
    // Drinks can images page method — you can test this method with: 
	// http://localhost:8888/3D_Apps_2019/lab9/index.php/apidrinksimages
	function apiDrinksImages()
	{
		$data = $this->model->model3D_info();
		$this->load->view('view3DAppTest_2', $data);
	}

	// Note the way that the Model class is written, such that the constructor in the Model 
	// makes a conection to the database when the new Model class in instatiated the constructor above.
	// These three methods folling are only examples of what you could do to play aorund with storing and 
	// accessing your data — you might show a deeper understanding by developing other CRUD (Create, Read, Update, and Delete) methods 
	function apiCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppData', $data);
	}  	
	
	// New methods for Part C of Lab 7 Tutorial, which use AJAX
	// Flickr API — this is use just to demtsrate that you can iuntegrated data from third oarty sources
	function apiGetFlickrFeed()
	{
		$this->load->view('viewFlickrFeed');
	}
	
	// API call to read JSON data from a JSON file — here if you look at the viewJson.php view, you will see 
	// we have the JS file that uses the Query AJAX method .getJson() to access a JSON file directly in the 
	// model, thus bypassing the Controller on the return leg. We could use the method suggested for the home() function (method)
	function apiGetJson()
	{
		$this->load->view('viewJson');
	}
	
	// API call to select 3D images — not data is being requested from the Model class and injected into the view
	// There is no JS file associated with this API call, you test it on the browser as indicated above.
	// But, the viewDrunks.php has JS associated that byopassing the Controller class to access the data
	// Again, as indicated in the tutorial 8, think about how you can moduify and improve this API method to better fit MVC
	function apiLoadImage()
	{
	   $data = $this->model->dbGetBrand();
	   // Note, the viewDrinks.php view being loaded here calls a new model
	   // called modelDrinkDetails.php, which is not part of the Model class
	   // It is a separate model illustrating that you can have many models
	   $this->load->view('viewDrinks', $data);
	}

	// Load the Coca Cola view and get data from the model — this is the same as the home() method.
	function apiCocaCola()
	{
		$this->load->view('viewCocaCola');	
	}

	// We can see from this method how to get data from the model and echo it out to the view
	// You should be able to see how to combine this with the method above to arrive at the suggested home() method.
	function apiGetCokeData()
	{
		$data = $this->model->dbGetData();
		echo json_encode($data);
	}  	  	

}
?>    