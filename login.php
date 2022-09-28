<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

.input-container {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: darkseagreen;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid darkseagreen;
}

/* Set a style for the submit button */
.btn {
  background-color: darkseagreen;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>


<form method="post" action="ceklogin.php" style="max-width:500px; margin:auto">
  <h2 style="padding-top:200px; padding-bottom: 20px;">Register Form</h2> 
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="username" name="user">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="password" name="passw">
  </div>

  <button type="submit" name="simpan" class="btn">Login</button>
</form>

</body>
</html>