<html>
    <head>
        <title>Kalkulator Biasa</title>
    </head>
    <body>
        <h1>Kalkulator Biasa</h1>
        <form> 
            <input type="number" name ="angka1">
            <select name="operator">
                <option select disabled>Pilih Operator</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name ="angka2">
            <div style="margin-top:30px;"> 
                <button type="reset">Clear</button>
                <button type="submit">Hitung</button>
            </div>
            <?php
            if ($_GET): 
                $angka1 = (double) @$_GET['angka1'];
                $angka2 = (double) @$_GET['angka2'];
                $operator = @$_GET['operator'];
                // Buat Logika Untuk Pejumlahan
                switch ($operator){
                    case '+':
                        $hasil = $angka1 + $angka2;
                        break;
                    case '-':
                        $hasil = $angka1 - $angka2;
                        break;
                    case '*':
                        $hasil = $angka1 * $angka2;
                        break;
                    case '/':
                        $hasil = $angka1 / $angka2;
                        break;
                        
                }
            ?>
            <div style="margin-top: 10px">
                HASIL : <strong><?php echo $hasil?></strong>
            </div>
            <?php
            endif; ?>
            </form>
    </body>
</html>