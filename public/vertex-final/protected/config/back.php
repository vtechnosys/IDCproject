<?php
return CMap::mergeArray(
require(dirname(__FILE__).'/main.php'),
array(
	'theme'=>'backend'
// Put front-end settings there
// (for example, url rules).
)
);
?>