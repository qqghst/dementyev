import {gsap} from 'gsap';
import SplitType from 'split-type';

function init(container) {
	if (container.dataset.barbaNamespace === 'home') {
		const text = new SplitType('#target', {
			types: ' chars',
		});

		const split = new SplitType(text.chars ?? [], {
			types: 'chars',
		});

		gsap.fromTo(
			split.chars,
			{
				opacity: 0,
				y: 12,
				transform: 'translateZ(0)',
			},
			{
				duration: 0.8,
				opacity: 1,
				y: 0,
				stagger: 0.05,
				ease: 'power2',
			},
		);
	}
}

export default {
	init,
};
