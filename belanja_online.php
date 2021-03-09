<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mt-3">
                <div class="card">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                <?php 

                function itemPrice($cItem){
                    if ($cItem == "TV") {
                        return 3000000;
                    }
                    elseif ($cItem == "Refrigator") {
                        return 6000000;
                    }
                    elseif ($cItem == "Washing Machine") {
                        return 4000000;
                    }
                }

                $customer = $_POST['customer'];
                $item = $_POST['item'];
                $item_price = itemPrice($item);
                $kuantitas = $_POST['kuantitas'];
                $tanggal = $_POST['tanggal'];
                $tipe_kurir = $_POST['tipe_kurir'];
                $alamat = $_POST['alamat'];
                $kurir = $_POST['kurir'];
                $asuransi = $_POST['asuransi'];
                $total_item = $item_price * $kuantitas;
                $total_harga = $total_item + $kurir + $asuransi;

                echo '<li class="list-group-item">Customer : ',$customer,'</li>';
                echo '<li class="list-group-item">Item : ',$item,'</li>';
                echo '<li class="list-group-item">Date Shipping : ',$kuantitas,'</li>';
                echo '<li class="list-group-item">Courier Type : ',$tipe_kurir,'</li>';
                echo '<li class="list-group-item">Shipping Address : ',$alamat,'</li>';
                echo '<li class="list-group-item">Courier Cost : Rp ',$kurir,'</li>';
                echo '<li class="list-group-item">Assurance Cost : Rp ',$asuransi,'</li>';
                echo '<li class="list-group-item">Total Cost : Rp ',$total_harga,'</li>';
                ?>
                </ul>
                </div>
            </div>
            <div class="col-6 mt-3">
                <div class="card">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp 3.000.000</li>
                    <li class="list-group-item">Refrigator : Rp 6.000.000</li>
                    <li class="list-group-item">Washing Machine : Rp 4.000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>