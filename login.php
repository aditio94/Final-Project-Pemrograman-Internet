<!DOCTYPE html>
<html>
    
    <head>
        <title>MyFilesApps</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--import framework boostrap,jquery dan css pada website-->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/bootstrap/js/bootstrap.min.js" rel="stylesheet">
        <script src="assets/js/jquery-1.11.3.min.js"></script>
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/slideshow.css" rel="stylesheet">
        <link href="assets/css/login.css" rel="stylesheet">
        
      
        
        <!--CDN-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        
        <!--js untuk login-->
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        
    </head>

    <body id="index" class="home">
   

        
        
        <nav class="navbar navbar-inverse" >
          <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" id="logo"></a> 
            </div>
                
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">MyFilesApps.com</a>
            </div>
            <div>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  
                  
                
                <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                 
              </ul>
            </div>
          </div>
        </nav>
        
        
	
        <header class='container' id='header'>
            <img src="img/logo%20myfile.png" id="logomyfiles">
        </header>

        <nav class='container roundEdge' id='nav'>
            <ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href='search.php'>Search</a></li>
            <li><a href='look.php'>Look</a></li>
            <li><a href='help.html'>Help</a></li>
            <li><a href='contact.html'>Contact Us</a></li>
            </ul>
        </nav>
        
        
        <section class="container" >
           
                  <form action="skriplogin.php" method="post">
                    <h2>Silahkan login</h2><hr/>		

                    <label>Username :</label>
                    <input id="name" name="username" placeholder="username" type="text">

                    <label>Password :</label>
                    <input id="password" name="password" placeholder="**********" type="password">

                    <input type="submit" name="submit" id="submit" value="Login">
                  </form>
         
        </section><br><br>
        
        
        
        

        <footer class='container' id='footer'>
            <p>
            copyrighted © MyFilesApps Official 2015
            </p>
        </footer>
	
	
</body>
    
</html