<?php require APP_ROOT . '/views/include/header.php'; ?>
    <a href="<?php echo URL_ROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i>   Back</a>
    <div class="card card-body bg-light mt-5">
        <h2>Update Post</h2>
        <p>Update details of this post</p>
        <form action="<?php echo URL_ROOT; ?>/posts/edit/<?php echo $data['id']; ?>" method="post">
            <div class="form-group">
                <label for="title">Title: <sup>*</sup></label>
                <input type="text" name="title" class="form-control form-control-lg
                        <?php echo (!empty($data['title_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['title']; ?>">
                <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="body">Body: <sup>*</sup></label>
                <textarea type="text" name="body" class="form-control form-control-lg
                        <?php echo (!empty($data['body_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['body']; ?>"></textarea>
                <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
            </div>
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
<?php require APP_ROOT .  '/views/include/footer.php'; ?>