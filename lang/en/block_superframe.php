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

/**
 * Strings for component 'block_superframe', language 'en'
 *
 * @package   block_superframe
 * @copyright  Daniel Neis <danielneis@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Modified for use in MoodleBites for Developers Level 1
 * by Richard Jones & Justin Hunt.
 *
 * See: https://www.moodlebites.com/mod/page/view.php?id=24546
 */

// General
$string['pluginname'] = 'Super frame';
//$string['welcomeuser'] = 'Welcome {$a->firstname} {$a->lastname}';
$string['welcomeuser'] = 'Welcome {$a}';
$string['message'] = 'Have a jolly good day!';
$string['viewlink'] = 'Here to my page';

// Capability strings
$string['superframe:addinstance'] = 'Add a new Super frame block';
$string['superframe:myaddinstance'] = 'Add a new Super frame block to my moodle';

// Settings strings
$string['settings_heading'] = 'Super frame settings'; //get_string('pluginname','block_superframe').' settings';;
$string['url'] = 'iframe url';
$string['url_details'] = 'insert the url of the iframe you want to embed';
$string['iframe_height'] = 'height';
$string['iframe_height_details'] = 'height of the iframe';
$string['iframe_width'] = 'width';
$string['iframe_width_details'] = 'width of the iframe';
$string['pagelayout'] = 'Page layout';
$string['pagelayout_details'] = 'choose a layout';

// size
$string['custom'] = 'custom';
$string['small'] = 'small';
$string['medium'] = 'medium';
$string['large'] = 'large';
$string['size'] = 'Select a size for your iframe';

// capabilities
$string['superframe:seeviewpage'] = 'access the frame view page';

// data popup page
$string['tablecaption'] = 'Block data';
$string['blockid'] = 'id';
$string['blockname'] ='block name';
//using global strings 'course' and 'category' instead
//$string['course'] = 'course short name';
//$string['catname'] = 'category';
$string['poptext'] = 'Get data';
$string['tabletext'] = 'Table editing';

// Navigation API.
$string['userlink'] = 'Installed blocks';

$string['about'] = 'Superframe with modal element, week 7';

//Events, week 8
$string['pageviewed'] = 'Superframe page viewed';