<?php
/**
 * Elgg Profile CSS
 *
 * @package Profile
 */
?>
/* <style> /**/
/* ***************************************
	Profile
*************************************** */
.profile {
	margin-bottom: 15px;
}
#profile-details,
.profile-content-menu {
	background: white;
	border: 1px solid #dcdcdc;
	box-shadow; 0 2px 4px 0 rgba(0,0,0,.05);
	padding: 15px;
	margin-top: 20px;
}
#profile-details {
	margin-right: 20px;
}

/*** ownerblock ***/
#profile-owner-block {

}
#profile-owner-block .profile-header {
	padding: 15px;
}
#profile-owner-block .large {
	margin-bottom: 10px;
}
#profile-owner-block a.elgg-button-action {
	margin-bottom: 4px;
	display: table;
}
#profile-owner-block .elgg-avatar-large {
	width: initial;
}
#profile-owner-block .elgg-avatar img {
	border: 2px solid white;
}
.profile-action-menu {
	float: right;
}
.profile-admin-menu {
	display: none;
}
.profile-admin-menu-wrapper a {
	display: block;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 16px;
}
.profile-admin-menu-wrapper:before {
	content: "\00BB";
	float: left;
	padding-top: 1px;
}
.profile-admin-menu-wrapper li a {
	color: #FF0000;
	margin-bottom: 0;
}
.profile-admin-menu-wrapper a:hover {
	color: #000;
}
/*** profile details ***/
#profile-details .wire-status {
	margin-top: 10px;
}
#profile-details .odd {
	border-bottom: 1px solid #DCDCDC;
	margin: 0;
	padding: 5px 0;
}
#profile-details .even {
	border-bottom: 1px solid #DCDCDC;
	margin: 0;
	padding: 5px 0;
}
.profile-aboutme-title {
	margin: 0;
	padding: 5px 4px 2px 0;
}
.profile-aboutme-contents {
	padding: 0;
}
.profile-banned-user {
	margin: 10px 0;
	padding: 20px;
	color: #B94A48;
	background-color: #F8E8E8;
	border: 1px solid #E5B7B5;
	border-radius: 5px;
}
.profile-banned-user h4 {
	color: #B94A48;
}

@media (max-width: 820px) {
	#profile-details {
		margin-right: 0;
	}
}
