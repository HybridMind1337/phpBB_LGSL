<?php
namespace hybridmind\lgsl\acp;

class lgsl_info
{
	function module()
	{
		return array(
			'filename'	=> '\hybridmind\lgsl\acp\lgsl_module',
			'title'		=> 'LGSL_ACP',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings'	=> array('title' => 'LGSL_CONFIG', 'auth'	=> 'ext_hybridmind/lgsl', 'cat'	=> array('LGSL_MOD')),
			),
		);
	}
}
