declare global {
	interface JQuery {
		pagination({}): void;
	}
}
export const newsPagination = () => {
	if (!document.querySelector("main[data-id='news']")) return;
	const pagination: HTMLElement | null = document.querySelector(
		".news-list__pagination"
	);
	const container = document.querySelector(".news-list__main");
	let items = $(".news-item");
	let numItems = items.length;
	let perPage = 10;
	if (window.innerWidth <= 1400) perPage = 9;
	if (window.innerWidth <= 992) perPage = 8;

	if (numItems <= perPage && pagination)
		return (pagination.style.display = "none");
	else if (pagination) pagination.style.display = "block";
	items.slice(perPage).hide();
	if (pagination) {
		$(".news-list__pagination").pagination({
			items: numItems,
			itemsOnPage: perPage,
			displayedPages: window.innerWidth > 768 ? 2 : 1,
			prevText: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M23.0256 12.975L3.73207 12.9746L11.9754 21.2178L10.5968 22.5963L7.7625e-05 11.9997L10.5968 1.40315L11.9754 2.78172L3.73202 11.025L23.0256 11.0255L23.0256 12.975Z" fill="#B5ADB7"/></svg>`,
			nextText: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M0.974368 12.975L20.2679 12.9746L12.0246 21.2178L13.4032 22.5963L23.9999 11.9997L13.4032 1.40315L12.0246 2.78172L20.268 11.025L0.974368 11.0255L0.974368 12.975Z" fill="#B5ADB7"/></svg>`,
			onPageClick: function (pageNumber: number) {
				var showFrom = perPage * (pageNumber - 1);
				var showTo = showFrom + perPage;
				items.hide().slice(showFrom, showTo).show();
			},
		});
	}

	if (!pagination) return;
	pagination.addEventListener("click", (e) => {
		const link = (e.target as HTMLElement).closest("a");
		if (!link) return;
		if (container) container.scrollIntoView({ behavior: "smooth" });
	});
};
export const blogPagination = () => {
	if (!document.querySelector("main[data-id='blog']")) return;
	const pagination: HTMLElement | null = document.querySelector(
		".news-list__pagination"
	);
	const container = document.querySelector(".news-list__main");
	let items = $(".news-item");
	let numItems = items.length;
	let perPage = 10;

	// if (window.innerWidth <= 1400) perPage = 9;
	// if (window.innerWidth <= 992) perPage = 8;

	if (numItems <= perPage && pagination)
		return (pagination.style.display = "none");
	else if (pagination) pagination.style.display = "block";

	items.slice(perPage).hide();

	if (pagination) {
		$(".news-list__pagination").pagination({
			items: numItems,
			itemsOnPage: perPage,
			displayedPages: window.innerWidth > 768 ? 2 : 1,
			prevText: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M23.0256 12.975L3.73207 12.9746L11.9754 21.2178L10.5968 22.5963L7.7625e-05 11.9997L10.5968 1.40315L11.9754 2.78172L3.73202 11.025L23.0256 11.0255L23.0256 12.975Z" fill="#B5ADB7"/></svg>`,
			nextText: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M0.974368 12.975L20.2679 12.9746L12.0246 21.2178L13.4032 22.5963L23.9999 11.9997L13.4032 1.40315L12.0246 2.78172L20.268 11.025L0.974368 11.0255L0.974368 12.975Z" fill="#FDEFEF"/></svg>`,
			onPageClick: function (pageNumber: number) {
				var showFrom = perPage * (pageNumber - 1);
				if (window.innerWidth >= 992) {
					var showTo =
						showFrom + (pageNumber === 1 ? perPage : perPage - 1);
				} else {
					var showTo = showFrom + perPage;
				}

				items.hide().slice(showFrom, showTo).show();
			},
		});
	}

	if (!pagination) return;
	pagination.addEventListener("click", (e) => {
		const link = (e.target as HTMLElement).closest("a");
		if (!link) return;
		if (container) container.scrollIntoView({ behavior: "smooth" });
	});
};
