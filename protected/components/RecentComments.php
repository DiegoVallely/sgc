<?php
Yii::import('zii.widgets.CPortlet');
 
class RecentComments extends CPortlet
{
    public $title='Comentários Recentes';
    public $maxComments=10;
 
    public function getRecentComments()
    {
        return Comentario::model()->findRecentComments($this->maxComments);
    }
 
    protected function renderContent()
    {
        $this->render('recentComments');
    }
}