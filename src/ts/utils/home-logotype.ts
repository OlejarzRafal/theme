//@ts-ignore
export const homeLogotypeSlider = (Swiper: any) => {
	const homeLogotypeSlider = document.querySelector(".home-logotype__swiper");
	if (!homeLogotypeSlider) return;
	new Swiper(homeLogotypeSlider, {
		loop: true,
		autoplay: {
			delay: 1000,
		},
		slidesPerView: 1.7,
		allowTouchMove: false,
		spaceBetween: 32,
		speed: 1500,
		breakpoints: {
			768: {
				slidesPerView: 2.2,
			},
			991: {
				slidesPerView: 4,
			},
			1200: {
				slidesPerView: 5,
			},
		},
	});
};
