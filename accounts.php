<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="icon" href="img">
	<link rel="icon" type="image/x-icon" href="css/img/logo1.png">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/accounts.css">
  	<script src="https://kit.fontawesome.com/8ef5e4d9da.js"></script>
  	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<title>DCMS | Accounts Page</title>
</head>
<body onload="onStart()">
<?php
	include 'nav.php';
?>	
	<form action="accountsEx.php" method="post" enctype="multipart/form-data">
		<section class="accountsCon">
			<div class="usernameCol">
				<label id="usernameTitle">Usernames:</label>
					<?php
					
		            $sql = "SELECT * FROM `accounts` WHERE `role` = 'user'";

		            $result = mysqli_query($conn, $sql);

		            if ($result) {
		                while ($row = mysqli_fetch_assoc($result)) {
		                    $username = $row['username'];
		                    $email = $row['email'];
		                    $password = $row['password'];
		                    $fullname = $row['fullname'];
		                    $address = $row['address'];
		                    $contact = $row['contact'];
		                    $age = $row['age'];
		                    $sex = $row['sex'];
		                    $profilePic = $row['profilePic'];

				    		echo '
							<label class="username" id="usernameLabel" onclick="getUsername(this)">'.$username.'</label>
							<input type="text" id="'.$username.'-email" value="'.$email.'" style="display:none" disabled>
							<input type="text" id="'.$username.'-password" value="'.$password.'" style="display:none" disabled>
							<input type="text" id="'.$username.'-fullname" value="'.$fullname.'" style="display:none" disabled>
							<input type="text" id="'.$username.'-address" value="'.$address.'" style="display:none" disabled>
							<input type="text" id="'.$username.'-contact" value="'.$contact.'" style="display:none" disabled>
							<input type="text" id="'.$username.'-age" value="'.$age.'" style="display:none" disabled>
							<input type="text" id="'.$username.'-sex" value="'.$sex.'" style="display:none" disabled>
							<input type="text" id="'.$username.'-profilePic" value="'.$profilePic.'" style="display:none" disabled>
							';
		            	}
			        }
			        ?>
			</div>
			<div class="detailsCol">
				<div class="firstCon">
					<div class="imageCon">
						<label id="profileLabel">+</label>
			    		<input type="file" id="profileInput" name="profileInput" style="display: none">
						<img for="profileInput" id="profilePreview" style="display: none">
					</div>
					<div class="detailsCon">
						<label>Username</label><input type="text" class="inputField" id="username" name="username" required>
						<label>Password</label><input type="password" class="inputField" id="password" name="password" required>
						<label>Address</label><input type="text" class="inputField" id="address" name="address" required>
						<label>Sex</label><input type="text" class="inputField" id="sex" name="sex" required>
					</div>
					<div class="detailsCon">
						<label>Email</label><input type="text" class="inputField" id="email" name="email" required>
						<label>Fullname</label><input type="text" class="inputField" id="fullname" name="fullname" required>
						<label>Contact</label><input type="text" id="contact" name="contact" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" required>
						<label>Age</label><input type="text" class="inputField" id="age" name="age" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" required>
					</div>
				</div>
				<div class="secondCon">
					<img src="">
					<img src="">
				</div>
			</div>
			<div class="buttonsCol">
				<div class="buttonsWrap">
				    <input type="submit" class="buttons" id="addBtn" name="addBtn" value="Add" style="display:none"></input>
					<i class="fa-solid fa-user-plus" for="addBtn" id="addIcon" onclick="clickAdd()"></i>
					<div class="show-content" id="shows1">Add</div>
				</div>
				<div class="buttonsWrap">
				    <input type="submit" class="buttons" id="editBtn" name="editBtn" value="Edit" style="display:none"></input>
				    <i class="fa-solid fa-user-pen" for="editBtn" onclick="clickEdit()"></i>
					<div class="show-content" id="shows2">Edit</div>
				</div>
				<div class="buttonsWrap">
				    <input type="submit" class="buttons" id="removeBtn" name="removeBtn" value="Remove" style="display:none"></input>
				    <i class="fa-solid fa-user-xmark" for="removeBtn" onclick="clickRemove()"></i>
					<div class="show-content" id="shows3">Remove</div>
				</div>
				<div class="buttonsWrap">
					<i class="fa-solid fa-retweet" onclick="clickClear()"></i>
					<div class="show-content" id="shows5">Clear</div>
				</div>
			</div>
		</section>
	</form>
    <script src="js/nav.js"></script>
    <script src="js/accounts.js"></script>
</body>
</html>