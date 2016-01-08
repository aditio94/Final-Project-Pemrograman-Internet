<?php
include('session.php');
?>

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
            <li><a href='search.html'>Search</a></li>
            <li><a href='look.php'>Look</a></li>
            <li><a href='help.html'>Help</a></li>
            <li><a href='contact.html'>Contact Us</a></li>
            </ul>
        </nav>
       
        
                  <?php
                        include('config.php');

                        if(@$_POST['daftar']){
                     
                            $user         = $_POST['user'];
                            $password       = $_POST['password'];
                            $nama			= $_POST['nama'];
                            $alamat			= $_POST['alamat'];
                            $jeniskelamin	= $_POST['jeniskelamin'];

                         
                            $in = mysql_query("INSERT INTO user VALUES(NULL, '$user', '$password', '$nama', '$alamat', '$jeniskelamin',)");
                                        if($in){
                                            echo '<div class="ok">SUCCESS: File berhasil di Upload! </div>';
                                            
                                        }else{
                                            echo '<div class="error">ERROR: Gagal upload file!</div>';
                                        }
                                }
                        
                        ?>
        
        
        
        
        <section class="container" >
            <div class="row">
                <div class="col-sm-4">
                    <img src="img/signup_icon.png" width="400px" height="350px">
                </div>
                <div class="col-sm-4">
                <form role="form" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <h1><strong>SIGN UP</strong></h1>
                  </div>
                  <div class="form-group">
                    <label for="email">User Name</label>
                    <input type="text" class="form-control"  name="user">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="text" class="form-control"  name="password">
                  </div>
                    <div class="form-group">
                    <label for="pwd">Nama Lengkap</label>
                    <input type="text" class="form-control"  name="nama">
                  </div>
                    <div class="form-group">
                    <label for="pwd">Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                  </div>
                    <div class="form-group">
                    <label for="pwd">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jeniskelamin">
                  </div>
                  <button type="submit" class="btn btn-default" name="daftar" value="daftar" >Daftar</button>
                </form>

                
                </div>
                <div class="col-sm-4"></div>
            </div>
            
          
        
        </section>
        
        
        
        

        <footer class='container' id='footer'>
            <p>
            copyrighted © MyFilesApps Official 2015
            </p>
        </footer>
	
	
</body>
    
</html