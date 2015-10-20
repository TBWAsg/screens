[demo](http://tbwa.weiwenng.com/)

## Features
**Display RSS articles from a list of RSS feeds**

**Built for HD TV resolution 1920x1080**

**5 screens (2 unique designs) display up to 40 latest articles from the last 24 hours:**

![Screen1](http://imgur.com/iCHOd3W.jpg "Screen1")

![Screen2](http://imgur.com/TzrgAPT.jpg "Screen1")

**Overlays to show individual articles:**

![overlay1](http://imgur.com/9lmpfZY.jpg "overlay1")

![overlay2](http://imgur.com/RVMvrRa.jpg "overlay2")




## Instructions
- Set up MySQL [table](table.sql)
- Set up [credentials](dbconfig.php)
- Change [list of feeds](pull-rss/index.php)
- Set up a cron job on server to pull RSS feed:
```
Minute Hour    Day of Month    Month   Day of week                    <command>
0       *          *             *         *            php -f /FILEPATH/screens/pull-rss/index.php

```

## Credits
- [SimplePie, PHP feed parser](http://simplepie.org)
