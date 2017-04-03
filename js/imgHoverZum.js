// увеличение картинок при наведении
$(document).ready(function(){
	$("#gallery a").hover(function() {
		$(this).css({'z-index' : '10'});
		$(this).find('img').stop()
		.animate({
			top: '-40px',
			left: '-40px',
			width: '180px',
			height: '180px'
		}, 300);
		$(this).append('<span>' + this.title + '</span>');
		$(this).find('span').hide();
		$(this).find('span').fadeIn(500);
	}, function() {
		$(this).css({'z-index' : '0'});
		$(this).find('img').stop()
		.animate({
			top: '0',
			left: '0',
			width: '100px',
			height: '100px'
		}, 250);
		$(this).find('span').remove();
	});
});

/*Animate() Ц создает эффект анимации.
Find() - отыскивает дочерние элементы, которые удовлетвор€ют указанному выражению
Append() - ƒобавл€ет контент внутрь каждого элемента набора
Hover() Ц отслеживает мышку.
*/