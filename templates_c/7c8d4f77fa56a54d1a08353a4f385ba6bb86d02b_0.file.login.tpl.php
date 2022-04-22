<?php
/* Smarty version 4.1.0, created on 2022-04-22 03:01:55
  from 'D:\xampp\htdocs\CRUD\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6261fe83538a75_25644260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c8d4f77fa56a54d1a08353a4f385ba6bb86d02b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\CRUD\\templates\\login.tpl',
      1 => 1650589312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6261fe83538a75_25644260 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="./js/login.js"><?php echo '</script'; ?>
>
<form id="login" action="/action_page.php">
    <input name="funcion" value="logear" hidden>
    <input name="pagina" value="login" hidden>
    <label for="fname">usuario:</label><br>
    <input type="text" required name="user" placeholder="ejemplo: kathe"><br>
    <label for="lname">contraseña:</label><br>
    <input type="password" required name="password" placeholder="123" ><br><br>
    <input type="button" value="Submit" id="logear">
</form> 
<?php }
}
