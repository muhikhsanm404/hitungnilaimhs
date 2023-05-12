<html>

<head>
    <title>TUGAS 1 PEMROGRAMAN WEB</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">

<body>

    <?php
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $dosen = $_POST['dosen'];
    $matkul = $_POST['matkul'];
    $tugas = $_POST['tugas'];
    $absen = $_POST['absen'];
    $uas = $_POST['uas'];

    $nilaitugas = $tugas;
    $nilaiabsen = $absen;
    $nilaiuas = $uas;

    $nilaimhs = $nilaitugas + $nilaiabsen + $nilaiuas;
    ?>

    <?php

    if ($nilaimhs >= 80) {
        $skor = "A";
    } elseif ($nilaimhs >= 70) {
        $skor = "B";
    } elseif ($nilaimhs >= 50) {
        $skor = "C";
    } elseif ($nilaimhs >= 40) {
        $skor = "D";
    } else {
        $skor = "E";
    }
    echo "
    <div cLass='container-fluid'>
    <div class='container'>
    <div class='row'>
            <div class='col-sm rounded text-light' style='background-color: #212529'>
                <form action='index.html' method='post'>
                    <div class='text-center'>
                        <h2 class='text-light'>
                            #Hasil Nilai Mahasiswa Unisba#
                        </h2> <br><hr>  
                    </div>
            <h3> <font color='#00ff07'> Nama Mahasiswa : </font> $nama <br> 
                 <font color='#00ff07'> NIM : </font> $nim <br> 
              <font color='#00ff07'> Prodi : </font> $prodi <br> 
                   <font color='#00ff07'>  Dosen Pengampu : </font> $dosen <br>
                   <font color='#00ff07'>  Mata Kuliah : </font>$matkul <br> <hr> 
                   <div class='text-center'>
                   <font color='#00ff07'>  Nilai Tugas : </font> <b>$tugas</b> <br>
                   <font color='#00ff07'>  Nilai Absen : </font> <b>$absen</b> <br>
                   <font color='#00ff07'>  Nilai UAS : </font> <b>$uas</b> <br> 
                    ----------------------------------------------------- = <br>
                <font color='#00ff07'> Nilai Mahasiswa : </font> <font color='yellow'> <b>$nilaimhs</b> </font> <br>
                <br>
                <font color='#00ff07'> Skor :  </font> <font color='red'><b>$skor</b> </font> </h3> <br>
                  <div align='right'> <button class='btn btn-danger'> Kembali</button></a>
            </div>
        </div>
    </div>
</div>
</div>

    ";
    ?>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</head>

</html>