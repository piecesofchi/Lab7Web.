<h3 class="title" style="background-color: #ff6b8b; color: white; padding: 10px 15px; font-size: 1em; margin: 0;">Artikel Terkini</h3>
<ul style="list-style: none; padding: 10px 15px; margin: 0;">
    <?php foreach ($artikel as $row): ?>
        <li style="margin-bottom: 8px;">
            <a href="<?= base_url('/artikel/' . $row['slug']) ?>" style="color: #333; text-decoration: none;">
                <?= $row['judul'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>