<?php

function fp_warnings(){
  echo '&nbsp;&nbsp;&nbsp;<b style="background-color: red; color: white; maring-left: 10px"> -= This plugin isn\'t safe to update! =- </b>';
}

add_action('in_plugin_update_message-list-category-posts/list-category-posts.php','fp_warnings');
