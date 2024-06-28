<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use CodeIgniter\Controller;

class PengajuanController extends Controller
{
    public function __construct()
    {
        // Memulai sesi
        session();
    }

    public function index()
    {
        $pengajuanModel = new PengajuanModel();
        $session = session();
        $user_id = $session->get('id');
        $data['pengajuan'] = $pengajuanModel->where('id_user', $user_id)->findAll();
        return view('form/pengajuan_list', $data);
    }

    public function create()
    {
        return view('form/pengajuan_form');
    }

    public function submit()
    {
        $pengajuanModel = new PengajuanModel();
        $session = session();
        $user_id = $session->get('id');

        if (!$user_id) {
            return redirect()->back()->with('error', 'User tidak ditemukan, silakan login terlebih dahulu.');
        }

        $file = $this->request->getFile('berkas_pendukung');
        $filePath = null;

        if ($file->isValid() && !$file->hasMoved()) {
            $filePath = $file->getRandomName();
            $file->move(FCPATH . 'uploads', $filePath);
        }   

        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'nim' => $this->request->getPost('nim'),
            'program_studi' => $this->request->getPost('program_studi'),
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'berkas_pendukung' => $filePath,
            'id_user' => $user_id,
        ];

        if ($pengajuanModel->save($data)) {
            return redirect()->to('/pengajuan')->with('success', 'Pertanyaan berhasil diajukan.');
        } else {
            return redirect()->back()->with('error', 'Gagal mengajukan pertanyaan.');
        }
    }

    public function detail($id)
    {
        $pengajuanModel = new PengajuanModel();
        $data['pengajuan'] = $pengajuanModel->find($id);
        return view('form/pengajuan_detail', $data);
    }

    public function tanggapan($id)
    {
        $pengajuanModel = new PengajuanModel();
        $data['pengajuan'] = $pengajuanModel->find($id);
        return view('form/pengajuan_tanggapan', $data);
    }

    public function eResponse()
    {
        $data['current_page'] = 'e_response';
        return view('e_response', $data);
    }


    public function dashboard()
    {
        return view('dashboard');
    }
}
