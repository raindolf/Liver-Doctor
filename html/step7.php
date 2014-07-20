<?php
//check if the user answered previous questions
if(isset($_COOKIE['full_name']) && isset($_COOKIE['age']) && isset($_COOKIE['sugar_intake']) && isset($_COOKIE['alcohol_intake']) && isset($_COOKIE['hbv'])  && isset($_COOKIE['tosis']) && isset($_COOKIE['spirit'])&& isset($_COOKIE['yolo']) && isset($_COOKIE['exercise'])){
		
		//check if the test completed button has been clicked
		if(isset($_POST['finishtest'])){
				
			//unset cookie of values
			setcookie('full_name', '', mktime() - 86400, '/');
			setcookie('age', '', mktime() - 86400, '/');
			setcookie('sugar_intake', '', mktime() - 86400, '/');
			setcookie('alcohol_intake', '', mktime() - 86400, '/');
			setcookie('exercise', '', mktime() - 86400, '/');
			setcookie('tosis', '', mktime() - 86400, '/');
			setcookie('hbv', '', mktime() - 86400, '/');
			setcookie('yolo', '', mktime() - 86400, '/');
			setcookie('spirit', '', mktime() - 86400, '/');
			
			//go to the next step
			header('Location: index.php?step=1');
		}
	
}else{
		
	//go to the previous step
	header('Location: index.php?step=6');
}
?>
<div class="wrapper">
<div class="step"><?php echo $_GET['step']; ?></div>
<h2>Test Results for <?php echo $_COOKIE['full_name']; ?></h2>
<div class="results_wrap">
    <h3>Patient Test Results</h3><br />
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
       
        <td colspan="2"><div class="doc"><img src="images/doc.png" width="60" height="61" /><?php echo $doc[$_COOKIE['age']].' '.$doc[$_COOKIE['sugar_intake']].$doc[$_COOKIE['alcohol_intake']]; ?></div></td>
      </tr>
    </table>
  </div>
<div class="doc"><center>
<form id="form" method="post" action="">
<input type="submit" name="finishtest" class="btn btn-success" value="Test Completed"/>
</form>
</center></div>
</div>