# pemesanan_tiket_bioskop
Homework - Back End Development - PHP Fundamentals - Week 7 - Anna Berttria Novem Budia


Deskripsi Program
Program ini dirancang untuk menerima input dari pengguna mengenai jenis tiket, jumlah tiket yang ingin dibeli, dan hari pemesanan. Program kemudian menghitung total harga tiket berdasarkan beberapa kondisi, seperti jenis tiket, biaya akhir pekan, dan potongan harga jika memenuhi syarat.

Struktur Program

Konstanta Harga Tiket:

HARGA_TIKET_DEWASA: Harga tiket dewasa (Rp50.000).
HARGA_TIKET_ANAK: Harga tiket anak-anak (Rp30.000).
BIAYA_AKHIR_PEKAN: Biaya tambahan jika pemesanan dilakukan pada akhir pekan (Rp10.000).
BATAS_DISKON: Batas total harga untuk mendapatkan diskon (Rp150.000).
PERSENTASE_DISKON: Persentase diskon (10%).

Fungsi hitungHargaTiket:

Menerima parameter jenisTiket, jumlahTiket, dan hariPemesanan.
Menentukan harga dasar tiket berdasarkan jenis tiket yang dipilih.
Menambahkan biaya akhir pekan jika hari pemesanan adalah Sabtu atau Minggu.
Menghitung total harga berdasarkan jumlah tiket dan menerapkan diskon jika total harga melebihi batas diskon.
Mengembalikan total harga setelah perhitungan.
Fungsi tampilkanHargaTiket:

Menampilkan informasi tentang harga tiket dewasa dan anak-anak, biaya tambahan akhir pekan, serta syarat diskon.
Pengantar Program:

Program dimulai dengan pesan sambutan "Selamat datang di sistem pemesanan tiket bioskop!" untuk menyapa pengguna.
Loop Utama:

Menggunakan loop do-while untuk memungkinkan pengguna melakukan pemesanan berulang.
Menampilkan harga tiket dan meminta input pengguna untuk jenis tiket, jumlah tiket, dan hari pemesanan.
Memanggil fungsi hitungHargaTiket untuk menghitung total harga berdasarkan input pengguna.
Menampilkan total harga kepada pengguna.
Menanyakan kepada pengguna apakah mereka ingin melakukan pembelian lagi.
Pesan Terima Kasih:

Jika pengguna memilih untuk tidak melakukan pembelian lagi, program akan menampilkan pesan "Terima kasih telah menggunakan layanan pemesanan tiket kami."

Cara Kerja Program
Saat pengguna menjalankan program, mereka akan melihat pesan sambutan dan harga tiket.
Setelah memasukkan jenis tiket, jumlah tiket, dan hari pemesanan, program akan menghitung total harga berdasarkan input yang diberikan.
Jika total harga melebihi Rp150.000, diskon 10% akan diterapkan, dan pengguna akan diinformasikan tentang diskon tersebut.
Pengguna dapat memilih untuk melakukan pemesanan lagi atau keluar dari program.

Contoh Penggunaan
Pengguna memasukkan jenis tiket (dewasa/anak-anak).
Pengguna memasukkan jumlah tiket (misalnya 3).
Pengguna memasukkan hari pemesanan (misalnya Sabtu).
Program menghitung total harga dan menampilkan hasilnya.
Pengguna dapat memilih untuk melakukan pemesanan lagi atau keluar.
Program ini memberikan pengalaman interaktif dan informatif untuk pengguna yang ingin memesan tiket bioskop dengan cara yang sederhana dan efisien.
