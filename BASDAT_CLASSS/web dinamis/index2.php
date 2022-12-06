<html>
<head>
    <title></title>
</head>
<body>
    <h1>Menggunakan METODE POST</h1>
    <form method="POST">
        
        <div>
            <label>Email</label>
            <input type="email" name="email"> 
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <button>Login</button>
        </div>
        <?php
        $email = @$_POST['email'];
        $password = @$_POST['password'];
        
        echo "Email = {$email}?>
    </form>
</body>
</html>