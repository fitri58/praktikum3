<?php
require_once 'libfungsi.php';
//mengambil data yang telah di input
$proses = $_POST['proses'];
$nama_siswa = $_POST['name'];
$mata_kuliah =$_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = $uts + $uas + $tugas;
$nilai = $total/3;
$hasil_ujian = kelulusan($_nilai);


//if ($alphabet >= 85){
   // $grade = "A";
//}elseif($alphabet >= 70){
   // $grade = "B";
//}elseif($alphabet >= 56){
 //   $grade = "C";
//}elseif($alphabet >= 36){
 //   $grade = "D";
//}elseif ($alphabet >= 10){
    //$grade = "E";
//}else{
 //   $grade = "I(tidak ada nilai)";
//}

//menampilkan data
echo "Nama : $nama_siswa";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas : $tugas";
echo "<br/>Keterangan : $hasil_ujian";
//echo "<br/>Grade : $grade";
echo "<br/> Data Telah di $proses";
?>