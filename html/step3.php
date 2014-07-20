<?php
//check if the user answered previous questions
if(isset($_COOKIE['full_name']) && isset($_COOKIE['age'])){
		
	//check if current question has been answered
	if(!isset($_COOKIE['sugar_intake']) && !isset($_COOKIE['alcohol_intake'])){
		
		//check if the next button has been clicked
		if(isset($_POST['next'])){
			
			//get post values and store them in variables
			$sugar_intake = $_POST['sugar_intake'];
			$alcohol_intake = $_POST['alcohol_intake'];
				
			//set cookie of values
			setcookie('sugar_intake', $sugar_intake, 0, '/');
			setcookie('alcohol_intake', $alcohol_intake, 0, '/');
			
			//go to the next step
			header('Location: index.php?step=4');
		}
		
	}else{
		
		//go to the previous step
		header('Location: index.php?step=4');
	}
	
}else{
		
	//go to the previous step
	header('Location: index.php?step=2');
}
?>
<div class="wrapper">
<div class="step"><?php echo $_GET['step']; ?></div>
  <h2><?php echo $_COOKIE['full_name']; ?></h2>
  <div class="forms">
    <form id="form" method="post" action="">
      <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><label class="control-label"><strong> Patient's Height</strong></label>
            <table width="480">
              <tr>
                <td valign="bottom"><input type="radio" name="sugar_intake" value="Less than 10" id="age_0" checked/> Below 4ft </td>
                <td valign="bottom"><input type="radio" name="sugar_intake" value="Between 11 - 20" id="age_1" /> 4 - 5ft </td>
                <td valign="bottom"><input type="radio" name="sugar_intake" value="Between 21 - 30" id="age_2" /> Above 5 ft </td>
                <td valign="bottom"><input type="radio" name="sugar_intake" value="More than 30" id="age_3" /> None </td>
              </tr>
          </table><br /></td>
        </tr>
        <tr>
          <td><label class="control-label"><strong> Does your patient experience </strong></label>
            <table width="480">
               <tr>
                <td valign="bottom"><input type="radio" name="alcohol_intake" value="None" id="alc_0" checked/> Loss of appetite </td>
                <td valign="bottom"><input type="radio" name="alcohol_intake" value="2 - 3" id="alc_1" /> Dark urine</td>
                <td valign="bottom"><input type="radio" name="alcohol_intake" value="3 - 4" id="alc_2" /> Nausea </td>
                <td valign="bottom"><input type="radio" name="alcohol_intake" value="5 or more" id="alc_3" /> Jaundice</td>
                <td valign="bottom"><input type="radio" name="alcohol_intake" value="6 or more" id="alc_4" />Light colored stool</td>
                <td valign="bottom"><input type="radio" name="alcohol_intake" value="7 or more" id="alc_5" /> Diarrhoea</td>

              </tr>
          </table></td>
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