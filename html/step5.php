<?php
//check if the user answered previous questions
if(isset($_COOKIE['full_name']) && isset($_COOKIE['age'])){
		
	//check if current question has been answered
	if(!isset($_COOKIE['tosis']) && !isset($_COOKIE['hbv'])){
		
		//check if the next button has been clicked
		if(isset($_POST['next'])){
			
			//get post values and store them in variables
			$tosis = $_POST['tosis'];
			$hbv = $_POST['hbv'];
				
			//set cookie of values
			setcookie('tosis', $tosis, 0, '/');
			setcookie('hbv', $hbv, 0, '/');
			
			//go to the next step
			header('Location: index.php?step=6');
		}
		
	}else{
		
		//go to the previous step
		header('Location: index.php?step=6');
	}
	
}else{
		
	//go to the previous step
	header('Location: index.php?step=4');
}
?>
<div class="wrapper">
<div class="step"><?php echo $_GET['step']; ?></div>
  <h2> <?php echo $_COOKIE['full_name']; ?></h2>
  <div class="forms">
    <form id="form" method="post" action="">
      <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><label class="control-label"><strong> Does your patient experience </strong></label>
            <table width="480">
              <tr>
                <td valign="bottom"><input type="radio" name="tosis" value="tosis1" id="tos_0" checked/> Anorexia </td>
                <td valign="bottom"><input type="radio" name="tosis" value="tosis2" id="tos_1" /> Malaise</td>
                <td valign="bottom"><input type="radio" name="tosis" value="tosis3" id="tos_2" /> Swollen Abdomen </td>
                <td valign="bottom"><input type="radio" name="tosis" value="tosis4" id="tos_3" /> None </td>
              </tr>
          </table><br /></td>
        </tr>
        <tr>
          <td><label class="control-label"><strong> Does your patient experience </strong></label>
            <table width="480">
               <tr>
                <td valign="bottom"><input type="radio" name="hbv" value="hbo1" id="hb_0" checked/> Joint pain</td>
                <td valign="bottom"><input type="radio" name="hbv" value="hbo2" id="hb_1" /> Lethargy</td>
                <td valign="bottom"><input type="radio" name="hbv" value="hbo3" id="hb_2" /> Impotence</td>
                <td valign="bottom"><input type="radio" name="hbv" value="hbo4" id="hb_3" /> Jaundice</td>
                <td valign="bottom"><input type="radio" name="hbv" value="hbo5" id="hb_4" /> Loss of menstruation</td>
            

              </tr>
          </table></td>
        </tr>
        <tr>
<td align="center"><br /><input type="submit" name="next" class="btn btn-success" value="Next Step"/></td>
        </tr>
        </tr>
      </table>
    </form>
  </div>
  <div class="tips-wrap">
    <div class="tips"><div class="quote1"></div><blockquote><?php echo $quotes[$random]; ?></blockquote><div class="quote2"></div></div>
  </div>
</div>