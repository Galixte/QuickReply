<?php
/**
 *
 * @package       QuickReply Reloaded
 * @copyright (c) 2014 - 2019 Tatiana5 and LavIgor
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 * DO NOT CHANGE
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
	'QR_CHANGE_QUICKNICK_STRING' => 'Afficher sous l’avatar dans le mini-profil le lien « Se référer au nom d’utilisateur » en lieu est place du menu déroulant, lorsque l’on clique sur le nom d’utilisateur',
	'QR_ENABLE_AJAX_PAGINATION'  => 'Conserver le contenu du formulaire de la réponse rapide lors de la navigation sur le sujet',
	'QR_ENABLE_SCROLL'           => 'Activer le défilement automatique lors de la navigation sur le sujet',
	'QR_ENABLE_SOFT_SCROLL'      => 'Activer le défilement léger et les animations lors de la navigation sur le sujet, après avoir utilisé la réponse rapide',
	'QR_ENABLE_WARNING'          => 'Afficher un avertissement lorsque le contenu saisi dans la réponse rapide risque d’être perdu',
	'QR_FIX_EMPTY_FORM'          => 'Afficher par défaut le formulaire de la réponse rapide. Dans le cas contraire celui-ci sera minimisé en bas à gauche de l’écran',
));
