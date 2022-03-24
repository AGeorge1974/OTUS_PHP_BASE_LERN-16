<?php


function showPicture (){
    $aListExtPicture = array('JPG', 'BMP', 'SVG', 'PSD','PNG', 'GIF', 'ICO','TIFF','WEBP');
    $dir    = 'IMG/';
    $aFiles = scandir($dir);
    foreach ($aFiles as $itemFile) {
      $aFile = explode(".", $itemFile);
      $nameFileExt = strtoupper($aFile[1]);
      if (in_array($nameFileExt, $aListExtPicture)) {
        $ref = $dir.'/'.$itemFile;
        $showImg = '<div class=refPicture>';
        $showImg = $showImg . '<a target="_blank" href=' . $ref . '>';
        $showImg = $showImg . '<img src="'. $dir . '/' . $itemFile . '" height="200" width="200" vspace="5" hspace="5">';
        $showImg = $showImg . '</a>';
        $showImg = $showImg . '</div>';
        echo $showImg;
      };
    };
};

?>

