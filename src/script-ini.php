<?php

$rootDir = __DIR__ . '/..';

chmod('resources/cache', 0777);
chmod('resources/log', 0777);
chmod('web/assets', 0777);
chmod('console', 0500);

exec("php \"$rootDir/console\" assetic:dump");