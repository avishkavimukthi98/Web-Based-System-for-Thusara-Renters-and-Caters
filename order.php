<?php

$connection = mysqli_connect("localhost", "root", "" , "coustomer_details");

if(isset($_POST['save']))
{
	$customer_name = $_POST['customer_name'];
	$customer_address = $_POST['address'];
	$telephone_number = $_POST['phone'];
	$email = $_POST['email'];
	$required_date = $_POST['reqdate'];
	$function_name = $_POST['function_name'];
	$package = $_POST['package'];
	$function_time = $_POST['function_time'];
	$menu_id = $_POST['menu_id'];
	$guest_amount = $_POST['guest_amount'];

	$sql_query = "INSERT INTO customer_details1(customer_name, customer_address, telephone_number,email,required_date, function_name, package, function_time, menu_id, guest_amount)
	VALUES ( '$customer_name', '$customer_address', '$telephone_number', '$email','$required_date', '$function_name', '$package','$function_time', '$menu_id', '$guest_amount')";

	if(mysqli_query($connection, $sql_query))
	{
		//echo "1 Record added";
	}
	else
	{
		//echo "Database query failed" .$sql. "" .mysqli_error($connection);
	}

	
}

?>

<html>
<head>
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="navfooter.css">
<title>coustomer form</title>
</head>
<body>
<header>
        <a class="navbar-brand" href="#"><img src="imgs/logo_trans.png"></a>
        <a href="#" class="logo">Thusara Renters and Caters<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="index.php" onclick="toggleMenu();">Home</a></li>
            <li><a href="Aboutus.php" onclick="toggleMenu();">About</a></li>
            <li><a href="menu.php" onclick="toggleMenu();">Menu</a></li>
            <li><a href="#expert" onclick="toggleMenu();">Rent Item</a></li>
            <li><a href="order.php" onclick="toggleMenu();">Order</a></li>
            <li><a href="Contact.php" onclick="toggleMenu();">Contact Us</a></li>
        </ul>
    </header>
<form class="my-form" action="order.php" method="post">
	
	<div class="formhead" align="center">
		<h1>ORDER FORM</h1>
	</div>

	<table class="tableform" cellspacing=10 align="center">
	<tr>
		<td><label>Cutomer Name</label></td>
		<td><input type="text" name="customer_name" placeholder="Enter name"></td>
	</tr>
	<tr>
		<td><label>Address</label></td>
		<td><input type="text" name="address" placeholder="Enter address"></td>
	</tr>
	<tr>
		<td><label>Telephone number</label></td>
		<td><input type="phone" name="phone" placeholder="Enter telephone number"></td>
	</tr>
	<tr>
		<td><label>Email</label></td>
		<td><input type="email" name="email" placeholder="Enter email">
			<small id="emailHelp" class="form-text.text-muted"></td>
	</tr>
	 <tr>
    <td><label for="reqdate">Required Date   </label></td> 
    <td><input type="date" id="reqdate" name="reqdate" value=""></td>
    </tr>
	<tr>
		<td><label>Function Name</label></td>
		<td><input type="radio" name="function_name" value="wedding" required>Wedding
		   <input type="radio" name="function_name" value="alms_giving" required>Alms Giving
		   <input type="radio" name="function_name" value="other_party" required>Other Party 
		</td>
	</tr>
	<tr>
		<td><label>Package</label></td>
		<td><input type="radio" name="package" value="golden" required>Golden
		   <input type="radio" name="package" value="silver" required>Silver
		   <input type="radio" name="package" value="brownze" required>Brownze 
		</td>
	</tr>
	<tr>
		<td><label>Function time</label></td>
		<td><input type="radio" name="function_time" value="day" required>Day
		   <input type="radio" name="function_time" value="night" required>Night
		   <input type="radio" name="function_time" value="full_day" required>Full Day 
	</td>
	</tr>
	<tr>
		<td><label>Menu Id</label></td>
		<td><select name="menu_id" required>
		    <option selected value="01">01</option>
		    <option value="02">02</option>
		    <option value="03">03</option>
		    </select>
		</td>
	</tr>
	<tr>
		<td></label>Guest Amount</label></td>
		<td><input type="number" name="guest_amount" placeholder="Enter guest amount"></td>
	</tr>
	<tr>
	</tr>
	<tr>
		<td align="center" colspan=2><input class="button" type="submit" name="save" id="submit" value="ORDER"/></td>
	</tr>
	</table>
</form>
<div class="footer">
        <div class="inner-footer">
    
            <div class="footer-items">
                <img src="imgs/logo_trans.png" alt="logo"><br>
                <h1>Thusara Renters and Caters</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti impedit maiores, voluptate vel incidunt et magni eveniet neque! Fugit molestiae culpa cum ut illo velit dicta quo veritatis saepe nemo.</p>
            </div>
    
            <div class="footer-items">
                <h2>Quick Links</h2>
                <div class="border"></div>
                <ul>
                    <a href=""><li>Home</li></a>
                    <a href=""><li>About Us</li></a>
                    <a href=""><li>Services</li></a>
                    <a href=""><li>Portfolio</li></a>
                    <a href=""><li>Contact Us</li></a>
                </ul>
            </div>
    
            
            <div class="footer-items">
                <h2>Contact Us</h2>
                <div class="border"></div>
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>Walasmulla Road,<br>Meda Pansala Handiya,<br>Hakmana</li><br>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>041-2286864/071-6072065</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i>thusararenters@gmail.com</li>
                </ul>
                <div class="social-media">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </div>
            </div>
            
        </div>
        <div class="footer-bottom">
            Copyright &copy; Thusara Renters and Caters. All rights reserved.
        </div>
    </div>
    
    
    <script type="text/javascript">
        window.addEventListener('scroll',function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    
        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    
    </script>
</body>
</html>