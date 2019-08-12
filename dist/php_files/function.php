<?php

function myScan($dir)
{
    $list = scandir($dir);
    if (!$list) {
        return false;
    }
    unset($list[0], $list[1]);
    return $list;
}

function renderGallery($imgArr)
{
    foreach ($imgArr as $key => $value) :
      if (strpos($value, 'small') !== 0) :?>
<a data-fancybox="gallery" href="<?=IMG_GALLERY_ROOT.$value?>"
  class="b-main_description__imgA">
  <img
    src="<?=IMG_GALLERY_ROOT.'small_'.$value?>"
    alt="Ремонт ноутбуков" class="b-main_description__imgUnit wow fadeInDown">
</a>
<?php
      endif;
    endforeach;
}
