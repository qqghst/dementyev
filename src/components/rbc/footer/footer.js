import {html, isDevices} from '../../../scripts/helpers';

function init() {
	const buttonUp = document.querySelector('.footer__button-up');
	const team = document.querySelector('.about__advertising.for-devices');
	const close = document.querySelector('.about__close');
	// const footerMobileBlock = document.getElementById('footer-mobile-block');
	// const section2 = document.querySelector('.section-2');
	// const fixedClass = 'is-visible';

	// let currentCrollPos = 0;

	// function showFooterMobileBlock() {
	// 	if (isDevices) {
	// 		const scroll = window.pageYOffset;
	// 		const section2Bottom = section2.getBoundingClientRect().bottom - window.innerHeight;

	// 		if (scroll < window.innerHeight
	// 			&& footerMobileBlock.classList.contains(fixedClass)
	// 			|| scroll === 0
	// 		) {
	// 			footerMobileBlock.classList.remove(fixedClass);
	// 		} else if (section2Bottom < 0) {
	// 			footerMobileBlock.classList.remove(fixedClass);
	// 		} else if (scroll > currentCrollPos && scroll > window.innerHeight) {
	// 			footerMobileBlock.classList.remove(fixedClass);
	// 		} else if (scroll < currentCrollPos && scroll > window.innerHeight) {
	// 			footerMobileBlock.classList.add(fixedClass);
	// 		}

	// 		currentCrollPos = scroll;
	// 	}
	// }

	// const setFixPosition = _throttle(showFooterMobileBlock, 500);

	buttonUp.addEventListener('click', (e) => {
		e.preventDefault();

		window.scrollTo({
			top: 0,
			left: 0,
			behavior: 'smooth',
		});
	});

	team.addEventListener('click', () => {
		if (isDevices()) {
			html.classList.add('is-show-team');
		}
	});

	close.addEventListener('click', () => {
		html.classList.remove('is-show-team');
	});

	// window.addEventListener('scroll', setFixPosition);
}

export default {
	init,
};
