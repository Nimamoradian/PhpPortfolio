<?php 
include 'Includes/Functions/config.php';

 include 'Includes/Layouts/header.php';

// -- ------------------------------------------	 MENU BAR  ---------------------------------------------- -->
 include 'Includes/Layouts/menu.php';
//--  --------------------------------------------------SLIDESHOW --------------------------------------->
include 'Includes/Layouts/slideshow.php';?>
<!--   --------------------------------------------------First page ---------------------------------------> -->
<article class="profile" id="profile">
	
        	<h1> YOUR PROFILE</h1>
        	
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
       
       
       <div id="changeprofSlide" class="sidenav">
			<h1>Edit YOur Profile Password</h1>
			
        	<p>Your Name</p>
        	<input  class="input2" type="text" value="<?php echo $_session['name']?>" placeholder="<?php echo $_session['name']?>">
			<p>Your Age</p>
        	<input  class="input2" type="text" value="<?php echo $_session['age']?>" placeholder="<?php echo $_session['age']?>">
			<p>Your Phone Number</p>
        	<input  class="input2" type="text" value="<?php echo $_session['phone']?>" placeholder="<?php echo $_session['phone']?>">
			
        	<button class="btn btn-primary key" onclick="closeNav('changeprofSlide');">Cancel </button>
		   	<button class="btn btn-primary key" onclick="closeNav('changeprofSlide');">Save </button>
		
		</div>
        <div class="sub">
        <div >	
        	<h3>Your User Name:</h3>
        	<p>"<?php echo $_session['Username']?>"</p>
        		
        	
        	<h3>Your Name:</h3>
        	<input class="profinput" type="text" value="<?php echo $_session['name']?>"  disabled>
        	<br>
        	<h3>Your Age:</h3>
        	<input class="profinput" type="text" value="<?php echo $_session['age']?>"  disabled>
        	<h3>Phon Number</h3>
        	<input class="profinput" type="text" value="<?php echo $_session['phone']?>"  disabled>
        	
    	</div>
    		<br>
    	<div >
        	<button class="btn-primary key" onclick="openNav('changePassSlide');">Change Password </button>
        	
        	<button class="btn-primary key" onclick="openNav('changeprofSlide');">Edit Your Profile </button>
    	</div>

	</div>	





</article>

<!-- ------------------------------------------ FOOTER	-------------------------------------------- -->
<?php include 'Includes/Layouts/footer.php';?>
		
	

