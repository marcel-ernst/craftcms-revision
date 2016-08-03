# Craft CMS Revision Plugin

A Craft CMS plugin for reading a revision string from a file and provide it as template-variable.
This is useful for deploying the cms with capistrano or something else.


## Installation
1. Download ZIP and unzip file then place the `revision` directory into your `craft/plugins` directory.

2. Install the plugin through Control Panel under `Settings > Plugins`


## Usage

### 1. Config

Create a `revision.php` file in your `craft/config` directory and set the path to your REVISION file, relative to your index.php
```php
<?php

return array(
    'revisionFile' => '../REVISION',
);
```

### 2. Usage
in your templates you can use it like this:
```twig
<script src="main.js?v={{ craft.revision.get }}"></script>
```
or

```twig
<script src="main.js?v={{ craft.revision.lastTimeModified.getTimestamp() }}"></script>
```


### 3. Template var's
| varName                          | type      | description                                     |
|----------------------------------|-----------|-------------------------------------------------|
| craft.revision.get               | string    | the content of your revisionFile                |
| craft.revision.lastTimeModified  | DateTime  | the last modified DateTime of your revisionFile |





## Related Project

[A framework for deploying CraftCMS website with Capistrano.](https://github.com/Bluegg/craft-deploy)


## License

[MIT](LICENSE)