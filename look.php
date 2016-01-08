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
            <form>
              <input class="search" type="text" placeholder="Cari..." required>	
              <input class="button" type="button" value="Cari">		
            </form>
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
        <br><br>
        <section class="container" id="main">
            
            <p>Silahkan download file yang sudah di Upload di website ini. Untuk men-Download Anda bisa mengklik Judul file yang di inginkan.</p>
            
            <div class="container">
            <h2>Daftar files yang tersedia</h2>
            <table class="table" border="1">
                <tr>
                <td>No Data</td>
                <td>Nama Data</td>
                <td>Mata Kuliah</td>
                <td>Semester</td>
                <td>Jenis Data</td>
                <td>Ukuran Data</td>
                <td>Tanggal Upload</td>
                <td>Download</td>
                </tr>
                <?php
                require("Library.php");
                $Lib = new Library();
                $show = $Lib->showBooks();
                while($data = $show->fetch(PDO::FETCH_OBJ)){
                echo "
                <tr>
                <td>$data->no_data</td>
                <td>$data->nama_data</td>
                <td>$data->mata_kuliah</td>
                <td>$data->semester</td>
                <td>$data->type_file</td>
                <td>$data->ukuran</td>
                <td>$data->tanggal</td>
                <td><a class='btn btn-info' href='list.php?download=$data->no_data'>Download</td>
                </tr>";
                };
                ?>
            </table>
         
        </div>
        
        </section>

</body>
</html>