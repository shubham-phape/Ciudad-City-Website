<?php include 'db_connect.php';

		include 'session.php';
      if($_SERVER["REQUEST_METHOD"] == "POST") {
      	//add new blog button is set
      	if (isset($_POST['blog_update_btn']) && isset($_POST['post_namee']) && isset($_POST['post_date'])){
      		$new_name =$_POST['post_namee'];
      		$new_date= $_POST['post_date'];
      		$new_desc = $_POST['post_description'];
      		$new_id = $_POST['post_hidden_id'];
      		if(mysqli_query($mysqli,"UPDATE blogs  SET BName='$new_name', BContent= '$new_desc', BDate= '$new_date' WHERE BId='$new_id'")or die("Error: ".mysqli_error($mysqli))){
      			$_SESSION['blogoperation_flag']=1;
      			echo "Blog Succesfully updated";
      			header("Location: AdminDashboard.php");
      		}
      		else{
      			$_SESSION['blogoperation_flag']=0;
      			echo "Could not update blog";
      			header("Location: AdminDashboard.php");
      		}

      	}elseif (isset($_POST['blog_add_btn']) && isset($_POST['post_namee']) && isset($_POST['post_date']) && isset($_POST['post_description'])) {
      		# cadd blog
      		$new_name =$_POST['post_namee'];
      		$new_date= $_POST['post_date'];
      		$new_desc = $_POST['post_description'];
      		if (mysqli_query($mysqli,"INSERT INTO blogs ( BName, BContent, BDate, Writer, Likes) VALUES (  '$new_name', '$new_desc', '$new_date' , 'Admin','0' )")or die("Error: ".mysqli_error($mysqli))) {
      			# code...
      			$_SESSION['blogoperation_flag']=3;
      			echo "Blog Succesfully Added";
      			header("Location: AdminDashboard.php");
      		}else{
      			$_SESSION['blogoperation_flag']=0;
      			echo "Could not add the blog";
      			header("Location: AdminDashboard.php");
      		}
      	}
				elseif (isset($_POST['event_update_btn']) && isset($_POST['event_namee']) && isset($_POST['event_date'])){
	      		$new_name =$_POST['event_namee'];
	      		$new_date= $_POST['event_date'];
	      		$new_desc = $_POST['event_description'];
	      		$new_id = $_POST['event_hidden_id'];
	      		if(mysqli_query($mysqli,"UPDATE wevents  SET EName='$new_name', EDescription= '$new_desc', EDate= '$new_date' WHERE EventId='$new_id'")or die("Error: ".mysqli_error($mysqli))){
	      			$_SESSION['blogoperation_flag']=4;
	      			echo "Blog Succesfully updated";
	      			header("Location: AdminDashboard.php");
	      		}
	      		else{
	      			$_SESSION['blogoperation_flag']=0;
	      			echo "Could not update blog";
	      			header("Location: AdminDashboard.php");
	      		}

	      	}
					elseif (isset($_POST['event_add_btn']) && isset($_POST['event_namee']) && isset($_POST['event_date']) && isset($_POST['event_description'])) {
	      		# cadd blog
	      		$new_name =$_POST['event_namee'];
	      		$new_date= $_POST['event_date'];
	      		$new_desc = $_POST['event_description'];
	      		if (mysqli_query($mysqli,"INSERT INTO wevents ( EName, EDescription, EDate, EClosedFlag) VALUES (  '$new_name', '$new_desc', '$new_date' , '0' )")or die("Error: ".mysqli_error($mysqli))) {
	      			# code...
	      			$_SESSION['blogoperation_flag']=6;
	      			echo "Event Succesfully Added";
	      			header("Location: AdminDashboard.php");
	      		}else{
	      			$_SESSION['blogoperation_flag']=0;
	      			echo "Could not add the blog";
	      			header("Location: AdminDashboard.php");
	      		}
	      	}




      }
?>
