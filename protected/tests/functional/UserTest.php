<?php
class UserTest extends WebTestCase {
protected function setUp() {
parent::setUp();
$this->start();
$this->open('');
// login
$this->clickAndWait('link=Login');
$this->type('name=LoginForm[username]','Rebecca');
$this->click("//input[@value='Login']");
$this->waitForTextPresent
('Password cannot be blank.');
$this->type('name=LoginForm[senha]','rebecca');
$this->clickAndWait("//input[@value='Login']");
// go to users page
$this->clickAndWait('link=Usuarios');
}
public function testPasswordMatch() {
$this->clickAndWait('link=Create User');
$this->type('name=Morador[nome]','Func');
$this->type('name=Usuario[nome_usuario]','functest');
$this->type('name=Usuario[senha]','functest');
$this->type('name=Usuario[senha_repeat]','nomatchpass');
$this->clickAndWait("//input[@value='Create']");
$this->assertTextPresent
('Password must be repeated exactly.');
$this->assertTextPresent
('Does not meet password requirements.');
$this->assertTextNotPresent
('Password is too short
(minimum is 8 characters).');
}
public function testPasswordTooShort() {
$this->clickAndWait('link=Create User');
$this->type('name=Morador[nome]','Func');
$this->type('name=Usuario[nome_usuario]','functest');
$this->type('name=Usuario[senha]','moo');
$this->type('name=Usuario[senha_repeat]','moo');
$this->clickAndWait("//input[@value='Create']");
$this->assertTextPresent
('Password is too short
(minimum is 8 characters).');
$this->assertTextPresent
('Does not meet password requirements.');
$this->assertTextNotPresent
('Password must be repeated exactly.');
}
public function testGoodPassword() {
$this->clickAndWait('link=Create User');
$this->type('name=Morador[nome]','Test');
$this->type('name=Usuario[nome_usuario]','functest');
$this->type('name=Usuario[senha]','m00!Isay');
$this->type('name=Usuario[senha_repeat]','m00!Isay');
$this->clickAndWait("//input[@value='Create']");
$this->assertTextPresent('View User');
}
public function testDeleteUser() {
$this->clickAndWait
("xpath=(//img[@alt=\"View\"])[2]");
$this->clickAndWait('link=Delete User');
$this->assertConfirmation
('Are you sure you want to delete this item?');
$this->assertTextNotPresent('functest');
}
}
?>
