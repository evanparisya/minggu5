<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <title></title>
    </head>
    <body>
        <h1>
        <?php
        $Dosen = ['nama' => 'Elok Nur Hamdana',
                  'domisili' => 'Malang',
                  'jenis_kelamin' => 'Perempuan' ];
    
        echo "Nama : {$Dosen ['nama']} <br>";
        echo "Domisili : {$Dosen ['domisili']} <br>";
        echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";
        ?>
        </h1>
</body>
</html>