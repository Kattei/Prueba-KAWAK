<?php
/* Smarty version 4.1.0, created on 2022-04-22 15:07:29
  from 'D:\xampp\htdocs\CRUD\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6262a891eb7350_78175472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2faef624b3a59067e19402eac4133aecc1315d2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\CRUD\\templates\\index.tpl',
      1 => 1650632807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6262a891eb7350_78175472 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <?php echo '<script'; ?>
 src="./vendor/components/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./vendor/datatables/datatables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="./vendor/datatables/datatables/media/css/jquery.dataTables.css"><?php echo '</script'; ?>
>
</head>
<body>

    <?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>

    
    
</body>
<?php }
}
