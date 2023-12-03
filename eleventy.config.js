module.exports = function (eleventyConfig) {
  eleventyConfig.addWatchTarget("./_site/css/");
  eleventyConfig.addPassthroughCopy("./src/img/");
  eleventyConfig.addPassthroughCopy("./src/js/");

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
    dir: {
      input: "src",
    },
  };
};
