<?php
/**
 * Base class for plugin modules which can be initialized.
 *
 * @package Veils_Of_Fate_Plugin
 */

namespace Veils_Of_Fate_Plugin;

/**
 * Plugin module extended by other classes.
 */
abstract class Plugin_Module {
	/**
	 * Initialize the module.
	 */
	abstract public function init();
}
