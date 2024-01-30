//@ts-ignore
export const homeLogotypeSlider = (Swiper: any) => {
	const homeLogotypeSlider = document.querySelector(".home-logotype__swiper");
	if (!homeLogotypeSlider) return;
	new Swiper(homeLogotypeSlider, {
		loop: true,
		autoplay: {
			delay: 1000,
		},
		slidesPerView: 1.15,
		allowTouchMove: false,
		speed: 1500,
		breakpoints: {
			576: {
				slidesPerView: 1.7,
				spaceBetween: 16,
			},
			768: {
				slidesPerView: 2.2,
				spaceBetween: 16,
			},
			991: {
				slidesPerView: 4,
				spaceBetween: 16,
			},
			1200: {
				slidesPerView: 5,
				spaceBetween: 32,
			},
		},
	});
};
