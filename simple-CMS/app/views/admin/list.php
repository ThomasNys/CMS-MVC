<?php require VIEW_ROOT.'/templates/header.php'; ?>

    <?php if(empty($pages)): ?>
        <p>No pages at the moment</p>
    <?php else: ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Label</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($pages as $page): ?>
                    <tr>
                        <td><?php echo escape($page['page_id']); ?></td>
                        <td><?php echo escape($page['label']); ?></td>
                        <td><?php echo escape($page['title']); ?></td>
                        <td><a href="<?php echo BASE_URL; ?>page.php?page=<?php echo escape($page['slug']); ?>"><?php echo escape($page['slug']); ?></a></td>
                        <td><a href="<?php echo BASE_URL; ?>admin/edit.php?id=<?php echo escape($page['page_id']) ?>">Edit</a></td>
                        <td><a href="<?php echo BASE_URL; ?>admin/delete.php?id=<?php echo escape($page['page_id']) ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="<?php echo BASE_URL; ?>admin/add.php">Add a new page</a>

<?php require VIEW_ROOT.'/templates/footer.php'; ?>
