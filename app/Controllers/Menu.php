<?php

namespace App\Controllers;

use App\Models\DaftarSDModel;
use App\Models\DaftarSMPModel;
use App\Models\DaftarSMAModel;
use App\Models\DaftarKuliahModel;
use App\Models\DaftarKerjaModel;
use App\Models\ListTemanModel;

class Menu extends BaseController
{
    public function profil(): string
    {
        return 
        view('templates/header') . 
        view('menu/profil') . 
        view('templates/footer');
    }

    public function daftar_teman(): string
    {
        $daftarSDModel = new DaftarSDModel();
        $daftarSMPModel = new DaftarSMPModel();
        $daftarSMAModel = new DaftarSMAModel();
        $daftarKuliahModel = new DaftarKuliahModel();
        $daftarKerjaModel = new DaftarKerjaModel();

        $data['temanSD'] = $daftarSDModel->getTemanWithKategori();
        $data['temanSMP'] = $daftarSMPModel->getTemanWithKategori();
        $data['temanSMA'] = $daftarSMAModel->getTemanWithKategori();
        $data['temanKuliah'] = $daftarKuliahModel->getTemanWithKategori();
        $data['temanKerja'] = $daftarKerjaModel->getTemanWithKategori();

        return 
        view('templates/header') . 
        view('menu/daftar-teman', $data) . 
        view('templates/footer');
    }

    public function list_teman(): string
    {
        $model = new ListTemanModel();
        $data['friends'] = $model->getFriendsByCategory();

        return 
        view('templates/header') . 
        view('menu/list-teman', $data) . 
        view('templates/footer');
    }

    public function tambah_teman(): string
    {
        return 
        view('templates/header') . 
        view('menu/tambah-teman') . 
        view('templates/footer');
    }

    public function tambah_teman_sd(): string
    {
        return 
        view('templates/header') . 
        view('menu/tambah-teman-sd') . 
        view('templates/footer');
    }

    public function simpan_teman_sd()
    {
        $daftarSDModel = new DaftarSDModel();

        $data = [
            'nama_teman_sd' => $this->request->getPost('nama_teman_sd'),
            'id_kategori_teman' => $this->request->getPost('id_kategori_teman')
        ];

        $daftarSDModel->simpanTeman($data);

        return redirect()->to('/')->with('message', 'Teman SD berhasil ditambahkan!');
    }

    public function tambah_teman_smp(): string
    {
        return 
        view('templates/header') . 
        view('menu/tambah-teman-smp') . 
        view('templates/footer');
    }

    public function simpan_teman_smp()
    {
        $daftarSMPModel = new DaftarSMPModel();

        $data = [
            'nama_teman_smp' => $this->request->getPost('nama_teman_smp'),
            'id_kategori_teman' => $this->request->getPost('id_kategori_teman')
        ];

        $daftarSMPModel->simpanTeman($data);

        return redirect()->to('/')->with('message', 'Teman SMP berhasil ditambahkan!');
    }

    public function tambah_teman_sma(): string
    {
        return 
        view('templates/header') . 
        view('menu/tambah-teman-sma') . 
        view('templates/footer');
    }

    public function simpan_teman_sma()
    {
        $daftarSMAModel = new DaftarSMAModel();

        $data = [
            'nama_teman_sma' => $this->request->getPost('nama_teman_sma'),
            'id_kategori_teman' => $this->request->getPost('id_kategori_teman')
        ];

        $daftarSMAModel->simpanTeman($data);

        return redirect()->to('/')->with('message', 'Teman SMA berhasil ditambahkan!');
    }

    public function tambah_teman_kuliah(): string
    {
        return 
        view('templates/header') . 
        view('menu/tambah-teman-kuliah') .
        view('templates/footer');
    }

    public function simpan_teman_kuliah()
    {
        $daftarKuliahModel = new DaftarKuliahModel();

        $data = [
            'nama_teman_kuliah' => $this->request->getPost('nama_teman_kuliah'),
            'id_kategori_teman' => $this->request->getPost('id_kategori_teman')
        ];

        $daftarKuliahModel->simpanTeman($data);

        return redirect()->to('/')->with('message', 'Teman kuliah berhasil ditambahkan!');
    }

    public function tambah_teman_kerja(): string
    {
        return 
        view('templates/header') . 
        view('menu/tambah-teman-kerja') . 
        view('templates/footer');
    }

    public function simpan_teman_kerja()
    {
        $daftarKerjaModel = new DaftarKerjaModel();

        $data = [
            'nama_teman_kerja' => $this->request->getPost('nama_teman_kerja'),
            'id_kategori_teman' => $this->request->getPost('id_kategori_teman')
        ];

        $daftarKerjaModel->simpanTeman($data);

        return redirect()->to('/')->with('message', 'Teman kerja berhasil ditambahkan!');
    }
}
