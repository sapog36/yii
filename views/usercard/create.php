<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserCard $model */

$this->title = 'Create User Card';
$this->params['breadcrumbs'][] = ['label' => 'User Cards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-card-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
