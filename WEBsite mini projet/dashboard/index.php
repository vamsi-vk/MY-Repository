<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<div class="container my-5" style="width:500px;">
       <ul class="list-group">
      <li class="list-group-item active" aria-current="true">An active item</li>
  
  <?php
$name=$_POST['note'];
$fs=fopen("data/vk.text",'a+');
fwrite($fs,"$name.\n");

fclose($fs);

$file = fopen("data/vk.text", "r");

$file = file("data/vk.text");
$file = array_reverse($file);
foreach($file as $f){
    echo '<a href="#"><li class="list-group-item">'.$f.'</li><a>';
};
 ?>

</ul>
</div>
</body>
</html>
