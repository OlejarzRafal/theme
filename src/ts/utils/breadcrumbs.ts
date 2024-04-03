//@ts-ignore
export const breadcrumbs = () => {
	var element = document.querySelector(".breadcrumbs__current");

	if (element) {
		var text = element.textContent;
		if (text.length > 50) {
			element.textContent = text.slice(0, 50) + "...";
		}
	}
};
