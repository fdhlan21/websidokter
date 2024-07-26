<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubDokumenKontrak extends CI_Controller
{


    function __construct()
    {

        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Jumantik';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();

        // Cek role_id pengguna
        if ($data['memberadmin']['role_id'] == 1) {
            // Jika role_id adalah 1 (admin), tampilkan view admin
            $this->load->view('templates/header', $data);
            $this->load->view('topbar', $data);
            $this->load->view('page/subdokumenkontrak/index', $data);
            $this->load->view('templates/footer');
        } elseif ($data['memberadmin']['role_id'] == 2) {
            // Jika role_id adalah 2 (user), tampilkan view user
            $this->load->view('templates/header', $data);
            $this->load->view('topbar', $data);
            $this->load->view('page/berita/berita', $data);
            $this->load->view('templates/footer');
        } else {
            // Jika role_id tidak valid, tampilkan pesan error
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/error', $data);
            $this->load->view('templates/footer');
        }
    }

    public function add()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/jumantik/add', $data);
        $this->load->view('templates/footer');
    }


    public function cover()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/cover', $data);
        $this->load->view('templates/footer');
    }


    
    public function risalah()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/risalah', $data);
        $this->load->view('templates/footer');
    }

    public function nota()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/nota', $data);
        $this->load->view('templates/footer');
    }


    public function dinas()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/dinas', $data);
        $this->load->view('templates/footer');
    }


    public function baserah()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/baserah', $data);
        $this->load->view('templates/footer');
    }


    public function baserahdua()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/baserahdua', $data);
        $this->load->view('templates/footer');
    }


    public function baserahtiga()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/baserahtiga', $data);
        $this->load->view('templates/footer');
    }


    
    public function baserahempat()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/baserahempat', $data);
        $this->load->view('templates/footer');
    }


    public function bapenyerahan()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/bapenyerahan', $data);
        $this->load->view('templates/footer');
    }

    
    public function bapenyerahandua()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/bapenyerahandua', $data);
        $this->load->view('templates/footer');
    }

    public function bapsurattanggung()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/bapsurattanggung', $data);
        $this->load->view('templates/footer');
    }

    public function bapsurattanggungdua()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/bapsurattanggungdua', $data);
        $this->load->view('templates/footer');
    }


    public function kwitansiatk()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/kwitansiatk', $data);
        $this->load->view('templates/footer');
    }



    
    public function kwitansiatkdua()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/kwitansiatkdua', $data);
        $this->load->view('templates/footer');
    }


    public function suratkelengkapan()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/suratkelengkapan', $data);
        $this->load->view('templates/footer');
    }

    public function suratkelengkapandua()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/suratkelengkapandua', $data);
        $this->load->view('templates/footer');
    }

    public function suratkelengkapantiga()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/suratkelengkapantiga', $data);
        $this->load->view('templates/footer');
    }


    public function suratkelengkapanempat()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/suratkelengkapanempat', $data);
        $this->load->view('templates/footer');
    }


    public function suratkelengkapanlima()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/suratkelengkapanlima', $data);
        $this->load->view('templates/footer');
    }



    public function suratkelengkapanenam()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/subdokumenkontrak/suratkelengkapanenam', $data);
        $this->load->view('templates/footer');
    }















    public function edit()

    {
        $data['title'] = 'KING FC - Edit Kontak';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/kontak/edit', $data);
        $this->load->view('templates/footer');
    }

}
