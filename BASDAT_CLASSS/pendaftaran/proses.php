<?php 
    $files = $_FILES;
    $folder_upload = "./assets/uploads";
    
    if(!is_dir($folder_upload)){
        mkdir($folder_upload, 0777, $rekursif = true);
    }
    
    $fileFoto = (object) @$_FILES['foto'];

    $uploadFotoSukses = move_uploaded_file(
        $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
    );

        $files = $_FILES;
        $folder_upload = "./assets/uploads";

        $nama = $_POST['nama'];
        $ayah = $_POST['ayah'];
        $ibu = $_POST['ibu'];
        $alamat = $_POST['alamat'];

        if($uploadFotoSukses){
            $link = "{$folder_upload}/{$fileFoto->name}";
            echo "Foto : <a href='{$link}'>{$fileFoto->name}</a>";
            echo "<br>";
        }
        if (isset($_POST['jurusan'])) {

            $jurusan=$_POST['jurusan'];
            echo "<br>";
            for ($i=0; $i < count($jurusan) ; $i++){
                echo $jurusan[$i]."<br>";
            }
        }
        

        echo "Nama = $nama"."<br>";
        echo "Nama ayah = $ayah"."<br>";
        echo "Nama ibu = $ibu"."<br>";
        echo "Alamat = $alamat". "<br>";
?>