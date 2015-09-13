<?php snippet('header') ?>

  <main class="main" role="main">
    <article class="article-video">
      <header>
        <h1><?php echo $page->title()->html() ?></h1>
        <p class="meta">
          <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('d.m.Y'); ?></time>
        </p>
      </header>
      <?php
        if ($page->youtube() != ""){
          echo youtube($page->youtube());
        }
        elseif ($page->vimeo() != ""){
          echo vimeo($page->vimeo());
        }
        ?>
      <?php echo kirbytext($page->text()) ?>
    </article>
  </main>

<?php snippet('footer') ?>
