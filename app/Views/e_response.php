<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="p-5 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold mb-4">Layanan e-Response</h2>
    <p class="mb-4">Inovasi Layanan Informasi dan Pengaduan FT ULM</p>

    <div class="flex justify-end mb-5">
        <div class="relative">
            <select class="border rounded-lg py-2 px-3">
                <option>Nama Layanan (A-Z)</option>
                <option>Nama Layanan (Z-A)</option>
            </select>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-5">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
            <img src="<?= base_url('laporft.png'); ?>" class="w-full h-32 object-cover" alt="Lapor FT">
            <div class="p-5">
                <h5 class="text-lg font-semibold">Lapor FT</h5>
                <p class="text-gray-500">Layanan ini digunakan untuk menyampaikan keluhan atau saran di lingkungan Fakultas Teknik Universitas Lambung Mangkurat.</p>
            </div>
        </div>
        <a href="/pengajuan" class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
            <img src="<?= base_url('tanyaft.png'); ?>" class="w-full h-32 object-cover" alt="Tanya FT">
            <div class="p-5">
                <h5 class="text-lg font-semibold">Tanya FT</h5>
                <p class="text-gray-500">Layanan ini disediakan untuk menyampaikan permohonan informasi publik terkait Fakultas Teknik ULM.</p>
            </div>
        </a>
    </div>
</div>
<?= $this->endSection() ?>
