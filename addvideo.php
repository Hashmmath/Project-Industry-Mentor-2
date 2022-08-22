
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css" />
    <link rel="stylesheet" href="./home.css" />
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <style>
      .search {
        float: right;
        color: white;
        padding: 12px 120px;
        margin-right: 35px;
        border-radius: 15px;
      }
      .topnav .login-container {
        float: right;
      }
      .topnav .login-container button {
        padding: 6px;
        margin-top: 8px;
        margin-right: 3px;
        background: #ddd;
        font-size: 15px;
        border: none;
        cursor: pointer;
        position: absolute;
        right: 2px;
        top: 1px;
        display: inline-block;
        border-radius: 10px;
      }

      .topnav .login-container button:hover {
        background: #ccc;
      }
      @media screen and (max-width: 600px) {
        .topnav .login-container {
          float: none;
        }
      }

      .topnav .reg-container {
        float: right;
      }
      .topnav .reg-container button {
        padding: 6px;
        margin-top: 8px;
        margin-right: 70px;
        background: #ddd;
        font-size: 15px;
        border: none;
        cursor: pointer;
        position: absolute;
        right: 2px;
        top: 1px;
        display: inline-block;
        border-radius: 10px;
      }

      .topnav .reg-container button:hover {
        background: #cccccc;
      }
      @media screen and (max-width: 600px) {
        .topnav .reg-container {
          float: none;
        }
      }
      .logo img {
        padding: 3px 2px;
        margin-top: 0px;
        margin-right: 720px;
        font-size: 15px;
        border: none;
        cursor: pointer;
        position: absolute;
        right: 2px;
        top: 1px;
        display: inline-block;
        border-radius: 10px;
        height: 2cm;
        float: none;
        width: 3cm;
      }
    </style>
    </head>
    <body>
        <!-- Navigation -->
        <div class="logo">
      <a href="#"><img src="./Screenshot (2002).png" /></a>
    </div>
    <!-- Navigation -->
    <nav class="w3-bar w3-black">
      <a href="./home.html" class="w3-button w3-bar-item">Home</a>
      <!-- <a href="./places.html" class="w3-button w3-bar-item">Places</a> -->
      <a href="#course" class="w3-button w3-bar-item">Courses</a>
      <a href="#Teach" class="w3-button w3-bar-item">Teach or Create</a>
      <a href="#review" class="w3-button w3-bar-item">Customer Reviews</a>
      <a href="#footer" class="w3-button w3-bar-item">Contact Us</a>
      <div class="search">
        <input
          type="text"
          name="search"
          id="search"
          placeholder="Search this website"
        />
      </div>
    </nav>
    <div class="topnav">
      <div class="login-container">
        <form action="/action_page.php">
          <button type="submit">Login</button>
        </form>
      </div>
      <div class="reg-container">
        <form action="/action_page.php">
          <button type="submit">SignUp</button>
        </form>
      </div>
    </div>
        <div class="container">
	      <div class="row">
		   <div class="col-md-12">

			<?php
		   include( "database.php" );
		   if ( isset( $_POST[ 'submit' ] ) ) {
			$title = $_POST[ 'videotitle' ];
			$v_url = $_POST[ 'VideoURL' ];
			$v_info = $_POST[ 'Videoinfo' ];
			

			$done = "
					<center>
					<div class='alert alert-success fade in __web-inspector-hide-shortcut__'' style='margin-top:10px;'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>&times;</a>
					<strong><h3 style='margin-top: 10px;
					margin-bottom: 10px;'> Video added Sucessfully.</h3>
					</strong>
					</div>
					</center>
					";

			$sql = "INSERT INTO `Video` (`V_Title`, `V_Url`, `V_Remarks`) VALUES ('$title','$v_url','$v_info')";
			//close the connection
			mysqli_query( $connect, $sql );

			echo $done;
		}

		?>
		
			<fieldset>
				<legend>Add Videos</legend>
				<form action="" method="POST" name="AddAssessment">
					<table class="table table-hover">

						<tr>
							<td><strong>Video Title  </strong>
							</td>
							<td>
                            <textarea name="videotitle" class="form-control" rows="1" cols="150"></textarea>
							</td>

						</tr>
						<tr>
							<td><strong>Video URL</strong> </td>
							<td>
								<textarea name="VideoURL" class="form-control" rows="1" cols="150"></textarea>
							</td>
						</tr>
						<tr>
							<td><strong>Video Description</strong> </td>
							<td>
								<textarea name="Videoinfo" class="form-control" rows="5" cols="150"></textarea>
							</td>
						</tr>
                        <tr>
							<td><strong> Course Difficulty</strong> </td>
							<td>
								<textarea name="Videoinfo" class="form-control" rows="1" cols="150"></textarea>
							</td>
						</tr>
                        <tr>
							<td><strong> Prerequisites</strong> </td>
							<td>
								<textarea name="Videoinfo" class="form-control" rows="5" cols="150"></textarea>
							</td>
						</tr>
                        <tr>
							<td><strong> Course Notes</strong> </td>
							<td>
								<textarea name="Videoinfo" class="form-control" rows="2" cols="150"></textarea>
							</td>
						</tr>
						
						<td><button type="submit" name="submit" class="btn btn-success" style="border-radius:0%">Add Video</button>
						</td>
						
					</table>
				</form>
			</fieldset>
		</div>
	</div>
	<?php include('allfoot.php');  ?>