 <textarea cols='170' rows='100'>
 <?php
$dir = "assets/images/L2";

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
     <div>
         <div class="mainflip">
             <div class="frontside">
                 <div class="card">
                     <div class="card-body text-center">
                         <p>
                             <img class="img-fluid" src="assets/images/L2/<?php echo $file ?>" alt="<?php echo $name ?>'s image" loading='lazy'/>
                         </p>
                         <h4 class="card-title"><?php echo $name ?></h4>
                         <p class="card-text"><?php echo $des ?></p>
                         <br />
                         <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-twitter"></i></a>
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