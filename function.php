<?php

	include("config.php");
	if(isset($_POST['insert'])){

                    $outlets = $_POST['Outlets'];

                    $starting_date = $_POST['Starting_Date'];
                    $ending_date = $_POST['Ending_Date'];
                    $present_date = $_POST['present_date'];
                    $t1r1c1 = $_POST['t1r1c1']; $t1r1c2 = $_POST['t1r1c2']; $t1r1c3 = $_POST['t1r1c3']; 
                    $t1r1c4 = $_POST['t1r1c4']; $t1r1c5 = $_POST['t1r1c5']; $t1r1c6 = $_POST['t1r1c6'];
                    $t1r1c7 = $_POST['t1r1c7'];

                    $t1r2c1 = $_POST['t1r2c1']; $t1r2c2 = $_POST['t1r2c2']; $t1r2c3 = $_POST['t1r2c3']; 
                    $t1r2c4 = $_POST['t1r2c4']; $t1r2c5 = $_POST['t1r2c5']; $t1r2c6 = $_POST['t1r2c6'];
                    $t1r2c7 = $_POST['t1r2c7'];

                    $t1r3c1 = $_POST['t1r3c1']; $t1r3c2 = $_POST['t1r3c2']; $t1r3c3 = $_POST['t1r3c3']; 
                    $t1r3c4 = $_POST['t1r3c4']; $t1r3c5 = $_POST['t1r3c5']; $t1r3c6 = $_POST['t1r3c6'];
                    $t1r3c7 = $_POST['t1r3c7'];

                    $t1r4c1 = $_POST['t1r4c1']; $t1r4c2 = $_POST['t1r4c2']; $t1r4c3 = $_POST['t1r4c3']; 
                    $t1r4c4 = $_POST['t1r4c4']; $t1r4c5 = $_POST['t1r4c5']; $t1r4c6 = $_POST['t1r4c6'];
                    $t1r4c7 = $_POST['t1r4c7'];

                    $t1r5c1 = $_POST['t1r5c1']; $t1r5c2 = $_POST['t1r5c2']; $t1r5c3 = $_POST['t1r5c3']; 
                    $t1r5c4 = $_POST['t1r5c4']; $t1r5c5 = $_POST['t1r5c5']; $t1r5c6 = $_POST['t1r5c6'];
                    $t1r5c7 = $_POST['t1r5c7'];

                    $t1r6c1 = $_POST['t1r6c1']; $t1r6c2 = $_POST['t1r6c2']; $t1r6c3 = $_POST['t1r6c3']; 
                    $t1r6c4 = $_POST['t1r6c4']; $t1r6c5 = $_POST['t1r6c5']; $t1r6c6 = $_POST['t1r6c6'];
                    $t1r6c7 = $_POST['t1r6c7'];

                    
                    $sqli = "INSERT INTO area_non_compliance_status (Outlets, present_date, Starting_Date, Ending_Date, t1r1c1, t1r1c2, t1r1c3, t1r1c4, t1r1c5, t1r1c6, t1r1c7, 
                                     t1r2c1, t1r2c2, t1r2c3, t1r2c4, t1r2c5, t1r2c6, t1r2c7, 
                                     t1r3c1, t1r3c2, t1r3c3, t1r3c4, t1r3c5, t1r3c6, t1r3c7, 
                                     t1r4c1, t1r4c2, t1r4c3, t1r4c4, t1r4c5, t1r4c6, t1r4c7, 
                                     t1r5c1, t1r5c2, t1r5c3, t1r5c4, t1r5c5, t1r5c6, t1r5c7,
                                     t1r6c1, t1r6c2, t1r6c3, t1r6c4, t1r6c5, t1r6c6, t1r6c7) 
                                     values ('$outlets', '$present_date', '$starting_date', '$ending_date', '$t1r1c1', '$t1r1c2', '$t1r1c3', '$t1r1c4', '$t1r1c5', '$t1r1c6', '$t1r1c7',
                    	   '$t1r2c1', '$t1r2c2', '$t1r2c3', '$t1r2c4', '$t1r2c5', '$t1r2c6', '$t1r2c7',
						   '$t1r3c1', '$t1r3c2', '$t1r3c3', '$t1r3c4', '$t1r3c5', '$t1r3c6', '$t1r3c7',
						   '$t1r4c1', '$t1r4c2', '$t1r4c3', '$t1r4c4', '$t1r4c5', '$t1r4c6', '$t1r4c7',
						   '$t1r5c1', '$t1r5c2', '$t1r5c3', '$t1r5c4', '$t1r5c5', '$t1r5c6', '$t1r5c7',
						   '$t1r6c1', '$t1r6c2', '$t1r6c3', '$t1r6c4', '$t1r6c5', '$t1r6c6', '$t1r6c7')";

					$result = mysqli_query($mysqli, $sqli);

	    			
	           		

                    if($result){
                    echo "success";
                  }else{
                  echo "Failed";
                }

                }
?>