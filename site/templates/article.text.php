<?php snippet('header') ?>

  <main class="main" role="main">
    <article class="article-text">
      <header>
        <h1><?php echo $page->title()->html() ?></h1>
        <p class="meta">
          <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('d.m.Y'); ?></time> | <?php echo $page->text()->readingtime(array(
      'minute'  => 'Minute',
      'minutes' => 'Minuten',
      'second'  => 'Sekunde',
      'seconds' => 'Sekunden',
      'format' => '{minutesCount} {minutesLabel}, {secondsCount} {secondsLabel}',
      'format.alt' => '{secondsCount} {secondsLabel}',
      'format.alt.enable' => true
    )) ?></p>
      </header>
      <?php echo $page->text()->kirbytext() ?>

    </article>
  </main>

<?php snippet('footer') ?>
