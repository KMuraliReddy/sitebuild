<?php
$page_title='Home';
require_once('views/page_top.php');
require_once('db/stuff.php');
$stuffs=get_stufs();
?>
<main>
<ul id="catalog">

<?php for($i=0;$i <count($stuffs);$i++)
{
	echo '<li>',$stuffs[$i]['id'],' ',$stuffs[$i]['name'],' ','</li>';
}
?>
</ul>
</main>
<?php
require_once('views/page_bottom.php');
?>
