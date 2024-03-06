<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */

  $fruits = [
    [
        "id" => 1,
        "fname" => "apel",
        "fcolor" => "merah",
        "fstock" => 200,
        "fprice" => "Rp 25.000/kg",
        "fdesc" => "buah ini rasanya enak, fresh, berwarna merah."
    ],

    [
        "id" => 2,
        "fname" => "manggis",
        "fcolor" => "ungu",
        "fstock" => 150,
        "fprice" => "Rp 20.000/kg",
        "fdesc" => "buah ini rasanya sedikit asam, berair, berwarna ungu kehitaman."
    ],

    [
        "id" => 3,
        "fname" => "kiwi",
        "fcolor" => "coklat",
        "fstock" => 250,
        "fprice" => "Rp 15.000/kg",
        "fdesc" => "buah ini memiliki kulit  coklat, berbulu dan daging buah berwarna hijau, rasanya asam dan segar."
    ],

    [
        "id" => 4,
        "fname" => "belimbing",
        "fcolor" => "kuning",
        "fstock" => 100,
        "fprice" => "Rp 30.000/kg",
        "fdesc" => "buah ini mengandung banyak air dan bentuk yang unik seperti bintang jika dipotong. jika dimakan rasanya manis dan ada feel asamnya sedikit."
    ],

    [
        "id" => 5,
        "fname" => "durian",
        "fcolor" => "coklat",
        "fstock" => 50,
        "fprice" => "Rp 50.000",
        "fdesc" => "buah ini memiliki kulit yang keras, berduri tajam dan bau yang menyengat. namun memiliki rasa yang enak dan unik bagi sebagian orang."
    ]
];
?>

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
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */

          foreach ($fruits as $fruit) {
            echo '<tr>';

            echo '<td>';
            echo $fruit["id"];
            echo '</td>';

            echo '<td>';
            echo $fruit["fname"];
            echo '</td>';

            echo '<td>';
            echo $fruit["fcolor"];
            echo '</td>';

            echo '<td>';
            echo $fruit["fstock"];
            echo '</td>';

            echo '<td>';
            echo $fruit["fprice"];
            echo '</td>';

            echo '<td>';
            echo $fruit["fdesc"];
            echo '</td>';

            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>