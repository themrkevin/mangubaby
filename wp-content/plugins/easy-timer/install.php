<?php load_plugin_textdomain('easy-timer', false, 'easy-timer/languages');
include dirname(__FILE__).'/initial-options.php';
$options = (array) get_option('easy_timer');
$current_options = $options;
if ((isset($options[0])) && ($options[0] === false)) { unset($options[0]); }
foreach ($initial_options as $key => $value) {
if (($key == 'version') || (!isset($options[$key])) || ($options[$key] == '')) { $options[$key] = $value; } }
if ($options != $current_options) { update_option('easy_timer', $options); }