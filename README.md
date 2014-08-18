Sample, skeleton module for use with the ZF2 MVC layer.

Unofficial PSR-0 compliant version of Url Version Handler. Helps to manager css and js updates
by adding the application version at the end of the URL

<code>
<?php echo $this->headLink(array('rel' => 'shortcut icon', 'type' => 'image/vnd.microsoft.icon', 'href' => $this->basePath() . '/assets/img/faviconpmp.ico'))
        ->prependStylesheet($this->urlVersionHandler($this->basePath() . '/css/custom.css'))
</code>

Installing
-----------
Install using *composer*.
Add repo to your repositories
"repositories": [
        ....
        {
            "type": "package",
            "package": {
                "name": "hmoyat/urlVersionHandler",
                "version": "dev-master",
                "source": {
                    "url": "git@github.com:hmoyat/urlVersionHandler.git",
                    "type": "git",
                    "reference": "master"
                },
                "autoload": {
                    "classmap": [
                        "./"
                    ]
                }
            }
        },
        ....
    ]
"require": {
        ...
        "hmoyat/urlVersionHandler": "dev-master"
        ...
    },
