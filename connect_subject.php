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

	$sub_name = $_POST['sub_name'];
	$current_date = date("Y-m-d H:i:s");
	$total_questions = $_POST['total_questions'];
	$right_answer_mark = $_POST['right_answer_mark'];

	$sql = "insert into subject (sub_name,date_time,total_questions,right_answer_mark)  values ('$sub_name', '$current_date','$total_questions','$right_answer_mark')";


	if ($_POST['submit']) 
	{ 
	  if(empty($sub_name) || empty($total_questions) || empty($right_answer_mark)) {
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