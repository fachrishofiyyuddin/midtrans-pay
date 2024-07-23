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
    <style>
        .label-ul {
            font-weight: bold;
        }

        .label-heading-deskripsi {
            font-weight: bold;
        }

        .war-pink {
            width: 50px;
            height: 50px;
            /* Tinggi sama dengan lebar untuk membuatnya menjadi lingkaran */
            background-color: pink;
            border-radius: 50%;
            /* Menggunakan 50% untuk membuat sudut menjadi lingkaran */
        }

        .war-yellow {
            width: 50px;
            height: 50px;
            /* Tinggi sama dengan lebar untuk membuatnya menjadi lingkaran */
            background-color: yellow;
            border-radius: 50%;
            /* Menggunakan 50% untuk membuat sudut menjadi lingkaran */
        }

        .war-green {
            width: 50px;
            height: 50px;
            /* Tinggi sama dengan lebar untuk membuatnya menjadi lingkaran */
            background-color: green;
            border-radius: 50%;
            /* Menggunakan 50% untuk membuat sudut menjadi lingkaran */
        }

        .war-blue {
            width: 50px;
            height: 50px;
            /* Tinggi sama dengan lebar untuk membuatnya menjadi lingkaran */
            background-color: blue;
            border-radius: 50%;
            /* Menggunakan 50% untuk membuat sudut menjadi lingkaran */
        }

        .war-black {
            width: 50px;
            height: 50px;
            /* Tinggi sama dengan lebar untuk membuatnya menjadi lingkaran */
            background-color: black;
            border-radius: 50%;
            /* Menggunakan 50% untuk membuat sudut menjadi lingkaran */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tutorial Developer: Integrasi Midtrans Payment Gateway dengan PHP dan MySQLi</h1>
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
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Acara</th>
                        <th>Mulai tgl</th>
                        <th>Selesai tgl</th>
                        <th>Mulai pukul</th>
                        <th>Sampai pukul</th>
                        <th>LAB.</th>
                    </tr>
                </thead>
                <tbody>
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

    <script>
        $(document).ready(function() {
            // dataTables
            new DataTable('#example');
            const price = "Rp 14.249.000";
            $("#title").html(price);
            $('.click-radio').change(function() {
                const color = $(this).val();
                console.log(color);
                document.getElementById('color').value = color;
                document.getElementById('product').value = "Iphone 15";
            });

            $('.click-capacity').change(function() {
                const capacity = $(this).val();
                console.log(capacity);
                document.getElementById('capacity').value = capacity;
                if (capacity == "125") {
                    var price = "Rp 14.249.000";
                } else if (capacity == "258") {
                    var price = "Rp 17.249.000";
                } else {
                    var price = "Rp 21.249.000";
                }
                document.getElementById('price').value = price;
                $("#title").html(price);
                document.getElementById('product').value = "Iphone 15";
            });

            // $('.pay').on('click', function() {
            //     // e.preventDefault();
            //     const id = $(this).data('id');
            //     const donasi = $(this).data('donasi');
            //     const judul = $(this).data('judul');

            //     const formatted_balance = "Rp. " + donasi.toLocaleString('id-ID');

            //     // console.log(formatted_balance);

            //     $('#vDonasi').val(formatted_balance);
            //     $('#vJudul').val(judul);

            // Tambahkan event click pada elemen dengan kelas 'pay-button'
            $('.pay').on('click', function() {
                // e.preventDefault();

                var name = $('#name').val();
                var emailInput = $('#email').val();
                var product = $('#product').val();
                var price = $('#price').val();
                var color = $('#color').val();
                var capacity = $('#capacity').val();

                console.log(name);
                console.log(price);


                // Validasi input sebelum melakukan aksi
                if (name === '' || emailInput === '' || product === '' || price === '' || color === '' || capacity === '') {
                    // Jika ada input yang kosong, berhentikan aksi lebih lanjut
                    swal({
                        icon: 'error',
                        title: 'Warning!',
                        text: 'Mohon lengkapi semua input sebelum melanjutkan.'
                    })
                    return;
                }

                // Validasi input email menggunakan regex
                var email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email.test(emailInput)) {
                    // Jika format email tidak sesuai, berhentikan aksi lebih lanjut
                    swal({
                        icon: 'error',
                        title: 'Warning!',
                        text: 'Format email tidak valid. Mohon masukkan alamat email yang benar.'
                    })
                    return;
                }

                // Tampilkan pesan "Tunggu sebentar, masih diproses..."
                var loadingOverlay = $('<div class="loading-overlay"><div class="loading-spinner"></div><div class="loading-text">Tunggu sebentar, masih diproses...</div></div>');
                $('body').append(loadingOverlay);

                // Lakukan AJAX POST request
                $.ajax({
                    url: 'vendor/payLoad.php',
                    type: 'POST',
                    data: {
                        name: name,
                        email: emailInput,
                        product: product,
                        price: price,
                        color: color,
                        capacity: capacity
                    },
                    success: function(token) {
                        console.log(token);
                        window.snap.pay(token, {
                            onSuccess: function(result) {
                                // Panggilan AJAX untuk memicu PHP mailer setelah pembayaran berhasil
                                // $.ajax({
                                //     url: 'notif.php',
                                //     type: 'POST',
                                //     data: {
                                //         name: nameInput,
                                //         phone: phoneInput,
                                //         email: emailInput,
                                //         judul: judul,
                                //         id: id
                                //     },
                                //     success: function() {
                                // Sembunyikan pesan dan animasi loading
                                loadingOverlay.remove();

                                swal({
                                    icon: 'success',
                                    title: 'Pembayaran Berhasil!',
                                    text: 'Pembayaran Anda telah berhasil diproses.'
                                }).then((result) => {
                                    console.log(result);
                                    location.reload();
                                });
                                //     }
                                // });
                            },
                            onPending: function(result) {
                                // Sembunyikan pesan dan animasi loading
                                loadingOverlay.remove();
                                /* You may add your own implementation here */
                                alert("waiting for your payment!");
                                location.reload();
                            },
                            onError: function(result) {
                                // Sembunyikan pesan dan animasi loading
                                loadingOverlay.remove();
                                /* You may add your own implementation here */
                                alert("payment failed!");
                                location.reload();
                            },
                            onClose: function() {
                                // Sembunyikan pesan dan animasi loading
                                loadingOverlay.remove();
                                /* You may add your own implementation here */
                                alert('you closed the popup without finishing the payment');

                                $('#donate').modal('show');
                            }
                        });
                    }
                });
            });
        });
        // });
    </script>
</body>

</html>