<pre><?php
if (isSet($_GET['p'])) {
	echo $_GET['p']."\n\n";
	echo crypt($_GET['p'], "$2a$10$".substr(md5(microtime()), 0, 22));
}
?></pre>