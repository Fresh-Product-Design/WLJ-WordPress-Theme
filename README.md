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


## Page Templates & Custom Pages
For the initial release of this theme, we are hard coding each indiviudal content page's design. This is in lue of trying to figure out have to make the content on these uniquely designed pages managable by the WP Admin tooling. With this in mind, while our custom page templates are specific to one page only if we use the `page-{slug}.php` way of implementing one-offs then our page names are strictly set - where if someone changes it in the WP Admin the template would no longer be applied. So, instead, we are using the `page-template` directory, with a comment to denote template information method of denoting reuseable templates we can set from the WP Admin page editor. This will allow them to make any changes to the page URL/name they want, and it won't effect the template being used. Also, when we start making these templates support dynamic content from WP Admin we can transition to actual page design templates for them to choose from.

## Page URL Slugs & Page Template Pairings
* About Us - /about-us - aboutUs.php