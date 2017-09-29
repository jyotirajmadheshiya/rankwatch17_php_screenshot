<?php
	$webaddress = $_POST["webaddress"];
	$command = "/usr/local/bin/phantomjs ".dirname(__FILE__)."/screenshot.js ".$webaddress;
	$path = false;
	if (exec($command)) {
		$path = dirname(__FILE__).$webaddress;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Screenshot Information! </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>Screenshot Information! </h1>
</div>
  
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="post_screenshot.php" method="post">
                <div class="form-group">
                    <label for="webaddress">Web address:</label>
                    <input type="text" class="form-control" placeholder="Enter web-address" name="webaddress">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>   
            </form>
        </div>
        <div class="col-md-12">
	        <?php if(!$path) 
	        	{
	        ?>
	        <img src="<?php echo $path ?>">
	        <?php }
	        	else { 
	        ?>
	        	<h5>Please enter proper web address or install phantomjs.</h5>
	        <?php }?>
        </div>
    </div>  
</body>
</html>
