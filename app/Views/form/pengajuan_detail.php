<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="bg-white p-5 shadow-lg rounded-lg">
    <a class="text-blue-500 hover:text-blue-700" href="/pengajuan"><i class="arrow left icon"></i> Kembali</a>
    <hr class="mb-5">
    <h2 class="text-2xl font-semibold mb-5">Detail Pengajuan Surat Rekomendasi Mahasiswa</h2>
    <div class="grid grid-cols-2 gap-5">
        <div class="bg-gray-100 p-4 rounded-lg">
            <h4 class="text-lg font-semibold">ID Pengajuan</h4>
            <p>SKM-<?= $pengajuan['id'] ?></p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg">
            <h4 class="text-lg font-semibold">Status Pengajuan</h4>
            <p><span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full">Disetujui</span></p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg">
            <h4 class="text-lg font-semibold">Tanggal Pengajuan</h4>
            <p><?= date('d F Y', strtotime($pengajuan['created_at'])) ?></p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg">
            <h4 class="text-lg font-semibold">Nama Lengkap</h4>
            <p><?= $pengajuan['nama_lengkap'] ?></p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg">
            <h4 class="text-lg font-semibold">NIM</h4>
            <p><?= $pengajuan['nim'] ?></p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg">
            <h4 class="text-lg font-semibold">Program Studi</h4>
            <p><?= $pengajuan['program_studi'] ?></p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg col-span-2">
            <h4 class="text-lg font-semibold">Pertanyaan</h4>
            <p><?= $pengajuan['pertanyaan'] ?></p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg col-span-2">
            <h4 class="text-lg font-semibold">Berkas Pendukung</h4>
            <p><a class="text-blue-500 hover:text-blue-700" href="<?= base_url('uploads/' . $pengajuan['berkas_pendukung']) ?>" target="_blank">Cek File</a></p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
