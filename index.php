<?php require ('inc/base.php')?>
<?php 
  $video_curr='0'; 
  $video_title='Otogadget | Situs yang doyan bahas-bahas ringan seputar otomotif dan gadget'; 
  $video_desc='Otogadget menyajikan video informasi seputar otomotif dan gadget terkini, test, review, harga, tips, modifikasi, dan komunitas.'; 
  
  $videotag_array[]=array('videotag_title'=>'otomotif');
  $videotag_array[]=array('videotag_title'=>'gadget');
?>
<?php require ($_SERVER['OG'].'inc/meta.php')?>
<?php require ($_SERVER['OG'].'inc/header.php')?>
<div class="rancak-container">
  <iframe width="560" height="315" class="rancak-player-full" src="https://www.youtube.com/embed/videoseries?list=PLX6nLBE9jIqj7J3zhDsCDl0eC2MWhRed5&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<?php require ($_SERVER['OG'].'inc/footer.php')?>
<?php require ($_SERVER['OG'].'inc/base-bottom.php')?>