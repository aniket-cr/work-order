<?php
include 'config.php';
?>
<html>
<head>
	<link href="css/styler.css" rel="stylesheet" type="text/css">
	<title>Accenture</title>
	
</head>
<body>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
	<div style="height:150px; background-color:grey;">
		<p style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">HEADER</p>
	</div>
	
    <div class="container">
        <div class="flat-form">
            <ul class="tabs">
                <li>
                    <a href="#login" class="active">Admin</a>
                </li>
                <li>
                    <a href="#register">Worker</a>
                </li>
               
            </ul>
            <div id="login" class="form-action show">
                <h1>Login as Admin</h1>
                <p>
                    Enter your credentials :
                </p>
                <form  action="check1.php" method="POST">
                    <ul>
                        <li>
                            <input type="text" placeholder="ID" name="id"/>
                        </li>
                        <li>
                            <input type="password" placeholder="Password" name="pass"/>
                        </li>
                        <li>
                            <input type="submit" value="Login" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
            <!--/#login.form-action-->
            <div id="register" class="form-action hide">
                <h1>Login as Worker</h1>
                <p>
                    Enter your credentials :
                </p>
                <form action="check2.php" method="POST">
                    <ul>
                        <li>
                            <input type="text" placeholder="ID" name="id" />
                        </li>
                        <li>
                            <input type="password" placeholder="WSN" name="wsn"/>
                        </li>
                        <li>
                            <input type="password" placeholder="Password" name="pass"/>
                        </li>
                        <li>
                            <input type="submit" value="Sign Up" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
            <!--/#register.form-action-->
            
            <!--/#register.form-action-->
        </div>
    </div>
    <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<div style="height:150px; background-color:grey;">
		<p style="color:#fff;font-size:40px;text-align:center;padding-top:40px;">FOOTER</p>
	</div>
</body>
<script type="text/javascript">
	(function( $ ) {
  // constants
  var SHOW_CLASS = 'show',
      HIDE_CLASS = 'hide',
      ACTIVE_CLASS = 'active';
  
  $( '.tabs' ).on( 'click', 'li a', function(e){
    e.preventDefault();
    var $tab = $( this ),
         href = $tab.attr( 'href' );
  
     $( '.active' ).removeClass( ACTIVE_CLASS );
     $tab.addClass( ACTIVE_CLASS );
  
     $( '.show' )
        .removeClass( SHOW_CLASS )
        .addClass( HIDE_CLASS )
        .hide();
    
      $(href)
        .removeClass( HIDE_CLASS )
        .addClass( SHOW_CLASS )
        .hide()
        .fadeIn( 550 );
  });
})( jQuery );
</script>
</html>