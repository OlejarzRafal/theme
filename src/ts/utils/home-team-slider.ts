//@ts-ignore
export const homeTeamSlider = (Swiper: any) => {
	const contentTeam = document.querySelector(".home-team__main");
	if (window.innerWidth < 1200) {
		// console.log(contentTeam);
		new Swiper(contentTeam, {
			slidesPerView: "auto",
			spaceBetween: 50,
			scrollbar: {
				el: ".home-team__scrollbar .swiper-scrollbar",
				draggable: true,
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			breakpoints: {
				1200: {
					slidesPerView: 4.4,
					spaceBetween: 70,
					navigation: {
						nextEl: ".swiper-button-next",
						prevEl: ".swiper-button-prev",
					},
				},
			},
		});
	}
};
