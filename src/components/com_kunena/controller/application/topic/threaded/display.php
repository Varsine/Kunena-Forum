<?php
/**
 * Kunena Component
 *
 * @package         Kunena.Site
 * @subpackage      Controller.Application
 *
 * @copyright       Copyright (C) 2008 - 2020 Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die;

/**
 * Class ComponentKunenaControllerApplicationTopicThreadedDisplay
 *
 * @since  K4.0
 */
class ComponentKunenaControllerApplicationTopicThreadedDisplay extends KunenaControllerApplicationDisplay
{
	/**
	 * Return true if layout exists.
	 *
	 * @return  boolean
	 * @since   Kunena
	 * @throws  Exception
	 */
	public function exists()
	{
		$this->page = KunenaLayoutPage::factory("{$this->input->getCmd('view')}/default");

		return (bool) $this->page->getPath();
	}

	/**
	 * Change topic layout to threaded.
	 *
	 * @return  void
	 *
	 * @since   Kunena 6.0
	 *
	 * @throws  Exception
	 * @throws  null
	 */
	protected function before()
	{
		$layout = $this->input->getWord('layout');
		KunenaUserHelper::getMyself()->setTopicLayout($layout);

		parent::before();
	}
}
