<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>

<!DOCTYPE html>
<html>

<head>
	<?php include 'common/head.php';?>	
	<title>루트주택 :: 견적관리</title>	
	
	<script type="text/javascript">
	function MM_swapImgRestore() { //v3.0
	  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
	}
	
	function MM_preloadImages() { //v3.0
	  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
	    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
	    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
	}
	
	function MM_findObj(n, d) { //v4.01
	  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
	    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
	  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
	  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
	  if(!x && d.getElementById) x=d.getElementById(n); return x;
	}
	
	function MM_swapImage() { //v3.0
	  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
	   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
	}
	</script>
	
	<?php if( @$this->session->userdata['isLogin'] == TRUE ) {
		echo @$this->session->userdata['name']." 님 로그인 중입니다.";
	}?>
</head>

<body onload="MM_preloadImages('/roothaus/resource/image/estimate/save_01_roll.jpg','/roothaus/resource/image/estimate/new_01_roll.jpg')">

<div id="center_top"><img src="/roothaus/resource/image/estimate/logo_01.jpg" width="960" height="300" /></div>
<div id="main_space_09">
  <div class="save_new">
  <a href="/roothaus/estimateMain/estList" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','/roothaus/resource/image/estimate/save_01_roll.jpg',1)">
  	<img src="/roothaus/resource/image/estimate/save_01.jpg" width="390" height="230" id="Image3" /></a>
  <a href="/roothaus/estimateMain/createEst/0/basic" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','/roothaus/resource/image/estimate/new_01_roll.jpg',1)">
  	<img src="/roothaus/resource/image/estimate/new_01.jpg" width="390" height="230" id="Image4" /></a>
  </div>
</div>
<div id="center_bot"><img src="/roothaus/resource/image/estimate/copy_01.jpg" width="960" height="300" /></div>


</body>
</html>
