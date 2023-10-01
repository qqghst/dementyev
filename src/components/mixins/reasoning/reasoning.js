/* eslint-disable */
import data23 from './data';
import { gsap } from 'gsap';

function init(container) {
	if (container.dataset.barbaNamespace === 'reasoning') {
		// менять цвет активного элемента + двигать вверх активные на мобилке
		const links = container.querySelectorAll('.links a');
		const windowPathname = window.location.pathname;

		links.forEach((link) => {
			const linkPathname = new URL(link.href).pathname;

			if (windowPathname === linkPathname) {
				link.classList.add('active-reasoning');
			}
		});

		// скролл на стрелку в правом нижнем углу
		const arrowBottom = container.querySelector('.arrow-bottom');
		const rightSideContainer = container.querySelector('.right-side');
		const rightSideScroller = container.querySelector('.right-side__scroller');

		arrowBottom.addEventListener('click', () => {
			rightSideContainer.scrollBy({ top: 500, behavior: 'smooth' });
		});

		rightSideContainer.addEventListener('scroll', () => {
			const scrollPosition = rightSideContainer.scrollTop; // это текущая позиция прокрутки (заметки для себя)
			const containerHeight = rightSideContainer.clientHeight; // это высота видимой части контейнера
			const contentHeight = rightSideContainer.scrollHeight; // это высота всего содержимого контейнера

			if (scrollPosition + containerHeight >= contentHeight - 20) {
				arrowBottom.style.display = 'none';
			} else {
				arrowBottom.style.display = 'block';
			}
		});

		if (rightSideScroller.offsetHeight <= rightSideContainer.offsetHeight) {
			arrowBottom.style.display = 'none';
		}

		// выпадающее окно на мобилках
		const dropDownBtn = container.querySelector('#dropDown');
		const linksContainer = container.querySelector('.links-container');
		const links2 = linksContainer.querySelectorAll('.links a');

		const isMobile = () => {
			return window.innerWidth <= 768;
		};

		if (isMobile()) {
			const menuUp = 'polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)';
			const menuDown = 'polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)';
			let isOpen = false;
			const tl = gsap.timeline({
				defaults: { duration: 0.3, ease: 'power1.inOut' },
			});
			// for (let i = 1; i < links2.length; i++) {
			// 	links2[i].style.display = 'none';
			// }
			// for (let i = 1; i < links2.length; i++) {
			// 	links2[i].style.height = '0';
			// 	links2[i].style.overflow = 'hidden';
			// }

			// dropDownBtn.addEventListener('click', (event) => {
			// 	event.preventDefault();
			// 	for (let i = 1; i < links2.length; i++) {
			// 		links2[i].style.display = links2[i].style.display === 'none' ? 'inline' : 'none';
			// 	}
			// });
			// dropDownBtn.addEventListener('click', (event) => {
			// 	event.preventDefault();
			// 	gsap.to(links2, {
			// 		duration: 0.5,
			// 		height: (index, target) => {
			// 			return target.style.height === '0px' ? 'auto' : '0';
			// 		},
			// 	});
			// });
			const activeItem = container.querySelector('.active-reasoning');

			dropDownBtn.addEventListener('click', (event) => {
				event.preventDefault();

				isOpen = !isOpen;

				// const height = isOpen ? `${links2.length * 0.2}rem` : '0';
				// const height = isOpen ? 'auto' : 0;

				const onceHeight = links2[0].offsetHeight;

				// tl.to(links2, {
					// duration: 0.5,
					// height: height,
				// });
				// linksContainer.classList.toggle('is-open');
				tl.to(linksContainer, {
					duration: 0.5,
					height: isOpen ? onceHeight*links2.length : onceHeight,
				});

				tl.fromTo('.links a:not(.active-reasoning)', { opacity: 0, y: '0.5em', stagger: 0.1 }, { opacity: 1, y: '0em', stagger: 0.1 });
			});

			// links2.forEach((link) => {
			// 	link.addEventListener('click', (event) => {
			// 		event.preventDefault();
			// 		link.style.display === 'none';
			// 	});
			// });
		}
	}
}

export default {
	init,
};
