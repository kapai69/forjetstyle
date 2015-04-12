<?php

class SiteController extends Controller
{
	public function actionIndex()
	{
        $paramForNearBirthdayUsers = new CDbCriteria();
        $paramForNearBirthdayUsers->order = 'DAYOFYEAR(birthday - INTERVAL DAYOFYEAR(NOW()) -1 DAY ) ASC';
        $paramForNearBirthdayUsers->limit = 3;
        $nearBirthdayUsers = User::model()->findAll($paramForNearBirthdayUsers);

        foreach ($nearBirthdayUsers AS $nearBirthdayUser) {
            $userIds[] = $nearBirthdayUser->id;
        }

        $paramForOtherUsers = new CDbCriteria();
        $paramForOtherUsers->addNotInCondition('id', $userIds);
        $paramForOtherUsers->order = 'username ASC';
        $otherUsers = User::model()->findAll($paramForOtherUsers);

        $this->render('index',array(
            'nearBirthdayUsers'=>$nearBirthdayUsers,
            'otherUsers'=>$otherUsers,
        ));
	}

    public function actionEdit()
    {

        $id = Yii::app()->request->getPost('id');
        $username = Yii::app()->request->getPost('username');
        $birthday = Yii::app()->request->getPost('birthday');
        $user = User::model()->findByPk($id);

        if ($user) {
            $user->username = $username;
            $user->birthday = $birthday;
            $user->file = CUploadedFile::getInstance($user,'file');

            if ($user->file) {
                $path = 'images/' . rand(11111,99999) . "." . $user->file->getExtensionName();
                $user->photo = $path;
                $user->file->saveAs($path);
            }

            if($user->save()){
                Yii::app()->user->setFlash('success', "Пользователь обновлен");
            } else {
                Yii::app()->user->setFlash('danger', "Ошибка при обновлении");
            }
        }
        $this->redirect( Yii::app()->createUrl('/'));
    }


    public function actionAdd()
    {
        $user = new User;
        $username = Yii::app()->request->getPost('username');
        $birthday = Yii::app()->request->getPost('birthday');

        $user->username = $username;
        $user->birthday = $birthday;
        $user->file = CUploadedFile::getInstance($user,'file');

        if ($user->file) {
            $path = 'images/' . rand(11111,99999) . "." . $user->file->getExtensionName();
            $user->photo = $path;
            $user->file->saveAs($path);
        } else {
            $user->photo = 'images/noavatar.jpg';
        }

        if($user->save()){
            Yii::app()->user->setFlash('success', "Пользователь добавлен");
        } else {
            Yii::app()->user->setFlash('danger', "Ошибка при добавлении");
        }
        $this->redirect( Yii::app()->createUrl('/'));
    }
}