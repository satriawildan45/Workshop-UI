<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-image: url('images/paym.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        .box-info, .box-form {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        .box-info {
            width: 300px;
            text-align: center;
        }

        .box-info h2 {
            margin-bottom: 10px;
        }

        .box-info p {
            font-size: 18px;
        }

        .box-form {
            width: 600px;
        }

        .form-row {
            display: flex;
            margin-bottom: 15px;
            align-items: center;
        }

        .form-row label {
            width: 200px;
            font-weight: bold;
        }

        .form-row input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-row input[type="date"] {
            padding: 6px;
        }

        .form-row .readonly {
            padding-top: 6px;
        }

        .form-row:last-child {
            justify-content: flex-end;
        }

        .form-row button {
            padding: 10px 25px;
            background-color: #ffc107; 
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .form-row button:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="box-info">
        <h2>Pembayaran Dapat Melalui:</h2>
        <hr>
        <p><strong>BRI 2132131246</strong><br>A/N Satria</p>
    </div>

    <div class="box-form">
        <form method="POST" action="psucess.php">
            <div class="form-row">
                <label>Account Number :</label>
                <input type="text" name="no_rekening" required>
            </div>
            <div class="form-row">
                <label>Name :</label>
                <input type="text" name="atas_nama" required>
            </div>
            <div class="form-row">
                <label>Nominal :</label>
                <input type="number" name="nominal" required>
            </div>
            <div class="form-row">
                <label>Transfer Date :</label>
                <input type="date" name="tanggal_transfer" required>
            </div>
            <div class="form-row">
                <label>Total Payment :</label>
                <div class="readonly">$1000</div>
            </div>
            <div class="form-row">
                <button type="submit">Kirim</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
