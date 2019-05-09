<div>
    <form method="POST" action="<?php echo ROOT_PATH;?>shares/add">
        <div class="form-group">
            <label for="">Share title</label>
            <input type="text" name="title" class="form-control" />
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="">Link</label>
            <input type="text" name="link" class="form-control" />
        </div>
        <input type="submit" value="submit" class="btn btn-primary" />
        <a href="<?php echo ROOT_PATH; ?>shares" class="btn btn-danger">Cancel</a>
    </form>
</div>