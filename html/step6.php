<?php
//check if the user answered previous questions
if(isset($_COOKIE['full_name']) && isset($_COOKIE['age'])){
		
	//check if current question has been answered
	if(!isset($_COOKIE['yolo']) && !isset($_COOKIE['spirit'])){
		
		//check if the next button has been clicked
		if(isset($_POST['next'])){
			
			//get post values and store them in variables
			$yolo = $_POST['yolo'];
			$spirit = $_POST['spirit'];
				
			//set cookie of values
			setcookie('yolo', $yolo, 0, '/');
			setcookie('spirit', $spirit, 0, '/');
			
			//go to the next step
			header('Location: index.php?step=7');
		}
		
	}else{
		
		//go to the previous step
		header('Location: index.php?step=7');
	}
	
}else{
		
	//go to the previous step
	header('Location: index.php?step=5');
}
?>
<div class="wrapper">
<div class="step"><?php echo $_GET['step']; ?></div>
  <h2> <?php echo $_COOKIE['full_name']; ?></h2>
  <div class="forms">
    <form id="form" method="post" action="">
      <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><label class="control-label"><strong> Patient’s temperature  </strong></label>
            <table width="480">
              <tr>
                <td valign="bottom"><input type="radio" name="yolo" value="yol1" id="age_0" checked/> 24–26 °C (75–79 °F) or less </td>
                <td valign="bottom"><input type="radio" name="yolo" value="yol2" id="age_1" /> 28 °C (82 °F) -  36 °C (97 °F)</td>
                <td valign="bottom"><input type="radio" name="yolo" value="yol3" id="age_2" /> 37 °C (98.6 °F) </td>
                <td valign="bottom"><input type="radio" name="yolo" value="yol4" id="age_3" /> 38 °C (100 °F) - 44 °C (111 °F)</td>
              </tr>
          </table><br /></td>
        </tr>
        <tr>
          <td><label class="control-label"><strong> Does your patient experience </strong></label>
            <table width="480">
               <tr>
                <td valign="bottom"><input type="radio" name="spirit" value="sp1" id="alc_0" checked/> Menstrual irregularities</td>
                <td valign="bottom"><input type="radio" name="spirit" value="sp2" id="alc_1" /> Swollen ankles</td>
                <td valign="bottom"><input type="radio" name="spirit" value="sp3" id="alc_2" /> Heart failure</td>
                <td valign="bottom"><input type="radio" name="spirit" value="sp4" id="alc_3" /> Diabetes</td>
            

              </tr>
          </table></td>
        </tr>
        <tr>
          <td align="center"><br /><input type="submit" name="next" class="btn btn-success" value="Finish"/></td>
        </tr>
      </table>
    </form>
  </div>
  <div class="tips-wrap">
    <div class="tips"><div class="quote1"></div><blockquote><?php echo $quotes[$random]; ?></blockquote><div class="quote2"></div></div>
  </div>
</div>