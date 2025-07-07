<?php
include_once 'Models/Mahasiswa_model.php';

class Lahan
{
    var $db;
    function __construct()
    {
        $this->db = new Lahan_model();
    }

    function index()
    {
        $data = $this->db->getAllLahan();
        // print_r($data);
        require_once 'Views/index.php';
        require_once 'Views/navBar.php';
        require_once 'Views/Mahasiswa/index.php';
        require_once 'Views/footer.php';
    }

    function ViewTambahData()
    {
        // $data = $this->db->getAllData();
        require_once 'Views/header.php';
        require_once 'Views/navBar.php';
        require_once 'Views/Pengguna/tambahLahan.php';
        require_once 'Views/footer.php';
    }

    function tambahData($data)
    {
        $this->db->tambahData($data);
    }

    function hapus()
    {
        $id = $_GET['id'];
        $this->db->hapusLahan($id);
        header('Location: index.php?controller=Lahan'); // Redirect kembali ke daftar lahan
        exit();
    }
}
