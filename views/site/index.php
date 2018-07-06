<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Books and Authors</h1>

        <p class="lead"><h2>Masterpieces of literature:</h2></p>



<!--        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>

    <?php
    foreach ($authors as $a){
        echo '<ul>';
            echo '<li><b>'.$a->author.'</b></li>';

                $books = $a->book; // public function getBook()
                foreach ($books as $b) {
                    echo '<ul>';
                        $date_write = Yii::$app->formatter->asDate($b->year_of_writing, 'yyyy');
                        echo '<li><em>'.$b->title.' ['.$date_write.']'.'</em></li>';
                    echo '</ul>';
                }

        echo '</ul>';
    }
    ?>

    <?php
    // `identity` текущего пользователя. `Null`, если пользователь не аутентифицирован.
    $identity = Yii::$app->user->identity;

    // ID текущего пользователя. `Null`, если пользователь не аутентифицирован.
    $id = Yii::$app->user->id;

    // проверка на то, что текущий пользователь гость (не аутентифицирован)
    $isGuest = Yii::$app->user->isGuest;

    foreach ($identity as $i){
        echo $i.'<br>';
    }
    ?>


<!--    <div class="body-content">-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
</div>
