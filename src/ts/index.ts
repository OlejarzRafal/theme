//@ts-nocheck
import "../scss/style.scss";
import { navigation } from "./utils/navigation";
// import { pagination } from './utils/pagination'
import { transition } from "./utils/transition";
import { animation } from "./utils/animation";
import { blog } from "./utils/blog";
import { newsPagination } from "./utils/news-pagination";
import Swiper, {
	Navigation,
	EffectFade,
	Mousewheel,
	Pagination,
	Scrollbar,
} from "swiper";
import "swiper/css";
import { screenResize } from "./utils/screen-resize";

//js

import { homeLogos } from "./utils/home-clients-logos";
import { homeLaws } from "./utils/home-law";
import { teamSlider } from "./utils/team-slider";
import { offerBox } from "./utils/law-offer-box";

Swiper.use([Navigation, EffectFade, Mousewheel, Pagination, Scrollbar]);

const isPage = (name: string): boolean =>
	document.body.classList.contains(name);

// if (document.querySelector("[data-faq]")) {
//     import("./utils/faq").then(({ faq }) => faq());
// }
document.addEventListener("DOMContentLoaded", () => {
	transition();
	navigation();
	animation();
	blog(Swiper);
	homeLogos(Swiper);
	newsPagination();
	homeLaws();
	offerBox();
	teamSlider(Swiper);
	// pagination()
});


window.onpageshow = function (event) {
	if (event.persisted) window.location.reload();
};
