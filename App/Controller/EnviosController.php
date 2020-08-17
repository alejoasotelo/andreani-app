<?php
/**
 * @copyright  Copyright (C) 2012 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace App\Controller;

use Joomla\Application\AbstractApplication;
use Joomla\Input\Input;
use Joomla\Log\Log;

/**
 * News Controller class for the Application
 *
 * @since  1.0
 */
class EnviosController extends DefaultController
{
	/**
	 * The default view for the app
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $defaultView = 'envios';

	public function edit() {
		// Get the input
		$input = $this->getInput();
		$input->set('layout', 'edit');

	}
}
