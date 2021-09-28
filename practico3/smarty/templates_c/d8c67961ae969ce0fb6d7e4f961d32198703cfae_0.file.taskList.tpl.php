<?php
/* Smarty version 3.1.39, created on 2021-09-28 17:53:13
  from 'C:\xampp\htdocs\web2\practico3\smarty\templates\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61533a691db095_45619223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8c67961ae969ce0fb6d7e4f961d32198703cfae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\smarty\\templates\\taskList.tpl',
      1 => 1632844367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61533a691db095_45619223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
    <ul class="list-group">
        <li class="list-group-item <?php if ($_smarty_tpl->tpl_vars['task']->value->finalizada) {?>finalizada<?php }?>">
            <a href="viewTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
"><?php echo $_smarty_tpl->tpl_vars['task']->value->titulo;?>
</a>: <?php echo $_smarty_tpl->tpl_vars['task']->value->descripcion;?>

             <a class="btn btn-danger" href="deleteTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
'">Borrar</a>
             <?php if (!$_smarty_tpl->tpl_vars['task']->value->finalizada) {?>
                - <a class="btn btn-success" href="updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
">Done</a>
             <?php }?>
        </li>
    </ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

 <h2>Crear Tarea:</h2>
<form action="createTask" method="post">
    <input type="text" name="title" id="title">
    <input type="text" name="description" id="description">
    <input type="number" name="priority" id="priority">
    <input type="checkbox" name="done" id="done">
    <input type="submit" class="btn btn-primary" value="Guardar">
</form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
