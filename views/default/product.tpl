{*Страница продукта*}

<h3>{$rsProduct['name']}</h3>


<img width="575" src="/images/products/{$rsProduct['image']}">
Стоимость: {$rsProduct['price']}

<a id="#removeCart_{$rsProduct['id']}" onclick="removeFromCart({$rsProduct['id']}); return false;" href="#" alt="Удалить из корзины">Удалить из корзины</a>
<a id="#addCart_{$rsProduct['id']}" onclick="addToCart({$rsProduct['id']}); return false;" href="#" alt="Добавить в корзинку">Добавить в корзинку</a>

<p>Описание <br> {$rsProduct['description']}</p>