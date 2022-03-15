<?php
//contoh function tidak menggunakan parameter
function nama (){
    $nama = "Siti Sa'ada Tulfitri";
    echo " Nama saya adalah $nama";
};
//contoh function menggunakan parameter
function umur_kelas($age){
    $umur = $age - 2022;
    $kelas = "SI10";
    echo "<br/>Umur Saya Sekarang Adalah $umur <br/> Saya Kelas $kelas";
}
nama();
umur_kelas(2003);
?>