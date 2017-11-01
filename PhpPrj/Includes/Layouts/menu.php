<nav  class="navbar navbar-inverse navbar-fixed-top bcolor"  id="hideBar">
    <div class="container-fluid " >
        <ul class="nav navbar-nav">
            <li><a onclick="myFunction()"><i class="fa fa-list-ul" aria-hidden="true"></i></a></li>
            <li class="hideMenu"><a href="#home">Home</a></li>
            <li class="hideMenu" style="display:<?php echo $logedin?>"><a href="#profile" >Your Profile</a></li>
           	<li class="hideMenu" style="display:<?php echo $notloged?>" ><a href="#Registeration" >Registration</a></li>
            <li class="hideMenu"><a href="#courses">Courses</a></li>
            
        </ul>
        <form class="navbar-form navbar-right hideMenu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        	<p class='text-danger'><?php echo $nameErr;?>
            <input type="text" class="form-control"  name="user" placeholder="Username"  >
            <input type="password" class="form-control"  name="password" placeholder="Password" >
            
            
            <button title="login" class="btn btn-primary" name="buttonStatus" value="login" type="submit">
				<span class="glyphicon glyphicon-log-in"></span> 
      	    </button>
      	    <a title="Create a new user" class="btn btn-primary" href="#Registeration" style="display:<?php echo $notloged?>">
					<span class="glyphicon glyphicon-plus-sign"></span>
					
      	    </a>
      	    <button title="sign Out" class="btn btn-primary" name="buttonStatus"  value="" style="display:<?php echo $logedin?>">
				<span class="glyphicon glyphicon-log-out"></span>
					
      	    </button>
        
        </p>
        </form>
    </div>
</nav>