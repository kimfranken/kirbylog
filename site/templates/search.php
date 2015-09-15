<?php snippet('header') ?>

<main class="main" role="main">

  <?php $countresults = $results->pagination()->countItems();
    if($results){
      echo '<p class="result">';

            if($countresults == 0) {
              echo 'No results';
            }
            elseif($countresults == 1) {
              echo $countresults , ' result';
            }
            else {
              echo $countresults , ' results';
            }

            echo  ' for <mark>' , $query , '</mark></p>';
    }
  ?>

  <?php if($results->count() != 0): ?>
    <ul>
      <?php foreach($results as $result): ?>
      <li>
        <a href="<?php echo $result->url() ?>">
          <?php echo $result->title()->html() ?>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>

  <?php if($results->pagination()->hasPages()): // pagination ?>
      <nav class="pagination cf">
        <?php if($results->pagination()->hasPrevPage()): ?>
        <a class="button prev" href="<?php echo $results->pagination()->prevPageURL() ?>">&lsaquo;&lsaquo; newer results</a>
        <?php endif ?>
        <?php if($results->pagination()->hasNextPage()): ?>
        <a class="button next" href="<?php echo $results->pagination()->nextPageURL() ?>">older results &rsaquo;&rsaquo;</a>
        <?php endif ?>
      </nav>
  <?php endif ?>
</main>

<?php snippet('footer') ?>
