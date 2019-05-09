<div>
    <a href="<?php echo ROOT_PATH; ?>shares/add" class="btn btn-success btn-share">Share Something</a> <br /><br />
    <?php foreach($viewmodel as $item) : ?>
        <div class="well">
            <h3><?php echo $item['title']; ?></h3>
            <p><?php echo $item['body']; ?></p>
        </div><br />
    <?php endforeach; ?>
</div>