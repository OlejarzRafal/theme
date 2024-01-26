declare global {
    interface JQuery {
        pagination({ }): void;
    }
}
export const pagination = () => {
    if (!document.querySelector("main[data-id='blog']")) return;
    const pagination: HTMLElement | null = document.querySelector(".posts__pagination");
    const container = document.querySelector(".posts__main");
    let items = $(".posts__item");
    let numItems = items.length;
    let perPage = 7;

    if (numItems <= perPage && pagination) return pagination.style.display = "none"
    else if (pagination) pagination.style.display = "block"
    items.slice(perPage).hide();
    if (pagination) {
        $(".posts__pagination").pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: `<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.29289 14.7071L0.928932 8.34315C0.538408 7.95262 0.538408 7.31946 0.928932 6.92893L7.29289 0.564971C7.68342 0.174446 8.31658 0.174446 8.70711 0.564971C9.09763 0.955496 9.09763 1.58866 8.70711 1.97919L3.05025 7.63604L8.70711 13.2929C9.09763 13.6834 9.09763 14.3166 8.70711 14.7071C8.31658 15.0976 7.68342 15.0976 7.29289 14.7071Z" fill="#848484"/></svg>`,
            nextText: `<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.34383 0.564378L8.70779 6.92834C9.09831 7.31886 9.09831 7.95203 8.70779 8.34255L2.34383 14.7065C1.9533 15.097 1.32014 15.097 0.929612 14.7065C0.539088 14.316 0.539088 13.6828 0.929612 13.2923L6.58647 7.63545L0.929612 1.97859C0.539088 1.58807 0.539088 0.954902 0.929612 0.564378C1.32014 0.173853 1.9533 0.173853 2.34383 0.564378Z" fill="#848484"/></svg>`,
            onPageClick: function (pageNumber: number) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
            },
        });
    }

    if (pagination) pagination.addEventListener("click", (e) => {
        const link = (e.target as HTMLElement).closest("a");
        if (!link) return;
        if (container) container.scrollIntoView({ behavior: "smooth" });
    });
};