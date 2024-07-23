$(document).ready(function() {
    const price = "Rp 14.249.000";
    $("#title").html(price);
    $('.click-radio').change(function() {
        const color = $(this).val();
        // console.log(color);
        document.getElementById('color').value = color;
        document.getElementById('product').value = "Iphone 15";
    });

    $('.click-capacity').change(function() {
        const capacity = $(this).val();
        // console.log(capacity);
        document.getElementById('capacity').value = capacity;
        if (capacity == "128") {
            var price = "Rp 14.249.000";
            var priceInt = parseInt("14249000");
        } else if (capacity == "258") {
            var price = "Rp 17.249.000";
            var priceInt = parseInt("17249000");
        } else {
            var price = "Rp 21.249.000";
            var priceInt = parseInt("21249000");
        }
        document.getElementById('price').value = price;
        document.getElementById('price-hidden').value = priceInt;
        $("#title").html(price);
        document.getElementById('product').value = "Iphone 15";
    });

    // Tambahkan event click pada elemen dengan kelas 'pay-button'
    $('.pay').on('click', function() {
        // e.preventDefault();

        var name = $('#name').val();
        var emailInput = $('#email').val();
        var product = $('#product').val();
        var price = $('#price').val();
        var priceInt = $('#price-hidden').val();
        var color = $('#color').val();
        var capacity = $('#capacity').val();

        // console.log(name);
        // console.log(price);
        
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
                price: priceInt,
                color: color,
                capacity: capacity
            },
            success: function(token) {
                console.log(token);
                window.snap.pay(token, {
                    onSuccess: function(result) {
                        // Panggilan AJAX untuk memicu PHP mailer setelah pembayaran berhasil
                        $.ajax({
                            url: 'controller/save.php',
                            type: 'POST',
                            data: {
                                product: product,
                                price: price,
                                color: color,
                                capacity: capacity,
                                name: name,
                                email: emailInput
                            },
                            success: function(response) {
                                // console.log(response.status);
                                // Sembunyikan pesan dan animasi loading
                                loadingOverlay.remove();

                                if (response.status === true) {
                                    swal({
                                        icon: 'success',
                                        title: 'Pembayaran Berhasil!',
                                        text: 'Pembayaran Anda telah berhasil diproses.'
                                    }).then((result) => {
                                        console.log(result); // Logging hasil dari sweetalert (opsional)
                                        // Jika pengguna menekan OK, refresh halaman atau lakukan tindakan lainnya
                                        location.reload();
                                    });
                                } else {
                                    swal({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'Terjadi kesalahan saat memproses pembayaran. Mohon coba lagi.'
                                    }).then((result) => {
                                        console.log(result); // Logging hasil dari sweetalert (opsional)
                                        // Jika pengguna menekan OK, refresh halaman atau lakukan tindakan lainnya
                                        location.reload();
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                // console.log(xhr.responseText); // Menampilkan respons teks dari server (opsional)
                                // console.log(status); // Menampilkan status kesalahan (seperti "error" atau "timeout")
                                // console.log(error); // Menampilkan pesan kesalahan (seperti "Not Found" atau "Internal Server Error")

                                // // Sembunyikan pesan dan animasi loading
                                loadingOverlay.remove();

                                // // Menampilkan notifikasi kesalahan kepada pengguna
                                swal({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Terjadi kesalahan saat memproses pembayaran. Mohon coba lagi.'
                                }).then((result) => {
                                    // console.log(result); // Logging hasil dari sweetalert (opsional)
                                    // Jika pengguna menekan OK, refresh halaman
                                    location.reload();
                                });
                            }
                        });
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