class MobileNav extends HTMLElement {
  show() {
    window.scrollTo(0, 0);

    document.body.classList.add(
      "overflow-hidden",
      "-translate-x-full",
      "transition-transform",
      "motion-reduce:transition-none",
      "sm:overflow-auto",
      "sm:translate-x-0",
    );
  }

  hide() {
    document.body.classList.remove(
      "overflow-hidden",
      "-translate-x-full",
      "sm:overflow-auto",
      "sm:translate-x-0",
    );
  }

  connectedCallback() {
    this.querySelector("button[data-show]").addEventListener("click", (_) => {
      this.show();
    });

    this.querySelector("button[data-hide]").addEventListener("click", (_) => {
      this.hide();
    });
  }
}

export default MobileNav;
