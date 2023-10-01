import Share from 'ninelines-sharing';

function init(container) {
	const page = container ? container : document;

	if (page.querySelector('[data-social]')) {
		const list = page.querySelectorAll('[data-social]');

		Array.prototype.forEach.call(list, (item) => {
			item.addEventListener('click', (e) => {
				const social = e.currentTarget.dataset.social;
				const url = location.origin + location.pathname;

				if (social === 'whatsapp') {
					window.open(`https://wa.me/?text=${url}`, '_blank').focus();
				} else if (e.currentTarget.dataset.url) {
					Share[social](`${location.origin + e.currentTarget.dataset.url}`);
				} else {
					Share[social](url);
				}
			});
		});
	}
}

export default {
	init,
};
