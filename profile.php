<?php
include('session.php');

?>
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
        <link href="assets/css/styleadmin.css" rel="stylesheet">
      
        
        <!--CDN-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
    
        
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
                  
                
                <li id="opener"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                
              </ul>
            </div>
          </div>
        </nav>
        
        
	
        <header class='container' id='header'>
            <img src="img/logo%20myfile.png" id="logomyfiles">
            <form>
              <input class="search" type="text" placeholder="Cari..." required>	
              <input class="button" type="button" value="Cari">		
            </form>
        </header>
        
         <nav class='container roundEdge' id='nav'>
            <ul>
            <li><a href='profile.php'>HomePage</a></li>
            <li><a href='tambah.php'>Upload</a></li>
            <li><a href='list.php'>Lihat</a></li>
      
            <li><a href='help.html'>Help</a></li>
            <li><a href='contact.html'>Contact Us</a></li>
            </ul>
        </nav><br><br>
        <section class="container" id="main">
            <div class="row">
              <div class="col-sm-5">
                <div class='slide' >
                                  <input type='radio' name='radio-set' checked='checked' />
                                  <img src="img/slide1.png">
                                  <input type='radio' name='radio-set' />
                                  <img src="img/slide2.png">
                                  <input type='radio' name='radio-set' />
                                  <img src="img/slide6.png">
                                   <input type='radio' name='radio-set' />
                                  <img src="img/slide5.png">
                            </div>

                  
            </div>
                
            <div class="col-sm-2"></div>
            <div class="col-sm-5">
                <article>
                    <header><h2>Tentang <strong>My Files Apps</strong></h2></header>
                    <p>My-Files adalah sebuah aplikasi berbasis web yang berfungsi untuk memudahkan pengguna menyimpan data-data kuliah seperti e-book, text document, file presentasi, dll. Selain itu, My-Files juga memudahkan pengguna untuk mencari lagi file-file yang sudah disimpan. My-Files kedepan akan menjadi solusi media penyimpanan mahasiswa agar dapat lebih menghargai ilmu yang sudah didaptkan
                        <br>
                        <br>
My-files is an application web-based that serves to ease users keep data as e-book college, text document, file presentation, etc.In addition, my-files also ease users to seek again files already kept.My-files fore of going into solution a storage medium students that will respect the science which have been found
                    
                    </p>
                </article>
            </div>
       
        </div>
            

        <marquee behavior="alternate">Thank you for visit, Always keep your files and Use <strong><a href="index.html">MyFilesApps</a></strong> to store your files</marquee>
        </section>
        
        
        

                        <
            
            
            
    
       

        <footer class='container' id='footer'>
            <p>
            copyrighted © MyFilesApps Official 2015
            </p>
        </footer>
  
      
    
        
       

</body>
</html>



























