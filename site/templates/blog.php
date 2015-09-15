<?php snippet('header') ?>

  <main class="main" role="main">
    <section class="content blog">
      <?php $articles = $page->children()->visible()->flip()->paginate(3) ?>
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
          )) ?><?php if ($article->tags() != ''): ?> |
                <ul class="tags">
                  <?php foreach(str::split($article->tags()) as $tag): ?>
                    <li><a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
                  <?php endforeach ?>
                </ul>
              <?php endif ?></p>
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
                <?php if ($article->tags() != ''): ?> |
                  <ul class="tags">
                    <?php foreach(str::split($article->tags()) as $tag): ?>
                      <li><a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
                    <?php endforeach ?>
                  </ul>
                <?php endif ?>
              </p>
            </header>
            <?php echo $article->text()->kirbytext() ?>
          </article>
        <?php elseif($article->template() == 'article.video'): // video posts ?>
          <article class="article-video">
            <header>
              <a href="<?php echo $article->url() ?>">
                <h1><?php echo $article->title()->html() ?></h1>
              </a>
              <p class="meta">
                <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d.m.Y'); ?></time>
                <?php if ($article->tags() != ''): ?> |
                  <ul class="tags">
                    <?php foreach(str::split($article->tags()) as $tag): ?>
                      <li><a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
                    <?php endforeach ?>
                  </ul>
                <?php endif ?>
              </p>
            </header>
            <?php
              if ($article->youtube() != ""){
                echo youtube($article->youtube());
              }
              elseif ($article->vimeo() != ""){
                echo vimeo($article->vimeo());
              }?>
            <?php echo kirbytext($article->text()) ?>
          </article>
        <?php endif ?>
        <hr>

      <?php endforeach ?>
    </section>

    <?php if($articles->pagination()->hasPages()): // pagination ?>
      <nav class="pagination cf">
        <?php if($articles->pagination()->hasPrevPage()): ?>
          <a class="button prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">neuere</a>
        <?php endif ?>
        <?php if($articles->pagination()->hasNextPage()): ?>
          <a class="button next" href="<?php echo $articles->pagination()->nextPageURL() ?>">ältere</a>
        <?php endif ?>
      </nav>
    <?php endif ?>

  </main>


<?php snippet('footer') ?>
