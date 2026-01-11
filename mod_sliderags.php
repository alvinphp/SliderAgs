<?php
/**
 * @copyright	@copyright	Copyright (c) 2023 . All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;
use Joomla\CMS\Helper\ModuleHelper;
$images	= $params->get("images");
$arr = (array) $images ;
require ModuleHelper::getLayoutPath('mod_sliderags', $params->get('layout', 'default'));
