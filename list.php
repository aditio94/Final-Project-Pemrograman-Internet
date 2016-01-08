
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
        </nav>
        <div class="container">
            <h2>Daftar files yang tersedia</h2>
            <table class="table" border="1">
                <tr>
                <td>No Data</td>
                <td>Nama Data</td>
                <td>Jenis Data</td>
                <td>Semester</td>
                <td>Jenis Data</td>
                <td>Ukuran Data</td>
                <td>Tanggal Upload</td>
                <td>Lokasi Upload</td>
                <td>Delete</td>
                <td>Edit</td>
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
                <td>$data->file</td>  
                <td><a class='btn btn-danger' href='list.php?delete=$data->no_data'>Delete</a></td>
                <td><a class='btn btn-info' href='edit.php?kode=$data->no_data'>Edit</td>
                <td><a class='btn btn-info' href='list.php?download=$data->no_data'>Download</td>
                </tr>";
                };
                ?>
            </table>
            <a href="tambah.php" class="btn btn-success">Tambah file</a>
        </div>
    </body>
</html>
 
<?php
if(isset($_GET['delete'])){
$del = $Lib->deleteBook($_GET['delete']);
 
}
if(isset($_GET['download'])){
$download = $Lib->download($_GET['download']);
 
}
?>