<?php
/* Smarty version 3.1.48, created on 2024-08-27 22:27:20
  from 'C:\xampp\htdocs\smarty\smarty-3.1.48\mydemo\templates\mytemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ce36a8d66468_95293006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d5337f7ef0cac387fc4a55d4e188eca3342f12f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty-3.1.48\\mydemo\\templates\\mytemplate.tpl',
      1 => 1724790436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ce36a8d66468_95293006 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<title>Info</title>
</head>
<body>

<pre>
User Information:

Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>

</pre>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'name');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
<li><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li> 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dbrows']->value, 'dbrow');
$_smarty_tpl->tpl_vars['dbrow']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dbrow']->value) {
$_smarty_tpl->tpl_vars['dbrow']->do_else = false;
?>
<li><?php echo $_smarty_tpl->tpl_vars['dbrow']->value['firstname'];?>
  <?php echo $_smarty_tpl->tpl_vars['dbrow']->value['lastname'];?>
</li> 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php
$__section_loopindex_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['names']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_loopindex_0_total = $__section_loopindex_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_loopindex'] = new Smarty_Variable(array());
if ($__section_loopindex_0_total !== 0) {
for ($__section_loopindex_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_loopindex']->value['index'] = 0; $__section_loopindex_0_iteration <= $__section_loopindex_0_total; $__section_loopindex_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_loopindex']->value['index']++){
?>
        <li style="background:#5e564e"><?php echo $_smarty_tpl->tpl_vars['names']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_loopindex']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_loopindex']->value['index'] : null)];?>
</li>
<?php
}
}
?>
</ul>
</body>
</html><?php }
}
