<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
$referer = $_SERVER["HTTP_REFERER"]; // 레퍼러
?>

<!DOCTYPE html>
<html>

<head>
	<?php include 'common/head.php';?>	
	<title>루트주택 :: 로그인</title>	
</head>

<body>

	<div class="container">

      <form class="form-signin" action="/roothaus/user/login" method="post">
        <h2 class="form-signin-heading">로그인</h2>
        <input type="hidden" name="referer" value="<?php echo $referer?>">
        <div class="input-group">
	        <label for="inputId" class="sr-only">아이디</label>
			<span class="input-group-addon" id="basic-addon1">아이디</span>        	
			<input type="text" id="user_id" name="user_id" class="form-control" placeholder="" aria-describedby="basic-addon1" required autofocus>
		</div>
        <div class="input-group">
	        <label for="inputPassword" class="sr-only">패스워드</label>
			<span class="input-group-addon" id="basic-addon2">패스워드</span>        	
			<input type="password" id="user_password" name="user_password" class="form-control" placeholder="" aria-describedby="basic-addon2" required>
		</div>
		
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login(로그인)</button>
      </form>

    </div> <!-- /container -->

</body>

<script>
<?php 
if($msg != null) {
	?>alert('<?= $msg?>');<?php 
}
?>
</script>
</html>
