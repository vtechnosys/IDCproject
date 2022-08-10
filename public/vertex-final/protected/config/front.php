<?php
return CMap::mergeArray(
require(dirname(__FILE__).'/main.php'),
array(
	'theme'=>'web'
// Put front-end settings there
// (for example, url rules).
)
);
?>