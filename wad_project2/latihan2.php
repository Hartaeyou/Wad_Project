
<?php 
if (isset($_GET["submit"])){
    
    $a =(int)($_GET["Angka1"]);
    $b = (int)($_GET["Angka2"]);

    if ($_GET["Operasi1"]=="Kurang"){
        $c = $a-$b;
        $d = "Dikurang";
    }
    elseif ($_GET["Operasi1"]=="Tambah"){

        $c =  $a+$b;
        $d = "Ditambah";
    }
    elseif ($_GET["Operasi1"]=="Bagi"){
        if ($b==0){
            echo "<script> alert('Angka Kedua Tidak Boleh 0');</script>";
        }else{
            $c = $a/$b;
            $d = "Dibagi";
        };
    }
    elseif ($_GET["Operasi1"]=="Kali"){
        $c = $a*$b;
        $d = "Dikali";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">
                    <h1>Kalkulator Sederhana</h1>
                </div>
                <div class="col-sm">
                <img src="https://cdn2.iconfinder.com/data/icons/ios7-inspired-mac-icon-set/512/Calculator_512.png" alt="" width = "75px">
                </div>
                </div>
            </div>
        
        <form action="" method ="get">
            
            <label for="Angka1" style="font-weight: bold;">Angka Pertama</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukan Angka Pertama" aria-label="Username" aria-describedby="basic-addon1" name = "Angka1" id = "Angka1" autofocus value =0>.
            </div>

            <label for="Angka2" style="font-weight: bold;">Angka Kedua</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukan Angka Kedua" aria-label="Username" aria-describedby="basic-addon1" name = "Angka2" id = "Angka2" autofocus value =0>.
            </div>
            
            <label for="Operasi" style="font-weight: bold">Masukan Operasi Hitung</label>
            <select class="form-select" aria-label="Default select example" name = "Operasi1">
                <option value="Tambah"  > + </option>
                <option value="Kurang" > - </option>
                <option value="Bagi" > / </option>
                <option value="Kali" > * </option>
            </select>
            <br>
            <button class="btn btn-success" type="text" name="submit" >Hitung</button>
            <br><br>
            <p>Jadi Hasil dari <?= $_GET["Angka1"]; ?> <?= $d; ?> <?= $_GET["Angka2"]; ?> adalah <?= $c; ?></p>
        </form>
    </div>
    
</body>
</html>