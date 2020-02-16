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


define(MOODLE_INTERNAL) || die();

$settings->add(new admin_setting_heading(get_string('settings_heading', 'block_superframe')));
$get_url = get_string('url', 'superframe');
$get_url_details = get_string('url_details', 'block_superframe');
$get_url_default = 'https://quizlet.com/132695231/scatter/embed';
$settings->add(new admin_setting_configtext('block_superframe/url', $get_url, $get_url_details, $default, PARAM_TEXT));