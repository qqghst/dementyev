import footer from '@components/rbc/footer/footer';
import analytics from '@components/rbc/analytics/analytics';

function init() {
	// eslint-disable-next-line no-console
	console.log('demo-rbc init');
	footer.init();
	analytics.init();
}

function destroy() {
	// eslint-disable-next-line no-console
	console.log('demo-rbc destroy');
	analytics.destroy();
}

export default {
	init,
	destroy,
};
