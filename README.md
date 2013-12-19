# Command : purge

This command deletes old Rundeck execution logs in database and filesystem.

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
