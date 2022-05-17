<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	</head>
	<body>
	    <form id="form" action="data.php" method="post"> 
	    <input id="whoName" name="whoName" type="hidden" value="ind">
	    
	        <input id="inp_1" name="inp_1" type="text" value="">
	        <input id="inp_2" name="inp_2" type="date" value="" >
	        <input id="inp_3" name="inp_3" type="time" value="" >
	        <input id="inp_4" name="inp_4" type="number" value="">
	        <input type="button" value=" save  " onclick="form.whoName.value='ind_check'; form.submit()">
	        
	    </form>
	    
	   
	    
	    
	    
	    
	    
	    
	    
	    
	   <?php 
	   
	   $inp_1_o = $_GET['inp_1_o'];
	   $inp_2_o = $_GET['inp_2_o'];
	   $inp_3_o = $_GET['inp_3_o'];
	   $inp_4_o = $_GET['inp_4_o'];
	   
	   echo "<script>
	   form.inp_1.value='".$inp_1_o."';
	   form.inp_2.value='".$inp_2_o."';
	   form.inp_3.value='".$inp_3_o."';
	   form.inp_4.value='".$inp_4_o."';
	   ";
        echo "</script>";
	   
	   if (strlen($inp_1_o) > 2) {echo "<h1>СОХРАНЕНО! !!</h1>";}
	   
	   
	   
	   
	   
	   
	   /*
	   
	   
	   	   echo "знаение inp_1_o = ".$inp_1_o."<br>";
	   echo "знаение inp_2_o = ".$inp_2_o."<br>";
	   echo "знаение inp_3_o = ".$inp_3_o."<br>";
	   echo "знаение inp_4_o = ".$inp_4_o."<br>";
	   
	   */
	   
	   ?>
	   
	   
	   
	   
    </body>
</html>