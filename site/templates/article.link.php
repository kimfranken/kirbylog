<?php snippet('header') ?>

  <main class="main" role="main">
    <article class="article-link">
      <header>
        <a href="<?php echo $page->link() ?>">
          <h1><?php echo $page->title()->html() ?></h1>
        </a>
        <p class="meta">
          <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('d.m.Y'); ?></time>
        </p>
      </header>
      <?php echo $page->text()->kirbytext() ?>
    </article>
    <footer>
      <!-- TODO -->
    </footer>
  </main>

<?php snippet('footer') ?>
