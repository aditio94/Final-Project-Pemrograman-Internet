
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
        
  
       <section class="container" id="main">
            <div class="row">
                <div class="col-sm-2" >
                   
                </div>
                <div class="col-sm-8"style="background-color:#ccccff;">
                        <h2>Download</h2>
            <p>Silahkan download file yang sudah di Upload di website ini. Untuk men-Download Anda bisa mengklik Judul file yang di inginkan.</p>
            
            <p>
            <table class="table" width="80%" cellpadding="3" cellspacing="0">
            	<tr>
                	<th width="30">No.</th>
                    <th width="100">Tgl. Upload</th>
                    <th>Nama File</th>
                    <th width="70">Tipe</th>
                    <th width="70">Ukuran</th>
                    <th width="150">Mata Kuliah</th>
                    <th width="70">Semester</th>
                </tr>
                <?php
				include('config.php');
				$sql = mysql_query("SELECT * FROM download ORDER BY id DESC");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$no.'</td>
							<td align="center">'.$data['tanggal_upload'].'</td>
							<td><a href="'.$data['file'].'">'.$data['nama_file'].'</a></td>
							<td align="center">'.$data['tipe_file'].'</td>
							<td align="center">'.formatBytes($data['ukuran_file']).'</td>
                            <td align="center">'.$data['mata_kuliah'].'</td>
                            <td align="center">'.$data['semester'].'</td>
						</tr>
						';
						$no++;
					}
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="4" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				?>
            </table>
            </p>
                
                </div>
                <div class="col-sm-2" >
                </div>
            </div><br>
        
        
        
        </section>
        
       

</body>
</html>



























