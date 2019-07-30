<?php
/* Smarty version 3.1.30, created on 2019-07-28 15:52:09
  from "E:\DEVELOPING\OSPanel\domains\Afanasyev\views\default\leftcolumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d3d9a7962c4f1_45998173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6670144a43900f6b3625e7837ac9112407e27876' => 
    array (
      0 => 'E:\\DEVELOPING\\OSPanel\\domains\\Afanasyev\\views\\default\\leftcolumn.tpl',
      1 => 1564318328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3d9a7962c4f1_45998173 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="leftColumn">

    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>

          <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
                  --<a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>

    <div class="menuCaption">Корззинка</div>
    <a href="/cart/" title="Перейти в корзинку">В корзине</a>
    <span id="#cartCntItems">
        <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>пусто<?php }?>
    </span>
</div>
<?php }
}
