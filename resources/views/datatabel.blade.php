@extends('layouts.master3')
@extends('layouts.app')
@section('datatabel')
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">

<body background="gambar/junika.png">

      <div class="page-header">
        <center><h1>Data Table</h1></center>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
<tr>
              <tr>
              <center>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Alamat</th>
                <th>cita-cita</th>
                <th>Hobi</th>
                <th>Photo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1233</td>
                <td>Junika</td>
                <td>Palembang</td>
                <td>2001-06-01</td>
                <td>Bandung</td>
                <td>Tentara</td>
                <td>Olahraga</td>
                <td><?php
$image=glob("gambar/22.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</td>
              </tr>
              <tr>
                <td>4532</td>
                <td>Kiki Laela</td>
                <td>Bandung</td>
                <td>2001-01-19</td>
                <td>Bandung</td>
                <td>polwan</td>
                <td>Renang</td>
                <td><?php
$image=glob("gambar/33.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</center>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      </div>
</div>
</div>
</body>
</html>
@endsection