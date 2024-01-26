export const transition = () => {
  const origin: string = window.location.host;
  const selector = `[href*="${origin}"]`;
  const anchors: NodeListOf<HTMLLinkElement> = document.querySelectorAll(selector);
  const transition_el: HTMLElement | null = document.querySelector(".transition");
  const transitionElement: HTMLElement | null = document.querySelector(".transition");
  setTimeout(() => {
    if (transition_el) (transition_el as HTMLElement).classList.remove("is-active")
  }, 500);
  anchors.forEach((anchor) => {
    anchor.addEventListener("click", (e) => {
      if (transitionElement) transitionElement.classList.add("is-active");
    });
  });
};
