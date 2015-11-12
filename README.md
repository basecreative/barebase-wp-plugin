# barebase's WordPress plugin
Default theme plugin for Base Creative's Wordpress sites

Use this plugin to set anything content-related, like custom post types, taxonomies and hiding stuff you don't want.

First thing you need to do is creating a folder in the `plugins` folder of your WordPress installation with a project-related name. Then you must put these files in there, and rename the file `barebase-wp-plugin.php` to the same name that folder has. 
Example: If the project was google.com, you must have a folder on `wp-content/plugins` called `google-theme-plugin` for example and then rename `barebase-wp-plugin.php` to `google-theme-plugin.php`.

Then you can start creating:

- Custom post types: Use `custom-posts.php` to set up your custom post types. Remember to initialize them on `barebase_wp_plugin_init()`.
- Custom taxonomies: Same as post types, but on `custom-taxonomies.php`.
- Advanced Custom Fields: We use this plugin to create custom fields attached to our custom post types. This plugin will sync with ACF and save all the fields configuration in the `acf` folder. That way, wherever your copy of this plugin is, the ACF field would go with him. Remember that when moving to a new WordPress instalation these fields would be under the 'Sync' tab.

You have some examples commented out so you know what you can start with.

## Settings
The `settings.phpz is a work in progress but allows you to change some settings in the plugin.