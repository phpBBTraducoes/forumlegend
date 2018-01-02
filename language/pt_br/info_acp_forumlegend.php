<?php
/**
 *
 * Forum Legend. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 2.0.0] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017, spaceace, https://www.livemembersonly.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_FORUMLEGEND_TITLE'				=> 'Forum Legend',
	'ACP_FORUMLEGEND_SETTINGS'			=> 'Configurações',
	'ACP_FORUMLEGEND_SETTINGS_SAVED'	=> 'As configurações foram salvas com sucesso!',
	'ACP_FORUMLEGEND_ENABLE_DISABLE'	=> 'Ativar Forum Legend',
	'ACP_FORUMLEGEND_ICON_SELECT'		=> 'Selecione o(s) ícone(s) para exibir na página de índice do fórum.',
	'ACP_FORUMLEGEND_ICON_1'			=> 'Posts não lidos',
	'ACP_FORUMLEGEND_ICON_2'			=> 'Sem posts não lidos',
	'ACP_FORUMLEGEND_ICON_3'			=> 'Posts não lidos [ Trancado ]',
	'ACP_FORUMLEGEND_ICON_4'			=> 'Sem posts não lidos [ Trancado ]',
	'ACP_FORUMLEGEND_ICON_5'			=> 'Forum link',
	'ACP_FORUMLEGEND_ICON_6'			=> 'Sem posts não lidos Subforum',
	'ACP_FORUMLEGEND_ICON_7'			=> 'Posts não lidos Subforum',
	'ACP_FORUMLEGEND_WIDTH_SETTING'		=> 'Estes são para ajustar a largura da legenda na página viewforum se a legenda não estiver alinhada adequadamente, o que normalmente é devido a idiomas.',
	'ACP_FORUMLEGEND_LEFT_WIDTH'		=> 'Largura esquerda % da legenda na página viewforum',
	'ACP_FORUMLEGEND_RIGHT_WIDTH'		=> 'Largura direita % da legenda na página viewforum',
));
