
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
        
        <section class="container">
            <div class="row">
                <div class="col-sm-2" >
                    
                </div>
                <div class="col-sm-8">
                    <h2>Tambah File Baru</h2>
            
            
                <form action="tambah.php" method="post" enctype="multipart/form-data"  id="main">
                                
                                No:<input type="text" name="no_data" class="form-control" required /> <br>
                            
                                Nama File:<input type="text" name="nama" class="form-control" required /><br>
                         
                                Semester:<input type="text" name="semester" class="form-control" required /><br>
                           
                                Mata Kuliah:<input type="text" name="matkul" class="form-control" required /><br>
                       
                                Pilih File:<input type="file" name="file" required /><br>
                          
                                <input type="submit" name="tambahfile" value="tambahfile" /><br>
                        
                        </form>
                </div>
                <div class="col-sm-2" >    
                  
                </div>
            </div>
            
            
       
 
        </section>
        
      
    
        
       

</body>
</html>


<?php
require('Library.php');
if(isset($_POST['tambahfile'])){
$no_data = $_POST['no_data'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$semester = $_POST['semester'];
$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
$file_name		= $_FILES['file']['name'];
$file_ext		= strtolower(end(explode('.', $file_name)));
$file_size		= $_FILES['file']['size'];
$file_tmp		= $_FILES['file']['tmp_name'];
$tgl			= date("Y-m-d");

 
$Lib = new Library();
$add = $Lib->tambahfile($no_data, $nama, $matkul, $semester,$allowed_ext, $file_name, $file_ext ,$file_size ,$file_tmp ,$tgl);
if($add == "Success"){
header('Location: List.php');
}
}
 
?>