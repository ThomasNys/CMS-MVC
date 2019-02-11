<?php require VIEW_ROOT.'/templates/header.php'; ?>

    <h2>Edit page</h2>

    <form action="<?php echo BASE_URL ?>admin/edit.php" method="POST" autocomplete="off">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="<?php echo escape($page['title']) ?>">
        </div>

        <div class="form-group">
            <label for="Label">Label</label>
            <input type="text" class="form-control" id="label" placeholder="Label" name="label" value="<?php echo escape($page['label']) ?>">
        </div>

        <div class="form-group">
            <label for="Slug">Slug</label>
            <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" value="<?php echo escape($page['slug']) ?>">
        </div>

        <div class="mb-5">
            <label for="body">Body</label><br>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10"><?php echo escape($page['body']) ?></textarea>
        </div>

        <input type="hidden" name="id" value="<?php echo escape($page['page_id']) ?>">

        <input type="submit" value="Edit" class="btn btn-primary">
    </form>

<?php require VIEW_ROOT.'/templates/footer.php'; ?>
