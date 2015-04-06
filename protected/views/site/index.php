<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="row marketing">
    <div class="col-lg-6 ">
        <h4>Пользователи у которых ближайший день рождения</h4>
        <?php
        foreach ($nearBirthdayUsers as $nearBirthdayUser):
            echo "<div class='alert alert-dismissible alert-success'>
                    <img src='$nearBirthdayUser->photo' alt='$nearBirthdayUser->username' class='img-circle'/>
                    <h4>$nearBirthdayUser->username</h4>
                    <p>Родился: $nearBirthdayUser->birthday Исполняется: " . (date('Y') - $nearBirthdayUser->birthday) . " лет</p></div>";
        endforeach;
        ?>
    </div>
    <div class="col-lg-6 ">
        <h4>Остальные пользователи</h4>
        <?php
        foreach ($otherUsers as $otherUser):
            echo "<div class='alert alert-dismissible alert-info'>
                    <img src='$otherUser->photo' alt='$otherUser->username' class='img-circle'/>
                    <h4>$otherUser->username</h4> <p>Родился: $otherUser->birthday </p></div>";
        endforeach;
        ?>
    </div>
</div>











