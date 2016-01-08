<?php
include "session.php";
?>
<!DOCTYPE html>
<html>
    <head>
         <title>Search Engine</title>
         <style type="text/css">
             
         *{margin:auto;padding:0;}
         body{font-family:helvetica;}
         .con{width:1024px;margin-top:10px;}
         label{width:300px;display:inline-block;font-weight:bolder;font-size:24pt;}
         input[type='search']{height:30px;width:400px;}
         button{padding:5px;width:80px;}
         i{color:#050;}
         .src{width:600px;margin-top:50px;}
         h3{color:#030;margin-top:10px;}
         section{}
         p a{text-decoration:none;color:#060;margin-bottom:10px;}
         </style>
        
        </head>
        <body>
         <div class="con">
         <form action="" method="get">
          <p>
           <label>Mesin<i>Cari</i></label>
           <input type="search" name="cari" value="<?php echo $_GET['cari'] ?>"/>
           <button>Cari</button>
          </p>
         </form>
         </div>
            <?php
                require("Library.php");
                $Lib = new Library();
                $show = $Lib->search();
                while($data = $show->fetch(PDO::FETCH_OBJ)){
                echo "
                <tr>
                <td>$data->no_data</td>
                <td>$data->nama_data</td>
                <td>$data->mata_kuliah</td>
                };"
                ?>
         
    </body>
</html>