<?php

use Bicycle\Bicycle;

require_once 'vendor/autoload.php';

$dicConfig = (new \Aspire\DIC\Config())->load(
    new \Aspire\DIC\Config\PHP('dic-config.php')
);
$dic = new \Aspire\DIC\Container($dicConfig);

$bike = $dic->get(Bicycle::class);
if ($bike instanceof Bicycle) {
    echo "Bicycle created.\nWheel size: ", $bike->frontWheel()->size(), "\n";
}
