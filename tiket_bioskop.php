<?php
// Definisikan harga tiket per jenis
const HARGA_TIKET_DEWASA = 50000;
const HARGA_TIKET_ANAK = 30000;
const BIAYA_AKHIR_PEKAN = 10000;
const BATAS_DISKON = 150000;
const PERSENTASE_DISKON = 0.10;

// Fungsi untuk menghitung harga tiket berdasarkan jenis dan hari
function hitungHargaTiket($jenisTiket, $jumlahTiket, $hariPemesanan) {
    // Tentukan harga dasar tiket
    if ($jenisTiket == "dewasa") {
        $hargaTiket = HARGA_TIKET_DEWASA;
    } elseif ($jenisTiket == "anak-anak") {
        $hargaTiket = HARGA_TIKET_ANAK;
    } else {
        echo "Jenis tiket tidak valid.\n";
        return;
    }

    // Tambahkan biaya akhir pekan jika hari adalah Sabtu atau Minggu
    if (strtolower($hariPemesanan) == "sabtu" || strtolower($hariPemesanan) == "minggu") {
        $hargaTiket += BIAYA_AKHIR_PEKAN;
    }

    // Hitung total harga sebelum diskon
    $totalHarga = $hargaTiket * $jumlahTiket;

    // Terapkan diskon jika total harga melebihi batas diskon
    if ($totalHarga > BATAS_DISKON) {
        $totalHarga -= $totalHarga * PERSENTASE_DISKON;
        echo "Anda mendapatkan diskon 10%!\n";
    }

    return $totalHarga;
}

// Menampilkan harga tiket kepada pengguna
function tampilkanHargaTiket() {
    echo "Harga Tiket:\n";
    echo "- Tiket Dewasa: Rp" . number_format(HARGA_TIKET_DEWASA, 0, ',', '.') . "\n";
    echo "- Tiket Anak-Anak: Rp" . number_format(HARGA_TIKET_ANAK, 0, ',', '.') . "\n";
    echo "Biaya tambahan akhir pekan: Rp" . number_format(BIAYA_AKHIR_PEKAN, 0, ',', '.') . " (Sabtu dan Minggu)\n";
    echo "Diskon 10% untuk total harga di atas Rp" . number_format(BATAS_DISKON, 0, ',', '.') . "\n";
}

// Menyambut pengguna
echo "Selamat datang di sistem pemesanan tiket bioskop!\n";

// Loop utama untuk pemesanan ulang
do {
    // Menampilkan harga tiket
    tampilkanHargaTiket();

    // Menerima input dari pengguna
    echo "Masukkan jenis tiket (dewasa/anak-anak): ";
    $jenisTiket = trim(fgets(STDIN));

    echo "Masukkan jumlah tiket: ";
    $jumlahTiket = (int) trim(fgets(STDIN));

    echo "Masukkan hari pemesanan: ";
    $hariPemesanan = trim(fgets(STDIN));

    // Hitung total harga
    $totalHarga = hitungHargaTiket($jenisTiket, $jumlahTiket, $hariPemesanan);

    // Tampilkan total harga jika valid
    if ($totalHarga !== null) {
        echo "Total harga pemesanan Anda adalah: Rp" . number_format($totalHarga, 0, ',', '.') . "\n";
    }

    // Menanyakan apakah ingin melakukan pembelian lagi
    echo "Apakah Anda ingin melakukan pembelian lagi? (ya/tidak): ";
    $lagi = trim(fgets(STDIN));

} while (strtolower($lagi) == "ya");

echo "Terima kasih telah menggunakan layanan pemesanan tiket kami.\n";
?>