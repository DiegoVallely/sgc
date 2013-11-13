<?php

Yii::import('zii.widgets.CPortlet');

class ChangeUser extends CPortlet
{

    public $title;
    public $userId;

    public function init()
    {
        $this->title = Yii::t('CalModule.fullCal', 'change user');
        parent::init();
    }

    protected function renderContent()
    {
        if (Yii::app()->usuario->getIsGuest()) return;

        // check admin privileges
        $isAdmin = (bool) Yii::app()->usuario->getState('isAdmin');
        if (!$isAdmin) return;

        // create you own users list
        $users = array(
            '1' => 'admin',
            '2' => 'Rebecca',
            '4' => 'demo2',
            '5' => 'demo3',
            '9' => 'demo4',
        );

        echo CHtml::beginForm();
        echo '<br>';
        echo CHtml::dropDownList("currentUser", $this->userId, $users);
        echo ' ';
        echo CHtml::submitButton(Yii::t('CalModule.fullCal', 'OK'));
        echo CHtml::endForm();
        echo '<br>';
    }
}