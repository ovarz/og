<?php require ('inc/base.php')?>
<?php require ($_SERVER['OG'].'inc/meta.php')?>

<style>
  .rancak-redirect{min-height:100vh; background-color:#000; color:var(--bg-1);}
  .rancak-redirect-box{width:100%;}
  .rrb-video{position:relative; line-height:0; width:100%; max-height:377px;}
  .rrb-video:before{content:''; display:block; padding-top:56.25%;}
  .rrb-video video{position:absolute; top:0; left:0; width:100%; height:100%;}
  .rrb-image{fill:var(--bg-1); margin:0 auto; text-align:center;}
  .rrb-frame{display:grid; grid-gap:3px; grid-template-columns:repeat(9,auto); transition:var(--transition-default);}
  .rrb-frame svg{transition:var(--transition-default); width:auto; height:var(--size-5); grid-row:1/2;
  animation-duration:2s; animation-iteration-count:1; animation-timing-function:ease; animation-fill-mode:forwards;}
  .rrb-frame .letter-5{animation-name:letter-5;}
  .rrb-frame .letter-6{animation-name:letter-6;}
  .rrb-frame .letter-7{animation-name:letter-7;}
  .rrb-frame .letter-8{animation-name:letter-8;}
  .rrb-frame .letter-9{animation-name:letter-9;}
  .rrb-note{padding:0 var(--size-4); text-align:center; margin:var(--size-3) 0;}
  .rrb-button-link{padding:var(--size-3) var(--size-4); background-color:var(--color-default-3); color:var(--bg-2); font-weight:bold;}
  .rrb-button-link:hover{background-color:var(--color-default-1); color:var(--bg-1);}
  @keyframes letter-5{
    0%{opacity:1;}
	40%{opacity:1;}
	50%{opacity:0;}
	60%{opacity:0; display:none;}
	100%{opacity:0; display:none;}
  }
  @keyframes letter-6{
    0%{opacity:1;}
	50%{opacity:1;}
	60%{opacity:0;}
	70%{opacity:0; display:none;}
	100%{opacity:0; display:none;}
  }
  @keyframes letter-7{
    80%{grid-column:auto;}
    90%{grid-column:4/5;}
    100%{grid-column:4/5;}
  }
  @keyframes letter-8{
    0%{opacity:1;}
	60%{opacity:1;}
	70%{opacity:0; display:none;}
	100%{opacity:0; display:none;}
  }
  @keyframes letter-9{
    0%{opacity:0;}
	70%{opacity:0; display:block;}
	80%{opacity:1;}
	100%{opacity:1;}
  }
</style>
<div class="rancak-redirect content_center">
  <div class="rancak-redirect-box">
    <!--
    <div class="rrb-video">
      <video width="360" height="360" autoplay muted loop>
        <source src="img/video.mp4" type="video/mp4">
      </video>
	</div>
	-->
	<div class="rrb-image content_center">
	  <div class="rrb-frame">
	    <?php require ($_SERVER['OG'].'img/og/letter-1.svg')?>
	    <?php require ($_SERVER['OG'].'img/og/letter-2.svg')?>
	    <?php require ($_SERVER['OG'].'img/og/letter-3.svg')?>
	    <?php require ($_SERVER['OG'].'img/og/letter-4.svg')?>
	    <?php require ($_SERVER['OG'].'img/og/letter-5.svg')?>
	    <?php require ($_SERVER['OG'].'img/og/letter-6.svg')?>
	    <?php require ($_SERVER['OG'].'img/og/letter-7.svg')?>
	    <?php require ($_SERVER['OG'].'img/og/letter-8.svg')?>
	    <?php require ($_SERVER['OG'].'img/og/letter-9.svg')?>
	  </div>
	</div>
	<div class="rrb-note">Halaman berpindah ke otogear.id secara otomatis dalam <b id="countdown">10</b> detik</div>
	<div class="rrb-button content_center">
      <a aria-label="Link Title" alt="link_title" id="rrb-button" class="rrb-button-link" href="https://www.otogear.id/">
        atau klik di sini
      </a>
	</div>
  </div>
</div>



<script>
var timeleft = 10;
var downloadTimer = setInterval(function(){
  "use strict";
  document.getElementById("countdown").innerHTML = "" + timeleft + "";
  timeleft -= 1;
  if(timeleft < 0){
    clearInterval(downloadTimer);
    document.getElementById("countdown").innerHTML = "(0)";
  }
}, 1000);

$(document).ready(function(){
  "use strict";
  setTimeout(function() {
    window.location.replace("https://www.otogear.id/");
  },10000);
});
</script>



<?php require ($_SERVER['OG'].'inc/base-bottom.php')?>