import barba from '@barba/core';
/* eslint-disable */
// eslint-disable-next-line no-unused-vars
import analytics from '@components/analytics/analytics';
import '@components/vote/vote';

//import BookBlock from '../../scripts/vendor/bookBlock/bookblock.js';

function init(scriptsInit, scriptsDestroy) {
	//const book = new BookBlock(document.getElementById('book'), {});

	barba.hooks.beforeLeave(({current}) => {
		// отключение обработчиков событий и удаленние их дынных
		scriptsDestroy.forEach((script) => script(current.container));
		// можно добавить анимацию перед уходом со страницы
	});

	barba.hooks.beforeEnter(({next}) => {
		// инициализация скриптов новой страницы
		scriptsInit.forEach((script) => script(next.container));
		// можно добавить анимацию появления страницы
		$('body')
			.removeClass('overflow-hidden');
	});

	barba.init({
		debug: true,
		requestError: (trigger, action, url, response) => {
			// go to a custom 404 page if the user click on a link that return a 404 response status
			if (action === 'click' && response.status && response.status === 404) {
				barba.go('/404/');
			}

			// prevent Barba from redirecting the user to the requested URL
			// this is equivalent to e.preventDefault() in this context
			return false;
		},
		views: [{
			namespace: 'competition',
			sync: true,
			afterEnter(data) {
				$('.competition__list')
					.voteCustom();
			},
		},{
			namespace: 'biography',
			sync: true,
			/* beforeEnter(data) {
				let back = data?.current?.container.querySelector('.biography__swiper');
				let front = data?.next?.container.querySelector('.biography__swiper');

				$('.biography')
					.append(`<div class="page-animation"></div>`);

				$('.page-animation')
					.append(`
							<div class="page-animation-item" style="z-index: 102;">
								<div class="page-animation-item__back">
									<div class="page-animation-item__outer">
										<div class="page-animation-item__content">
											<div class="page-animation-item__inner"></div>
										</div>
									</div>
								</div>
							</div>`)
					.append(`
							<div class="page-animation-item" style="z-index: 103;">
								<div class="page-animation-item__front">
									<div class="page-animation-item__outer">
					 					<div class="page-animation-item__content">
					 						<div class="page-animation-item__inner"></div>
					 					</div>
					 				</div>
								</div>
								<div class="page-animation-item__back">
									<div class="page-animation-item__outer">
					 					<div class="page-animation-item__content">
					 						<div class="page-animation-item__inner"></div>
					 					</div>
					 				</div>
								</div>
							</div>`)
					.append(`
							<div class="page-animation-item" style="z-index: 101;">
								<div class="page-animation-item__front">
									<div class="page-animation-item__outer">
					 					<div class="page-animation-item__content">
					 						<div class="page-animation-item__inner"></div>
					 					</div>
					 				</div>
								</div>
							</div>`);

				$('.page-animation-item:first-child .page-animation-item__inner').html(back.cloneNode(true));
				$('.page-animation-item:nth-child(2) .page-animation-item__front .page-animation-item__inner').html(back.cloneNode(true));
				$('.page-animation-item:nth-child(2) .page-animation-item__back .page-animation-item__inner').html(front.cloneNode(true));
				$('.page-animation-item:last-child .page-animation-item__inner').html(front.cloneNode(true));

				return gsap.timeline().to('.page-animation-item:nth-child(2)', {
					rotationY: -180,
					ease: 'easeInOut',
					duration: 0.8,
					onComplete: () => {
						$('.page-animation').remove();
					}
				});
			}, */
		}],
	});
}

window.barba = barba;

export default {
	init,
};
