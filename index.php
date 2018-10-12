<?php
session_start();

if(!isset($_SESSION['username'])){
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');
}
?>


<!DOCTYPE html>
<html>

	<head>
		<title>Weight Converter</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		
		<div class="header">
			<center style="padding-top: 20px"><h2>Weight Converter</h2></center>
		</div>
        <br/>

        <form action="submit_index.php" method="post">
		<!-- <div class="content"> -->
            

			<?php if(isset($_SESSION['success'])) :?>

				<div class="error success">
                    <p><strong><big>Welcome!</big></strong></p>
					<h3><?php
					echo $_SESSION['success'];
                    echo $_SESSION['username'];
					unset($_SESSION['success']);
					?>	
				</h3>
				</div>
            
            <div>
			<?php endif ?>
            <div class="input-group">
                <p>Date</p>
                <input id="dit" type="date" name="dte">
                <label>Kilograms</label>
                <input oninput="calGm()" onchange="calGm()" type="decimal" name="kilograms" id="kgm">
                <label>Grams</label>
                <input oninput="calKg()" onchange="calKg()" type="decimal" name="grams" id="gms">
                <label>Pounds</label>
                <input oninput="callbs()" onchange="callbs()" type="decimal" name="pounds" id="lbs">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="get_weight">Save</button>
                <button type="reset" value="reset" class="btn" onclick="clr()">Clear</button>
             
            </div>
            <br/>
            <p><a href="index.php?logout='1'"style="color:red;"><b>Logout</b></a></p>
		</div>
        
        <script>

        function calGm(){

            w = document.getElementById("kgm").value;
            x = document.getElementById("gms").value;
            y = document.getElementById("lbs").value;
            document.getElementById("gms").value = w * 1000;
            document.getElementById("lbs").value = w * 2.205;
            
        }
            
        function calKg(){
            w = document.getElementById("kgm").value;
            x = document.getElementById("gms").value;
            y = document.getElementById("lbs").value;
            document.getElementById("kgm").value = x / 1000;
            document.getElementById("lbs").value = x * 453.59;
        }
            
        function callbs(){
            w = document.getElementById("kgm").value;
            x = document.getElementById("gms").value;
            y = document.getElementById("lbs").value;
            document.getElementById("gms").value = y * 453.59;
            document.getElementById("kgm").value = y / 2.205;
            
        }
            
        function clr(){
            document.getElementById("kgm").value = " ";
            document.getElementById("gms").value = " ";
            document.getElementById("lbs").value = " ";
//            document.getElementById("dit").value = " ";
        }
            
        </script>
        
    </div>
    </form>
       </body>

</html>