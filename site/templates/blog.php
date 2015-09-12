<?php snippet('header') ?>

  <main class="main" role="main">
    <section class="content blog">
      <?php $articles = $page->children()->visible()->flip()->paginate(10) ?>
      <?php foreach($articles as $article): ?>

        <?php if($article->template() == 'article.text'): // text posts ?>
          <article class="article-text">
            <header>
              <a href="<?php echo $article->url() ?>">
                <h1><?php echo $article->title()->html() ?></h1>
              </a>
              <p class="meta">
                <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d.m.Y'); ?></time> | <?php echo $article->text()->readingtime(array(
            'minute'  => 'Minute',
            'minutes' => 'Minuten',
            'second'  => 'Sekunde',
            'seconds' => 'Sekunden',
            'format' => '{minutesCount} {minutesLabel}, {secondsCount} {secondsLabel}',
            'format.alt' => '{secondsCount} {secondsLabel}',
            'format.alt.enable' => true
          )) ?></p>
            </header>
            <?php echo $article->text()->kirbytext() ?>

          </article>
        <?php elseif($article->template() == 'article.link'): // link posts ?>
          <article class="article-link">
            <header>
              <a href="<?php echo $article->link() ?>">
                <h1><?php echo $article->title()->html() ?></h1>
              </a>
              <p class="meta">
                <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d.m.Y'); ?></time>
            </header>
            <?php echo $article->text()->kirbytext() ?>
          </article>
        <?php elseif($article->template() == 'article.video'): // video posts ?>
          <article class="article-video">

          </article>
        <?php endif ?>
        <hr>
      <?php endforeach ?>
    </section>
  </main>

<?php snippet('footer') ?>
