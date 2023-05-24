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
    
<form action="{{ route('praktikum8/tabel') }}" method="post" class="m-5">
@csrf
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tp" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
    <div class="col-8">
      <input id="tp" name="tp" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl" class="col-4 col-form-label">Tanggal Lahir/Usia</label> 
    <div class="col-8">
      <input id="tgl" name="tgl" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <select id="jk" name="jk" class="custom-select">
        <?php foreach($jk as $p) { ?>
            <option value="<?=$p; ?>"> <?= $p ?></option>
        <?php } ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

</body>
</html>