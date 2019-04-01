<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \yii\widgets\LinkPager;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles Test';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJs('

    $(document).on("click", ".pagination a", function(e){

        e.preventDefault();

        e.stopPropagation();

        $.get($(this).attr("href"))

        .done(function (data) {

            $("#test").html(data);

        })

        .fail(function () {

            console.log("Ajax fail: ");

        });

    });

', yii\web\View::POS_READY);
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div id="test">
    <?php Pjax::begin() ;?>
        <?  echo GridView::widget([
                'dataProvider' => $dataProvider,
                // 'pager' => [
                //     'class' => \yii\widgets\LinkPager::className(),
                //     'pagination' => [
                //         'class' => \yii\data\Pagination::className(),
                //         'route' => 'article/datatest',
                //     ],
                // ],
            ]);
        ?>
    <? Pjax::end() ;?>

    </div>
</div>
