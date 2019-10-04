<?php
include "conn.php";
if(isset($_POST['update'])){
				$nama		   = $_POST['nama'];
				$alamat  = $_POST['alamat'];
                $nohp        = $_POST['nohp'];
				
				$update = mysqli_query($koneksi, "UPDATE guru SET nama='$nama', alamat='$alamat', nohp='$nohp' WHERE nama='$nama'") or die(mysqli_error());
				if($update){
					echo "<script>alert('Data Berhasil di Update!'); window.location = '?page=guru'</script>";
				}else{
					echo "<script>alert('Data Gagal di Update!'); window.location = 'guru.php'</script>";
				}
			}
            ?>