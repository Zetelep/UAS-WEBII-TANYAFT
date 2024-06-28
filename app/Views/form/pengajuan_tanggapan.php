<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="bg-white p-5 shadow-lg rounded-lg">
    <a class="text-blue-500 hover:text-blue-700 flex items-center mb-4" href="/pengajuan">
        <i class="arrow left icon mr-1"></i> Kembali
    </a>
    <hr class="mb-5">
    <h2 class="text-2xl font-semibold mb-5 text-center">Tanggapan Tanya FT</h2>
    <div class="mb-4">
        <table class="table-auto w-full">
            <tbody>
                <tr class="">
                    <th class="text-left p-2 w-1/4">Pertanyaan</th>
                    <td class="p-2">: <?= $pengajuan['pertanyaan'] ?></td>
                </tr>
                <?php if($pengajuan['berkas_pendukung']): ?>
                <tr class="">
                    <th class="text-left p-2"></th>
                    <td class="p-2">
                        <div class="bg-gray-100 p-2 rounded">
                            <a class="text-blue-500 hover:text-blue-700" href="<?= base_url('uploads/' . $pengajuan['berkas_pendukung']) ?>" target="_blank">Cek File</a>
                        </div>
                    </td>
                </tr>
                <?php endif; ?>
                <tr>
                    <th class="text-left p-2">Jawaban</th>
                    <td class="p-2">: ini adalah tanggapan</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
