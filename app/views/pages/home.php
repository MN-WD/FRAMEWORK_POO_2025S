<h2>Recent Books</h2>
<ul>
    <?php foreach ($books as $book): ?>
        <li>
            <?php echo $book['title']; ?>
            <!-- Tronquer le resume à 30 caractères
                1. Transformer notre Helpers en classe
                2. Changer le PSR-4
                3. Composer dump-autoload -->
            <?php echo \Core\Helpers::truncate($book['resume'], 30); ?>
        </li>
    <?php endforeach; ?>
</ul>