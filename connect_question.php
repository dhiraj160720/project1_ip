<?php  
// 	$servername = 'localhost';
// $username='root';
// $password='';
// $dbname = 'project';
$servername='remotemysql.com';
$username='2N45z09Up2';
$password='NExyZK3ukb';
$dbname = '2N45z09Up2';
	$conn=mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
	   die('Could not Connect My Sql:' .mysql_error());
	}

	$question_title = $_POST['question_title'];
	$option1 = $_POST['option1'];
	$option2 = $_POST['option2'];
	$option3 = $_POST['option3'];
	$option4 = $_POST['option4'];
	$right_ans = $_POST['right_ans'];
	$sub_id = $_POST['sub_id'];

	$sql = "insert into question (question_title,sub_id,option1,option2,option3,option4,right_ans)  values ('$question_title','$sub_id', 
	'$option1','$option2','$option3','$option4','$right_ans')";


	if ($_POST['submit']) 
	{ 
	  if(empty($question_title) || empty($option1) || empty($option2)|| empty($option3)|| empty($option4)|| empty($right_ans)|| empty($sub_id)) {
	      echo "Please Fill all the details!";
	  }
	    

		elseif (!mysqli_query($conn,$sql)){

		        die('Error: ' . mysqli_error($conn));
		    }


		    else{
		          header("Location: admin_login.php");
		            }   
	}
	else{
		  echo"error!";
		 } 

	mysqli_close($conn);

?>