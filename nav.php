<nav class="navbar navbar-inverse">
    	  <div class="container-fluid">
                 <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="nav navbar-nav" href="#" ><img src="image/logo4.jpeg" style="height:80px;width:100px;color:#555; margin:0px;padding:0px;"></a>
        </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
<div class="navbar-header">
      <a class="navbar-brand" href="#">&nbsp;TASTE</a>
    </div>

	<ul class="nav navbar-nav">
		<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;HOME</a></li>
      <li><a type="button" href="#" data-toggle="modal" data-target="#myContact">CONTACT US</a></li>
    <div id="myContact" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
     
      <div class="modal-body">
        <div class="modal-content text-left">
                    <div class="modal-header">
                    <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body text-left">
                       

                   
                       <h4 class="text-center" style="line-height: 20.8px;">TASTE COMPANY</h4>
            <?php
		require_once "contact.php";
	?>
                        
        
                        <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                    </div>
                </div>
      </div>
      
    </div>

  </div>
</div> 
        
        
		      <li><a type="button" href="#" data-toggle="modal" data-target="#myAbout">ABOUT US</a></li>
    <div id="myAbout" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
     
      <div class="modal-body">
        <div class="modal-content text-left">
                    <div class="modal-header">
                    <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body text-left">
                        
                        

                           <?php
		require_once "about.php";
	?>
            
                    <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                    </div>
                </div>
      </div>
      
    </div>

  </div>
</div>
        

		
		<?php
		// Display the following two links only if the session variable ID exists
			if(isset($_SESSION['email'])){
				echo '<li><a href="profile.php">PROFILE INFO</a></li>';
				echo '<li><a href="createProfile.php">CREATE DISHES</a></li>';
				echo '<li><a href="logout.php">LOGOUT</a></li>';
            }else{
                echo '<li><a href="register.php">SIGN UP</a></li> 
                      <li><a href="login.php">LOGIN</a></li>';
            }
		?>
	</ul>
    </div>
              
    </div>
</nav>


	
    