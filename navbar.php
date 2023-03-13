<?php
@session_start();
require 'db.php';
?> 
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.html" class="active">Home</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="#services" class="drop-text">Services</a></li>
										<li><a href="#blog" class="drop-text">Blog</a></li>
										<li><a href="single.html" class="drop-text">Blog Details</a></li>
										<li><a href="#why" class="drop-text">What We do</a></li>
										<li><a href="#price" class="drop-text">Pricing</a></li>
										<li><a href="#testi" class="drop-text">Testimonials</a></li>
										<li><a href="book.html" class="drop-text">Booking Form</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact Us</a></li>
								<?php
         						 if(isset($_SESSION["email"])) {
           							echo'  <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>';
          							}
          						else{
            						echo'  <li><a class="nav-link scrollto" href="login.php">Login</a></li>';
          							}
          						?>
							</ul>
						</nav>