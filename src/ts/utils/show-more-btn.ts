//@ts-ignore
export const showMoreBtn = () => {
	const showMoreButtons = document.querySelectorAll(".show-more-btn");
	showMoreButtons.forEach(function (button) {
		button.addEventListener("click", function () {
			const container = button.closest(".text-show-more");
			if (container) {
				const shortText = container.querySelector(".short-text");
				const fullText = container.querySelector(".full-text");
				if (shortText && fullText) {
					shortText.style.display = "none";
					fullText.style.display = "block";
					button.style.display = "none";
				}
			}
		});
	});
};
