<?php

//use yii\helpers\Html;
use yii\grid\GridView;
//use yii\widgets\Pjax;

?>

    <?  echo GridView::widget([
            'dataProvider' => $dataProvider,
            //'itemOptions' => ['tag' => false], //removed for sorting
            //'itemView' => '/questions/_questionlistview',
            // 'pager' => [
            //     'class' => \yii\widgets\LinkPager::className(),
            //     'pagination' => [
            //         'class' => \yii\data\Pagination::className(),
            //         'route' => 'article/t',
            //     ],
            // ],
        ]);
    ?>

