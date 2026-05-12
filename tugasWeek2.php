<?php

$mahasiswa = [
    'nama' => 'Ihsan Dwika Putra',
    'prodi' => 'Informatika',
    'fakultas' => 'Fakultas Informatika',
    'sisa_uang' => 1000000000,
    'hutang_perpustakaan' => true,
    'ipk' => 3.67
];

echo "Nama: " . $mahasiswa['nama'] . "\n";
echo "<br>Prodi: " . $mahasiswa['prodi'] . "\n";
echo "<br>Fakultas: " . $mahasiswa['fakultas'] . "\n";
echo "<br>Sisa Uang: Rp " . $mahasiswa['sisa_uang'] . "\n";
echo "<br>Hutang Perpustakaan: " . ($mahasiswa['hutang_perpustakaan'] ? 'Ya' : 'Tidak') . "\n";
echo "<br>IPK: " . $mahasiswa['ipk'] . "\n\n";

$jumlah_sks = 20;
$harga_per_sks = 150000;

$total_tagihan = $jumlah_sks * $harga_per_sks;
$sisa_uang_akhir = $mahasiswa['sisa_uang'] - $total_tagihan;
echo "<br> ";

echo "<br>Jumlah SKS: " . $jumlah_sks . "\n";
echo "<br>Harga per SKS: Rp " .$harga_per_sks . "\n";
echo "<br>Total Tagihan: Rp " . $total_tagihan . "\n";
echo "<br>Sisa Uang Akhir: Rp " . $sisa_uang_akhir . "\n\n";

function cekKeuangan($sisa_duit) {
    if ($sisa_duit >= 0) {
        return "Lunas, Bisa ambil KRS";
    } else {
        return "Ditolak, Uang kurang!";
    }
}

$hasil_cek_keuangan = cekKeuangan($sisa_uang_akhir);
echo "<br> ";

echo "<br>Hasil: " . $hasil_cek_keuangan . "\n\n";

echo "<br> ";

$kondisi_1 = ($mahasiswa['ipk'] > 3.0 && $sisa_uang_akhir >= 0);
$kondisi_2 = ($mahasiswa['hutang_perpustakaan'] === true && $sisa_uang_akhir >= 0);

if ($kondisi_1 || $kondisi_2) {
    echo "<br>Status: LOLOS VERIFIKASI KRS \n";
    echo "<br>Mahasiswa memenuhi syarat akademik dan keuangan.\n";
} else {
    echo "<br>Status: TIDAK LOLOS VERIFIKASI KRS \n";
    echo "<br>Mahasiswa tidak memenuhi syarat akademik atau keuangan.\n";
}

?>