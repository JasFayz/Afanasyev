/**
 * Функиця добавления  товара в корзину
 *
 * @param $itemId продукта
 * @return в случае успеха обновляется данные корнзины на странице
 *
 */


console.log("Подключен");
function addToCart(itemId) {
    $.ajax({
        type: 'POST',
        async: true,
        url: "/cart/addtocart/" + itemId +'/',
        dataType: 'json',
        success: function(data) {
            if (data['success']){
                console.log("js - addToCart("+itemId+")");
                // $('#cartCntItems').html(data['cntItems']);
                document.getElementById('#cartCntItems').innerText = data['cntItems'];
                document.getElementById('#addCart_'+itemId).style.display = 'none';
                document.getElementById('#removeCart_'+itemId).style.display = 'block';
                // $("#addCart_"+ itemId).hide();
                // $('#removeCart_'+itemId).show();
            }
        }
    });
}

function removeFromCart(itemId) {
    $.ajax({
        type: 'POST',
        async: true,
        url: "/cart/removefromcart/" + itemId +'/',
        dataType: 'json',
        success: function(data){
            if (data['success']){
                console.log("js - removeFromCart("+itemId+")");
                // $('#cartCntItem').html(data['cntItems']);
                document.getElementById('#cartCntItems').innerText = data['cntItems'];
                document.getElementById('#addCart_'+itemId).style.display = 'block';
                document.getElementById('#removeCart_'+itemId).style.display = 'none';
                // $('#addCart_'+itemId).show();
                // $('#removeCart_'+itemId).hide();
            }
        }
    });
}

function conversionPrice(itemId) {
    var newCnt = $('#itemCnt_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).attr('value');
    var itemRealPrice = newCnt * itemPrice;

    $('#itemRealPrice_' + itemId).html(itemRealPrice);
}
