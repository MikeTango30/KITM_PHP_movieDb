<div class="list-group list-group-flush">
    <?php foreach ($menus["mainNavigation"] as $href => $menuItem): ?>
        <a href="?page=<?=$href?>" class="list-group-item list-group-item-action bg-light"><?=$menuItem?></a>
    <?php endforeach; ?>
</div>