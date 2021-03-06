<?php
if(isset($error))
{
  echo '<h3>'.$error.'</h3>';
}else{
 ?>
<div class="container mb-5">
  <div class="row">
    <div class="col-sm-12 col-lg-8">
      <div class="post-page">
        <?php
        if(empty($posts))
        {
          echo "<h3 class='mt-3'>You have not made any posts yet..!</h3>";
        }else {
          foreach($posts as $value)
          {
            ?>
            <div class="post-holder bg-grey mt-5">
              <h3><?= $value['title'] ?></h3>
              <div class="post_details">
                <small><?= anchor('view_author_profile/'.$value['poster_id'],
                $value['firstname'].'&nbsp'.$value['lastname']); ?></small>

                <small><?= ucfirst($value['category_name']);?></small>
              </div>
              <!-- have to load herper('text') will show content-->
              <p><?= word_limiter($value['body'], 20); ?></p>
              <?= anchor('view_post/'. $value['post_id'], 'Read more', array('class' => 'btn btn-primary')); ?>
            </div>
            <?php
          }
        }
         ?>
      </div>
    </div>
    <div class="col-sm-12 col-lg-4">
      <?php echo Modules::run('categories/categories/get_cat_sidebar'); ?>
    </div>
  </div>
</div>
<?php
}
 ?>
