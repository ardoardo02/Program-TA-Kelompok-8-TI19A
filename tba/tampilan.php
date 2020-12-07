<?php
require 'fungsi.php';

if (isset($_POST['submit'])) {
  $str = $_POST['latin'];
  $arrLatin = str_split(strtolower($str));

  $aksara = "";

  $maxI = count($arrLatin);
  $i = 0;

  while ($i < $maxI) {
    $c1 = $arrLatin[$i];

    // -- Huruf Dasar -- //
    if (
      $c1 == 'h' || $c1 == 'n' || $c1 == 'c' || $c1 == 'r' || $c1 == 'k' || $c1 == 'd'
      || $c1 == 't' || $c1 == 's' || $c1 == 'w' || $c1 == 'l' || $c1 == 'p' || $c1 == 'j'
      || $c1 == 'y' || $c1 == 'm' || $c1 == 'g' || $c1 == 'b'
    ) {
      // 3 Karakter
      if (($i + 2) < $maxI) {
        if (dasar($c1, $arrLatin[$i + 1], $arrLatin[$i + 2])) {
          $hasil = dasar($c1, $arrLatin[$i + 1], $arrLatin[$i + 2]);
          $aksara .= $hasil[0];
          $i += $hasil[1];
        } else $i++;
      }
      // 2 Karakter
      elseif (($i + 1) < $maxI) {
        if (dasar($c1, $arrLatin[$i + 1])) {
          $hasil = dasar($c1, $arrLatin[$i + 1]);
          $aksara .= $hasil[0];
          $i += $hasil[1];
        } else $i++;
      } else $i++;
    }
    // -- Huruf Vokal -- //
    elseif ($c1 == 'a' || $c1 == 'i' || $c1 == 'u' || $c1 == 'e' || $c1 == 'o') {
      $aksara .= vokal($c1);
      $i++;
    }
    // -- Angka -- //
    elseif (
      $c1 == 1 || $c1 == 2 || $c1 == 3 || $c1 == 4 || $c1 == 5
      || $c1 == 6 || $c1 == 7 || $c1 == 8 || $c1 == 9 || $c1 == '0'
    ) {
      $aksara .= angka($c1);
      $i++;
    }
    // -- Spasi -- //
    elseif ($arrLatin[$i] == ' ') {
      $aksara .= ' ';
      $i++;
    }
    // -- Ga Ketemu -- //
    else {
      $i++;
    }
  }

  // -- PRINT -- //
  $latin = $_POST['latin'];
  $hasilAksara = $aksara;
}
?>

<!---------------------- HTML ---------------------->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Aksara Jawa</title>

  <style type="text/css">
    .bg-color {
      background-color: #ffa45b;
    }

    .nav-link {
      font-family: algerian;
      font-size: 30px;
    }
  </style>

  <nav class="navbar navbar-expand-lg navbar-light bg-color">
    <a class="navbar-brand" href="/tba/tampilan.php"><img src="img/logo.png" width="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link">Program Aksara Jawa<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <br>
  <center>
    <div class="col-md-8">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img\a.jpg" class="d-block w-100" width="100" height="300" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img\i.jpg" class="d-block w-100" width="100" height="300" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img\j.jpg" class="d-block w-100" width="100" height="300" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </center>

  <br>
  <div class="container">
    <form action="" method="POST">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <center>
              <h5><b>
                  <label for="LatinTextArea">Huruf Latin</label>
            </center>
            </h5></b>
            <textarea class="form-control" id="LatinTextArea" name="latin" rows="3"><?php if (isset($latin)) {
                                                                                      echo $latin;
                                                                                    } ?></textarea>
          </div>
        </div>


        <div class="col">
          <div class="form-group">
            <center>
              <h5><b>
                  <label for="AksaraTextArea">Aksara Jawa</label>
            </center>
            </h5></b>
            <textarea class="form-control" id="AksaraTextArea" name="aksara" rows="3" disabled placeholder="<?php if (isset($hasilAksara)) {
                                                                                                              echo $hasilAksara;
                                                                                                            } ?>"></textarea>
          </div>
        </div>
      </div>

      <center>
        <button type="submit" class="btn btn-info" name="submit">Terjemahkan</button>
      </center>
    </form>

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>

</html>