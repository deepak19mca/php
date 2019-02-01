<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h1>Registration Form</h1>
    	<form class="bg-light">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="form-group">
    			<label for="ExampleInputName">User First Name</label>
    			<input type="text" name="username" class="form-control" id="ExampleInputName" placeholder="Enter First Name">
    		</div>
    			</div>
    			<div class="col-md-6">
    				<div class="form-group">
    			<label for="ExampleInputName">User Last Name</label>
    			<input type="text" name="username" class="form-control" id="ExampleInputName" placeholder="Enter Last Name">
    		</div>
    			</div>
    		</div>
    		
    		<div class="form-group">
    			<label for="example for email">Email Address</label>
    			<input type="email" name="email" class="form-control" id="ExampleInputEmail" area-describedby="EmailHelp" placeholder="Enter Email">
    			<small id="EmailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    			
    		</div>
    		<div class="row">
    			<div class="col-md-6">
    				<label for="password">Password</label>
    				<input type="password" name="pass" class="form-control" id="password" placeholder="Enter Password">
    			</div>
    			<div class="col-md-6">
    				<label for="password"> Confirm Your Password</label>
    				<input type="password" name="pass" class="form-control" id="password" placeholder="Enter Password">
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-6">
    				<label for="MobileNumber">Mobile Number</label>
    				<input type="number" name="number" class="form-control" id="Mobile" placeholder="Enter Mobile Number">
    			</div>
    			<div class="col-md-6">
    				<label for="MobileNumber">Confirm Mobile Number</label>
    				<input type="number" name="number" class="form-control" id="Mobile" placeholder="Enter Mobile Number">
    			</div>
    		</div>
    		<div class="form-group">
    			<label for="ExampleInputBirthDate">D.O.B.</label>
    			<input type="date" name="dateofbirth" class="form-control" id="dob" placeholder="Enter Your Date Of Birth">
    		</div>
    		<div class="form-group">
    			<label for="ExampleInputCity">City</label>
    			<select class="form-control" id="ExampleInputCity">
    				<option>Gwalior</option>
    				<option>Indore</option>
    				<option>Bhopal</option>
    				<option>Jabalpur</option>
    				<option>Pune</option>
    				<option>Satna</option>
    				<option>Patna</option>
    				<option>Guna</option>
    				<option>Agra</option>
    				<option>Shivpuri</option>
    			</select>
    		</div>
    		<div class="form-group">
    			<label for="ExampleInputAddress">Address</label>
    			<input type="text" name="address" class="form-control" id="ExampleInputAddress" placeholder="Enter your Address">
    		</div>
    			
    			<button type="Submit"class="btn btn-primary">Sign In</button>
    			<button type="Clear"class="btn btn-primary">Reset</button>
    		    

    	</form>
    </div>
</body>
</html>