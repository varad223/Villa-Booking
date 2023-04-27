<?php
@session_start();
require 'db.php';
?>
<script  src="script.js"></script>
<link rel="stylesheet" href="style.css">
<?php
								if (!isset($_SESSION['email']) || $_SESSION["email"] == FALSE) 
								{
									echo' <p> Sign in First</p>';
								}
								else
								{
									echo'	<form action="#" method="post">';
									echo'	<div class="row">';
									echo'	<div class="col-lg-6 form-group">';
									echo'	<label>First Name</label>';
									echo'	<input class="form-control" type="text" name="fname" placeholder="Type Here.." required="">';
									echo'	</div>';
									echo'	<div class="col-lg-6 form-group">';
									echo'	<label>Last Name</label>';
									echo'	<input class="form-control" type="text" name="lname" placeholder="Type Here.." required="">';
									echo'	</div>';
									echo'	</div>';
									echo'	<div class="row">';
									echo'	<div class="col-lg-6 form-group">';
									echo'	<label>Email</label>';
									echo'	<input class="form-control" type="email" name="email" placeholder="Email" required="">';
									echo'	</div>';
									echo'	<div class="col-lg-6 form-group">';
									echo'	<label>Phone Number</label>';
									echo'	<input class="form-control" type="text" name="number" placeholder="Phone Number" required="">';
									echo'	</div>';
									echo'	</div>';
									echo'	<div class="row">';
									echo'	<div class="col-lg-6 form-group date-plu">';
									echo'	<label>Departure Date</label>';
									echo'	<input type="date" name="depdate" required="">';
									echo'	</div>';
									echo'	<div class="col-lg-6 form-group date-plu">';
									echo'	<label>Arrival Date</label>';
									echo'	<input type="date" name="arvdate" required="">';
									echo'	</div>';
									echo'	</div>';
									echo'	<div class="row">';
									echo'	<div class="col-lg-6 form-group">';
									echo'	<label>Select Your Room</label>';
									echo'	<select required="" class="form-control" name="room">';
									echo'	<option value="Suite">Suite</option>';
									echo'	<option value="Deluxe Room">Deluxe Room </option>';
									echo'	<option value="Family">Family Room</option>';
									echo'	</select>';
									echo'	</div>';
									echo'	<div class="col-lg-6 form-group">';
									echo'	<label>No Of Guests</label>';
									echo'	<select required="" class="form-control" name="guests">';
									echo'	<option value="">No.of guests</option>';
									echo'	<option value="1">1</option>';
									echo'	<option value="2">2</option>';
									echo'	<option value="4">3</option>';
									echo'	<option value="4">4</option>';
									echo'	<option value="4">5</option>';
									echo'	<option value="4">6</option>';
									echo'	<option value="4">7 more</option>';
									echo'	</select>';
									echo'	</div>';
									echo'	</div>';
									echo'	<div class="form-group">';
									echo'	<label>Write Message</label>';
									echo'	<textarea class="form-control" name="message" placeholder="Write Here.." required=""></textarea>';
									echo'	</div>';
									echo'	<button type="submit" class="btn submit mt-3" name="submit" id="submit">Book Now</button>';
									echo'	</form>';
									if(isset($_POST["submit"]))
									{
										echo "<script>
function openWin() {
  window.open('payment.php');
}
</script>";
									echo '<button onclick="openWin()">Pay Now</button>';
									echo "<div id='popup' class='popup'>
										  	<div class='popup-content'>
										    <p>Pay Now!!</p>
										    <button onclick='window.location.href = 'payment.php';'>Pay Now</button>
										  </div>
										</div>";


									echo'<p>The form has been submitted. To confirm your booking, please'; 
									echo ' pay:</p>';
									//echo'<button>Pay Now</button>';
								
									}
									

			
								}
         						 
          						?>
					
				
	
