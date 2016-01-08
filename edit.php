
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
            <li><a href='help.html'>HomePage</a></li>
            <li><a href='tambah.php'>Upload</a></li>
            <li><a href='list.php'>Lihat</a></li>
            <li><a href='help.html'>Help</a></li>
            <li><a href='contact.html'>Contact Us</a></li>
            </ul>
        </nav>

            <?php
            require('Library.php');

            if(isset($_GET['kode'])){
            $Lib = new Library();
            $book = $Lib->editBook($_GET['kode']);
            $edit = $book->fetch(PDO::FETCH_OBJ);
            echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <title>Add Book</title>
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
            <script src="js/bootstrap.min.js"></script>
            </head>
            <body>
            <div class="container">
            <h2>Ubah Data Buku</h2>
            <form action="edit.php" method="POST" class="form-group">
            Kode Buku: <input type="text" name="no_data" value="'.$edit->no_data.'" class="form-control"><br>
            Judul Buku: <input type="text" name="nama" value="'.$edit->nama_data.'" class="form-control"><br>
            Pengarang Buku: <input type="text" name="matkul" value="'.$edit->mata_kuliah.'" class="form-control"><br>
            Penerbit Buku: <input type="text" name="semester" value="'.$edit->semester.'" class="form-control"><br>
            <input type="submit" name="updateBook" value="Update" class="btn btn-info">
            </form>
            </div>
            </body>
            </html>
            ';
            }

            if(isset($_POST['updateBook'])){
            $kode = $_POST['no_data'];
            $judul = $_POST['nama'];
            $pengarang = $_POST['matkul'];
            $penerbit = $_POST['semester'];

            $Lib = new Library();
            $upd = $Lib->updateBook($no_data, $nama, $matkul, $semester);
            if($upd == "Success"){
            header('Location: list.php');
            }
            }

            ?>
    </body>
</html>