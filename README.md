WIP
=======================

Requirements
---------
* php
* [Composer](http://getcomposer.org/)

Getting started
---------
```bash
composer.phar install
```

## Directory structure
```
icicle.jp.net
├── composer.json
├── composer.lock
├── html
│   ├── css
│   │   ├── DailyReport.css
│   │   └── accordion.css
│   ├── fonts
│   │   ├── glyphicons-halflings-regular.eot
│   │   ├── glyphicons-halflings-regular.svg
│   │   ├── glyphicons-halflings-regular.ttf
│   │   └── glyphicons-halflings-regular.woff
│   ├── image
│   │   └── datepicker.png
│   ├── index.php
│   ├── js
│   │   └── calender.js
│   └── sample_state_cliant.php
├── include
│   └── SingletonConf.class.php
├── library
│   ├── AbstractDisplay.class.php
│   ├── AuthorizedState.class.php
│   ├── PcDailyReport.class.php
│   ├── PcDisplay.class.php
│   ├── SpContents.class.php
│   ├── SpDisplay.class.php
│   ├── UnauthorizedState.class.php
│   ├── User.class.php
│   ├── UserState.class.php
│   ├── libraryFactory.class.php
│   └── userAgent.class.php
├── template
│   └── PcDailyReportInput.inc
└── training
    ├── test.log
    ├── training1.awk
    └── training2.awk
```
