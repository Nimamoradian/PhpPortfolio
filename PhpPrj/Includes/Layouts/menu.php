<nav  class="navbar navbar-inverse navbar-fixed-top bcolor"  id="hideBar">
    <div class="container-fluid " >
        <ul class="nav navbar-nav">
            <li><a onclick="myFunction()"><i class="fa fa-list-ul" aria-hidden="true"></i></a></li>
            <li class="hideMenu"><a href="#home">Home</a></li>
            <li class="hideMenu" title="This menu shows when you loged on"><a href="#profile" >Your Profile</a></li>
            <li class="hideMenu"><a href="#courses">Courses</a></li>
        </ul>
        <form class="navbar-form navbar-right hideMenu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        	<p class='text-danger'><?php echo $nameErr;?>
            <input type="text" class="form-control"  name="user" placeholder="Username"  >
            <input type="password" class="form-control"  name="password" placeholder="Password" >
            
            
            <button title="login" class="btn btn-primary" name="buttonStatus" value="login" type="submit">
				<span class="glyphicon glyphicon-log-in"></span> 
      	    </button>
      	    <button title="Create a new user"class="btn btn-primary" type="submit" >
					<span class="glyphicon glyphicon-plus-sign"></span>

      	    </button>
        
        </p>
        </form>
    </div>
</nav>