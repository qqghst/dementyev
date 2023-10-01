function init() {
	let pictures = document.querySelectorAll('.competition__picture');
	let imageCount = pictures.length;
	let currentPosition = 0;
	let competitionListHeight;

	const toggleImages = () => {
		pictures.forEach((item, index) => {
			if (index === currentPosition) {
				item.classList.add('_show');
			} else {
				item.classList.remove('_show');
			}
		});
	};

	window.addEventListener('scroll', () => {
		competitionListHeight = document.documentElement.scrollHeight;

		let scrollPosition = window.scrollY || window.pageYOffset;

		if (scrollPosition >= 0) {
			let newPosition = Math.floor(scrollPosition / (competitionListHeight / imageCount));

			if (newPosition !== currentPosition) {
				currentPosition = newPosition;
				toggleImages();
			}
		}
	});
}

export default {
	init,
};
