<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <title>Fwiffo's Homepage</title>
<meta name="google-site-verification" content="Y_kDlGegoAa-OHytrc8EiFIO7_Okoc0siliEm8z9480" >
	<style type="text/css">
	body {
		font-family: 'Ubuntu', sans-serif;
	}
	</style>

</head>

  <body>

<div>
<div style="float:left">

<?php

$dir=opendir("img/fwiffo/");

$i=0;
while($imgfile=readdir($dir))
{
     if ($imgfile != "." && $imgfile!="..")
         {
        $imgarray[$i]=$imgfile;
        $i++;
        }
}

closedir($dir);

$rand=rand(0,count($imgarray)-1);

    if($rand >= 0)
    {
    echo '<img src="img/fwiffo/'.$imgarray[$rand].'" alt="fwiffo was here" height=200 width=200>';
    }
?>
</div>


<div style="float:right">
<a href="http://www.youtube.com/user/borgified1"><img style="float:left; border-style:none;" src="img/youtube.gif" alt="fwiffo's youtube channel"></a>
<a href="http://thegamersoffice.com/alleg/cadet/afslandingalt.html"><img style="float:left; border-style:none;" src="img/afs.png" alt="allegiance flight school"></a>
</div>
</div>

<div style="clear:both;"></div>
<div style="float:right">
<a class="twitter-timeline" data-dnt=true href="https://twitter.com/AllegNotifier" data-widget-id="245395899155628032">Tweets by @AllegNotifier</a>
</div>
<h1>Fwiffo's Homepage</h1>

10/22/2011 - spathiwa.com is transitioning to the new ACSS. check back soon.

<div style="position:absolute; bottom:0; right:0;">
    <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-html401-blue"
        alt="Valid HTML 4.01 Transitional" height="31" width="88"></a>
    <a href="http://www.vim.org"><img src="/img/vi.powered.gif"
	alt="Powered by Vi"></a>
    <a href="http://www.perl.org"><img src="/img/poweredbyperl.gif"
	alt="Powered by Perl"></a>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11932073-1");
pageTracker._trackPageview();
} catch(err) {}
</script>

<script type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

  </body>
</html>

