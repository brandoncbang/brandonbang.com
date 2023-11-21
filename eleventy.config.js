module.exports = function (eleventyConfig) {
  eleventyConfig.addWatchTarget('./_site/css/')
  eleventyConfig.addPassthroughCopy('./src/js/')

  return {
    dir: {
      input: 'src',
    },
  }
}
