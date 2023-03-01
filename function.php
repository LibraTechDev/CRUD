<?php

require_once __DIR__ . "/Koneksi.php";
koneksi();

function ambilData()
{
    $koneksi = koneksi();
    $sql = "SELECT * FROM kegiatan_prima";
    $result = $koneksi->query($sql);
    
    return $result;
    
    
}
function ambilSatuData ($id_kegiatan)
{
    $koneksi = koneksi();
    $sql = "SELECT * FROM kegiatan_prima WHERE id_kegiatan= $id_kegiatan ";
    $result = $koneksi->query($sql);
    
    return $result;
}


function tambahData($kegiatan_prima, $batas_waktu)
{
    $koneksi = koneksi();
    $sql = "INSERT INTO `kegiatan_prima`(`nama_kegiatan`, `batas_waktu`) VALUES ('$kegiatan_prima','$batas_waktu')";
    $result = $koneksi->exec($sql);
    
    return $result;
}
function editData ($id_kegiatan,$kegiatan_prima, $batas_waktu) 
{
    $koneksi = koneksi();
    $sql = "UPDATE `kegiatan_prima` SET`nama_kegiatan`='$kegiatan_prima',`batas_waktu`='$batas_waktu' WHERE id_kegiatan= $id_kegiatan";
    $result = $koneksi->exec($sql);
    
    return $result;
}
function hapusData($id_kegiatan)
{
    $koneksi = koneksi();
    $sql = "DELETE FROM `kegiatan_prima` WHERE id_kegiatan= $id_kegiatan";
    $result = $koneksi->exec($sql);
    
    return $result;
}

?>