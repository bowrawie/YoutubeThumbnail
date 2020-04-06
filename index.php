
<?php

$LINK = "https://www.youtube.com/watch?v=pglE79xAGlA";
$LINK = str_replace("https://www.youtube.com/watch?v=","https://i.ytimg.com/vi/",$LINK)."/sddefault.jpg?sqp=-oaymwEYCKgBEF5IVfKriqkDCwgBFQAAiEIYAXAB&rs=AOn4CLAQRW5vFS6bTxgLQ6Y1rfBzE5Bq1A";



echo sprintf('<img src="%s">',$LINK);


?>
