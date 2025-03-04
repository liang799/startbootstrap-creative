<?php
	require_once 'include/home.php';
    if (isset($_POST['search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM forum JOIN accounts ON forum.userid = accounts.userid JOIN topics ON forum.topic_id = topics.topic_id WHERE title LIKE '%$search%' OR userName LIKE '%$search%' OR content LIKE '%$search%' OR topic LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<?php include "include/bootstrap.php" //bootstrap stylesheets and scripts ?>
		<title>Home</title>
		<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	</head>
	<body style="background-color: green">
			<!---- Navbar ---->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">TREE.com</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#account" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
                <div class="collapse navbar-collapse" id="account">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <img src="<?php echo $picture ?>" width="40" height="40" class="rounded-circle">
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
							<a class="dropdown-item" href="include/logout.php">Log Out</a>
						</div>
					  </li>   
                    </ul>                    
                </div>
            </div>
            </nav>

        <div class="container rounded bg-white">
              <div class="row" style="margin-top:100px; margin-bottom: 100px; padding: 35px">
                <!-- Main content -->
                <div class="col-lg-12 mb-3">
                  <div class="row text-left mb-5">
					  <div class="col-lg-12 mb-3 mb-sm-0">
						  Your results for "<?php echo $search ?>"
					  </div>
                  </div>
                  <!-- Posts --->
				  <?php 
					if ($queryResult > 0){
						if ($search == ""){
							echo '<script> '
							. 'alert("No matching results found!");'
							. 'window.location.href="home.php";'
							. ' </script>'; //I want error to occur if no search result
						} else while($row = mysqli_fetch_assoc($result)){
						  	newResult($row['post_id'], $row['title'], $row['timestamp'], $row['userName'], $row['topic']);
						}    
					} else {
						echo '<script> '
						. 'alert("No matching results found!");'
						. 'window.location.href="home.php";'
						. ' </script>'; //I want error to occur if no search result
					}
				  ?>
                </div>
                </div>
              </div>
            </div>
		<?php include 'include/footer.php' ?>
	</body>
</html>

