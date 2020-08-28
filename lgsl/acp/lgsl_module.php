<?php
namespace hybridmind\lgsl\acp;

class lgsl_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache, $request;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$this->config = $config;
		$this->request = $request;

		$user->add_lang('acp/common');
		$user->add_lang_ext('hybridmind/lgsl', 'acp/info_acp_lgsl');
		$this->tpl_name = 'acp_lgsl';
		$this->page_title = $user->lang['LGSL_MOD'];
		add_form_key('acp_lgsl');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_lgsl'))
			{
				trigger_error('FORM_INVALID');
			}
			if (!function_exists('validate_data'))
			{
				include($phpbb_root_path . 'includes/functions_user.' . $phpEx);
			}

 
				$config->set('lgsl_location', $request->variable('lgsl_location', true));
				$config->set('lgsl_active', $request->variable('lgsl_active', true));

			 

				trigger_error($user->lang['LGSL_SAVED'] . adm_back_link($this->u_action));
		 
		}

		$template->assign_vars(array(
			 
			'LOCATION'			=> (!empty($this->config['lgsl_location'])) ? true : false,
			'ACTIVE'			=> (!empty($this->config['lgsl_active'])) ? true : false,
		 

			'U_ACTION'			=> $this->u_action,
		));
	}
}
