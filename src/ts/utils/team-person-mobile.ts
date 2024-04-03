//@ts-ignore
export const teamPersonMobile = () => {
	// Social mobile
	if (window.innerWidth < 768) {
		var socialElement = document.querySelector(".team-person__social");
		var contactWrapElement = document.querySelector(
			".team-person__contactWrap"
		);
		if (socialElement && contactWrapElement) {
			contactWrapElement.appendChild(socialElement);
		}

		// Photo mobile
		var personImage = document.querySelector(".team-person__image");
		var personContent = document.querySelector(".team-person__content");
		if (socialElement && contactWrapElement) {
			personContent.insertBefore(personImage, personContent.firstChild);
		}
	}
};
