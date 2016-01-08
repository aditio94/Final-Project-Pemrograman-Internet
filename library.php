<?php
    include('config.php');
    class Library{
        public function __construct(){
             $this->db = new PDO('mysql:host=localhost;dbname=myfiles_db','root','');
        }
        
        public function tambahfile($no_data, $nama, $matkul, $semester,$allowed_ext, $file_name, $file_ext ,$file_size ,$file_tmp ,$tgl){
            
            if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 1044070){
						$lokasi = 'files/'.$nama.'.'.$file_ext;
                            move_uploaded_file($file_tmp, $lokasi);
                           
            
                            $sql = "INSERT INTO data_umum (no_data, tanggal, nama_data, mata_kuliah, semester, type_file, ukuran, file) VALUES('$no_data','$tgl','$nama', '$matkul','$semester', '$file_ext', '$file_size', '$lokasi')";
                            $query = $this->db->query($sql);
                            if($sql){
                                echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
                            }else{
                                echo '<div class="error">ERROR: Gagal upload file!</div>';
                            }
					}else{
						echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					}
				}else{
					echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
				}
            
           
        }
        
        public function editBook($no_data){
            $sql = "SELECT * FROM data_umum WHERE no_data='$no_data'";
            $query = $this->db->query($sql);
            return $query;
        }
        
        public function updateBook($no_data, $nama, $matkul, $semester){
            $sql = "UPDATE data_umum SET nama_data='$nama', mata_kuliah='$matkul', semester='$semester' WHERE no_data='$no_data'";
            $query = $this->db->query($sql);
            
            if(!$query){
            return "Failed";
            }
            else{
            return "Success";
            }
        }

        public function showBooks(){
            $sql = "SELECT * FROM data_umum";
            $query = $this->db->query($sql);
            return $query;
        }
        public function search($cari){
            $sql = "select * from data_umum where no_data like '%$cari%' or nama_data like '%$cari%' or mata_kuliah like '%$cari%'";
            $query = $this->db->query($sql);
            return $query;
        }
        
        public function deleteBook($no_data){
            $sql = "DELETE FROM data_umum WHERE no_data='$no_data'";
            $query = $this->db->query($sql);
        }
        public function download($no_data){
            
        }
    }
?>