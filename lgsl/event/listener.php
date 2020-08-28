<?php
namespace hybridmind\lgsl\event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class listener implements EventSubscriberInterface
{
	
	protected $lgsl_functions;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	public function __construct(\hybridmind\lgsl\core\functions_lgsl $functions, \phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->lgsl_functions = $functions;
		$this->config = $config;
		$this->template = $template;
		$this->user = $user;
	}

	static public function getSubscribedEvents()
	{

		return array(
			'core.index_modify_page_title'	=> 'main',
		);
	}

	public function main($event)
	{
		if (!$this->config['lgsl_active'])
		{
			return;
		}

		// add lang file
		$this->user->add_lang_ext('hybridmind/lgsl', 'lgsl');



		$this->template->assign_vars(array(
			'S_LGSL'	=>	$this->config['lgsl_active'],
			'S_LGSL_LOCATION'	=> $this->config['lgsl_location'],
		));
	}
}
