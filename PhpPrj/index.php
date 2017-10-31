<?php 
include 'Includes/Functions/config.php';

 include 'Includes/Layouts/header.php';

// -- ------------------------------------------	 MENU BAR  ---------------------------------------------- -->
 include 'Includes/Layouts/menu.php';
//--  --------------------------------------------------SLIDESHOW --------------------------------------->
include 'Includes/Layouts/slideshow.php';?>
<!--   --------------------------------------------------Profile page ---------------------------------------> -->
<article class="profile" id="profile" <?php echo $logedin?> >
	
        	<h1> YOUR PROFILE</h1>
<!--  ----------------------------------      Change Password Slide bar ---------------------------	 -->
       <div id="changePassSlide" class="sidenav">
        	<h1>Change Password</h1>
        	<p>New Password:</p>
        	<input  class="input2" type="password" value="" placeholder="New Password">
			<hr>
			<p>Password Confirmation</p>
			<input  class="input2" type="password" value="" placeholder="Password Confirmation">
			<hr>
        	<button class="btn btn-primary key" onclick="closeNav('changePassSlide');">Cancel </button>
		   	<button class="btn btn-primary key" onclick="closeNav('changePassSlide');">Save </button>
		</div>
       
<!-- ----------------------------------------------------       Change Profile Slide bar  -------------------------------------- -->
       <div id="changeprofSlide" class="sidenav">
			<h1>Edit YOur Profile Password</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">	
            	<p>Your Name</p>
            	<input  id="profileCid" class="input2" type="text" value="<?php echo $_session['id']?>" name="PId" placeholder="Your Name" hidden>
            	<input  id="profileCName" class="input2" type="text" value="<?php echo $_session['name']?>" name="PName" placeholder="Your Name">*
    			<p>Your Age</p>
            	<input  id="profileCAge" class="input2" type="text" value="<?php echo $_session['age']?>" name="PAge" placeholder="Your Age">*
    			<p>Your Phone Number</p>
            	<input  id="profileCPhone" class="input2" type="text" value="<?php echo $_session['phone']?>" name="PPhone" placeholder="Your Phone Number">
    			<p>Your Email Address</p>
            	<input  id="profileCEmail" class="input2" type="text" value="<?php echo $_session['email']?>" name="PEmail" placeholder="Your Email Address">*
    		   	<button class="btn btn-primary key" name="buttonStatus" value="changeprofile">Save </button>
				<button class="btn btn-primary key" onclick="closeNav('changeprofSlide');">Cancel </button>
			</form>
			<hr>
			<p id="Message"></p>
		</div>
<!--   ----------------------------------     Profile Page ---------------------------------- -->
        <div class="sub">
            <div >	
            	<h3>Your User Name:</h3>
            	<p>"<?php echo $_session['Username']?>"</p>
            	<h3>Your Name:</h3>
            	<input class="profinput" type="text" value="<?php echo $_session['name']?>"  disabled>
            	<br>
            	<h3>Your Age:</h3>
            	<input class="profinput" type="text" value="<?php echo $_session['age']?>"  disabled>
            	<h3>Phone Number</h3>
            	<input class="profinput" type="text" value="<?php echo $_session['phone']?>"  disabled>
            	<h3>Email Address</h3>
            	<input class="profinput" type="text" value="<?php echo $_session['email']?>"  disabled>
        	</div>
        	<br>
        	<div >
            	<button class="btn-primary key" onclick="openNav('changePassSlide');">Change Password </button>
            	
            	<button class="btn-primary key" onclick="openNav('changeprofSlide');">Edit Your Profile </button>
        	</div>
		</div>	
</article>
<!--  registreation form -->
<article class="profile" id="register" <?php echo $notloged?>>
        <h1> Registeration form</h1>

	 <div class="sub"  id="changeprofSlide" class="sidenav">
            <div >	
            	<div class="col-xs-6">
                	<h4>Please Enter Your Username:</h3>
                	<input class="profinput" type="text"  >
                	<h4>Please Enter Your Password:</h3>
                	<input class="profinput" type="password"  >
                	<h4>Please Again Type Your Password:</h3>
                	<input class="profinput" type="password"  >
                	
                	<h4>Please Enter Your Name:</h3>
                	<input class="profinput" type="text"  >
                </div>
                <div class="col-xs-6">
                	<h4>Please Enter Your Age:</h3>
                	<input class="profinput" type="text"  >
                	<h4>Please Enter Phone Number</h3>
                	<input class="profinput" type="text"  >
                	<h4>Please Enter Email Address</h3>
                	<input class="profinput" type="text"  >
            	</div>
        	</div>
        	<br>
        	<div >
            	<button class="btn btn-primary key" onclick="">Register</button>
            	
        	</div>
		</div>


</article>
<!-- ------------------------------------------ Course page	-------------------------------------------- -->
 <article class="coursepg" id="courses">
  
 	<h1> Our Courses</h1>
 	<br>
 	
 	<div class="well well-sm divider1  col-xs-8">
 		<?php readCourses();?>
 	
 	</div>
 	<div class="col-xs-1"> 	</div>
 	<div src="https://en.wikipedia.org/wiki/HTML" class="well well-sm divider1  col-xs-3">
 		<h3>Course Details</h3><hr>	
 	
 	</div>
 
 
 
 </article>


<!-- ------------------------------------------ FOOTER	-------------------------------------------- -->
<?php include 'Includes/Layouts/footer.php';?>
		
	

