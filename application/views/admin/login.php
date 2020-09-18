<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://code.jquery.com/jquery-3.4.0.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/css/mycss.css">
</head>
<body>
	<!-- <div class="container-fluid br-green parent">
		<div class="box-white child">
			<input type="text" name="abc" class="form-control input-t" placeholder="username">
			<input type="password" name="" class="form-control input-t martop" placeholder="password">
			<button class="btn btn-sussces input-t form-control btngreen martop">LOGIN</button>
			<label class="textstyle">Bạn không có tài khoản? <a class="spantext">Tạo tài khoản</a></label>
		</div>
	</div> -->
	<div class="outer ">
	  <div class="middle " style="background-color: #67be49">
	    <div class="inner" style="background-color: white; padding: 40px;">
	    	<form action="<?php echo base_url() ?>admin/login/dangnhap" method="POST">
		      	<input type="text" name="username" class="form-control input-t" placeholder="Tài khoản">
				<input type="password" name="password" class="form-control input-t martop" placeholder="Mật khẩu">
				<button type="sumbit" class="btn btn-sussces input-t form-control btngreen martop">Đăng nhập</button>
			</form>
			<label class="textstyle">Bạn không có tài khoản? <a class="spantext">Đăng Nhập</a></label>
	    </div>
	  </div>
	</div>



</body>
</html>