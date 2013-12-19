[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/ARAMISAUTO/com.aramisauto.rundeck/badges/quality-score.png?s=c552c643de94d20e8b23e28c8f9082f1622e9b5a)](https://scrutinizer-ci.com/g/ARAMISAUTO/com.aramisauto.rundeck/)

#Installation

You just have to download ```rundeck-helper.phar``` from latest release : https://github.com/ARAMISAUTO/com.aramisauto.rundeck/releases and execute it.

#Available commands

##purge

This command deletes old Rundeck execution logs in database and filesystem. It is a workaround for the Rundeck issue : https://github.com/dtolabs/rundeck/issues/357

```
Usage:
 purge [--rundeck-config="..."] [--progress] [--dry-run] keep

Arguments:
 keep                  Number of log days to keep from now

Options:
 --rundeck-config      Path to Rundeck's rundeck-config.properties file (default: "/etc/rundeck/rundeck-config.properties")
 --progress            Display progress bar
 --dry-run             Do not perform purge, just show what would be purged
 --help (-h)           Display this help message.
 --quiet (-q)          Do not output any message.
 --verbose (-v|vv|vvv) Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
 --version (-V)        Display this application version.
 --ansi                Force ANSI output.
 --no-ansi             Disable ANSI output.
 --no-interaction (-n) Do not ask any interactive question.
```
