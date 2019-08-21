<?php
      // var_dump($employees);
foreach ($employees as $key => $value) :
  if (strpos($value['url'], 'small') !== 0) :?>

<figure class="b-main_description__imgA">
  <a data-fancybox="gallery"
    href="<?=IMG_GALLERY_ROOT.$value['url']?>"
    class="b-main_description__imgA">
    <img
      src="<?=IMG_GALLERY_ROOT.'small_'.$value['url']?>"
      alt="Ремонт ноутбуков" class="b-main_description__imgUnit wow fadeInDown">
    <figcaption>Просмотров: <?=$value['views']?>
    </figcaption>
  </a>
</figure>
<?php
  endif;
endforeach;
