<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:10
 */

$this->title = 'About Team';
?>
<div class="row">
    <div class="col-md-12">
        <ul>
           <?php
           $univers = 'univers';
           foreach ($teams as $team) {
              if($univers != $team['university']){
                 echo '<h2>' . $team['university'] . '</h2>';
              }
              echo '<li><a href="/about/person?id=' . $team['id'] . '" target="_blank">' . $team['person'] . '</a></li>';
              $univers = $team['university'];
           }
           ?>
        </ul>
    </div>
</div>