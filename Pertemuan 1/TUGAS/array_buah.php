<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
      <?php
$ns1 = ['id'=>1,'nama'=>'anggur','warna'=>'Green','stock'=>'10 kg','harga'=>'Rp.15,000,00/kg','deskripsi'=>' termasuk ke dalam genus Mangifera, yang terdiri dari 35-40 anggota dari famili Anacardiaceae.'];
$ns2 = ['id'=>2,'nama'=>'melon','warna'=>'Yellow','stock'=>'12kg','harga'=>'Rp.20,000,00/kg','deskripsi'=>'Buah apel untuk tujuan komersial dapat disimpan selama berbulan-bulan dalam kamar yang beratmosfer'];
$ns3 = ['id'=>3,'nama'=>'blubery','warna'=>'Red','stock'=>'56 kg','harga'=>'Rp.18,000,00/kg','deskripsi'=>'salah satu buah yang paling banyak digunakan baik dalam gastronomi asin'];
$ns4 = ['id'=>4,'nama'=>'Anggur','warna'=>'Purple','stock'=>'24 kg','harga'=>'Rp.25,000,00/kg','deskripsi'=>'Buah ini juga dikenal karena mengandung banyak senyawa polifenol dan resveratol '];

$ar_buah = [$ns1, $ns2 , $ns3, $ns4];
$number = 1;
foreach($ar_buah as $ns){
echo '<tr><td>'.$number.'</td>';
echo '<td>'.$ns['nama'].'</td>';
echo '<td>'.$ns['warna'].'</td>';
echo '<td>'.$ns['stock'].'</td>';
echo '<td>'.$ns['harga'].'</td>';
echo '<td>'.$ns['deskripsi'].'</td>';
$number++;
}
?>
</tbody>
</table>
      </tbody>
    </table>
  </div>
</body>
</html>