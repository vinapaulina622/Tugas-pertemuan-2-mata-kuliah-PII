<?php

include 'model.php';

if (isset($_POST['simpan_ticket'])) {
    $id = $_POST['id_ticket'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $harga = $_POST['harga'];

    $insert = new Model();
    $insert->insert($id, $asal, $tujuan, $harga); 
    header('location:view_ticket.php');
}

if (isset($_POST['edit_ticket'])) {

    $id = $_POST['id_ticket'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $harga = $_POST['harga'];

    $model = new Model();
    $model->update($id, $asal, $tujuan, $harga); 
    header('location: view_ticket.php');
}

if (isset($_GET['id_ticket'])) {
    $id = $_GET['id_ticket'];
    $model = new Model();
    $model->delete($id); header('location:view_ticket.php');
    }