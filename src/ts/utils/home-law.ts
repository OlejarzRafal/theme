//@ts-ignore
export const homeLaws = () => {
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
        });
    });
};
