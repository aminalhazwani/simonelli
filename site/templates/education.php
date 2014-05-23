<?php snippet('header') ?>

  <h1 class="title"><?php echo $page->title() ?></h1>
  <article>
    <?php echo markdown($page->text()) ?>

    <?php if($page->hasImages()): ?>
      <ul class="container ul-list">
        <?php foreach($page->images() as $image): ?>
        <li class="li-list">
          <img class="edu-item" src="http://deelay.me/1000/<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" />
        </li>
        <div class="edu-gutter"></div>
        <?php endforeach ?>
      </ul>
    <?php endif ?>
  </article>

  <aside>
    <div class="sidebar">
      <section>
        <h3>Producer and release</h3>
        <ul>
          <?php if($page->manufacterurl() != ''): ?>
          <li><a href="<?php echo $page->manufacterurl() ?>"><?php echo $page->manufacter() ?></a></li>
          <?php else: ?>
          <li><?php echo $page->manufacter() ?></li>
          <?php endif?>
          <li><?php echo $page->date('Y') ?></li>
        </ul>
      </section>

      <?php if($page->tags() != ''): ?>
        <section>
        <h3>Tags</h3>
          <ul class="tags">
            <?php foreach(str::split($page->tags()) as $tag): ?>
              <li>
                <p><?php echo $tag ?></p>
              </li>
            <?php endforeach ?>
          </ul>
        </section>
      <?php endif?>

      <?php if($page->materials() != ''): ?>
        <section>
          <h3>Materials</h3>
          <ul>
            <?php foreach(str::split($page->materials()) as $material): ?>
              <li>
                <!-- <a href="<?php echo url('blog/material:' . urlencode($material)) ?>"><?php echo $material ?></a> -->
                <p><?php echo $material ?></p>
              </li>
            <?php endforeach ?>
          </ul>
        </section>
      <?php endif ?>

      <?php if($page->photo() != ''): ?>
        <section>
          <h3>Photo</h3>
          <ul>
            <li> <p><?php echo $page->photo() ?></p> </li>
          </ul>
        </section>
      <?php endif ?>

    <section>
        <h3>Share</h3>
        <ul>
          <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page->url() ?>" target="_blank">Facebook</a></li>
          <li><a href="https://twitter.com/intent/tweet?url=<?php echo $page->url() ?>&text=<?php echo $page->title() ?> by @simosimonelli&hashtags=<?php if($page->tags() != ''): ?><?php foreach(str::split($page->tags()) as $tag): ?><?php echo $tag ?>,<?php endforeach ?><?php endif?>">Twitter</a></li>
          <li><a href="http://pinterest.com/pin/create/button/?url=<?php echo $page->url() ?>&description=<?php echo excerpt($page->text(), 200) ?>&media=<?php echo $page->images()->first()->url() ?>">Pinterest</a></li>
        </ul>
      </section>
    </div>
  </aside>

<?php snippet('footer') ?>
