const colors = require("tailwindcss/colors");
const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,liquid,js}"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter", ...defaultTheme.fontFamily.sans],
        display: ["Lexend", "sans-serif"],
      },
      typography: {
        DEFAULT: {
          css: {
            h1: {
              fontSize: defaultTheme.fontSize["4xl"],
              fontWeight: defaultTheme.fontWeight.semibold,
              letterSpacing: defaultTheme.letterSpacing.tight,
            },
            h2: {
              fontWeight: defaultTheme.fontWeight.semibold,
            },
            a: {
              textDecorationColor: colors.lime["500"],
              textDecorationThickness:
                defaultTheme.textDecorationThickness["2"],
            },
            pre: {
              borderRadius: defaultTheme.borderRadius.none,
              borderWidth: defaultTheme.borderWidth.DEFAULT,
              borderColor: colors.slate["300"],
              color: colors.slate["900"],
              backgroundColor: colors.slate["50"],
            },
          },
        },
        lg: {
          css: {
            h1: {
              fontSize: defaultTheme.fontSize["4xl"],
              fontWeight: defaultTheme.fontWeight.semibold,
              letterSpacing: defaultTheme.letterSpacing.tight,
            },
            h2: {
              fontWeight: defaultTheme.fontWeight.semibold,
            },
            a: {
              textDecorationColor: colors.lime["500"],
              textDecorationThickness:
                defaultTheme.textDecorationThickness["2"],
            },
            pre: {
              borderRadius: defaultTheme.borderRadius.none,
              borderWidth: defaultTheme.borderWidth.DEFAULT,
              borderColor: colors.slate["300"],
              color: colors.slate["900"],
              backgroundColor: colors.slate["50"],
            },
          },
        },
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
