const colors = require("tailwindcss/colors");
const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,liquid,js}"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter", ...defaultTheme.fontFamily.sans],
        mono: ["Fira Mono", ...defaultTheme.fontFamily.mono],
        display: ["Lexend", "sans-serif"],
      },
      typography: {
        lg: {
          css: {
            h1: {
              fontSize: defaultTheme.fontSize["4xl"],
              fontWeight: defaultTheme.fontWeight.semibold,
              letterSpacing: defaultTheme.letterSpacing.tight,
            },
            h2: {
              fontWeight: defaultTheme.fontWeight.semibold,
              letterSpacing: defaultTheme.letterSpacing.tight,
            },
            h3: {
              fontWeight: defaultTheme.fontWeight.semibold,
              letterSpacing: defaultTheme.letterSpacing.tight,
            },
            a: {
              textDecorationColor: colors.lime["500"],
              textDecorationThickness:
                defaultTheme.textDecorationThickness["2"],
            },
            ":not(pre) > code": {
              paddingTop: defaultTheme.spacing["1.5"],
              paddingBottom: defaultTheme.spacing["1.5"],
              paddingLeft: defaultTheme.spacing["1"],
              paddingRight: defaultTheme.spacing["1"],
              borderWidth: defaultTheme.borderWidth.DEFAULT,
              borderColor: colors.slate["300"],
              fontWeight: "inherit",
              color: colors.slate["900"],
              backgroundColor: colors.slate["50"],
              "&:before": {
                content: defaultTheme.content.none,
              },
              "&:after": {
                content: defaultTheme.content.none,
              },
            },
            pre: {
              borderRadius: defaultTheme.borderRadius.none,
              borderWidth: defaultTheme.borderWidth.DEFAULT,
              borderColor: colors.slate["300"],
              color: colors.slate["900"],
              backgroundColor: colors.slate["50"],
            },
            "li::marker": {
              color: colors.lime["500"],
            },
          },
        },
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
