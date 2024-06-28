<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="bg-white p-5 shadow-lg rounded-lg mb-5">
    <a class="ui button primary custom-button mb-3" href="/eresponse"><i class="arrow left icon"></i> Kembali</a>
    <hr class="mb-5">
    <div class="flex mb-5">
        <div class="w-1/2 pr-5">
            <img class="w-full h-48 object-cover rounded-lg" src="<?= base_url('tanyaft.png'); ?>" alt="Tanya FT">
        </div>
        <div class="w-1/2">
            <h1 class="text-2xl font-semibold mb-2">Tanya FT</h1>
            <p class="text-gray-600">Layanan ini disediakan untuk menyampaikan permohonan informasi publik terkait Fakultas Teknik ULM</p>
        </div>
    </div>
    <div class="mb-5">
        <h3 class="text-xl font-semibold mb-2">Deskripsi</h3>
        <p class="text-gray-600">
            TANYA FT merupakan Layanan Informasi Publik FT ULM. Layanan ini disediakan bagi para pihak untuk menyampaikan permohonan informasi publik terkait Fakultas Teknik Universitas Lambung Mangkurat. Setiap permohonan dikelola oleh Unit Layanan Administrasi Terpadu FT ULM sebagai pelaksana tugas Pejabat Pengelola Informasi dan Dokumentasi (PPID) FT ULM dan didistribusikan kepada Kelompok Kerja (POKJA) yang berkaitan atau langsung kepada Pimpinan FT ULM secara daring (online). Jawaban/Tanggapan dapat dipantau melalui fitur status pengajuan.
        </p>
    </div>
    <div class="flex justify-end mb-5">
        <a class="inline-block bg-blue-500 text-white text-sm px-3 py-4 rounded-full hover:bg-blue-600" href="/pengajuan/create"><i class="plus icon"></i> Tambah Pengajuan</a>
    </div>
    <h3 class="text-xl font-semibold mb-2">Tabel Pengajuan</h3>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
            <thead class="bg-gray-50">
                <tr>
                    <th class="py-3 px-6 text-left">No</th>
                    <th class="py-3 px-6 text-left">ID Pengajuan</th>
                    <th class="py-3 px-6 text-left">Jenis Pengajuan</th>
                    <th class="py-3 px-6 text-left">Tanggal Pengajuan</th>
                    <th class="py-3 px-6 text-left">Status</th>
                    <th class="py-3 px-6 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pengajuan as $index => $item): ?>
                    <tr class="border-t">
                        <td class="py-3 px-6"><?= $index + 1 ?></td>
                        <td class="py-3 px-6">TNY-<?= $item['id'] ?></td>
                        <td class="py-3 px-6">Tanya FT</td>
                        <td class="py-3 px-6"><?= date('d F Y', strtotime($item['created_at'])) ?></td>
                        <td class="py-3 px-6">
                            <span class="inline-block bg-green-100 text-green-800 text-sm px-2 py-1 rounded-full">Disetujui</span>
                        </td>
                        <td class="py-3 px-6">
                            <a class="inline-block bg-blue-500 text-white text-sm px-2 py-1 rounded-full hover:bg-blue-600" href="/pengajuan/detail/<?= $item['id'] ?>"><i class="eye icon"></i> Detail</a>
                            <a class="inline-block bg-yellow-500 text-white text-sm px-2 py-1 rounded-full hover:bg-yellow-600" href="/pengajuan/tanggapan/<?= $item['id'] ?>"><i class="comments icon"></i> Tanggapan</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
