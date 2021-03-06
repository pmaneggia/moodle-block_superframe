<?php

require('../../config.php');
$blockid = required_param('blockid', PARAM_INT); // We will pick up the blockid in the view.php page:
//TODO pass it!! $course = required_param('courseid', PARAM_INT);
$size = optional_param('size','none', PARAM_TEXT);

// to make the choice of layout in the setting effective, first load the settings...:
//$config = get_config('block_superframe');
$def_config = get_config('block_superframe');

$PAGE->set_course($COURSE); // what is this doing? what happens if I leave it out? :-) ach sooooo
$PAGE->set_url('/blocks/superframe/view.php'); // I want to do it with the new url...

// prevent guest users (actually any users without permission) to see the page
require_login();
$context = context_system::instance(); // require_capability needs a context
//deleted temprarily to test Week 8 event, should be used instead!
//require_capability('block/superframe:seeviewpage', $context);

// Week 8, events
// If we get here they have viewed the page.
// Log the page viewed event.
$event = \block_superframe\event\block_page_viewed::create(['context' => $PAGE->context]);
$event->add_record_snapshot('course', $PAGE->course);
$event->trigger();

//$PAGE->set_url(new moodle_url('blocks/superframe/view.php'));
$PAGE->set_heading($SITE->fullname); // what would that be, paola's moodle? Yes
// to make the choice of layout in the setting effective, ... then use them:
$PAGE->set_pagelayout($def_config->pagelayout);
$PAGE->set_title(get_string('pluginname', 'block_superframe'));
$PAGE->navbar->add(get_string('pluginname', 'block_superframe'));

// Get the instance configuration data from the database.
// It's stored as a base 64 encoded serialized string.
$configdata = $DB->get_field('block_instances', 'configdata', ['id' => $blockid]);

// If an entry exists, convert to an object.
if ($configdata) {
    $config = unserialize(base64_decode($configdata));
} else {
    // No instance data, use admin settings.
    // However, that only specifies height and width, not size.
   $config = $def_config;
   $config->size = 'custom';
}

// Check the size optional parameter. WEEK 6
if ($size == 'none') {
    // First visit to page, use config.
    $size = $config->size;
}

// URL - comes either from instance or admin.
$url = $config->url;
// Let's set up the iframe attributes.
switch ($size) {
    case 'custom':
        $width = $def_config->width;
        $height = $def_config->height;
        break;
    case 'small' :
        $width = 360;
        $height = 240;
        break;
    case 'medium' :
        $width = 600;
        $height = 400;
        break;
    case 'large' :
        $width = 1024;
        $height = 720;
        break;
}

/* going to improve code with renderer and mustache template, no call to $OUTPUT
// Start output to browser.
echo $OUTPUT->header();


echo $OUTPUT->heading(get_string('pluginname', 'block_superframe'), 5);
// Dummy content.
echo '<br>' . fullname($USER) . '<br>';
echo $OUTPUT->user_picture($USER);
echo '<br>';
*/

/* going to improve code with renderer and mustache template, no call to $OUTPUT
//$url = 'https://quizlet.com/132695231/scatter/embed';
//$width = '600px';
//$height = '400px';
$attributes = ['src' => $url,
               'width' => $width,
               'height' => $height];
echo html_writer::start_tag('iframe', $attributes);
echo html_writer::end_tag('iframe');
*/

/* going to improve code with renderer and mustache template, no call to $OUTPUT
//send footer out to browser
echo $OUTPUT->footer();
*/

// added in Week 4 - Task 1 - working with renderers
$renderer = $PAGE->get_renderer('block_superframe');
$renderer->display_view_page($url, $width, $height, $courseid, $blockid);

//die();
