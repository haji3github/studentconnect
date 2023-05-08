[2:35 pm, 06/05/2023] +91 95429 88841: <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>File Upload</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		h1 {
			margin-top: 50px;
			text-align: center;
		}
		form {
			margin: 0 auto;
			width: 50%;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 10px;
			box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
		}
		label {
			display: block;
			font-weight: bold;
			margin-top: 20px;
		}
		input[type="file"] {
			display: block;
			margin-top: 10px;
			font-size: 16px;
			padding: 5px;
			border-radius: 5px;
			border: 1px solid #ccc;
			background-color: #fff;
			box-shadow: 1px 1px 5px rgba(0,0,0,0.2);
		}
		input[type="submit"] {
			display: block;
			margin-top: 20px;
			font-size: 18px;
			padding: 10px;
			border-radius: 5px;
			border: none;
			background-color: #4285f4;
			color: #fff;
			cursor: pointer;
			box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
			transition: background-color 0.3s ease;
			width: 100%;
			max-width: 250px;
			margin-left: auto;
			margin-right: auto;
		}
		input[type="submit"]:hover {
			background-color: #3367d6;
		}
	</style>
</head>
<body>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTRC20_AddressNTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTRC20_Addressvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/bc1qhnzumcn9695ktuxl4dqdpjtlezv8h87xe6hj5e" crossorigin="anonymous"></script>

	
	<nav class="navbar bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 f1">StudentConnect</span>
        </div>
      </nav>

      <ul class="nav justify-content-center bg-dark ">
        <nav class="navbar bg-dark" data-bs-theme="dark"> 
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="upload.html">Upload</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="browse.php">Browse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://agreeable-field-0648f200f.3.azurestaticapps.net">Chat</a>
                </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="stdconncall.azurewebsites.net">Call</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="posts.html">Post</a>
              </li>
              </ul>
            </div>
          </div>
        </nav>
        </nav>
      </ul>    

	<h1>File Upload</h1>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<label for="file">Select a file to upload:</label>
		<input type="file" name="file" id="file">
		<input type="submit" value="Upload">
	</form>
</body>
</html>
[2:36 pm, 06/05/2023] +91 95429 88841: browse
[2:36 pm, 06/05/2023] +91 95429 88841: <!DOCTYPE html>
<html>
<head>
	<title>File Storage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTRC20_AddressNTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTRC20_Addressvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/bc1qhnzumcn9695ktuxl4dqdpjtlezv8h87xe6hj5e" crossorigin="anonymous"></script>

	
	<nav class="navbar bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 f1">StudentConnect</span>
        </div>
      </nav>

      <ul class="nav justify-content-center bg-dark ">
        <nav class="navbar bg-dark" data-bs-theme="dark"> 
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="upload.html">Upload</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="browse.php">Browse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://agreeable-field-0648f200f.3.azurestaticapps.net">Chat</a>
                </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="stdconncall.azurewebsites.net">Call</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="posts.html">Post</a>
              </li>
              </ul>
            </div>
          </div>
        </nav>
        </nav>
      </ul>    
    <p class="fw-semibold text-center fs-1">Browse Files</p>

    <?php
    // Define the directory where uploaded files are stored
    $dir = "uploads/";
  
    // Check if the directory exists
    if (is_dir($dir)) {
      // Open the directory
      if ($dh = opendir($dir)) {
        // Loop through all the files in the directory
        while (($file = readdir($dh)) !== false) {
          // Exclude hidden files and parent directory
          if ($file != '.' && $file != '..') {
            // Display the file name and a link to download it
            echo "<p style='font-family:Times New Roman;text-align:center'><a href='uploads/$file'>$file</a></p>";
          }
        }
        // Close the directory
        closedir($dh);
      }
    } else {
      // Display an error message if the directory does not exist
      echo "<p>Uploads directory not found.</p>";
    }
    ?>

</body>
</html>