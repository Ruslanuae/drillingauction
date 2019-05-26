$(document).ready(function () {
    setInterval(function () {
        var h = 0;
        if ($.cookie('user_gmt') !== undefined) {
            h = $.cookie('user_gmt');
        }
        var v = 'Def';
        if ($.cookie('user_obr') !== undefined) {
            v = $.cookie('user_obr');
        }
        var time = calcTime(parseInt(h));
        $('.timezone').text(time[0] + ':' + time[1] +  ' ' + v);
    }, 1000);
    $('.button_voice').on('click', function(e) {
        e.preventDefault();
        var isMuted = $(this).toggleClass('button_voice__mute button_voice__noisy').hasClass('button_voice__mute');
        $('.main-video video').prop('muted', isMuted);
        $(this).toggleClass('mute');
    });
    $('.slider_auction label').on('click', function () {
        var src = $(this).find('img').attr('src');
        src = src.replace('_100x75', '');
        $('.slider_auction > img').attr('src', src);
    });
    $('.country a').click(function(){
        var selText = $(this).find('span').first().clone();
        $(this).parents('.dropdown').find('a').eq(0).html(selText);
    });
    $('.timezone-block > div > a').click(function () {
        $.cookie('user_gmt', $(this).attr('data-gmt'));
        $.cookie('user_obr', $(this).attr('data-obr'));
    });
    //
    $("#param_order").on("click", function(){
            document.getElementsByClassName("results-sort-wrap")[0].style.display = (document.getElementsByClassName("results-sort-wrap")[0].style.display == 'none') ? 'block' : 'none'
        }
    );
    $(document).mouseup(function (e){
        var div = $(".results-sort-wrap");
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.css({'display': 'none'});
        }
    });
    //Удаление определенного товара из модального окна
    $('#cart .modal-body').on('click', '.del-item', function()
    {
        var id = $(this).data('id');
        var type = $(this).data('type');
        $.ajax({
            url: '/cart/del-item',
            data: {id:id, type:type},
            type: 'GET',
            success: function(res)
            {
                if(!res) alert('Ошибка!');
                showCart(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });
    //Для продукта
    //Добавление товара в корзину странице товара
    $('.add_cart_prod').on('click', function (e)
    {
        e.preventDefault();
        var id = $(this).data('id'),
            qty = $('#qty').val(),
            sale_rent = document.getElementsByClassName('sale_rent')[0].value;
        $.ajax({
            url: '/cart/add',
            data: {id: id, qty: qty, sale_rent: sale_rent},
            type: 'GET',
            success: function(res)
            {
                if(!res) alert('Error!');
                //console.log(res);
                showCart(res);
            },
            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                alert(msg);
            }
        });
    });
    //Для каталога
    //Добавление товара в корзину в списке товаров
    $('.cart').on('click', function (e)
    {
        e.preventDefault();
        var id = $(this).data('id'),
            sale_rent = document.getElementsByClassName('sale_rent')[0].value;
        $.ajax({
            url: '/cart/add',
            data: {id: id, sale_rent: sale_rent},
            type: 'GET',
            success: function(res)
            {
                if(!res) alert('Ошибка!');
                //console.log(res);
                showCart(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });
});
function calcTime(offset) {
    // create Date object for current location
    var d = new Date();

    // convert to msec
    // add local time zone offset
    // get UTC time in msec
    var utc = d.getTime() + (d.getTimezoneOffset() * 60000);

    // create new Date object for different city
    // using supplied offset
    var nd = new Date(utc + (3600000 * offset));

    // return time as a string
    return nd.toLocaleString().split(' ')[1].split(':');

}
//Показать корзину
function showCart(cart)
{
    $('#cart .modal-body').html(cart);
    $('#cart').modal();
}
//Очистка корзины
function clearCart()
{
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function(res)
        {
            if(!res) alert('Ошибка!');
            showCart(res);
        },
        error: function(){
            alert('Error!');
        }
    });
}
//Просто показать корзину без добавления товара
function getCart()
{
    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function(res)
        {
            if(!res) alert('Error!');
            showCart(res);
        },
        error: function(){
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            alert(msg);
        }
    });
    return false;
}