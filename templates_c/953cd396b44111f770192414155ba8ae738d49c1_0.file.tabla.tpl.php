<?php
/* Smarty version 4.1.0, created on 2022-04-22 15:07:29
  from 'D:\xampp\htdocs\CRUD\templates\tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6262a891c07315_53769537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '953cd396b44111f770192414155ba8ae738d49c1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\CRUD\\templates\\tabla.tpl',
      1 => 1650632845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6262a891c07315_53769537 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="./js/tabla.js"><?php echo '</script'; ?>
>
<table id="documentos">
    <thead>
        <tr>
            <th>documento</th>
            <th>contenido</th>
            <th>proceso</th>
            <th>tipo</th>
            <th>codigo</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contenidotabla']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <tr>
        <td style="cursor: pointer;" class="doc_datos" data-nombre="<?php echo $_smarty_tpl->tpl_vars['item']->value['DOC_NOMBRE'];?>
" data-docid="<?php echo $_smarty_tpl->tpl_vars['item']->value['DOC_ID'];?>
"
            data-contenido="<?php echo $_smarty_tpl->tpl_vars['item']->value['DOC_CONTENIDO'];?>
" data-tipid="<?php echo $_smarty_tpl->tpl_vars['item']->value['TIP_ID'];?>
" data-proid="<?php echo $_smarty_tpl->tpl_vars['item']->value['PRO_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['DOC_NOMBRE'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['DOC_CONTENIDO'];?>
</td>
        <td>(<?php echo $_smarty_tpl->tpl_vars['item']->value['PRO_PREFIJO'];?>
)<?php echo $_smarty_tpl->tpl_vars['item']->value['PRO_NOMBRE'];?>
</td>
        <td>(<?php echo $_smarty_tpl->tpl_vars['item']->value['TIP_PREFIJO'];?>
)<?php echo $_smarty_tpl->tpl_vars['item']->value['TIP_NOMBRE'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['TIP_PREFIJO'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['PRO_PREFIJO'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['DOC_ID'];?>
</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>


<input type="button" value="Nuevo" id="nuevo">
<br><br>



<input placeholder="documento" id="documento">
<input id="docid" hidden>
<textarea placeholder="contenido" id="contenido">
    
</textarea>
<select id="proceso">
     <option value="">Seleccione</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['procesos']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['PRO_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['PRO_NOMBRE'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['PRO_PREFIJO'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<select id="tipo">
    <option value="">Seleccione</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['TIP_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TIP_NOMBRE'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['TIP_PREFIJO'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<button id="agregar">Agregar</button>
<button id="modificar" hidden>Modificar</button>
<button id="eliminar" hidden>Eliminar</button>





<br><br><br>
<button id="deslogear" >Log out</button><?php }
}
