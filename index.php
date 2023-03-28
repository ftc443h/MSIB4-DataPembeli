<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatchan Muhammad Hakim</title>
    <style>
        body{
            padding: 0px;
            margin: 0px;
            background-color: #D8D8D8;
            background-position: center;
        }
        .countainer-table{
            width: 85%;
            text-align: center;
            margin-left: 130px;
            margin-top: 35px;
            border-radius: 4px;
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.3);
        }
        #countainer-th{
            font-size: 11.5pt;
            font-family: monospace;
            text-transform: uppercase;
            font-weight: bold;
            background-color: #245953;
            color: #D8D8D8;
            cursor: grabbing;
            border-radius: 4px;
        }
        #countainer-td{
            font-size: 10.5pt;
            font-family: monospace;
            text-transform: uppercase;
            font-weight: bold;
            background-color: #408E91;
            color: #D8D8D8;
            cursor: grabbing;
            border-radius: 4px;
        }
        .countainer-h3{
            font-size: 15pt;
            font-family: monospace;
            text-transform: uppercase;
            font-weight: bold;
            text-align: center;
            color: #E49393;
            cursor: grabbing;
            margin-top: 140px;
        }
        #countainer-td1{
            font-size: 10.5pt;
            font-family: monospace;
            font-weight: bold;
            background-color: #408E91;
            color: #D8D8D8;
            cursor: grabbing;
            border-radius: 4px;
        }

    </style>
</head>
<body>
    <?php
        $pelanggan = "siti aminah";
        $produk = "tv";
        $stok_produk = 3;
        $no = 1;

        switch($produk){
            case "kulkas" : $harga = 4000000; break;
            case "tv" : $harga = 3000000; break;
            case "mesin cuci" : $harga = 5000000; break;
            default: $harga = 0;
        }

        $str = $harga * $stok_produk;
        $diskon = ($produk == "tv" && $stok_produk > 2) ? 0.25 * $str : 0.10 * $str;
        $ppn = 0.11 * ($str - $diskon);
        $total_harga = ($str - $diskon) + $ppn;

        $strdis = "";
        if($produk == "tv" && $stok_produk > 2){
            $strdis = "25%";
        }else{
            $strdis = "10%";
        }
    ?>

    <h3 class="countainer-h3">data pembeli toko gofashionshop</h3>
    <div class="countainer-div">
        <table class="countainer-table" border="1px" cellpadding="10" >
            <thead class="countainer-thead">
                <tr class="countainer-tr">
                    <th id="countainer-th">no</th>
                    <th id="countainer-th">pembeli</th>
                    <th id="countainer-th">produk</th>
                    <th id="countainer-th">jumlah barang</th>
                    <th id="countainer-th">harga satuan</th>
                    <th id="countainer-th">harga kotor</th>
                    <th id="countainer-th">diskon</th>
                    <th id="countainer-th">ppn</th>
                    <th id="countainer-th">harga total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="countainer-td"><?= $no++; ?></td>
                    <td id="countainer-td"><?= $pelanggan; ?></td>
                    <td id="countainer-td"><?= $produk; ?></td>
                    <td id="countainer-td"><?= $stok_produk; ?></td>
                    <td id="countainer-td1"><?= "Rp ".number_format($harga, 2, ",", "."); ?></td>
                    <td id="countainer-td1"><?= "Rp ".number_format($str, 2, ",", "."); ?></td>
                    <td id="countainer-td1"><?= $strdis; ?></td>
                    <td id="countainer-td1"><?= "Rp ".number_format($ppn, 2, ",", "."); ?></td>
                    <td id="countainer-td1"><?= "Rp".number_format($total_harga, 2, ",", "."); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>