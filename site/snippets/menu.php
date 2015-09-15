<nav role="navigation">

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>

  <form action="<?php echo url('search') ?>">
    <input type="search" name="q" placeholder="Search...">
    <input type="submit" value="Search">
  </form>

</nav>
