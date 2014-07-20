<?php
//check if the user answered previous questions
if(isset($_COOKIE['full_name']) && isset($_COOKIE['age']) && isset($_COOKIE['sugar_intake']) && isset($_COOKIE['alcohol_intake'])){
		
	//check if current question has been answered
	if(!isset($_COOKIE['exercise'])){
		
		//check if the next button has been clicked
		if(isset($_POST['next'])){
			
			//get post values and store them in variables
			$exercise = $_POST['exercise'];
				
			//set cookie of values
			setcookie('exercise', $exercise, 0, '/');
			
			//go to the next step
			header('Location: index.php?step=5');
		}
		
	}else{
		
		//go to the previous step
		header('Location: index.php?step=5');
	}
	
}else{
		
	//go to the previous step
	header('Location: index.php?step=3');
}
?>
<div class="wrapper">
<div class="step"><?php echo $_GET['step']; ?></div>
  <h2><?php echo $_COOKIE['full_name']; ?></h2>
  <div class="forms">
    <form id="form" method="post" action="">
      <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><label class="control-label"><strong> Does your patient experience </strong></label>
            <table width="480">
              <tr>
                <td valign="bottom"><input type="radio" name="exercise" value="None in a week" id="exe_0" checked/> Bleeding from nose</td>
                <td valign="bottom"><input type="radio" name="exercise" value="Once" id="exe_1" /> Vomiting </td>
                <td valign="bottom"><input type="radio" name="exercise" value="3 times" id="exe_2" /> Right side abdominal pain</td>
                <td valign="bottom"><input type="radio" name="exercise" value="5 times" id="exe_3" /> Yellowing of skin </td>
              </tr>
          </table><br /></td>
        </tr>
        <tr>
          
           <td align="center"><br /><input type="submit" name="next" class="btn btn-success" value="Next Step"/></td>
        </tr>
      </table>
    </form>
  </div>
  <div class="tips-wrap">
    <div class="tips"><div class="quote1"></div><blockquote><?php echo $quotes[$random]; ?></blockquote><div class="quote2"></div></div>
  </div>
</div>