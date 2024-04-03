//@ts-ignore
export const teamSlider = (Swiper: any) => {
	var swiper2 = new Swiper(".team-slide-swiper", {
		slidesPerView: 1.3,
		spaceBetween: 16,
		centeredSlides: null,
		autoplay: {
			enabled: false,
		},
		pagination: {
			el: ".swiper-pagination",
			// clickable: true,
		},
		scrollbar: {
			el: ".swiper-scrollbar",
			draggable: true,
		},
		breakpoints: {
			991: {
				slideToClickedSlide: true,
				speed: 800,
				slidesPerView: "auto",
				loop: true,
				spaceBetween: 24,
				initialSlide: 1,
				autoplay: {
                    enabled: true,
					delay: 1600,
					disableOnInteraction: false,
				},
			},
		},
	});
};
