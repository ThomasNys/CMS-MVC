<?php require VIEW_ROOT.'/templates/header.php'; ?>

    <h2>Add page</h2>

    <form action="<?php echo BASE_URL ?>admin/add.php" method="POST" autocomplete="off">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        </div>

        <div class="form-group">
            <label for="Label">Label</label>
            <input type="text" class="form-control" id="label" placeholder="Label" name="label">
        </div>

        <div class="form-group">
            <label for="Slug">Slug</label>
            <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug">
        </div>

        <div class="mb-5">
            <label for="body">Body</label><br>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" value="Add" class="btn btn-primary">
    </form>

<?php require VIEW_ROOT.'/templates/footer.php'; ?>
