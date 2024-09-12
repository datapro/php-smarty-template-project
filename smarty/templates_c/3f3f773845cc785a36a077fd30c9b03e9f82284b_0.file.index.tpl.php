<?php
/* Smarty version 3.1.48, created on 2024-08-28 19:26:41
  from 'C:\xampp\htdocs\smarty\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66cf5dd127c2d1_52273505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3f773845cc785a36a077fd30c9b03e9f82284b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty\\templates\\index.tpl',
      1 => 1724865996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cf5dd127c2d1_52273505 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<main style="display:flex; background-image: url('./image/woman.jpg');">
<div style="flex:1;">

</div>
<div style="flex:1;">
<form action="process.php" method="post">
<div row mb-3>
<label for="username" class="col-sm-2 col-form-label" style="color:white;">Username:</label>
    <input type="text" id="username" name="username" required class="form-control">
</div>
<div row mb-3>
    <label for="email" class="col-sm-2 col-form-label" style="color:white;">Email:</label>
    <input type="email" id="email" name="email" required class="form-control">
    </div>
<div row mb-3>
    <label for="password" class="col-sm-2 col-form-labell" style="color:white;">Password:</label>
    <input type="password" id="password" name="password" required class="form-control">
</div>
    <input type="submit" value="Register" class="btn btn-primary">
</form>
</div>
<div style="flex:1;">

</div>
</main><?php }
}
