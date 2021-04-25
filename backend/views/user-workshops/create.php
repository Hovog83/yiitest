<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserWorkshops */

$this->title = 'Append workshop users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-workshops-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
