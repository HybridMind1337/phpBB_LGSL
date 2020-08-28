<?php
namespace hybridmind\lgsl\migrations;

class install_lgsl extends \phpbb\db\migration\migration
{
	 

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v312');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('lgsl_location', 0)),
			array('config.add', array('lgsl_active', 0)),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'LGSL_ACP'
			)),
			array('module.add', array(
				'acp',
				'LGSL_ACP',
				array(
					'module_basename'	=> '\hybridmind\lgsl\acp\lgsl_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('lgsl_location')),
			array('config.remove', array('lgsl_active')),

			array('module.remove', array(
				'acp',
				'LGSL_ACP',
				array(
					'module_basename'	=> '\hybridmind\lgsl\acp\lgsl_module',
					'modes'				=> array('settings'),
				),
			)),
			array('module.remove', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'LGSL_ACP'
			)),
		);
	}
}
