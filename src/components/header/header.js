$(document)
	.on('click', '.js-menu-toggler', function () {
		$(this).toggleClass('open');
		$(this).closest('.js-header').toggleClass('open');
		$('.js-full-menu').toggleClass('open');
		$('body').toggleClass('overflow-hidden');

		if ($(this).hasClass('open')) {
			$(this).find('.menu-toggler__text').text('закрыть').addClass('translated-text');
		} else {
			$(this).find('.menu-toggler__text').text('меню');
		}
	});

$(document)
	.on('click', '.full-menu__nav li', () => {
		$('body')
			.removeClass('overflow-hidden');
	});

function init(container) {
	if (container.classList.contains('header')) {
		// eslint-disable-next-line no-console
		console.log('header init');
	}
}

export default {
	init,
};
