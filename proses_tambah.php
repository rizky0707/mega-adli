<?php 
include_once("config.php");

            if(isset($_POST['btn_simpan'])){
            $nama = $_POST['nama'];
            $keterangan = $_POST['keterangan'];
            $pesan = $_POST['pesan'];
             
            // menginput data ke database
            mysqli_query($config,"insert into mega_adli values('','$nama','$keterangan','$pesan')");
             
            // mengalihkan halaman kembali ke index.php
            echo "<div class='row justify-content-center mt-5'>
            <div class='col-md-12'>
                <div class='alert alert-success' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Success!</strong> Terima Kasih Atas Ucapannya!
              </div>
            </div>
        </div>";
            }
            ?>