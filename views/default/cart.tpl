{*Шаблон корзинки*}

<h1>Корзинка</h1>

{if !rsProducts}
    В корзинке пусто.

    {else}
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
        {foreach $rsProducts as $item name=products}
            <tr>
                <td>{$smarty.foreach.products.iteration}</td>

                <td>
                    <a href="/product/{$item['id']}/">{$item['name']}</a><br>
                </td>

                <td>
                    <input type="text" name="itemCnt_{$item['id']}" id=" itemCnt_{$item['id']}" value="1" onchange="conversionPrice({$item['id']});">
                </td>

                <td>
                    <span id="itemPrice_{$item['id']}" value="{$item['price']}">
                        {$item['price']}
                    </span>
                </td>

                <td>
                    <span id="itemReaclPrice_{$item['id']}">
                        {$item['price']}
                    </span>
                </td>

                <td>
                    <a id="#removeCart_{$item['id']}" onclick="removeFromCart({$item['id']}); return false;" href="#" alt="Удалить из корзины">Удалить</a>
                    <a id="#addCart_{$item['id']}" class="hideme" onclick="addToCart({$item['id']}); return false;" href="#" alt="Востановить">Востановить</a>

                </td>
            </tr>

        {/foreach}
    </table>
{/if}