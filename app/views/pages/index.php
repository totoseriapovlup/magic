<?php if($message):?>
<div><?= $message?></div>
<?php endif;?>
<form action="<?= Router::url('answer')?>" method="post">
    <input type="text" name="question"/>
    <input type="submit" value="Get answer"/>
</form>