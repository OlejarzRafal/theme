export const blog = (Swiper: any) => {
	const container = document.querySelector(".c-blog-list");
	if (!container) return;
	new Swiper(container, {
		slidesPerView: 4,
		spaceBetween: 52,
		speed: 1000,
		pagination: {
			el: ".swiper-pagination",
            clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		scrollbar: {
			el: ".swiper-scrollbar",
			draggable: true,
		},
		breakpoints: {
			0: {
				slidesPerView: 1.15,
				spaceBetween: 16,
			},
			576: {
				slidesPerView: 1.7,
				spaceBetween: 16,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 16,
			},
			991: {
				slidesPerView: 3,
				spaceBetween: 16,
			},
			1200: {
				slidesPerView: 4,
				spaceBetween: 20,
			},
			1400: {
				slidesPerView: 4,
				spaceBetween: 52,
			},
		},
	});
};
