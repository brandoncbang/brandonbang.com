function sample(items) {
  return items[Math.floor(Math.random() * items.length)];
}

export const secrets = {
  archBtw() {
    location.href = `${location.origin}/secrets/arch`;
  },
  bounce() {
    document
      .querySelector("img[src$='portrait.jpg']")
      .classList.toggle("animate-bounce");
  },
  crooked() {
    document
      .querySelectorAll("body :not([data-terminal], [data-terminal] *)")
      .forEach((el) => {
        const rotationDegrees = Math.floor(Math.random() * 3 * 2) - 3;

        el.style.rotate = `${rotationDegrees}deg`;
      });
  },
  draw() {
    location.href = `${location.origin}/secrets/draw`;
  },
  edit() {
    location.href = `${location.origin}/secrets/edit`;
  },
  grayscale() {
    document.documentElement.classList.toggle("grayscale");
  },
  limes() {
    location.href = `${location.origin}/secrets/limes`;
  },
  negative() {
    document.documentElement.classList.toggle("invert");
  },
  notFound() {
    location.href = `${location.origin}/secrets/404`;
  },
  spin() {
    document.querySelector("[data-lime]")?.classList.toggle("animate-spin");
  },
};

export function randomSecret() {
  const secret = sample(Object.values(secrets));

  secret();
}

export function setUpSecrets() {
  document.querySelectorAll("[data-secrets]").forEach((el) => {
    el.addEventListener("click", (e) => {
      randomSecret();
    });
  });
}
