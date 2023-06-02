<?php
function connect()
{
    $conn = mysqli_connect('localhost', 'root', '', 'tubes_pw23') or
        die('KONEKSI KE DATABASE GAGAL!');
    return $conn;
}
function query($query)
{
    $conn = connect();
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
}

function registrasi($data) {
    $conn = connect();
  
    $username = $data['username'];
    $password = $data['password'];
    $nomor_hp =$data['nomor_hp'];
    $email    = $data['email'];
    $level    = $data['level'];
       
    $conn = new mysqli($username, $password, $nomor_hp, $email, $level );
    // memeriksa koneksi database
if ($conn ->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
    // menyimpan data tabel registrasi
    $sql ="INSERT INTO
    //             login
    //             VALUES
    //                 (null, '$username', '$password', '$nomor_hp', '$level',)";
            
            if($conn->query($sql) == TRUE) {
                echo "Data regitrasi berhasil disimpan. ";
            } else {
                echo "error: " .$sql . "<br>" . $conn->error;
            }

        // mysqli_query($conn, $query) or die(mysqli_error ($conn));
  
        // return mysqli_affected_rows($conn);
  
  }
