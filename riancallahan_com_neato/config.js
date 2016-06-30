module.exports = {
  browserSync: {
    hostname: "localhost",
    port: 8080,
    openAutomatically: false,
    reloadDelay: 50,
    injectChanges: true,
  },

  drush: {
    enabled: true,
    alias: {
      css_js: 'drush cr',
      cr: 'drush cr'
    }
  },

  twig: {
    useCache: false
  }
};
