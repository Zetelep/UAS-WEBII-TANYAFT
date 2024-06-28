<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="bg-white p-5 shadow-lg rounded-lg">
    <a class="text-blue-500 hover:text-blue-700 flex items-center mb-4" href="/pengajuan">
        <i class="arrow left icon mr-1"></i> Kembali
    </a>
    <hr class="mb-5">
    <h2 class="text-2xl font-semibold mb-5 text-center">Tambah Pengajuan Tanya FT</h2>
    <form class="space-y-4" action="/pengajuan/submit" method="post" enctype="multipart/form-data">
        <div>
            <label class="block text-gray-700">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required class="w-full p-2 border rounded">
        </div>
        <div>
            <label class="block text-gray-700">NIM</label>
            <input type="text" name="nim" placeholder="NIM" required class="w-full p-2 border rounded">
        </div>
        <div>
            <label class="block text-gray-700">Program Studi</label>
            <select name="program_studi" required class="w-full p-2 border rounded">
                <option value="">Pilih Program Studi</option>
                <option value="Teknologi Informasi">Teknologi Informasi</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Kimia">Teknik Kimia</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Teknik Geologi">Teknik Geologi</option>
                <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </select>
        </div>
        <div>
            <label class="block text-gray-700">Pertanyaan</label>
            <textarea name="pertanyaan" placeholder="Masukkan Pertanyaan" required class="w-full p-2 border rounded"></textarea>
        </div>
        <div>
            <label class="block text-gray-700">Berkas Pendukung</label>
            <div class="border border-gray-300 p-2 rounded bg-gray-100">
                <input type="file" name="berkas_pendukung" accept=".jpg,.jpeg,.png,.pdf" class="w-full">
                <small class="text-gray-500">* Upload file dengan format jpg, png, jpeg maksimal 2 MB</small>
            </div>
        </div>
        <div class="flex justify-between">
            <button type="button" class="bg-gray-200 text-gray-700 p-2 rounded hover:bg-gray-300" onclick="window.location.href='/pengajuan'">Batal</button>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Kirim</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
