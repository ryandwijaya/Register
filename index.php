<!DOCTYPE html>
<html>
<head>
	<title> Create Your Account </title>
</head>
<style type="text/css">
	body{
		background : url('back1.jpg');
	}
	.logo img{
		margin-top: -10px;
		margin-left: 600px;
		width:120px;
		height: 100px;

	}
	form{
		margin-top: -4px;
		color : white;
		text-align: center;
		font-family: 'Consolas';

	}
	h1{
		text-shadow:9px 12px 3px black; 
		color: white;
		text-align: center;
		font-family: 'Comic Sans MS'
	}
	input[type=text],input[type=password],input[type=email] , textarea , select{
		width: 50%; height: auto;
		background-color: rgba(6, 6, 6, 0.13);
		border-radius: 4px;
		padding: 4px;
		font-family: 'Consolas';
		text-align: center;
	}input[type=date]{
    width: 53%; height: auto;
    padding: 4px;
    border-radius:4px;
    box-sizing: border-box;
    background-color: rgba(6, 6, 6, 0.13);
    color : white;
	}
	fieldset{
		background-color: rgba(0, 0, 0, 0.15);
		width: 35%;height: auto;
		margin: 30px auto;
		padding: 10px;
		border-radius: 5px;
	}.login{
		border-radius: 8px;
		background-color: rgba(140, 86, 54, 0.44);
		width:160px;
		height: 30px;
		color : brown;
		float: right;
	}.lupapassword{
		border-radius: 8px;
		background-color: rgba(140, 86, 54, 0.44);
		width:160px;
		height: 30px;
		text-decoration-style: none;
		color : brown;
		float: left;
	}legend{
		font-size: 21px;
		font-family: 'Consolas';
	}.login:hover{
		background-color: black;
	}.lupapassword:hover{
		background-color: black;
	}.login a{
		color:red;
	}.lupapassword a{
		color:red;
	}input[type=submit]{
		width: 100px;
		height: 25px;
		border-radius: 9px;
	}




</style>
<body>
	<h1> Create Your Account </h1>

	<div class="logo">
		<img src="logo.png">
	<div>
	
	<form action="success.html">
	
	<fieldset>

	<!-- Tampilan diatas Nama -->
	<legend>Register</legend>
	
	Nama<br>
	<input type="text" placeholder="Enter Your Name" required=""><br>
	
	Username<br>
	<input type="text" maxlength="10" placeholder="id / username" required=""><br>
	
	Password<br>
	<input type="password" placeholder="Enter Your Password" required=""><br>
	
	PIN<br>
	<input type="password" maxlength="8" placeholder="Masukkan PIN" required=""><br>
	
	Tanggal Lahir<br>
	<input type="date" name="tanggallahir"><br>
	
	E-mail<br>
	<input type="email" placeholder="contohemail@gmail.com" required=""><br>
	
	Alamat<br>
	<textarea placeholder="Masukkan Alamat" required=""></textarea><br>
	
	<!-- Jenis Kelamin -->
	Jenis Kelamin :<br>
	<input type="radio" name="jenis" value="LK">Laki-Laki
	<input type="radio" name="jenis" value="PR">Perempuan
	<input type="radio" name="jenis" value="other">Agak-Agak</select><br>
	<hr>
	
	<!-- Untuk Memasukkan Foto -->
	<input type="file" name="Masukkan Foto"><br><br>

	<!-- Submit/Register -->
	<input type="submit" Value="Register"><br>

	<!-- class Link Login -->
<div class="login">
	<a href="#" >Sign In</a>
</div>

<!-- class Link Forgot-->
<div class="lupapassword">
	<a href="#" >Lupa Password</a>
</div>
	</fieldset>
	</form>


</body>
</html>