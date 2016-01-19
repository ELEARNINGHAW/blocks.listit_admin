<?php
$listLink = "http://lernserver.el.haw-hamburg.de/haw/listit/index2.php"
//$listLink = "http://localhost/haw/listit/index2.php"

."?n1=" .base64_encode( rawurlencode( $USER->firstname	) )
."&n2=" .base64_encode( rawurlencode( $USER->lastname	) )
."&e1=" .base64_encode( rawurlencode( $USER->email 		) )
."&u1=" .base64_encode( rawurlencode( $USER->username	) )
."&m1=" .base64_encode( rawurlencode( $USER->id ) )        
."&c1=" .base64_encode( rawurlencode( $COURSE->id ) )       
."&cn=" .base64_encode( rawurlencode( $COURSE->fullname ) )       

."&r1=" .rand(100000, 999999);

   
$contentA =  "<div style=\" border:thin #CCC solid; text-align:center;\"><a target=\"_blank\" href=".$listLink."/>ListIt Admin</a></div>";
?>
