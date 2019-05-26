//Для формы сортировки
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
//Показать корзину
function showCart(cart)
{
	$('#cart .modal-body').html(cart);
	$('#cart').modal();
}
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



jQuery(document).ready(function(){
	jQuery(".menu_top .navbar-toggle").on("click", function(){
		if(jQuery(this).hasClass("active"))
		{
			jQuery(this).removeClass("active");
		}
		else
		{
			jQuery(this).addClass("active");
		}
		
	})
})

//Для аукциона реального времени
//Выбор объектов по клику
$('#auction_list').on('click','.auction_list_item', function()
{
	$(this).addClass('item_active').siblings().removeClass('item_active');
	document.getElementById('auction_example').getElementsByClassName('detail_active')[0].classList.remove('detail_active');
	document.getElementById("det-"+(this).id).className += " detail_active";
	var slideUl = document.getElementById('slide-ul').getElementsByClassName('ul_active');
	for (var i = slideUl.length - 1; i >=0; i--) {
	    slideUl[i].classList.remove('ul_active');
	}
	var slideUlAdd = document.getElementById('slide-ul').getElementsByClassName('slide-img-'+(this).id);
	for (var i = 0; i < slideUlAdd.length; i++) {
	    slideUlAdd[i].className += " ul_active";
	}
	document.getElementById('slide-ul').style.left = 0;
	document.getElementById('lot-img').getElementsByClassName('active')[0].classList.remove('active');
	document.getElementById('img-'+(this).id+'-main').className += "active";
	var first = document.querySelector("#auction_list > .auction_list_item");
	console.log(first.id);
	if(first.id == this.id) 
	{
		if (!document.getElementById('fight_wrapper').classList.contains('fight_active')){
			document.getElementById('fight_wrapper').className += " fight_active";
			document.getElementById('pd-progress').classList.remove("active");
		}
	}
	else{
		document.getElementById('fight_wrapper').classList.remove('fight_active');
		document.getElementById('pd-progress').className += " active";
	}
});
//END: Выбор объектов по клику

/*****************SLIDER IMAGES*********************************/
$('#slide-ul').on('click','li', function(){
	document.getElementsByClassName('lot-img')[0].getElementsByClassName('active')[0].classList.remove('active');
	document.getElementById("img-"+(this).id).className += " active";
});

$('.left').click(function(){
	
	var t = parseInt(document.getElementsByClassName("img-pagination")[0].style.left);
	if (t<0){
		document.getElementsByClassName("img-pagination")[0].style.left = (t+112.5)+"px";
	}
});
$('.right').click(function(){
	var t = parseInt(document.getElementsByClassName("img-pagination")[0].style.left);
	var idL = document.getElementsByClassName('auction_list')[0].getElementsByClassName('item_active')[0].id;
	var slideUlAdd = document.getElementById('slide-ul').getElementsByClassName('slide-img-'+idL);
	if (t>=((slideUlAdd.length-5)*(-112.5))){
		document.getElementsByClassName("img-pagination")[0].style.left = (t-112.5)+"px";
	}
});
/*****************END: SLIDER IMAGES*********************************/
//END: Для аукциона реального времени

$('.slider_auction label').on('click', function () {
    var src = $(this).find('img').attr('src');
    src = src.replace('_100x75', '');
    $('.slider_auction > img').attr('src', src);
});