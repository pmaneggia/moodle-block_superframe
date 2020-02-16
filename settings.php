<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


defined('MOODLE_INTERNAL') || die();

//$settings->add(new admin_setting_heading(get_string('settings_heading', 'block_superframe')));
$get_url = get_string('url', 'block_superframe');
$get_url_details = get_string('url_details', 'block_superframe');
$default = 'https://quizlet.com/132695231/scatter/embed';
$settings->add(new admin_setting_configtext('block_superframe/url', $get_url, $get_url_details, $default, PARAM_URL));

$get_height = get_string('iframe_height', 'block_superframe');
$get_height_details = get_string('iframe_height_details', 'block_superframe');
$settings->add(new admin_setting_configtext('block_superframe/height', $get_height, $get_height_details, 400, PARAM_INT));

$get_width = get_string('iframe_width', 'block_superframe');
$get_width_details = get_string('iframe_width_details', 'block_superframe');
$settings->add(new admin_setting_configtext('block_superframe/width', $get_width, $get_width_details, 600, PARAM_INT));


$layout = get_string('pagelayout', 'block_superframe');
$layout_details = get_string('pagelayout_details', 'block_superframe');
$cc = get_string('course');
$pp = get_string('popup');
$options = array();
$options['course'] = $cc;
$options['popup'] = $pp;
$settings->add(new admin_setting_configselect('block_superframe/pagelayout', $layout, $layout_details , $cc, $options));

// $options = array();
// $options['course'] = get_string('course');
// $options['popup'] = get_string('popup');
// $settings->add(new admin_setting_configselect(
//         'block_superframe/pagelayout',
//         get_string('pagelayout', 'block_superframe'),
//         get_string('pagelayout_details', 'block_superframe'),'$options['course'],
//         $options));