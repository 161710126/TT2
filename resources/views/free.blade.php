@extends('layouts.master6')
@extends('layouts.app')
@section('free')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">My Friends. <span class="text-muted">Armadi,Junika,Riski,Sepri.</span></h2>
          <p class="lead">Sahabat yang baik adalah orang yang sangat kita percayai dan membuat kita tenang bersamanya. Dia menjadi tempat berbagi kelelahan, berbagi kesedihan dan tidak pernah menjual rahasia diri kita..</p>
        </div>
        <div class="col-md-5">
          <?php
$image=glob("gambar/1.jpg");
for($i=0;$i<count($image);$i++)	
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">My Friends. <span class="text-muted">Saudara.</span></h2>
          <p class="lead">Dalam sebuah pertemuan pasti ada perpisahan. Namun, perpisahan yang sangat indah adalah ketika kita bergenggam tangan, dan berjanji, "Kita untuk selamanya kawan, walaupun jarak menjauh, waktu memisahkan kita, namun dirimu akan tetap terkenang dalam sanubariku.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
           <?php
$gg=glob("gambar/17.jpg");
for($i=0;$i<count($gg);$i++)	
{
	$double = $gg[$i];
?>
	<img src="<?php echo $double;?>" width="360" heigth="260"/?>
	<?php
}
	?>        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">My Friends. <span class="text-muted">Arendy,Armadi,Junika Dll.</span></h2>
          <p class="lead">Teman itu seperti bintang Tak selalu nampak Tapi selalu ada dihati, Sahabat akan selalu menghampiri ketika seluruh dunia menjauh Karena persahabatan itu seperti tangan dengan mata Saat tangan terluka, mata menangis Saat mata menangis, tangan menghapusnya.
.</p>
        </div>
        <div class="col-md-5">
            <?php
$ww=glob("gambar/18.jpg");
for($i=0;$i<count($ww);$i++)	
{
	$ampun = $ww[$i];
?>
	<img src="<?php echo $ampun;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

</body>
</html>
@endsection