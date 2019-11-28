<?php
    header('Content-Type: image/svg+xml');
?>
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!-- Created with Inkscape (http://www.inkscape.org/) -->

<svg
   xmlns="http://www.w3.org/2000/svg"
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns:xlink="http://www.w3.org/1999/xlink"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="1000"
   height="1000"
   viewBox="0 0 1000 1000"
   fill="yellow"
   stroke="blue"
   stroke-width="1"
   version="1.1"
   id="svg8"
   inkscape:version="0.92.4 (5da689c313, 2019-01-14)"
   sodipodi:docname="muster-svg.php">
  <title
     id="title48">Leer</title>
  <defs
     id="defs2" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.35"
     inkscape:cx="-78.571429"
     inkscape:cy="560"
     inkscape:document-units="mm"
     inkscape:current-layer="layer1"
     showgrid="false"
     inkscape:window-width="1920"
     inkscape:window-height="1015"
     inkscape:window-x="0"
     inkscape:window-y="0"
     inkscape:window-maximized="1" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title>Leer</dc:title>
        <cc:license
           rdf:resource="http://creativecommons.org/publicdomain/zero/1.0/" />
        <dc:creator>
          <cc:Agent>
            <dc:title>Thomas Arend</dc:title>
          </cc:Agent>
        </dc:creator>
        <dc:language>Deutsch</dc:language>
        <dc:date>14.10.2019</dc:date>
        <dc:rights>
          <cc:Agent>
            <dc:title></dc:title>
          </cc:Agent>
        </dc:rights>
        <dc:publisher>
          <cc:Agent>
            <dc:title>Thomas Arend</dc:title>
          </cc:Agent>
        </dc:publisher>
        <dc:description>Leeres SVG</dc:description>
      </cc:Work>
      <cc:License
         rdf:about="http://creativecommons.org/publicdomain/zero/1.0/">
        <cc:permits
           rdf:resource="http://creativecommons.org/ns#Reproduction" />
        <cc:permits
           rdf:resource="http://creativecommons.org/ns#Distribution" />
        <cc:permits
           rdf:resource="http://creativecommons.org/ns#DerivativeWorks" />
      </cc:License>
    </rdf:RDF>
  </metadata>
  
<style>
    .arm {
        fill:#00FFFF;
        fill-opacity:1;
        fill-rule:evenodd;
        stroke:black;
        stroke-width:2;
        stroke-linecap:square;
        stroke-linejoin:round;
        stroke-opacity:1;
    }

      .arm1 {
        fill:#FFFF00;
        fill-opacity:1;
        fill-rule:evenodd;
        stroke: black;
        stroke-width:2;
        stroke-linecap:square;
        stroke-linejoin:round;
        stroke-opacity:1;
    }
      .arm2 {
        fill:#dddd00;
        fill-opacity:1;
        fill-rule:evenodd;
        stroke: black;
        stroke-width:2;
        stroke-linecap:square;
        stroke-linejoin:round;
        stroke-opacity:1;
    }
</style>

<?php

  $heute = getdate();
  
  $r = $_GET["r"];
  $s = $_GET["s"];
  if ( $r == "" or ! is_numeric($r) ) {
    $r=100;
  }
  
  $r=$r+$heute['yday'];
  
  if ( $s == "" or ! is_numeric($s) ) {
    $s=20;
  }
  $x = $r * ($s /100) * sin(deg2rad(36)) ;
  $y = $r * ($s /100) * cos(deg2rad(36)) ;

print <<<END
  <defs id="seesternarm">
      <g id="arm" >
        <path
            d="M 0,0
            L 0,$r 
            L $x, $y
            z"
            id="arm1" 
            class="arm1" />
        <path
            d="M 0,0 
            L 0,$r 
            L -$x, $y
            z"
            id="arm2" 
            class="arm2" />
    
      </g>
    </defs>

    <!-- Seestern -->
  
     <g class="arm" transform="rotate(180 500 500)" >

END;
    for ($i = 0; $i <= 4; $i++) {
        $w = $i * 72;
        print <<<END
        <use xlink:href="#arm" x="500" y="500" class="arm1" transform="rotate($w 500 500)" />\n
END;
}
?>
        <circle cx="500" cy="500" r="60" class="arm1" /> 
        <circle cx="500" cy="500" r="40" class="arm2" />
    </g>
</svg>
