<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 22:00
 */
if (!empty($data)):
    ?>
    <div class="widget widget_futurecourse">
        <div class="wm-widget-title">
            <h2>Publications</h2>
        </div>
        <ul>
            <?php foreach ($data as $item): ?>
                <li>
                    <div class="wm-futurecourse">
                        <h4>
                            <a href="/publication/read?id=<?= $item['id'] ?>"><?= $item['title'] ?></a>
                        </h4>
                        <small>Author(s): <?= $item['author'] ?></small>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
