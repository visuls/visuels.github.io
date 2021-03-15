<?php
$HttpStatus = "";
if( isset($_SERVER["REDIRECT_STATUS"]) ) $HttpStatus = $_SERVER["REDIRECT_STATUS"];
if( $HttpStatus == "" ) { @$HttpStatus = $_REQUEST["err"]; }
$lang = "fr";
if( isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ) $lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
$redirecturl = "index.html";
if( $HttpStatus == 400) {
$redirecturl = "_message.html?+YXak9CP+YXak9CP+InY84jcixjPw9CPll2cpF2UgwWYN5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 401) {
$redirecturl = "_message.html?=4jdpR2L84jdpR2L84jcixjPyJGP+A3L8UGdjVmcy92YulGIldWYQ5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 402) {
$redirecturl = "_message.html?==gP2lGZvwjP2lGZvwjPyJGP+InY84DcvwzcpVXclJFI05WZtlXYQ5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 403) {
$redirecturl = "_message.html?=4jdpR2L84jdpR2L84jcixjPyJGP+A3L8UW6ylGdlJFIldWYQ5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 404) {
$redirecturl = "_message.html?+YXak9CP+YXak9CP+InY84jcixjPw9CPlxmYhZXdvJHdulGIldWYQ5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 405) {
$redirecturl = "_message.html?+YXak9CP+YXak9CP+InY84jcixjPw9CPlNXatJXZwBychBHIlR2boRXZN5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 406) {
$redirecturl = "_message.html?=4jdpR2L84jdpR2L84jcixjPyJGP+A3L8UGdjVmcy92YulGIlRn61FXZS5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 407) {
$redirecturl = "_message.html?=4jdpR2L84jdpR2L84jcixjPyJGP+A3L8MXa1FXZSBSe49mcQBibvlGdhNWa05WZoRXdB5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 408) {
$redirecturl = "_message.html?+YXak9CP+YXak9CP+InY84jcixjPw9CPllucpBHeF5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 409) {
$redirecturl = "_message.html?+YXak9CP+YXak9CP+InY84jcixjPw9CPzlGbm52bD5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 410) {
$redirecturl = "_message.html?==gP2lGZvwjP2lGZvwjPyJGP+InY84DcvwTZsJWau9GczlGZulGI05WZtVGbF5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 411) {
$redirecturl = "_message.html?+YXak9CP+YXak9CP+InY84jcixjPw9CP0JXdvNGIw9mcU5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 412) {
$redirecturl = "_message.html?+YXak9CP+YXak9CP+InY84jcixjPw9CPyVWdvh2YF5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 413) {
$redirecturl = "_message.html?+YXak9CP+YXak9CP+InY84jcixjPw9CPldmchxGIw9mc05Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 414) {
$redirecturl = "_message.html?+YXak9CP+YXak9CP+InY84jcixjPw9CPn52bsBCcvJHVgkkUV5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 415) {
$redirecturl = "_message.html?+YXak9CP+YXak9CP+InY84jcixjPw9CPhlGZl1GIzlWY2VXYN5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 500) {
$redirecturl = "_message.html?+YXak9CP+YXak9CP+InY84jcixjPw9CP0NWZyJ3bj5WagUmbyVGdulGIyVXZ2JXZT5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 501) {
$redirecturl = "_message.html?==gP2lGZvwjP2lGZvwjPyJGP+InY84DcvwTZpLX6z5WagMXYQ5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 502) {
$redirecturl = "_message.html?=4jdpR2L84jdpR2L84jcixjPyJGP+A3L8UW6yRnblBSZzlWY2VXYN5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 503) {
$redirecturl = "_message.html?==gP2lGZvwjP2lGZvwjPyJGP+InY84DcvwTZsJWau9GczlGZg42bO5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 504) {
$redirecturl = "_message.html?==gP2lGZvwjP2lGZvwjPyJGP+InY84DcvwTZpLXawhXZgUW6yRnbl5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( $HttpStatus == 505) {
$redirecturl = "_message.html?+YXak9CP+YXak9CP+InY84jcixjPw9CPjVmcy92YulGIQRFVI5Dc84jMo9CPg4jMoxjPiEmchBXL3RnI9M3chx2YgYXakxjPxg2L8IXdlJncF5TMoxjPiIXZ05WZjpjbnlGbh1Cd4VGdi0TZslHdzBidpRGP";}
if( headers_sent() ) {
?>
<html>
<head>
<?php echo('<meta http-equiv="Refresh" content="0; url=/'.$redirecturl.'">'); ?>
</head>
<body><p style="text-align:center"><br><br><b><a href="/index.html">Erreur</a></body></html>
<?php
} else exit( header( "Location: /" . $redirecturl ) );
?>