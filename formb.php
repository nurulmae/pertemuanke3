<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 mt-4">
        <form method="POST" action="formb.php">
          <div class="form-group row">
            <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
            <div class="col-8">
              <input id="uts" name="uts" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
            <div class="col-8">
              <input id="uas" name="uas" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label>
            <div class="col-8">
              <input id="tugas" name="tugas" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
        <?php

        $nilai1 = $_POST["uts"];
        $nilai2 = $_POST["uas"];
        $nilai3 = $_POST["tugas"];
        $kelulusan = rata3($nilai1,$nilai2,$nilai3);
        function rata3($nilaia = 1,$nilaib = 1,$nilaic = 1){

          $mean_nilai = ($nilaia + $nilaib + $nilaic)/3;

          if($mean_nilai < 70){
            $keterangan ="tidak lulus";
          }else{
            $keterangan ="lulus";
          }
          return $keterangan;

        }
        echo $kelulusan;
        
        
        ?>
         
             

      </div>
    </div>
  </div>
</body>

</html>