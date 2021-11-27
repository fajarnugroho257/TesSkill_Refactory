<?php
// Include file gpconfig
include_once 'gpconfig.php';
if(isset($_GET['code'])){
  $gclient->authenticate($_GET['code']);
  $_SESSION['token'] = $gclient->getAccessToken();
  header('Location: ' . filter_var($redirect_url, FILTER_SANITIZE_URL));
}
if (isset($_SESSION['token'])) {
  $gclient->setAccessToken($_SESSION['token']);
}
if ($gclient->getAccessToken()) {
  include 'koneksi.php';
  // Get user profile data from google
  $gpuserprofile = $google_oauthv2->userinfo->get();
  echo "<pre>";
  print_r($gpuserprofile);
  // die;
  $id = $gpuserprofile['id'];
  $email = $gpuserprofile['email'];
  $nama = $gpuserprofile['name'];
  $nama_depan = $gpuserprofile['given_name'];
  $nama_belakang = $gpuserprofile['family_name'];
  $locale = $gpuserprofile['locale'];

  $sql = $pdo->prepare("SELECT id, username, nama FROM user WHERE email= '$email'");
  
  $sql->execute();
  $user = $sql->fetch();
  // echo "<pre>";
  // print_r($user);
  // die;
  if(empty($user)){ // Jika User dengan email tersebut belum ada
    // Ambil username dari kata sebelum simbol @ pada email
    $ex = explode('@', $email); // Pisahkan berdasarkan "@"
    $username = $ex[0]; // Ambil kata pertama
    // Lakukan insert data user baru tanpa password
    $sql = $pdo->prepare("INSERT INTO user(id,username,nama,email,nama_depan,nama_belakang,locale) VALUES('$id','$username','$nama','$email','$nama_depan','$nama_belakang','$locale')");
    $sql->execute(); // Eksekusi query insert
    $id = $pdo->lastInsertId(); // Ambil id user yang baru saja di insert
  }else{
    $id = $user['id']; // Ambil id pada tabel user
    $username = $user['username']; // Ambil username pada tabel user
    $nama = $user['nama']; // Ambil username pada tabel user
  }
  $_SESSION['id'] = $id;
  $_SESSION['username'] = $username;
  $_SESSION['nama'] = $nama;
  $_SESSION['email'] = $email;
  header("location: welcome.php");
} else {
  $authUrl = $gclient->createAuthUrl();
  header("location: ".$authUrl);
}
?>