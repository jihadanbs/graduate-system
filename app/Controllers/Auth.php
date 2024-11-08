<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;

class Auth extends BaseController
{

    protected $ModelAuth;
    public function __construct()
    {
        $this->ModelAuth = new ModelAuth();
    }

    public function login()
    {
        // $data = [
        //     'judul' => 'Login',
        //     'page'  => 'v_home'
        // ];
        return view('v_login');
        // return view('v_login', $data);
    }

    public function cekLogin()
    {
        if ($this->validate([
            'username' => [
                'label' => 'NPM/NIDN/Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'level' => [
                'label' => 'Hak Akses',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Belum Dipilih !'
                ]
            ]
        ])) {
            $level =  $this->request->getPost('level');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            if ($level == 'S') {
                # jika login Staff
                $cek_login = $this->ModelAuth->loginTendik($username, $password);
                if ($cek_login) {
                    session()->set('username', $cek_login['username']);
                    session()->set('nama_tendik', $cek_login['nama_tendik']);
                    session()->set('foto', $cek_login['foto']);
                    session()->set('level', 'S');
                    return redirect()->to('DashboardStaf');
                } else {
                    session()->setFlashdata('gagal', 'Username Atau Password Salah !');
                    return redirect()->to('Auth/login');
                }
            } elseif ($level == 'D') {
                # jika login Dosen
                $cek_login = $this->ModelAuth->loginDosen($username, $password);
                if ($cek_login) {
                    session()->set('nidn', $cek_login['nidn']);
                    session()->set('nama_dosen', $cek_login['nama_dosen']);
                    session()->set('level', 'D');
                    return redirect()->to('DashboardDosen');
                } else {
                    session()->setFlashdata('gagal', 'Username Atau Password Salah !');
                    return redirect()->to('Auth/login');
                }
            } elseif ($level == 'M') {
                # jika login Mahasiswa
                $cek_login = $this->ModelAuth->loginMahasiswa($username, $password);
                if ($cek_login) {
                    session()->set('npm', $cek_login['npm']);
                    session()->set('nama_mahasiswa', $cek_login['nama_mahasiswa']);
                    session()->set('foto', $cek_login['foto']);
                    session()->set('level', 'M');
                    return redirect()->to('DashboardMahasiswa');
                } else {
                    session()->setFlashdata('gagal', 'Username Atau Password Salah !');
                    return redirect()->to('Auth/login');
                }
            }
        } else {
            return redirect()->to('Auth/login')->withInput();
        }
    }

    public function logOut()
    {
        session()->remove('level');
        session()->remove('nama_user');
        session()->remove('nama_mahasiswa');
        session()->remove('npm');
        session()->remove('nidn');
        session()->remove('foto');
        session()->destroy();
        session()->setFlashdata('pesan', 'Logout Sukses !!');
        return redirect()->to('Auth/login');
    }
}
