<?php
function quadlayers_redirect() {
  if (isset($_SERVER['HTTPS']) &&
  ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
  isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
  $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $protocol = 'https://';
}
else {
  $protocol = 'http://';
}
  $currenturl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $currenturl_relative = wp_make_link_relative($currenturl);

//cases 
switch ($currenturl_relative) {	
  case '/adminloginpage':
  $urlto = 'https://emotionalrec.com/this-will-auto-regenerate-a-hash';    // Go to emotionalrec.com to sign up for a canary url, anyone access this url, this will send an email to admin
  break;
//..... create your own
default:
return;

}

if ($currenturl != $urlto)
exit( wp_redirect( $urlto ) );
}
add_action( 'template_redirect', 'quadlayers_redirect' );

