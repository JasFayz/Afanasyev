<?php
/* Smarty version 3.1.30, created on 2019-07-29 10:47:54
  from "E:\DEVELOPING\OSPanel\domains\Afanasyev\views\default\cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d3ea4aa67e532_87680521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97ab23155eee9badcec6f84c5f1dd0d97c66c17b' => 
    array (
      0 => 'E:\\DEVELOPING\\OSPanel\\domains\\Afanasyev\\views\\default\\cart.tpl',
      1 => 1564386472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3ea4aa67e532_87680521 (Smarty_Internal_Template $_smarty_tpl) {
?>


<h1>Корзинка</h1>

<?php if (!'rsProducts') {?>
    В корзинке пусто.

    <?php } else { ?>
        <h2>Данные заказа</h2>
    <table>
        <tr>
            <td>#</td>
            <td>Наименование</td>
            <td>Количество</td>
            <td>Цена за еденицу</td>
            <td>Цена</td>
            <td>Действие</td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
            <tr>
                <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td>

                <td>
                    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>
                </td>

                <td>
                    <input type="text" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id=" itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
                </td>

                <td>
                    <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                    </span>
                </td>

                <td>
                    <span id="itemReaclPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                    </span>
                </td>

                <td>
                    <a id="#removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" href="#" alt="Удалить из корзины">Удалить</a>
                    <a id="#addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hideme" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" href="#" alt="Востановить">Востановить</a>

                </td>
            </tr>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
<?php }
}
}
