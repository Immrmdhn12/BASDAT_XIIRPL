<html lang="en">
<head>
    <title>Form Get & Post</title>
</head>
<body>
        <form> 
        <div>
            <label>Nama</label><br>
            <input type="text" name="nama" placeholder="masukin nama">
        </div>
        <div>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="masukin email">
        </div>
        <div>
            <button>Submit</button>
        </div>
        <?php
        //@ berfungsi untuk mengubah nilai menjadi null jika form
            $nama = @$_GET['nama'];
            $email = @$_POST['email'];

            echo "nama = {$nama}<br>";
            echo "email = {$email}";
        ?>
    </form>
</body>
</html>