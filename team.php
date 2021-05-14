 <textarea cols='170' rows='100'>
 <?php
$dir = "assets/images/cie";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      $filename = $file;

$newFileName = substr($filename, 0 , (strrpos($filename, ".")));

$arfile = explode('-',$newFileName);
 $name = $arfile[0];
 $des = $arfile[1];
?>
 <!-- Team member -->
 <div class="col-xs-12 col-sm-6 col-md-4">
     <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
         <div class="mainflip">
             <div class="frontside">
                 <div class="card">
                     <div class="card-body text-center">
                         <p>
                             <img class="img-fluid" src="assets/images/cie/<?php echo $file ?>" alt="card image" />
                         </p>
                         <h4 class="card-title"><?php echo $name ?></h4>
                         <p class="card-text"><?php echo $des ?></p>
                         <br />
                         <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-twitter"></i></a>
                     </div>
                 </div>
             </div>
             <div class="backside">
                 <div class="card">
                     <div class="card-body text-center mt-4">
                         <h4 class="card-title"><?php echo $name ?></h4>
                         <p class="card-text">
                             Despacito Quiero respirar tu cuello despacito Deja que
                             te diga cosas al oído Para que te acuerdes si no estás
                             conmigo Despacito
                         </p>
                         <ul class="list-inline">
                             <li class="list-inline-item">
                                 <a class="social-icon text-xs-center" target="_blank" href="#">
                                     <i class="fa fa-twitter"></i>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- ./Team member -->
 <?php

    }
    closedir($dh);
  }
}
?>
</textarea>