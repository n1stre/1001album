<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<h1 class="text-center">Albums You Need To Check Before You Die</h1>
<ul class="albums clearfix">
<?php foreach ($albums as $album): ?>
    <li class="album">
        <?= Html::img("@web/images/{$album->image}", ['title'=>$album->name, 'alt'=>$album->name, 'class'=>'album__image']);?> 

        <p class="album__author"><?= $authors[$album->author_id - 1]->name ?></p>
        <p class="album__name"><?= $album->name ?></p>
        <p class="album__year-label"><?= $album->year ?> <?= $album->label ?></p>
    </li>
<?php endforeach; ?>
</ul>
<div class="text-center">
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>