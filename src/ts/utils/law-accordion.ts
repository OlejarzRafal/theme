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
};
