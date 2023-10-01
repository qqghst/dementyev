// eslint-disable-next-line no-unused-vars
import {redirect} from '@scripts/helpers/index';

function init(container) {
	window.scrollTo(0, 0);

	const totalPages = 75;
	// eslint-disable-next-line no-unused-vars
	const prevPageLink = document.querySelector('.prev-page');
	// eslint-disable-next-line no-unused-vars
	const nextPageLink = document.querySelector('.next-page');
	// eslint-disable-next-line no-unused-vars
	const prevPageLinkNav = document.querySelector('.prev-page-nav');
	// eslint-disable-next-line no-unused-vars
	const nextPageLinkNav = document.querySelector('.next-page-nav');

	const extractPageNumberFromURL = () => {
		const urlParts = window.location.href.split('/');
		const pageNumber = parseInt(urlParts[urlParts.length - 1], 10);

		return isNaN(pageNumber) ? 1 : pageNumber;
	};
	let currentPage = extractPageNumberFromURL();

	if (!currentPage || currentPage < 1 || currentPage > totalPages) {
		currentPage = 1;
	}

	const nav = container.querySelector('.arrows-container-mobile');

	if (nav) {
		$(document).on('scroll', () => {
			if (document.documentElement.scrollTop > window.innerHeight / 2) {
				nav.classList.add('_fixed');
			} else {
				nav.classList.remove('_fixed');
			}
		});
	}
	// const pagination = () => {
	// const navList = document.querySelector('.pagination-container ul.pagination');
	// const displayPages = 9;

	// let startPage = Math.max(1, currentPage - Math.floor(displayPages / 2));
	// let endPage = Math.min(totalPages, startPage + displayPages - 1);
	// if (endPage - startPage < displayPages - 1) {
	// 	startPage = Math.max(1, endPage - displayPages + 1);
	// }

	// navList.innerHTML = '';

	// for (let i = startPage; i <= endPage; i++) {
	// 	const li = document.createElement('li');
	// 	const a = document.createElement('a');
	// 	a.setAttribute('href', `/poem/${i}/`);
	// 	a.textContent = i;
	// 	li.appendChild(a);

	// 	if (i === currentPage) {
	// 		li.classList.add('current');
	// 	}

	// 	navList.appendChild(li);
	// }

	// // чтобы пагинация не исчезала при клике на нее
	// const keepPagination = navList.querySelectorAll('a');
	// keepPagination.forEach((link) => {
	// 	link.addEventListener('click', (e) => {
	// 		e.preventDefault();
	// 		const pageNumber = parseInt(link.textContent, 10);
	// 		redirect(`/poem/${pageNumber}/`);
	// 	});
	// });
	// };

	// prevPageLink.addEventListener('click', (e) => {
	// 	e.preventDefault();
	// 	redirect(`/poem/${currentPage - 1 > 0 ? currentPage - 1 : totalPages}/`);
	// });

	// prevPageLinkNav.addEventListener('click', (e) => {
	// 	e.preventDefault();
	// 	redirect(`/poem/${currentPage - 1 > 0 ? currentPage - 1 : totalPages}/`);
	// });

	// nextPageLink.addEventListener('click', (e) => {
	// 	e.preventDefault();
	// 	redirect(`/poem/${currentPage + 1 <= totalPages ? currentPage + 1 : 1}/`);
	// });

	// nextPageLinkNav.addEventListener('click', (e) => {
	// 	e.preventDefault();
	// 	redirect(`/poem/${currentPage + 1 <= totalPages ? currentPage + 1 : 1}/`);
	// });

	// window.addEventListener('popstate', () => {
	// 	currentPage = extractPageNumberFromURL();
	// 	pagination();
	// });

	// pagination();
}

export default {
	init,
};
