<?php
	require_once "include/home.php";
	$sql = "SELECT * FROM `forum` JOIN topics ON forum.topic_id = topics.topic_id JOIN accounts ON forum.userid = accounts.userid";
	$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
	$today = date('Y-m-d');

	// New post stuff
	$title = $msg = "";
	$title_err = $msg_err = "";
	$sql_temp = "SELECT * FROM topics";
	$findTopics = mysqli_query($conn, $sql_temp);
	$foundTopics = mysqli_num_rows($findTopics);
	$id = $row[0]['userid'];
	$topicId = -1;

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty(trim($_POST["title"])))
			$title_err = "Title cannot be empty";
		else
			$title = $_POST["title"];

		if (empty(trim($_POST["message"])))
			$msg_err = "Content cannot be empty";
		else
			$msg = $_POST["message"];

		if (isset($_POST["topic"])) {
			$topicId = $_POST['topic'];
		}
		if ( empty($msg_err) && empty($title_err) && $topicId > 0) {
			/* Prepared statement, stage 1: prepare */
			$stmt = $conn->prepare("INSERT INTO forum (topic_id, parent_post_id, title, userid, content, timestamp) VALUES (?, ?, ?, ?, ?, now())");

			$parent = 0;
			/* Prepared statement, stage 2: bind and execute */
			$stmt->bind_param("iisis", $topicId, $parent, $title, $id, $msg);
			$stmt->execute(); 
			$stmt->close();
			setcookie ("modal", "", strtotime('+1 days'), "/CSAD-Project");
		} else {
			setcookie ("modal", true, strtotime('+1 days'), "/CSAD-Project");
		}
	}

	// Stats stuff
	$tmp = mysqli_query($conn, "SELECT COUNT(topic) FROM topics");
	$topicCount = mysqli_fetch_assoc($tmp);
	$tmp = mysqli_query($conn, "SELECT COUNT(userid) FROM accounts");
	$userCount = mysqli_fetch_assoc($tmp);
	$tmp= mysqli_query($conn, "SELECT COUNT(post_id) FROM forum");
	$postCount= mysqli_fetch_assoc($tmp);
	$tmp= mysqli_query($conn, "SELECT * FROM accounts ORDER BY userid DESC LIMIT 1");
	$newUser= mysqli_fetch_assoc($tmp);
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
                <div class="col-lg-9 mb-3">
                  <div class="row text-left mb-5">
					  <div class="col-lg-12 mb-3 mb-sm-0">
						  <form class="form-inline" action="search.php" method="post"> 
							  <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search">
							  <button class="btn btn-outline-success" type="submit">Search</button>
						  </form>
					  </div>
                  </div>
				  <?php 
					if ($queryResult > 0){
						while($row = mysqli_fetch_assoc($result)){
						  	newPost($row['post_id'], $row['title'], $row['timestamp'], $row['userName'], $row['topic']);
						}    
					}
				  ?>
                </div>
                <!-- Sidebar content -->
                <div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
                  <div style="visibility: hidden; display: none; width: 285px; height: 801px; margin: 0px; float: none; position: static; inset: 85px auto auto;"></div><div data-settings="{&quot;parent&quot;:&quot;#content&quot;,&quot;mind&quot;:&quot;#header&quot;,&quot;top&quot;:10,&quot;breakpoint&quot;:992}" data-toggle="sticky" class="sticky" style="top: 85px;"><div class="sticky-inner">
                    <a class="btn btn-lg btn-block btn-success rounded-0 py-4 mb-3 bg-op-6 roboto-bold" href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">New Post</a>
                    <div class="bg-white mb-3">
                      <h4 class="px-3 py-4 op-5 m-0 roboto-bold">
                        Stats
                      </h4>
                      <hr class="my-0">
                      <div class="row text-center d-flex flex-row op-7 mx-0">
                        <div class="col-sm-6 flex-ew text-center py-3 border-bottom border-right"> <a class="d-block lead font-weight-bold"><?php echo $topicCount['COUNT(topic)'] ?></a> Topics </div>
                        <div class="col-sm-6 col flex-ew text-center py-3 border-bottom mx-0"> <a class="d-block lead font-weight-bold"><?php echo $postCount['COUNT(post_id)'] ?></a> Posts </div>
                      </div>
                      <div class="row d-flex flex-row op-7">
                        <div class="col-sm-6 flex-ew text-center py-3 border-right mx-0"> <a class="d-block lead font-weight-bold"><?php echo $userCount['COUNT(userid)'] ?></a> Members </div>
                        <div class="col-sm-6 flex-ew text-center py-3 mx-0"> <a class="d-block lead font-weight-bold"><?php echo $newUser['userName']?></a> Newest Member </div>
                      </div>
                    </div>
                  </div></div>
                </div>
              </div>
            </div>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">New Post</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body">
				  <form action="" method="post">
					<div class="mb-3 form-group">
						<label>Title of Post</label>
						<input type="text" name="title" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>">
						<span class="invalid-feedback"><?php echo $title_err; ?></span>
					</div>
					<div class="mb-3 form-group">
						<label for="message">Message</label>
						<textarea name="message" type="text" style="height: 8rem" 
						class="form-control <?php echo (!empty($msg_err)) ? 'is-invalid' : ''; ?>"
						 ><?php echo $msg; ?></textarea>
						<div class="invalid-feedback" ><?php echo $msg_err ?></div>
					</div>

					<div class="mb-3 form-group">
						<label>Topic</label>
						<select name="topic" class="form-select" aria-label="Default select example">
							<?php
							if ($foundTopics > 0) {
								while($row = mysqli_fetch_assoc($findTopics)){
									echo '<option value="' . $row['topic_id'] . '">' . $row['topic'] . '</option>';
								}    
							}
							?>
						</select>
					</div>
					<div class="modal-footer form-group">
						<input type="submit" class="btn btn-primary" value="Submit">
					</div>
				  </form>
				  </div>
				</div>
			  </div>
			</div>

		<?php include 'include/footer.php' ?>
	</body>
		<script type="text/javascript">
			var newModal = new bootstrap.Modal(document.getElementById('exampleModal'));
			<?php
				if (isset($_COOKIE['modal'])) {
					if ($_COOKIE['modal'] == true)
						echo "newModal.show()";
				}
			?>
		</script>
</html>
