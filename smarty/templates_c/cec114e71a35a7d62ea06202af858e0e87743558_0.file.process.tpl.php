<?php
/* Smarty version 3.1.48, created on 2024-08-28 18:36:06
  from 'C:\xampp\htdocs\smarty\smarty\templates\process.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66cf51f6c4d420_04749170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cec114e71a35a7d62ea06202af858e0e87743558' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty\\templates\\process.tpl',
      1 => 1724793536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cf51f6c4d420_04749170 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <p>Registration successful!</p>
    <p>Username: <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>
    <p>Email: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</p>
<?php } else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
        <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
