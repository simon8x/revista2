<?php 
if (get_field('destacado', 'option')) { 
	$home = get_field('destacado', 'option');
	switch ($home) {
    case 'home1':
        include('tpl-home1.php');
        break;
    case 'home2':
        include('tpl-home2.php');
        break;
    case 'home3':
        include('tpl-home3.php');
        break;
	case 'home4' :
	default;
	} 
}
?>