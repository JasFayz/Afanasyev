<?php
/* Smarty version 3.1.30, created on 2019-07-29 15:47:40
  from "E:\DEVELOPING\OSPanel\domains\Afanasyev\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d3eeaecc80aa9_62095346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f68b4d68e9ea40dedd192818e3618054cfecc0b' => 
    array (
      0 => 'E:\\DEVELOPING\\OSPanel\\domains\\Afanasyev\\views\\default\\header.tpl',
      1 => 1564404459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_5d3eeaecc80aa9_62095346 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="header">
    <h1>my shop - интеренет магазин</h1>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="centerColumn"><?php }
}
