# WP-Admin-Post-View-All

Helpful mini tools for your WordPress website. 

## Description

If you create websites or plugins, sometimes you might create an incorrect loop and end up with thousands of published and draft posts. Deleting them manually can be a tedious task. While you can go directly to your server or database, that might complicate things further. This plugin provides a simple solution by allowing you to view all posts in a single overview, making bulk deletion easier.

I've tested it with up to 500 posts and it works fine, but it takes a while to load the page. For better performance, it is set to display 200 posts at a time. Do not use this on a shared host; in that case, a maximum of 50 posts is recommended.

## Installation

1. Upload the `admin-post-view-all` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

1. Activate the plugin from the Plugins menu in WordPress.
2. Go to the Posts or Pages section in your WordPress admin dashboard.
3. You will now see all posts in one view.
4. Select the posts you want to delete and use the bulk delete option.

## Performance Note

- Recommended for servers with high CPU and memory capacity.
- On shared hosts, reduce the number of posts displayed for better performance.

## Tested Configuration

- **Server**: 8 CPU, 30 GB RAM
- **Performance**: Can handle displaying and deleting 200 posts in a few seconds.

## Disclaimer

Use this plugin at your own risk. Always ensure you have a backup of your database before performing bulk actions.

## Author

Created by Volkan Sah
