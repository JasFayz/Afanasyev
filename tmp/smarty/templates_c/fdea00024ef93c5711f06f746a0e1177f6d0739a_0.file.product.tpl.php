<?php
/* Smarty version 3.1.30, created on 2019-07-29 09:09:20
  from "E:\DEVELOPING\OSPanel\domains\Afanasyev\views\default\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d3e8d9088e087_17482173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdea00024ef93c5711f06f746a0e1177f6d0739a' => 
    array (
      0 => 'E:\\DEVELOPING\\OSPanel\\domains\\Afanasyev\\views\\default\\product.tpl',
      1 => 1564380558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3e8d9088e087_17482173 (Smarty_Internal_Template $_smarty_tpl) {
?>


<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>


<img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>


<a id="#removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" href="#" alt="Удалить из корзины">Удалить из корзины</a>
<a id="#addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" href="#" alt="Добавить в корзинку">Добавить в корзинку</a>

<p>Описание <br> <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }
}
