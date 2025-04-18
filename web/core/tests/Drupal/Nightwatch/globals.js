const path = require('node:path');
const fs = require('node:fs');
const mkdirp = require('mkdirp');
const nightwatchSettings = require('./nightwatch.conf');

const commandAsWebserver = (command) => {
  if (process.env.DRUPAL_TEST_WEBSERVER_USER) {
    return `sudo -u ${process.env.DRUPAL_TEST_WEBSERVER_USER} ${command}`;
  }
  return command;
};

module.exports = {
  afterEach: (browser, done) => {
    // Writes the console log - used by the "logAndEnd" command.
    if (
      browser.drupalLogConsole &&
      (!browser.drupalLogConsoleOnlyOnError ||
        browser.currentTest.results.errors > 0 ||
        browser.currentTest.results.failed > 0)
    ) {
      const resultPath = path.join(
        __dirname,
        `../../../${nightwatchSettings.output_folder}/consoleLogs/${browser.currentTest.module}`,
      );
      const status =
        browser.currentTest.results.errors > 0 ||
        browser.currentTest.results.failed > 0
          ? 'FAILED'
          : 'PASSED';
      mkdirp.sync(resultPath);
      const now = new Date().toString().replace(/[\s]+/g, '-');
      const testName = (
        browser.currentTest.name || browser.currentTest.module
      ).replace(/[\s/]+/g, '-');
      browser
        .getLog('browser', (logEntries) => {
          const browserLog = JSON.stringify(logEntries, null, '  ');
          fs.writeFileSync(
            `${resultPath}/${testName}_${status}_${now}_console.json`,
            browserLog,
          );
        })
        .end(done);
    } else {
      browser.end(done);
    }
  },
  commandAsWebserver,
};
