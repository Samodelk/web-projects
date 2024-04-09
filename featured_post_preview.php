<div class="featured-post" style="background-image: url(<?= $featured_post['background_img'] ?>);">
   <div class="featured-post__<?= $featured_post['button'] ?>">
      <?= $featured_post['button_text'] ?>
   </div>
   <h3 class="featured-post__header"><?= $featured_post['title'] ?></h3>
   <h3 class="featured-post__lower-header"><?= $featured_post['subtitle'] ?></h3>
   <div class="featured-post-author-and-date">
         <div class="author">
            <div class="author__photo">
               <img src="<?= $featured_post['img'] ?>" alt=<?= $featured_post['img_modifier'] ?>>
            </div>
            <h3 class="featured-post-author__name"><?= $featured_post['author'] ?></h3>
            <a title='<?= $featured_post['title'] ?>' href='/post?id=<?= $featured_post['id'] ?>'>
               <?= $featured_post['subtitle'] ?>
            </a>
         </div>
         <div class="featured-post-date"><?= $featured_post['date'] ?></div>
   </div>
</div>