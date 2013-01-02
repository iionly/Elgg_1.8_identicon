<?php

// Get the logged in user
$user = elgg_get_logged_in_user_entity();

$pref = get_input('preferIdenticon', false);
if (is_array($pref)){
        $pref = $pref[0];
}

if ($pref) {
  $user->preferIdenticon = true;
  $user->icontime = time();
  system_message(elgg_echo('identicon:identicon_yes'));
} else {
  $user->preferIdenticon = false;
  $user->icontime = time();
  system_message(elgg_echo('identicon:identicon_no'));
}

forward($_SERVER['HTTP_REFERER']);