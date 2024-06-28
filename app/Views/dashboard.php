<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="info-card mb-5">
    <i class="fas fa-tachometer-alt"></i>
    <div>
        <h4 class="text-xl font-semibold">Dashboard</h4>
        <p class="text-gray-500">Akses menu dan informasi penting lainnya di sini</p>
    </div>
</div>
<div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-5" role="alert">
    <p class="font-bold">Kamu belum mengisi kuisioner pada periode semester ini, Silahkan isi Kuisioner <a href="#" class="underline text-blue-500">Disini</a></p>
    <p>Kamu tidak dapat melakukan pengajuan layanan jika belum mengisi kuisioner. Oleh karena itu, kami mengharapkan agar setiap mahasiswa mengisi kuisioner pada awal setiap semester sebagai bagian dari proses yang diperlukan untuk memberikan pelayanan yang terbaik dan peningkatan kualitas serta evaluasi layanan FT ULM.</p>
</div>
<div class="bg-blue-500 text-white p-5 rounded-lg mb-5 welcome-container">
    <div class="welcome-text">
        <h4 class="text-xl font-semibold">Selamat Datang <?= session()->get('username');?></h4>
        <p>Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya</p>
    </div>
    <div class="welcome-image">
        <img src="<?= base_url('orang.png'); ?>" alt="Welcome Image">
    </div>
</div>
<div class="grid grid-cols-4 gap-5 mb-5">
    <div class="bg-white p-5 shadow-lg rounded-lg text-center transition transform hover:scale-105 cursor-pointer">
        <h5 class="text-2xl font-semibold">10</h5>
        <p class="text-gray-500">Layanan diajukan</p>
    </div>
    <div class="bg-white p-5 shadow-lg rounded-lg text-center transition transform hover:scale-105 cursor-pointer">
        <h5 class="text-2xl font-semibold">0</h5>
        <p class="text-gray-500">Menunggu persetujuan</p>
    </div>
    <div class="bg-white p-5 shadow-lg rounded-lg text-center transition transform hover:scale-105 cursor-pointer">
        <h5 class="text-2xl font-semibold">0</h5>
        <p class="text-gray-500">Layanan disetujui</p>
    </div>
    <div class="bg-white p-5 shadow-lg rounded-lg text-center transition transform hover:scale-105 cursor-pointer">
        <h5 class="text-2xl font-semibold">0</h5>
        <p class="text-gray-500">Layanan ditolak</p>
    </div>
</div>
<h5 class="text-xl font-semibold mb-5">Mungkin yang kamu butuhkan</h5>
<div class="grid grid-cols-3 gap-5">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
        <img src="<?= base_url('skl.png'); ?>" class="w-full h-32 object-cover">
        <div class="p-5">
            <h5 class="text-lg font-semibold">Surat Keterangan Lulus</h5>
            <p class="text-gray-500">Dapatkan Surat Kelulusan dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus kami.</p>
        </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
        <img src="<?= base_url('pkl.png'); ?>" class="w-full h-32 object-cover">
        <div class="p-5">
            <h5 class="text-lg font-semibold">Surat Pengantar Izin PKL</h5>
            <p class="text-gray-500">Bergabunglah dalam Pengalaman Belajar di Dunia Nyata, dapatkan Surat Pengantar Izin PKL.</p>
        </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
        <img src="<?= base_url('izinpenelitian.png'); ?>" class="w-full h-32 object-cover">
        <div class="p-5">
            <h5 class="text-lg font-semibold">Surat Pengantar Izin Penelitian</h5>
            <p class="text-gray-500">Mendapatkan Izin Penelitian dengan Mudah melalui Layanan Pengajuan Surat Pengantar Izin Penelitian.</p>
        </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
        <img src="<?= base_url('permintaandata.png'); ?>" class="w-full h-32 object-cover">
        <div class="p-5">
            <h5 class="text-lg font-semibold">Permintaan Data MK/PKL/TA</h5>
            <p class="text-gray-500">Pengajuan Surat Permintaan Data Mata Kuliah / Praktik Kerja Lapangan / Tugas Akhir Mahasiswa FT ULM.</p>
        </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
        <img src="<?= base_url('surattugas.png'); ?>" class="w-full h-32 object-cover">
        <div class="p-5">
            <h5 class="text-lg font-semibold">Surat Tugas KP/TA</h5>
            <p class="text-gray-500">Pengajuan Surat Tugas untuk Kerja Praktik / Tugas Akhir Mahasiswa Fakultas Teknik Universitas Lambung Mangkurat.</p>
        </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
        <img src="<?= base_url('mbkm.png'); ?>" class="w-full h-32 object-cover">
        <div class="p-5">
            <h5 class="text-lg font-semibold">MBKM FT ULM</h5>
            <p class="text-gray-500">Layanan ini digunakan untuk pendataan dan penerbitan Surat Tugas pelaksanaan program MBKM FT ULM.</p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
