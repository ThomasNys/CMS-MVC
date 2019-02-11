<?php require VIEW_ROOT.'/templates/header.php'; ?>

    <?php if(!$page): ?>
        <p>No page found, sorry</p>
    <?php else: ?>

        <h2><?php echo escape($page['title']) ?></h2>

    <?php echo escape($page['body']) ?>

        <p class="font-weight-lighter mt-3">
            Created on <?php echo $page['created']->format('h:ia  d M Y'); ?><br>
            <?php if($page['updated']) : ?>
                Last updated <?php echo $page['updated']->format('d M Y'); ?>
            <?php endif; ?>
        </p>

    <?php endif;?>

<?php require VIEW_ROOT.'/templates/footer.php'; ?>
