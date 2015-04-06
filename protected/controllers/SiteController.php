<?php

class SiteController extends Controller
{
	public function actionIndex()
	{
        $paramForNearBirthdayUsers = new CDbCriteria();
        $paramForNearBirthdayUsers->addCondition('DAYOFYEAR(birthday) > DAYOFYEAR(NOW())');
        $paramForNearBirthdayUsers->order = 'DAYOFYEAR(birthday)';
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
}