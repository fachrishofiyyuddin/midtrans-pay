<?php
// ambil koneksi
include "koneksi/index.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midtrans Payment</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- data tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap.css">
    <!-- midtrans -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-7F_2M5Vd-WE49rOE"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container">
        <h1>Tutorial Integrasi Midtrans Payment Gateway dengan PHP, MySQLi, dan AJAX untuk Pemula: Pembayaran Online</h1>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                        <li data-target="#myCarousel" data-slide-to="7"></li>
                        <li data-target="#myCarousel" data-slide-to="8"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="assets/img/1.jpg" alt="Los Angeles" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="assets/img/2.jpg" alt="Chicago" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="assets/img/3.jpg" alt="New york" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="assets/img/4.jpg" alt="New york" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="assets/img/5.jpg" alt="New york" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="assets/img/6.jpg" alt="New york" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="assets/img/7.jpg" alt="New york" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="assets/img/8.jpg" alt="New york" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="assets/img/9.jpg" alt="New york" style="width:100%;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Iphone 15</h2>
                    </div>
                    <div class="panel-body">
                        <div class="label-heading">
                            <p class="label-heading-deskripsi">WARNA :</p>
                            <div class="row">
                                <center>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="radio" name="warna" class="click-radio" value="war-pink">
                                            <div class="war-pink"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="radio" name="warna" class="click-radio" value="war-yellow">
                                            <div class="war-yellow"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="radio" name="warna" class="click-radio" value="war-green">
                                            <div class="war-green"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="radio" name="warna" class="click-radio" value="war-blue">
                                            <div class="war-blue"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="radio" name="warna" class="click-radio" value="war-black">
                                            <div class="war-black"></div>
                                        </div>
                                    </div>
                                </center>
                            </div>
                            <p class="label-heading-deskripsi">KAPASITAS :</p>
                            <div class="row">
                                <center>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="radio" name="kapasitas" class="click-capacity" value="128">
                                            <div>128 GB</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="radio" name="kapasitas" class="click-capacity" value="258">
                                            <div>258 GB</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="radio" name="kapasitas" class="click-capacity" value="512">
                                            <div>512 GB</div>
                                        </div>
                                    </div>
                                </center>
                            </div>
                        </div>
                        <br>
                        <p>iPhone 15 menghadirkan Dynamic Island, kamera Utama 48 MP, dan USB-C — semuanya dalam desain aluminium dan kaca berwarna yang tangguh.</p>
                        <br>
                        <div class="label-ul">
                            Isi Kotak :
                            <ul>
                                <li>iPhone dengan iOS 17.</li>
                                <li>Kabel USB-C ke USB-C.</li>
                                <li>Buku Manual dan dokumentasi lain.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <center>
                            <h2 id="title"></h2>
                        </center>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Product:</label>
                            <input type="text" class="form-control" id="product" placeholder="Enter product" name="product" readonly="">
                        </div>
                        <div class="form-group">
                            <label>Price:</label>
                            <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" readonly="">
                            <input type="hidden" class="form-control" id="price-hidden" placeholder="Enter price-hidden" name="price-hidden" readonly="">
                        </div>
                        <div class="form-group">
                            <label>Color:</label>
                            <input type="text" class="form-control" id="color" placeholder="Enter color" name="color" readonly="">
                        </div>
                        <div class="form-group">
                            <label>Capacity:</label>
                            <input type="text" class="form-control" id="capacity" placeholder="Enter capacity" name="capacity" readonly="">
                        </div>
                        <button class="btn btn-lg btn-primary btn-block pay">Pay!</button><br>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <h1>Purchase transaction data</h1>
            <br>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Date Pay</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>Capacity</th>
                        <th>Customer</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $result = mysqli_query($conn, "select * from pay order by id desc");
                    foreach ($result as $row) :
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= date("d-m-y", strtotime($row['date_pay'])); ?></td>
                            <td><?= $row['product']; ?></td>
                            <td><?= $row['price']; ?></td>
                            <td><?= $row['color']; ?></td>
                            <td><?= $row['capacity'] . " GB"; ?></td>
                            <td><?= $row['name'];; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><span class="label label-success"><?= $row['status']; ?></span></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- js data tables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap.js"></script>
    <!-- swal alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- js custom -->
    <script src="assets/js/index.js"></script>
    <script>
        $(document).ready(function() {
            // dataTables
            new DataTable('#example');
        });
    </script>
</body>

</html>