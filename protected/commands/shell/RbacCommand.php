<?php
class RbacCommand extends CConsoleCommand
{
private $_authManager;
public function getHelp()
{
return <<<EOD
USAGE
rbac
DESCRIPTION
This command generates an initial RBAC authorization hierarchy.
EOD;
}
/**
* Execute the action.
* @param array command line parameters specific for this command
*/
public function run($args)
{
//ensure that an authManager is defined as this is mandatory for creating an auth heirarchy
if(($this->_authManager=Yii::app()->authManager)===null)
{
echo "Error: an authorization manager, named 'authManager'
must be configured to use this command.\n";
echo "If you already added 'authManager' component in
application configuration,\n";
echo "please quit and re-enter the yiic shell.\n";
return;
}
//provide the oportunity for the use to abort the request
echo "This command will create three roles: Owner, Member, and
Reader and the following premissions:\n";
echo "create, read, update and delete Busineess\n";
echo "Would you like to continue? [Yes|No] ";
//check the input from the user and continue if they indicated yes to the above question
if(!strncasecmp(trim(fgets(STDIN)),'y',1))
{
//first we need to remove all operations, roles, child relationship and assignments
$auth=$this->_authManager;//Yii::app()->authManager;
 
/*$auth->createOperation('createBiz','create new business');
$auth->createOperation('viewBiz','list businees');
$auth->createOperation('updateBiz','update businees');
$auth->createOperation('deleteBiz','delete businees');
 
$bizRule='return Yii::app()->usuario->id_usuario==Business::model()->findByPk($_GET["id"])->create_usuario_id_usuario;';

$task=$auth->createTask('updateOwnBiz','update a post by user himself',$bizRule);
$task->addChild('updateBiz');
 
$role=$auth->createRole('user');
$role->addChild('viewBiz');
$role->addChild('createBiz');
$role->addChild('updateOwnBiz');
 
$role=$auth->createRole('editor');
$role->addChild('user');
$role->addChild('updateBiz');
 
$role=$auth->createRole('admin');
$role->addChild('editor');
$role->addChild('user');
$role->addChild('deleteBiz');

$auth->assign('admin','1');*/
//provide a message indicating success
$auth->createTask('Visualizar AgenciaCont');
$auth->createTask('Visualizar Arquivo Digital');
$auth->createTask('Visualizar Comentario');
$auth->createTask('Visualizar Endereco','');
$auth->createTask('Visualizar Folha de Pagamento','');
$auth->createTask('Visualizar Funcionario ','');
$auth->createTask('Visualizar Mural','');
$auth->createTask('Visualizar Usuario','');


echo "Authorization hierarchy successfully generated.";
}
}
}
?>