<?php
/* array style 1*/
$attr['id'] = 'edit_posts';
$attr['class'] = 'mt-3';
/* array style 2*/
$title = array(
  'name'  => 'title',
  'type'  => 'text',
  'id'    => 'title',
  'value' => $get_post['title'],
  'class' => 'form-control',
  'placeholder' => 'Enter a title for the post'
);
/* array style 3*/
$body = [
  'name'  => 'body',
  'type'  => 'text',
  'id'    => 'body',
  'value' => $get_post['body'],
  'class' => 'form-control mt-2',
  'placeholder' => 'Enter a body for the post'
];
$id = [
  'post_id' => $get_post['id']
];
$submit = array(
  'name' => 'submitpost',
  'value' => 'Update Post',
  'class' => 'btn btn-primary mt-3'
);
?>
<div class="container">
    <div class="col-md-8 mt-5">
      <h2>Edit Post</h2>
      <?php
      echo form_open('pages/update_post',$attr);
      echo form_input($title);
      echo '<div class="errors">'.form_error('title').'</div>';
      echo form_textarea($body);
      echo form_hidden($id);
      echo '<div class="errors">'.form_error('body').'</div>';
      echo form_submit($submit);
      echo form_close();
      ?>
    </div>
</div>
