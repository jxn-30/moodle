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
 * Adds get_template_component method to allow form elements to specify a custom component for their mustache template.
 *
 * @package   core_form
 * @copyright 2024 Jan Boehmerle
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
trait form_element_component_name {

    /**
     * Function to set a custom component the mustache template for this form element lives in.
     * Templates will then be loaded from the component's templates directory:
     * get_template_component() . '/templates/element-' . getType()
     * If the element is included in a group, the suffix '-inline' will be added to the template name.
     *
     * This trait can be used as-is for simple form elements to require them implementing this method.
     *
     * @return string
     */
    abstract public function get_template_component(): string;
}
