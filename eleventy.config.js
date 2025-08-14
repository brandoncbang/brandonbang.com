const pluginRss = require("@11ty/eleventy-plugin-rss");
const syntaxHighlight = require("@11ty/eleventy-plugin-syntaxhighlight");
const markdownIt = require("markdown-it");

module.exports = function (eleventyConfig) {
  eleventyConfig.setLibrary(
    "md",
    markdownIt({
      html: true,
      linkify: true,
    }),
  );

  eleventyConfig.addPlugin(pluginRss);
  eleventyConfig.addPlugin(syntaxHighlight);

  eleventyConfig.addWatchTarget("./_site/css/");
  eleventyConfig.addPassthroughCopy("./src/favicons/");
  eleventyConfig.addPassthroughCopy("./src/img/");
  eleventyConfig.addPassthroughCopy("./src/js/");

  eleventyConfig.addShortcode("timestamp", () => `${Date.now()}`);

  eleventyConfig.addFilter("head", (array, n = 1) => {
    if (!Array.isArray(array) || array.length === 0) {
      return [];
    }
    if (n < 0) {
      return array.slice(n);
    }

    return array.slice(0, n);
  });

  return {
    markdownTemplateEngine: false,
    dir: {
      input: "src",
    },
  };
};
