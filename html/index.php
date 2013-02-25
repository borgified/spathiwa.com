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
    echo '<img src="img/fwiffo/'.$imgarray[$rand].'" alt="fwiffo was here" height=150 width=150>';
    }
?>

<h1>Fwiffo's Webapps</h1>


<a href="cgi-bin/pkmud/ui/step1.pl">pkmud's db browser</a>

<h3>Downloads</h3>
<a href="https://github.com/borgified/starcontrol-ringtones">Star Control ringtones for your iPhone</a>


<h3>Updates</h3>
01/21/2013 - opening a new chapter: archived old <a href="oldindex.php">index page</a><br>
01/20/2013 - pkmud db browser online!<br>
11/29/2012 - to make full use of @allegnotifier, allow for <a href="https://support.twitter.com/articles/20169887-how-to-use-push-notifications">push notifications</a> (detailed <a href="/allegnotifier_howto/121129.html">step by step instructions</a>)<br>
11/28/2012 - PM inactives patched so @PK and @NI can use it too<br>
11/22/2012 - PM inactives added exsquadded feature<br>
11/13/2012 - PM inactives app v1.03 released (for squad leadership only)<br>
11/07/2012 - playerbase predictor returns! (click the picture below)<br>
11/01/2012 - @allegnotifier, for notifications via twitter is back online!<br>
10/22/2012 - spathiwa.com is transitioning to the new ACSS. check back soon.<br>


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

