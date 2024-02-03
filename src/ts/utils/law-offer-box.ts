//@ts-ignore
export const offerBox = () => {
	var container = document.querySelector(".law-items");
	if (container) {
		var children = container.children;
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
		var itemsPerRow = Math.floor(container.offsetWidth / childWidth);

		var numRows = Math.ceil(numChildren / itemsPerRow);
		var lastRowStartIndex = (numRows - 1) * itemsPerRow;

		for (var i = 0; i < numChildren; i++) {
			var rowIndex = Math.floor(i / itemsPerRow);
			var colIndex = i % itemsPerRow;
			if (colIndex === itemsPerRow - 1 || i === numChildren - 1) {
				children[i].classList.add("law-items__last-item-in-row");
			}
			if (rowIndex === numRows - 1) {
				children[i].classList.add("law-items__last-row-item");
			}
		}
	}

	// home
	var containerHome = document.querySelector(".law-item__right");
	if (containerHome) {
		var children = containerHome.children;
		var numChildren = children.length;

		// Funkcja do pobierania szerokości pierwszego dziecka
		function getChildWidth2() {
			if (numChildren > 0) {
				var childWidth = children[0].getBoundingClientRect().width;
				return childWidth;
			}
			return 0;
		}

		var childWidth = getChildWidth2();
		var itemsPerRow = Math.floor(containerHome.offsetWidth / childWidth);

		var numRows = Math.ceil(numChildren / itemsPerRow);
		var lastRowStartIndex = (numRows - 1) * itemsPerRow;

		for (var i = 0; i < numChildren; i++) {
			var rowIndex = Math.floor(i / itemsPerRow);
			var colIndex = i % itemsPerRow;
			if (colIndex === itemsPerRow - 1 || i === numChildren - 1) {
				children[i].classList.add("law-item__link--last-item-in-row");
			}
			if (rowIndex === numRows - 1) {
				children[i].classList.add("law-item__link--last-row-item");
			}
		}
	}
};
