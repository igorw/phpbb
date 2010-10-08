<?php

require_once __DIR__.'/../phpbb/phpBBKernel.php';

$kernel = new phpBBKernel('prod', false);
$kernel->handle()->send();
