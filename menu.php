<?php
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

//echo "The current page name is ".curPageName();

$pages=array("index","trailer","synopsis","crew","screenings","media","pers","contact");
$m = array();

foreach($pages as $key=>$val){
	if( strstr(curPageName(),$val)!=false){
		$m[$key]="selected";
		
	}else{
		$m[$key]="notselected";
	}
}

?>
<ul id='menu'>
	<li><a class='<?php echo $m['0'];?>' target=_self href='index.php'>Home</a></li>
	<li><a class='<?php echo $m['1'];?>' target=_self href='trailer.php'>Trailer</a></li>
	<li><a class='<?php echo $m['2'];?>' target=_self href='synopsis.php'>Synopsis</a></li>
	<li><a class='<?php echo $m['3'];?>' target=_self href='crew.php'>Crew</a></li>
	<li><a class='<?php echo $m['4'];?>' target=_self href='screenings.php'>Screenings</a></li>
	<li><a class='<?php echo $m['5'];?>' target=_self href='media.php'>Media</a></li>
	<li><a class='<?php echo $m['6'];?>' target=_self href='pers.php'>Press</a></li>
	<li><a class='<?php echo $m['7'];?>' target=_self href='contact.php'>Contact</a></li>
</ul>