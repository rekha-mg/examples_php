<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Dynamic Form Processing with PHP | Students3k</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>    
        <form action="" class="register">
            <h1>Students3k - BUS Ticket Reservation</h1>
			<?php if(isset($_POST)==true && empty($_POST)==false): 
				$chkbox = $_POST['chk'];
				$bus = $_POST['bus'];
				$day = $_POST['day'];
				$month = $_POST['month'];
				$mob = $_POST['mob'];
				$type = $_POST['type'];
				$from = $_POST['from'];
				$to=$_POST['to'];
				$root=$_POST['root'];
				$BX_NAME=$_POST['BX_NAME'];
				$BX_age=$_POST['BX_age'];			
				$BX_gender=$_POST['BX_gender'];
				$BX_birth=$_POST['BX_birth'];					
			?>
			<fieldset class="row1">
                <legend>Travel Information</legend>
				<p>
                    <label>BUS Name 
                    </label>
                    <input name="bus" type="text" readonly="readonly" value="<?php echo $bus ?>"/>
                    <label>Date of journey
                    </label>
					<input type="text" readonly="readonly" class="small" value="<?php echo $day ?>"/>
					<input type="text" readonly="readonly" class="small" value="<?php echo $month ?>"/>
					<input type="text" readonly="readonly" class="small" value="2013"/>
					<label>Bus Type  
                    </label>
                    <input  type="text" readonly="readonly" value="<?php echo $type ?>"/>
					
                </p>
                <p>
					<label>Boarding From
                    </label>
                    <input name="from" type="text" readonly="readonly" value="<?php echo $from ?>"/>
					<label>To
                    </label>
					<input name="to" type="text" readonly="readonly" value="<?php echo $to ?>"/>
					<label>Via (Root)
                    </label>
					<input  type="text" readonly="readonly" value="<?php echo $root ?>"/>
					 
                </p>
                <p>
                    <label>Mobile
                    </label>
                    <input name="mob" type="text" readonly="readonly" value="<?php echo $mob ?>"/>
                    <label >(You will receive 
                    </label><label >the ticket in this )
                    </label>
					
					
                </p>
				
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
                <legend>Passenger Details
                </legend>				
                <table id="dataTable" class="form" border="1">
					<tbody>
					<?php foreach($BX_NAME as $a => $b){ ?>
						<tr>
							<p>
								<td >
									<?php echo $a+1; ?>
								</td>
								<td>
									<label>Name</label>
									<input type="text" readonly="readonly" name="BX_NAME[$a]" value="<?php echo $BX_NAME[$a]; ?>">
								</td>
								<td>
									<label for="BX_age">Age</label>
									<input type="text" readonly="readonly" class="small"  name="BX_age[]" value="<?php echo $BX_age[$a]; ?>">
								</td>
								<td>
									<label for="BX_gender">Gender</label>
									<input type="text" readonly="readonly" name="BX_gender[]" value="<?php echo $BX_gender[$a]; ?>">
								</td>
								<td>
									<label for="BX_birth">Berth Pre</label>
									<input type="text" readonly="readonly" name="BX_birth[]" value="<?php echo $BX_birth[$a]; ?>">
								</td>
							</p>
						</tr>
					<?php } ?>
					</tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information</legend>                  
                    <p>The identification details are required during journey. One of the passenger booked on the ticket should have any of the identity cards ( Passport / PAN Card / Driving License / Photo ID card issued by Central / State Govt / Student Identity Card with photograph) during the journey in original. </p>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row5">
                <legend>Terms and Mailing</legend>
                <p>
					<input class="submit" type="button" value="Make Payment &raquo;" />
					<a class="submit" href="index.html" type="button"> Back To Demo <a/>
					<a class="submit" href="http://students3k.com"/>Back to Students3k website</a>
                </p>
				<div class="clear"></div>
            </fieldset>
		<?php else: ?>
		<fieldset class="row1">
			<legend>Sorry</legend>
			 <p>Some things went wrong please try again.</p>
		</fieldset>
		<?php endif; ?>
			<div class="clear"></div>
        </form>
    </body>
	
</html>





