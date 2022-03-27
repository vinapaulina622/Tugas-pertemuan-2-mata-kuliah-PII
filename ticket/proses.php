<?php

include 'model.php';

if (isset($_POST['simpan_penumpang'])) {
    $id = $_POST['id_penumpang'];
    $nama = $_POST['nama_penumpang'];
    $tiket = $_POST['id_ticket'];

    $insert = new Model();
    $insert->insert($id, $nama, $tiket); 
    header('location:view_penjualan.php');
}

if (isset($_POST['edit_penumpang'])) {
    $id = $_POST['id_penumpang'];
    $nama = $_POST['nama_penumpang'];
    $tiket = $_POST['id_ticket'];

    $model = new Model();
    $model->update($id, $nama, $tiket); 
    header('location: view_penjualan.php');
}

if (isset($_GET['id_penumpang'])) {
    $id = $_GET['id_penumpang'];
    $model = new Model();
    $model->delete($id); header('location:view_penjualan.php');
}
