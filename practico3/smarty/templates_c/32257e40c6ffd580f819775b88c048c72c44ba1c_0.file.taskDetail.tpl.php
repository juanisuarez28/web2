<?php
/* Smarty version 3.1.39, created on 2021-09-28 17:53:16
  from 'C:\xampp\htdocs\web2\practico3\smarty\templates\taskDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61533a6c7aa5b8_37127861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32257e40c6ffd580f819775b88c048c72c44ba1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\smarty\\templates\\taskDetail.tpl',
      1 => 1632844043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61533a6c7aa5b8_37127861 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo BASE_URL;?>
home"> Volver </a>
    <ul class="list-group">
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['task']->value->titulo;?>
</li>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['task']->value->descripcion;?>
</li>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['task']->value->finalizada;?>
</li>
    </ul><?php }
}
