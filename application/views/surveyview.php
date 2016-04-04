<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
	<?php include 'common/head.php';?>	
	<link rel="stylesheet" href="/roothaus/resource/css/survey.css">
	<title>루트주택 :: 설문조사</title>
</head>

<body>
	<?php include 'common/gnb.php';?>

	<div class="main-contents">
		
        <div class="container" id="cnt1">
		    <div class="col-md-3">
		    </div>
		
		    <div class="col-md-6" id="panel1">
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title">
		                    <span class="fa fa-question-circle"></span>   Satisfaction Survey</h3>
		            </div>
		            <div class="panel-body two-col">
		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="well well-sm">
		                            <div class="checkbox">
		                                <label>
		                                    <input type="checkbox" value="">
		                                    Service is timely
		                                </label>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="well well-sm">
		                            <div class="checkbox">
		                                <label>
		                                    <input type="checkbox" value="">
		                                    Staff is friendly
		                                </label>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="well well-sm margin-bottom-none">
		                            <div class="checkbox">
		                                <label>
		                                    <input type="checkbox" value="">
		                                    Support is timely
		                                </label>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="well well-sm margin-bottom-none">
		                            <div class="checkbox">
		                                <label>
		                                    <input type="checkbox" value="">
		                                    Help resources are available
		                                </label>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <hr />
		                <div class="row">
		                    <div class="col-md-12">
		                        <div class="well well-sm">
		                            <div class="checkbox">
		                                <label>
		                                    <input type="checkbox" value="">
		                                    Will purchase next version
		                                </label>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		
		            </div>
		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-6">
		                        <button type="button" class="btn btn-success btn-sm btn-block">
		                            <span class="fa fa-send"></span>Submit</button>
		                    </div>
		                    <div class="col-md-6">
		                        <button type="button" class="btn btn-primary btn-sm btn-block">
		                            View Result</button>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
        	
		<?php include 'common/footer.php';?>
	</div>
		
</body>
</html>
