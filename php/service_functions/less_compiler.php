<?php

include("../../php/service_libraries/LESSCompiler/lessc.inc.php");


//function that autocompile file less when you make update in the style

function autoCompileLess($inputFile, $outputFile) {
  // load the cache
  $cacheFile = $inputFile.".cache";

  if (file_exists($cacheFile)) {
    $cache = unserialize(file_get_contents($cacheFile));
  } else {
    $cache = $inputFile;
  }

  $less = new lessc;
  $newCache = $less->cachedCompile($cache);

  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
    file_put_contents($cacheFile, serialize($newCache));
    file_put_contents($outputFile, $newCache['compiled']);
  }
}

//destination file from custom.less to custom.css

$inputFile1 = "../../less/custom.less";
$outputFile1 = "../../css/custom.css";


autoCompileLess($inputFile1,$outputFile1);