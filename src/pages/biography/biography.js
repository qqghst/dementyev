import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

function init(container) {
	if (container.dataset.barbaNamespace === 'biography') {
		// eslint-disable-next-line no-console
		console.log('biography init');

		let swiperBiography = null;

		const enableSwiper = () => {
			const el = container.querySelector('.biography__swiper');

			if (el) {
				swiperBiography = new Swiper(el, {
					slidesPerView: 'auto',
					spaceBetween: 0,
					centeredSlides: true,
					centeredSlidesBounds: true,
					navigation: {
						prevEl: '.navigation__arrow--prev',
						nextEl: '.navigation__arrow--next',
					},
					effect: 'fade',
					fadeEffect: {
						crossFade: true,
					},
					touchRatio: 0,
				});
			}
		};

		const disableSwiper = () => {
			if (swiperBiography !== null) {
				swiperBiography.destroy(true, true);
				swiperBiography = null;
			}
		};

		const breakpointChecker = () => {
			if (window.matchMedia('(max-width: 1024px)').matches) {
				disableSwiper();

				$('.navigation').addClass('_mobile');
			} else {
				enableSwiper();
			}
		};
		$('.navigation__link').on('click', () => {
			window.scrollTo(0, 0);
		});

		window.addEventListener('resize', breakpointChecker);
		breakpointChecker();

		$(window).scroll(() => {
			if ($(window).width() <= 1024) {
				if ($(window).scrollTop() >= 200) {
					$('.navigation').removeClass('_mobile');
				} else {
					$('.navigation').addClass('_mobile');
				}

				if ($(window).scrollTop() >= 500) {
					$('.navigation').addClass('_fixed');
				} else {
					$('.navigation').removeClass('_fixed');
				}
			}
		});

		// eslint-disable-next-line
		let sliderChildhood = new Swiper('.sliderChildhood .swiper', {
			slidesPerView: 1,
			spaceBetween: 10,
			navigation: {
				prevEl: '.sliderChildhood .swiper-button-prev',
				nextEl: '.sliderChildhood .swiper-button-next',
			},
			pagination: {
				el: '.sliderChildhood .swiper-pagination',
				type: 'fraction',
			},
		});

		const slider421 = new Swiper('.gallery-screen-42-1 .swiper', {
			slidesPerView: 1,
			spaceBetween: 10,
			navigation: {
				prevEl: '.swiper-button-prev',
				nextEl: '.swiper-button-next',
			},
			pagination: {
				el: '.swiper-pagination',
				type: 'fraction',
			},
		});

		const slider422 = new Swiper('.gallery-screen-42-2 .swiper', {
			slidesPerView: 1,
			spaceBetween: 10,
			navigation: {
				prevEl: '.swiper-button-prev',
				nextEl: '.swiper-button-next',
			},
			pagination: {
				el: '.swiper-pagination',
				type: 'fraction',
			},
		});

		const sliders = (index) => {
			slider421.slideTo(index);
			slider422.slideTo(index);
		};

		slider421.on('slideChange', () => sliders(slider421.activeIndex));
		slider422.on('slideChange', () => sliders(slider422.activeIndex));
	}
}

const destroy = () => {

};

export default {
	init,
	destroy,
};
