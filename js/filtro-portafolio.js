$(document).ready(function(){

	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	$('.category_list .category_item[category="all"]').addClass('active-item');

	// FILTRANDO PRODUCTOS  ============================================

	$('.category_item').click(function(){
		var catProduct = $(this).attr('category');
		console.log(catProduct);

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		$('.category_item').removeClass('active-item');
		$(this).addClass('active-item');

		// OCULTANDO PRODUCTOS =========================
		$('.portafolio-item').css('transform', 'scale(0.80)');
		function hideProduct(){
			$('.portafolio-item').hide();
		} setTimeout(hideProduct,400);

		// MOSTRANDO PRODUCTOS =========================
		function showProduct(){
			$('.portafolio-item[category="'+catProduct+'"]').show();
			$('.portafolio-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
		} setTimeout(showProduct,400);
	});

	// MOSTRANDO TODOS LOS PRODUCTOS =======================

	$('.category_item[category="all"]').click(function(){
		function showAll(){
			$('.portafolio-item').show();
			$('.portafolio-item').css('transform', 'scale(1)');
		} setTimeout(showAll,400);
	});
});