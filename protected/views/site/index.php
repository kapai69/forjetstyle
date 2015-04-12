<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="marketing">
    <?php
    foreach(Yii::app()->user->getFlashes() as $key => $message):
        echo '<div id="message" class="col-lg-12 alert alert-dismissible alert-' . $key . '">' . $message . "<button type='button' class='close' data-dismiss='alert'>×</button></div>";
    endforeach;
    ?>
</div>

<button class='btn btn-default' type='button' data-toggle='modal' data-target='#editUserModal' id="add-user">Добавить пользователя</button>

<div class="row marketing" id="marketing">
    <div class="col-lg-6">
        <h4>Пользователи у которых ближайший день рождения</h4>
        <?php
        foreach ($nearBirthdayUsers as $nearBirthdayUser):
            echo "<div id='" . $nearBirthdayUser->id . "user' class='alert alert-dismissible alert-success'>
                    <span id='" . $nearBirthdayUser->id . "userAvatar'>
                        <img  src='$nearBirthdayUser->photo' alt='$nearBirthdayUser->username' class='img-circle'/>
                    </span>
                    <h4 id='" . $nearBirthdayUser->id . "userName'>$nearBirthdayUser->username</h4>
                    <p>Родился: <span id='" . $nearBirthdayUser->id . "userBirthday'>$nearBirthdayUser->birthday</span> Исполняется: " . (date('Y') - $nearBirthdayUser->birthday) . "
                    лет</p> <button type='button' data-toggle='modal' data-target='#editUserModal'
                    class='edit-user' id=$nearBirthdayUser->id ><span class='glyphicon glyphicon-pencil'></span></button></div>";
        endforeach;
        ?>
    </div>
    <div class="col-lg-6 ">
        <h4>Остальные пользователи</h4>
        <?php
        foreach ($otherUsers as $otherUser):
            echo "<div id='" . $otherUser->id . "user' class='alert alert-dismissible alert-info'>
                    <span id='" . $otherUser->id . "userAvatar'>
                        <img  src='$otherUser->photo' alt='$otherUser->username' class='img-circle'/>
                    </span>
                    <h4 id='" . $otherUser->id . "userName'>$otherUser->username</h4>
                    <p>Родился: <span id='" . $otherUser->id . "userBirthday'>$otherUser->birthday</span></p>
                    <button type='button' data-toggle='modal' data-target='#editUserModal'
                    class='edit-user' id=$otherUser->id ><span class='glyphicon glyphicon-pencil'>
                    </span></button></div>";
        endforeach;
        ?>
    </div>
</div>

<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Редактирование пользователя</h4>
            </div>

            <div class="modal-body">

                <form action="index.php?r=site/edit" method="POST" enctype="multipart/form-data">

                    <div id="avatar-container">
                        <label for="recipient-name" class="control-label">Аватар:</label>
                        <div id="avatar-img"></div>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">ФИО:</label>
                        <input type="text" class="form-control" id="recipient-name" name="username" />
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Дата рождения:</label>
                        <input class="select-datepicker form-control" data-provide="datepicker" name="birthday" />
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Выберите аватар:</label>
                        <?php echo CHtml::activeFileField(User::model(), 'file'); ?>
                    </div>

                    <input type="hidden" id="id" name="id">

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Обновить пользователя" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>