//@ts-ignore
export const homeLaws = () => {
	// Funkcja do aktualizacji układu elementów w sekcji "home"
	function updateHomeLayout() {
		var containerHome = document.querySelector(".law-item__right");
		if (containerHome) {
			var children = containerHome.children;
			var numChildren = children.length;

			// Funkcja do pobierania szerokości pierwszego dziecka
			function getChildWidth() {
				if (numChildren > 0) {
					var childWidth = children[0].getBoundingClientRect().width;
					return childWidth;
				}
				return 0;
			}

			var childWidth = getChildWidth();
			var itemsPerRow = Math.floor(
				containerHome.offsetWidth / childWidth
			);

			var numRows = Math.ceil(numChildren / itemsPerRow);
			var lastRowStartIndex = (numRows - 1) * itemsPerRow;

			for (var i = 0; i < numChildren; i++) {
				var rowIndex = Math.floor(i / itemsPerRow);
				var colIndex = i % itemsPerRow;
				if (colIndex === itemsPerRow - 1 || i === numChildren - 1) {
					children[i].classList.add(
						"law-item__link--last-item-in-row"
					);
				}
				if (rowIndex === numRows - 1) {
					children[i].classList.add("law-item__link--last-row-item");
				}
			}
		}
	}

	// Wywołanie funkcji aktualizującej układ na początku
	updateHomeLayout();

	const buttons = document.querySelectorAll(".home-law__button");
	const items = document.querySelectorAll(".home-law__item");
	buttons.forEach((button) => {
		button.addEventListener("click", () => {
			const dataName = button.getAttribute("data-tab");

			buttons.forEach((btn) => btn.classList.remove("active"));
			items.forEach((item) => item.classList.remove("active"));

			button.classList.add("active");
			document
				.querySelector(`.home-law__item[data-content="${dataName}"]`)
				.classList.add("active");

			const toggleDiv = button.closest(".home-law__toggle");
			toggleDiv.setAttribute("data-active", dataName);

			// Wywołanie funkcji aktualizującej układ po kliknięciu
			updateHomeLayout();
		});
	});
};
