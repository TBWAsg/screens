[demo](http://tbwa.weiwenng.com/)

## Features
- Display RSS articles from a list of RSS feeds
- 5 screens (2 unique designs) display up to 40 latest articles from the last 24 hours
- Overlays to show individual articles
- Built for HD TV resolution 1920x1080

## Instructions
- Set up MySQL [table](table.sql)
- Set up [credentials](dbconfig.php)
- Change [list of feeds](pull-rss/index.php)
- Set up a cron job on server to pull RSS feed.
```
m      h       dom             mon     dow          command
Minute Hour    Day of Month    Month   Day of week  <command>
```
```
php -f /FILEPATH/screens/pull-rss/index.php
```

## Credits
- [SimplePie, PHP feed parser](http://simplepie.org)
