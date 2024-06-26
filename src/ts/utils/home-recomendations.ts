//@ts-ignore
export const homeRecomendationSlider = (Swiper: any) => {
	const homeRecomendationSlider = document.querySelector(
		".home-reviews__list"
	);
	if (!homeRecomendationSlider) return;
	new Swiper(homeRecomendationSlider, {
		slidesPerView: 1.15,
		spaceBetween: 16,
		loop: true,
		autoplay: {
			enabled: false,
		},
		speed: 1000,
		scrollbar: {
			el: ".swiper-scrollbar",
			draggable: true,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		breakpoints: {
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
				loop: true,
				autoplay: {
                    enabled: true,
					delay: 3000,
					disableOnInteraction: false,
					pauseOnMouseEnter: true,
				},
				speed: 1000,
				slidesPerView: 3,
				spaceBetween: 20,
			},
		},
	});
};
