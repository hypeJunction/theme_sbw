<?php
/**
 * Elgg Search css
 *
 */
?>

/**********************************
Search plugin
***********************************/
.elgg-search-header {
	display: inline-block;
	position: relative;
}
.elgg-search-header .search-input,
.elgg-search-header .search-input:focus {
	background: transparent;
	color: white;
	border: 0;
	border-radius: 0;
	border-bottom: 1px solid rgba(255, 255, 255, 0.5);
	margin: 0;
	font-size: 14px;
	line-height: 20px;
	vertical-align: middle;
	padding: 3px 6px;
}
.elgg-search-header ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color: white;
}
.elgg-search-header :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color: white;
   opacity: 1;
}
.elgg-search-header ::-moz-placeholder { /* Mozilla Firefox 19+ */
   color: white;
   opacity: 1;
}
.elgg-search-header :-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: white;
}
.elgg-menu-item-search-icon .elgg-icon-search {
	margin-right: 3px;
}

.elgg-search input[type=text] {
	width: 100px;
}
.elgg-search input[type=submit] {
	display: none;
}
.search-list li {
	padding: 5px 0 0;
}
.search-heading-category {
	margin-top: 20px;
	color: #666;
}

.search-highlight {
	background-color: #BBDAF7;
}
.search-highlight-color1 {
	background-color: #BBDAF7;
}
.search-highlight-color2 {
	background-color: #A0FFFF;
}
.search-highlight-color3 {
	background-color: #FDFFC3;
}
.search-highlight-color4 {
	background-color: #CCC;
}
.search-highlight-color5 {
	background-color: #08A7E7;
}
