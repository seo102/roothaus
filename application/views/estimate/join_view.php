<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
$referer = $_SERVER["HTTP_REFERER"]; // 레퍼러
?>

<!DOCTYPE html>
<html>

<head>
	<?php include 'common/head.php';?>	
	<title>루트주택 :: 회원가입</title>	
</head>

<body>
	
	<div class="container">

      <form class="form-signin" action="/roothaus/user/join" method="post">
        <h2 class="form-signin-heading">회원가입</h2>
        <input type="hidden" name="command" value="insert">
        <input type="hidden" name="referer" value="<?php echo $referer?>">
        <div class="input-group">
	        <label for="inputId" class="sr-only">아이디</label>
			<span class="input-group-addon" id="basic-addon1">아이디</span>        	
			<input type="text" id="inputId" name="user_id" class="form-control" placeholder="" aria-describedby="basic-addon1" required autofocus>
		</div>
        <div class="input-group">
	        <label for="inputPassword" class="sr-only">패스워드</label>
			<span class="input-group-addon" id="basic-addon2">패스워드</span>        	
			<input type="password" id="inputEmail" name="user_password" class="form-control" placeholder="" aria-describedby="basic-addon2" required>
		</div>
        <div class="input-group">
			<span class="input-group-addon" id="basic-addon3">이름</span>        	
			<input type="text" id="yourName" name="user_name" class="form-control" placeholder="" aria-describedby="basic-addon3" required>
		</div>
		
        <button class="btn btn-lg btn-primary btn-block" type="submit">회원가입하기</button>
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
