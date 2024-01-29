//@ts-ignore
export const teamSlider = (Swiper: any) => {
	console.log("slider team");
	var swiper2 = new Swiper(".team-slide-swiper", {
		// autoplay: {
		// 	delay: 2500,
		// 	disableOnInteraction: false,
		// },
		slidesPerView: 3.2,
		// loop: true,
		centeredSlides: true,
		spaceBetween: 23,
		// grabCursor: true,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		scrollbar: {
			el: ".swiper-scrollbar",
			draggable: true,
		},
		breakpoints: {
			0: {
				slidesPerView: 1.3,
				spaceBetween: 17,
				centeredSlides: null,
			},
			768: {
				slidesPerView: 1.5,
				spaceBetween: 17,
				centeredSlides: null,
			},
			991: {
				slidesPerView: 2,
			},
			1400: {
				slidesPerView: 3.2,
			},
		},
	});
};
