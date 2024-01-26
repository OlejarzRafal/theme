export const scrollNavigation = () => {
    let lastScrollTop: number;

    const menu: HTMLElement | null = document.getElementById('header');
    if (!menu) return;

    window.addEventListener('scroll', (): void => {
        const scrollTop: number = window.pageYOffset || document.documentElement.scrollTop;
        menu.style.transform = `translateY(${scrollTop > lastScrollTop ? '-100%' : '0'})`;
        lastScrollTop = scrollTop;
    });
}