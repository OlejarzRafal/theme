//@ts-ignore
export const accordion = () => {
	const accordionItems = $(".accordion__item");

	// Funkcja do ustawiania klasy aktywnej na podstawie bieżącej ścieżki URL
	const setActiveClass = () => {
		accordionItems.each(function () {
			const currentItem = $(this);
			const submenu = currentItem.find(".submenu");

			submenu.find("a").each(function () {
				const href = $(this).attr("href");
				if (href === window.location.href) {
					currentItem.addClass("open");
					submenu.slideDown();
					$(this).closest("li").addClass("active");
				}
			});
		});
	};
	setActiveClass();

	accordionItems.on("click", function () {
		const currentItem = $(this);
		const submenu = currentItem.find(".submenu");

		accordionItems
			.not(currentItem)
			.removeClass("open")
			.find(".submenu")
			.slideUp();
		currentItem.toggleClass("open");
		submenu.slideToggle();
	});

	$(".submenu").on("click", "a", function (e) {
		e.stopPropagation();
	});

	// MOBILE
	var lawSingle = document.querySelector(".law-single");

	if (lawSingle) {
		var mobileBtn = document.querySelector(".ls-content__btn-mobile a");
		var sidebar = document.querySelector(".ls-content__sidebar");
		var closeBtn = document.getElementById("close-mobile-sidebar");

		mobileBtn.addEventListener("click", function (event) {
			event.preventDefault();
			sidebar.classList.add("open");
		});

		closeBtn.addEventListener("click", function (event) {
			event.preventDefault();
			sidebar.classList.remove("open");
		});
	}
};
