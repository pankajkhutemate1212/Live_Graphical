

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <h3> file successfully uploaded</h3>
         <p style="text-align: center">--------------------------------</p>
<ul>        
<?php foreach($upload_data as $key=>$value)
 { ?>
    <li><?=$key?>: <?=$value?></li>
 <? } ?>
    </ul>
    </body>
</html>
