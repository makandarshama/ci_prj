<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript">
	var name=document.getElementById("fullname").value;
	var correct_way="/^[A-Za-z]+$/"
	function char_check(){
		//alert("hii");
		if(name.length>3){
		alert("please enter atleast 3 character");
		//document.getElementById("a").innerHTML="please enter atleast 3 character";
		return false;
	}
	if(name.match(correct_way)){
		document.getElementById("a").innerHTML="please enter character only";
	}
	}
</script>
</head>
<body>
<div class="text-center  ">

<div class="mx-auto" style="width: 400px;">
	<form  action="" method="Post">
  <div class="form-group ,mx-auto" style="width=200px">
  	<h1>Sign Up</h1>
  	 <label for="fullname">Full Name</label>

  	<input type="text" name="Full name" id="Fullname" placeholder="Full Name" class="form-control" required="required" value="" oninput="char_check()">
  	 <label for="Email">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" id="email" placeholder="Enter email" required="required" value="">
    <label for="InputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" required="required" value="">
  
  <div class="form-group form-check">
    
    
  </div>
 <button type="submit" class="btn btn-lg btn-primary btn-block" onclick="char_check()">CREATE ACCOUNT</button>
</form>
</div>
</body>

</html>