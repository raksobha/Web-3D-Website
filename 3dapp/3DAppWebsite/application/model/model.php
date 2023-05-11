<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/test1.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I'm sorry. I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}

	
	//Create and add contents to table that will store information about models
	public function dbCreateTable()
	{
		try{
			//Create table
			$this->dbhandle->exec(
				"CREATE TABLE ModelInformation (modelId INTEGER PRIMARY KEY, brand TEXT, dateOfCreation TEXT, x3dModelTitle TEXT, modelDescription TEXT, x3dModelName TEXT, advertUrl TEXT, webUrl Text, modelName Text)");
		
			//To include apostrophes
			$sprite = "First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.";
			//Add data to table
			$this->dbhandle->exec(
				"INSERT INTO ModelInformation (modelId, brand, dateOfCreation, x3dModelTitle, modelDescription, x3dModelName, advertUrl, webUrl, modelName)
					VALUES
				(0, 'Appletiser', 'Elgin Valley, 1966', 'This appletiser model was created in Cinema4D', 'Appletiser (a play on appetizer) is a sparkling fruit juice created by blending fruit juice with carbonated water. It was created in 1966 in Elgin Valley, Western Cape, South Africa, by French-Italian immigrant Edmond Lombardi. Whilst Appletiser is primarily sold in its home market of South Africa, the brand is also exported to more than 20 other countries, including the Southern African Development Community (SADC), as well as the UK, Belgium, Spain, Japan, Hong Kong, Australia and New Zealand.', 'Appletiser_Animation.x3d', 'https://www.youtube.com/embed/qkefdAwD0X8', 'https://www.coca-cola.co.uk/brands/appletiser', 'appletiser'); " .
				
				"INSERT INTO ModelInformation (modelId, brand, dateOfCreation, x3dModelTitle, modelDescription, x3dModelName, advertUrl, webUrl, modelName)
					VALUES
				(1, 'Coca Cola', 'New York Harbour, 1886', 'This coca cola can was created in 3DS Max', 'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!', 'Coke_Animation.x3d', 'https://www.youtube.com/embed/VGa1imApfdg', 'https://www.coca-cola.co.uk/brands/coca-cola-original-taste', 'coke'); " .
				
				"INSERT INTO ModelInformation (modelId, brand, dateOfCreation, x3dModelTitle, modelDescription, x3dModelName, advertUrl, webUrl, modelName)
					VALUES
				(2, 'Sprite', 'West Germany, 1959', 'This sprite bottle was created in 3DS Max', '$sprite', 'Sprite_Animation.x3d', 'https://www.youtube.com/embed/kebstNBzHpk', 'https://www.coca-cola.co.uk/brands/sprite', 'sprite'); "
			);
			
			return "ModelInformation table is successfully created inside test1.db file";
		}
		catch (PDOEXception $e){
			print new Exception($e->getMessage());
			return "ModelInformation table experienced an error and was not created";
		}
	}

	public function getAllModelNames()
	{
		try {
			// Prepare a statement to get model name from the ModelInformation table
			$sql = 'SELECT brand FROM ModelInformation';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Write the database conent to the results array for sending back to the view
				$result[$i] = $data['brand'];
				//increment the row index
				$i++;
			}
		}
		catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		// Send the response back to the view
		return $result;
	}

	public function getModel($model_id)
	{
		try {
			$sql = "SELECT * FROM ModelInformation WHERE modelId='$model_id'";
			$stmt = $this->dbhandle->query($sql);
			$model_information = null;
			$data = $stmt->fetch();
			// Write the database content to the results array for sending back to the view
			$model_information['brand'] = $data['brand'];
			$model_information['dateOfCreation'] = $data['dateOfCreation'];
			$model_information['x3dModelTitle'] = $data['x3dModelTitle'];
			$model_information['modelDescription'] = $data['modelDescription'];
			$model_information['x3dModelName'] = $data['x3dModelName'];
			$model_information['advertUrl'] = $data['advertUrl'];
			$model_information['webUrl'] = $data['webUrl'];
			$model_information['modelName'] = $data['modelName'];

			$model_information["galleryImages"] = $this->getGalleryImages($model_information['modelName']);
		}
		catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		return $model_information;
	}

	public function getGalleryImages($model_type)
	{
		$directory = './application/assets/images/gallery_images/' . $model_type;
		$imagePath = './application/assets/images/gallery_images/' .$model_type;
		// Only load files with the following extensions
		$allowed_extensions = array('jpg','jpeg','gif','png');
		// An array used to separate the extension from each file
		$file_parts = array();
		// Response message
		$response = "";
		// Opens the directory to parse the images
		$dir_handle = opendir($directory);
		// Iterate through all the files
		//$i=0;
		while ($file = readdir($dir_handle)) {
			//First check for hidden files
			if (substr($file, 0, 1) != '.') {
				// Split each file name to extract the file extension
				$file_components = explode('.', $file);
				// Grab the extension token
				$extension = strtolower(array_pop($file_components));
				// Is this file a valid image. If so, add it to the response
				if (in_array($extension, $allowed_extensions))
				{
					// Build a response string using the ~ symbol as a string separator
					$response .= $imagePath .'/'.$file.'~';
					//$i++;
				}
			}
		}
		closedir($dir_handle);
		// Return response while removing the last ~ separator
		return substr_replace($response,"",-1);
	}
}
?>