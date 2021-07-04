# WLJ-WordPress-Theme

## Getting Started (Quick)
* Clone this repo into your WordPress instance's `theme` directory.
* Install Deps `cd whitneyjohnson && npm i`
* Run development bundling `npm run dev` or `npm run development`
* Select the whitneyjohnson theme as your WP Instance's active theme
* Load site, should see theme working.

Note: Currently, it appears the JIT compiler for Tailwind isn't playing nice with `npm run watch` and causes the watch to continuously compile. Due to this, I opt'd to run `npm run dev` whenever I am ready to view some new changes in the browser. You must do this to have Tailwind bring in any new classes you may have declared.

## Getting Start w/ Whitney Johnson Data
* Export existing data (posts, comments, etc.) from live instance: `Tools > Export > All Content > Download Export File`
* Export live instance's SQL information: For this I used WP Migrate DB plug-in, `Tools > Migrate DB > Migrate > Export Database
  * Update the replace values to match your new instance
    * First value is the url for the instance, for DevKinsta it should look like `//whitney-johnson.local`
    * Second value is the path to your wordpress instance, i.e. `/Users/<user>/DevKinsta/public/whitney-johnson`
* Import xml data in WP Admin: `Tools > Import > WordPress`
* Import sql data in Database Manager: DevKinsta example, click "Database manager" > Import (top left) > File Upload
