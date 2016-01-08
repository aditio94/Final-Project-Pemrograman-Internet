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
        <section class="container" id="main">
            <img src="img/iconcari.png" width="200px" height="200px">
            
            
          
            
            
            
            
            
            
            
            <!-- form quick search -->
<form name="form1" method="get" action="">
Search : <input type="text" name="q" id="q"/> <input type="submit" value="Search"/>
</form>

<?php
if(isset($_GET['q']) && $_GET['q']){
	$conn = mysql_connect("localhost", "root", "");
	mysql_select_db("myfiles_db");
	$q = $_GET['q'];
	$sql = "select * from data_umum where nama_data like '%$q%' or 
	mata_kuliah like '%$q%' or semester like '%$q%'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) > 0){
		?>
		<table>
			<tr>
				<td>Nama Data</td>
				<td>Mata Kuliah</td>
				<td>Semester</td>
				
			</tr>
			<?php
			while($data_umum = mysql_fetch_array($result)){?>
			<tr>
				<td><?php echo $nama_data['nama_data'];?></td>
				<td><?php echo $mata_kuliah['mata_kuliah'];?></td>
				<td><?php echo $semester['semester'];?></td>
				
			</tr>
			<?php }?>
		</table>
		<?php
	}else{
		echo 'Data not found!';
	}
}
?>
            
            
            
            
            
            
            
            <a href=looktype.php><button>Lihat Berdasarkan Type Data</button></a>
            <a href=looksemester.php><button>Lihat Berdasarkan Semester</button></a>
            <a href=lookmatkul.php><button>Lihat Berdasarkan Mata Kuliah</button></a>

            
            
            
            
            
            
            
            
            
            
        
        
        </section>
        
        <footer class='container' id='footer'>
            <p>
            copyrighted © MyFilesApps Official 2015
            </p>
        </footer>
	
	
</body>
    
</html>

<?php
require('Library.php');
if(isset($_POST['carifile'])){
$cari = $_POST['cari'];


 
$Lib = new Library();
$add = $Lib->search($cari);
if($add == "Success"){
header('Location: List.php');
}
}
 
?>