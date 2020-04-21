<?php
echo $error;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php echo form_open_multipart('upload/do_upload')?>
        <?php
           $data_form = array(
           'name'=>'userfile');

           echo form_upload($data_form);

        ?><br />
        <?php echo form_submit('', 'upload')?>
        <?php echo form_close(); ?>
        
    </body>
</html>
