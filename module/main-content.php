<div class="rancak-container">
  <div class="rancak-content">
    <section class="rancak-content-box">
	  <iframe title="<?php echo $video_title; ?>" width="560" height="315" class="rancak-player" src="https://www.youtube.com/embed/<?php echo $video_content; ?>?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	</section>
  </div>
  
  <div class="rancak-sidebar">
    <section class="rancak-info">
	  <h3 class="rancak-title"><?php echo $video_title; ?></h3>
	  <h4 class="rancak-desc">
	    <?php echo $video_desc; ?>
	  </h4>
      <a aria-label="Selengkapnya" title="Selengkapnya" class="rancak-more" target="_blank" href="https://youtu.be/<?php echo $video_content; ?>">
        <span>Selengkapnya</span>
        <?php require ($_SERVER['OG'].'img/icon/right-double.svg')?>
      </a>
	</section>
	
	<section class="rancak-tiktok content_center">
	  <div class="rancak-tiktok-box flex_ori thumb-loading">
	    <iframe title="OtoGadget Tiktok" class="lazyload" name="__tt_embed__v85127231318707740" sandbox="allow-popups allow-popups-to-escape-sandbox allow-scripts allow-top-navigation allow-same-origin" src="https://www.tiktok.com/embed/@otogadget?lang=en-US&amp;referrer=http%3A%2F%2Fog%2F"></iframe>
	  </div>
	</section>
	
	<section class="rancak-related">
	  <div class="rancak-related-title">Terkait :</div>
	  <div class="rancak-related-list">
        <?php foreach($video_array as $video_list){ ?>
		  <a aria-label="<?php echo($video_list['video_title']) ?>" title="<?php echo($video_list['video_title']) ?>" class="rrl-link" target="_blank"
		  href="https://www.youtube.com/watch?v=<?php echo($video_list['video_link']) ?>">
		    <div class="rrl-left">
              <div class="rrl-thumb flex_ori thumb-loading">
                <img alt="<?php echo($video_list['video_title']) ?>" class="lazyload" data-original="img/content/content-<?php echo($video_list['video_id']) ?>.jpg" />
              </div>
			</div>
			<div class="rrl-info">
              <h2 class="rrl-title"><?php echo($video_list['video_title']) ?></h2>
			</div>
          </a>
        <?php } ?>
	  </div>
	  <div class="rancak-related-more">
	    <a aria-label="Video Lainnya" title="Video Lainnya" class="rrl-more" target="_blank" href="https://www.youtube.com/@otogadget/videos">
		  <span>Video Lainnya</span>
          <?php require ($_SERVER['OG'].'img/icon/right-double.svg')?>
		</a>
	  </div>
	</section>	
	
	<section class="rancak-instagram content_center">
	  <div class="rancak-instagram-box flex_ori thumb-loading">
	    <iframe title="OtoGadget Instagram" class="lazyload" data-original="https://www.instagram.com/otogadget_official/embed" width="400" height="480" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
	  </div>
	</section>
  </div>
</div>