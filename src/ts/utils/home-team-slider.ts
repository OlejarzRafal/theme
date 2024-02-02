//@ts-ignore
export const homeTeamSlider = (Swiper: any) => {
	const contentTeam = document.querySelector(".home-team__main");
	// console.log(contentTeam);
	if (!contentTeam || window.innerWidth >= 1199) return;
	new Swiper(contentTeam, {
		slidesPerView: "auto",
		spaceBetween: 32,
		speed: 1000,
		scrollbar: {
			el: ".home-team__scrollbar .swiper-scrollbar",
			draggable: true,
		},
	});
};
