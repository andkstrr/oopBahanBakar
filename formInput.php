<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar Shell</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 45px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-container">
        <form method="POST">
            <h4 class="text-center mt-2 mb-5">Pom Bensin Shell</h4>
            <div class="form-group">
                <b><label for="jenis" class="fw-bolder">Jenis Bahan Bakar:</label></b>
                <select name="jenis" id="jenis" class="form-control" required>
                    <option disabled selected value="">Pilih Jenis Bahan Bakar</option>
                    <option value="shellSuper">Shell Super</option>
                    <option value="shellVPower">Shell V-Power</option>
                    <option value="shellPowerDiesel">Shell V-Power Diesel</option>
                    <option value="shellPowerNitro">Shell V-Power Nitro</option>
                </select>
            </div>
            <div class="form-group">
                <b><label for="jumlah" class="fw-bolder">Masukkan Jumlah Liter:</label></b>
                <input type="number" id="jumlah" name="jumlah" class="form-control" min="1" required>
            </div>
            <button type="submit" name="btn-submit" class="btn btn-primary">Beli    </button>
        </form>
        <?php 
        include("oopBahanBakar.php");
        if (isset($_POST["btn-submit"])) {
            $beli = new Beli();
            $beli->setHarga(10000, 12000, 7500, 17500);
            $beli->jenis = ($_POST['jenis']);
            $beli->jumlah = ($_POST['jumlah']);

            echo $beli->cetakPembelian();
            }
        ?>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
