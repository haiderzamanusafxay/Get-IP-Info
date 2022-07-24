<?xml version="1.0" encoding="UTF-8" ?> 
  <!DOCTYPE html (View Source for full doctype...)> 
- <html b:version="2" class="v2" expr:dir="data:blog.languageDirection" xmlns="http://www.w3.org/1999/xhtml" xmlns:b="http://www.google.com/2005/gml/b" xmlns:data="http://www.google.com/2005/gml/data" xmlns:expr="http://www.google.com/2005/gml/expr">
- <head>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" /> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript" /> 
  <link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Montserrat:400,400i,400,500,600,700,700i|Righteous" media="all" rel="stylesheet" type="text/css" /> 
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> 
  <link href="//cdn.linearicons.com/free/1.0.0/icon-font.min.css" rel="stylesheet" /> 
  <b:include data="blog" name="all-head-content" /> 
- <b:if cond="data:view.isHomepage">
- <script type="application/ld+json">
  {"@context":"http://schema.org","@type":"WebSite","name":" 
  <data:view.title.escaped /> 
  ","url":" 
  <data:view.url.canonical /> 
  ","potentialAction":{"@type":"SearchAction","target":" 
  <data:view.url.canonical /> 
  search?q={search_term_string}","query-input":"required name=search_term_string"}} 
  </script>
  </b:if>
- <title>
- <b:if cond="data:blog.pageType == "index"">
  <data:blog.pageTitle /> 
  <b:else /> 
- <b:if cond="data:blog.pageType != "error_page"">
  <data:blog.pageName /> 
  - 
  <data:blog.title /> 
  <b:else /> 
  ERROR 404 - 
  <data:blog.title /> 
  </b:if>
  </b:if>
  </title>
- <!--  Description and Keywords (start) 
  --> 
- <b:if cond="data:blog.pageType == "index"">
  <meta content="YOUR DESCRIPTION HERE" name="description" /> 
  </b:if>
  <meta content="YOUR KEYWORDS HERE" name="keywords" /> 
- <!--  Description and Keywords (end) 
  --> 
- <b:if cond="data:blog.pageType == "item"">
  <meta expr:content="data:blog.pageName" property="og:title" /> 
  <meta expr:content="data:blog.canonicalUrl" property="og:url" /> 
  <meta content="article" property="og:type" /> 
  </b:if>
- <b:if cond="data:blog.postImageUrl">
  <meta expr:content="data:blog.postImageUrl" property="og:image" /> 
  <b:else /> 
- <b:if cond="data:blog.postImageThumbnailUrl">
  <meta expr:content="data:blog.postImageThumbnailUrl" property="og:image" /> 
  </b:if>
  </b:if>
- <b:if cond="data:blog.metaDescription != """>
  <meta expr:content="data:blog.metaDescription" name="og:description" /> 
  </b:if>
  <meta expr:content="data:blog.title" property="og:site_name" /> 
  <meta expr:content="data:blog.homepageUrl" name="twitter:domain" /> 
  <meta expr:content="data:blog.pageName" name="twitter:title" /> 
- <b:if cond="data:blog.postImageUrl">
  <meta content="summary_large_image" name="twitter:card" /> 
  <meta expr:content="data:blog.postImageUrl" name="twitter:image" /> 
  <b:else /> 
  <meta content="summary" name="twitter:card" /> 
- <b:if cond="data:blog.postImageThumbnailUrl">
  <meta expr:content="data:blog.postImageThumbnailUrl" name="twitter:image" /> 
  </b:if>
  </b:if>
  <meta expr:content="data:blog.pageName" name="twitter:title" /> 
- <b:if cond="data:blog.metaDescription">
  <meta expr:content="data:blog.metaDescription" name="twitter:description" /> 
  </b:if>
- <!--  Social Media meta tag need customer customization 
  --> 
  <meta content="Facebook App ID here" property="fb:app_id" /> 
  <meta content="Facebook Admin ID here" property="fb:admins" /> 
  <meta content="@username" name="twitter:site" /> 
  <meta content="@username" name="twitter:creator" /> 
- <b:skin>
- <![CDATA[ /* 
-----------------------------------------------
Blogger Template Style
Name:        Leafy
License:     Free Version
Version:     1.0
Author:      Soratemplates
Author Url:  https://www.soratemplates.com/
----------------------------------------------- */
/* Variable definitions
-----------------------
<Group description="Main Hover Color" selector="body">
<Variable name="maincolor" description="Primary Color" type="color" default="#ffbd2f"  value="#ffbd2f"/>
</Group>
/*****************************************
reset.css
******************************************/
html, body, .section, .widget, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td, figure {    margin: 0;    padding: 0;}
html {   overflow-x: hidden;}
a {text-decoration:none;color:$maincolor;}
a:hover {text-decoration:none;color:red;}
article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {     display:block;}
table {    border-collapse: separate;    border-spacing: 0;}
caption, th, td {    text-align: left;    font-weight: normal;}
blockquote:before, blockquote:after,
q:before, q:after {    content: "";}
.quickedit, .home-link{display:none;}
blockquote, q {    quotes: "" "";}
sup{    vertical-align: super;    font-size:smaller;}
code{    font-family: 'Courier New', Courier, monospace;    font-size:12px;    color:#272727;}
::selection {background:transparent; text-shadow:#000 0 0 2px;}
::-moz-selection {background:transparent; text-shadow:#000 0 0 2px;}
::-webkit-selection {background:transparent; text-shadow:#000 0 0 2px;}
::-o-selection {background:transparent; text-shadow:#000 0 0 2px;}
a img{	border: none;}
ol, ul { padding:0;  margin:0;  text-align: left;  }
ol li { list-style-type: decimal;  padding:0 0 5px;  }
ul li { list-style-type: disc;  padding: 0 0 5px;  }
ul ul, ol ol { padding: 0; }
#navbar-iframe, .navbar {   height:0px;   visibility:hidden;   display:none   }
.Attribution, .feed-links, .post-footer-line.post-footer-line-1, .post-footer-line.post-footer-line-2 , .post-footer-line.post-footer-line-3 {
display: none;
}
.post-body a{color:#ffbd2f;}
.post-body a:hover{color:red;}
.post-body a:visited{color:blue;}
.CSS_LIGHTBOX {
    z-index: 99!important;
}
.item-control {
display: none !important;
}
h2.date-header, h4.date-header {display:none;margin:1.5em 0 .5em}
h1, h2, h3, h4, h5, h6 {
font-family: 'Playfair Display', serif;
    font-weight: 400;
    color: #151515;
}
img {
max-width: 100%;
vertical-align: middle;
border: 0;
}
.widget iframe, .widget img {
max-width: 100%;
}
.status-msg-wrap {
display: none;
}
.post-thumb {
    display: block;
    position: relative;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    z-index: 1;
    opacity: 0;
    transition: opacity .35s ease,transform .35s ease;
}
.post-thumb.lazy-yard {
    opacity: 1;
}
#preloader {
    position: fixed;
    z-index: 1800;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #fff
}
.no-js #preloader,
.oldie #preloader {
    display: none
}
#loader {
  position: relative;
  width: 2.5em;
  height: 2.5em;
  transform: rotate(165deg);
}
#loader {
  position: absolute;
  top: calc(50% - 1.25em);
  left: calc(50% - 1.25em);
}
#loader:before, #loader:after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  display: block;
  width: 0.5em;
  height: 0.5em;
  border-radius: 0.25em;
  transform: translate(-50%, -50%);
}
#loader:before {
  animation: before 2s infinite;
}
#loader:after {
  animation: after 2s infinite;
}

@keyframes before {
  0% {
    width: 0.5em;
    box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
  }
  35% {
    width: 2.5em;
    box-shadow: 0 -0.5em rgba(225, 20, 98, 0.75), 0 0.5em rgba(111, 202, 220, 0.75);
  }
  70% {
    width: 0.5em;
    box-shadow: -1em -0.5em rgba(225, 20, 98, 0.75), 1em 0.5em rgba(111, 202, 220, 0.75);
  }
  100% {
    box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
  }
}
@keyframes after {
  0% {
    height: 0.5em;
    box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
  }
  35% {
    height: 2.5em;
    box-shadow: 0.5em 0 rgba(61, 184, 143, 0.75), -0.5em 0 rgba(233, 169, 32, 0.75);
  }
  70% {
    height: 0.5em;
    box-shadow: 0.5em -1em rgba(61, 184, 143, 0.75), -0.5em 1em rgba(233, 169, 32, 0.75);
  }
  100% {
    box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
  }
}
/*****************************************
Custom css starts
******************************************/
body {
color: #2e2e2e;
    font-family: Montserrat;
font-size: 14px;
font-weight: normal;
line-height: 21px;
background: #ffffff;
}
/* ######## Wrapper Css ######################### */
#outer-wrapper{max-width:100%;margin:0 auto;background-color:#FFF;box-shadow:0 0 5px RGBA(0, 0, 0, 0.2)}
.row{width:1170px}
#content-wrapper {
margin: 0 auto;
padding: 20px 0 30px;
overflow: hidden;
}

.item #main-wrapper, .statc_page #main-wrapper {
float: left;
width: 68%;
max-width: 800px;
}
.index #main-wrapper, .archive #main-wrapper {
float:none;
width:100%;
max-width:100%
}
.item #sidebar-wrapper, .statc_page #sidebar-wrapper {
float: right;
width: 30%;
max-width: 330px;
}
.index #sidebar-wrapper, .archive #sidebar-wrapper {
display:none;
visibility:hidden;
height:0;
opacity:0;
}
/* ######## Scrolling Navigation Menu Css ######################### */
.scroll-header {
       z-index: 9;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 10px 0px;
transition: all .5s;
}
.item .scroll-header, .static_page .scroll-header, .error_page .scroll-header {
    position: static;
    display: flex;
    background: #f5f5f5 none repeat scroll top left;
    box-shadow: 0 0 6px 1px rgba(0,0,0,0.1);
    padding: 20px 0;
}
.scroll-header.scrolled-header {
 background-color: rgba(30, 30, 30, 0.85);
    border-bottom: 1px solid #262626;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
visibility:visible;
display:block;
transition: all .5s;
 -webkit-animation: slide-down 0.2s;
    -moz-animation: slide-down 0.2s;
    animation: slide-down 0.2s;
}
@-webkit-keyframes slide-down { 0% { opacity:0; transform:translateY(-100%);}100% { opacity:0.9; transform:translateY(0);}}

@-moz-keyframes slide-down { 0% { opacity:0; transform:translateY(-100%);}100% { opacity:0.9; transform:translateY(0);}}

@keyframes slide-down { 0% { opacity:0; transform:translateY(-100%);}100% { opacity:0.9; transform:translateY(0);}}
.scroll-head-wrap {
margin:0 auto;
}
.item .scroll-header #header img, .static_page .scroll-header #header img, .error_page .scroll-header #header img {
   -webkit-filter: invert(1);
    filter: invert(1);
}
.item .scroll-header.scrolled-header h1, .static_page .scroll-header.scrolled-header h1, .error_page .scroll-header.scrolled-header h1 {
    display: none!important;
color:#000!important;
}
.item .scroll-header.scrolled-header #header img, .static_page .scroll-header.scrolled-header #header img, .error_page .scroll-header.scrolled-header #header img {
    display: block!important;
     -webkit-filter: invert(0);
    filter: invert(0);
}
.scrollin-logo {
    float: left;
    margin: 0;
    padding: 0;
    display: inline-block;
}
.scrollin-logo .logo-title {
    font-size: 40px;
        font-family: 'Righteous', cursive;
    font-weight: bold;
    padding: 10px 17px;
    display: block;
color:#fff;
}
.scrolling-menu {
    float: right;
    display: inline-block;
    width: auto;
}
.scrolling-menu #nav {
    list-style: none;
    margin: 0;
    padding: 0;
    z-index: 999;
}
.scrolling-menu #nav li {
    display: inline-block;
    float: left;
    line-height: 1;
    list-style: none outside none;
   padding: 16px 17px;
    text-align: left;
}
.scrolling-menu #nav li a {
    background: transparent;
    color: #fff;
    display: block;
    font-size: 15px;
    padding: 0 0 8px;
    position: relative;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
   font-family: Montserrat;
    letter-spacing: 1.3px;
}
.scrolling-menu #nav li a:hover {
    color: $maincolor;
}
.scrolling-menu #nav li.current a {
  color: $maincolor;
}
.scrolling-menu #nav li.current a:before {
    position: absolute;
    bottom: 0;
    left: 0;
   width: 100%;
    opacity: 1;
    height: 1px;
    content: '';
    -webkit-transition: all ease .3s;
    transition: all ease .3s;
    background: $maincolor;
}
/* ######## Navigation Menu Css ######################### */
.slicknav_menu {
display:none;
}

.tm-menu .slicknav_menu {
right:0;
display:none;
}

.scrolling-menu .slicknav_menu {
right:0;
}
.slicknav_menu {
padding:0 10px;
    position: absolute;
    z-index: 9;
}
.slicknav_menu .slicknav_icon-bar {
background-color: #343434;
}
.index .slicknav_menu .slicknav_icon-bar {
background-color: #fff;
}
.slicknav_nav a{
padding:5px 10px;
margin:2px 5px;
text-decoration:none;
color:#000;
font-size:11px;
font-weight:400;
letter-spacing:2px;
text-transform:uppercase;
font-family: Montserrat;
}
/*
    Mobile Menu Core Style
*/

.slicknav_btn { position: relative; display: block; vertical-align: middle; float: right;  line-height: 27px; cursor: pointer;  height:27px;}
.slicknav_menu  .slicknav_menutxt { display: block; line-height: 1.188em; float: left; }
.slicknav_menu .slicknav_icon { float: left; margin: 0.188em 0 0 0.438em; }
.slicknav_menu .slicknav_no-text { margin: 0 }
.slicknav_menu .slicknav_icon-bar { display: block; width: 1.125em; height: 0.125em; }
.slicknav_btn .slicknav_icon-bar + .slicknav_icon-bar { margin-top: 0.188em }
.slicknav_nav { clear: both }
.slicknav_nav ul,
.slicknav_nav li { display: block }
.slicknav_nav .slicknav_arrow { font-size: 0.8em; margin: 0 0 0 0.4em; }
.slicknav_nav .slicknav_item { cursor: pointer; }
.slicknav_nav .slicknav_row { display: block; }
.slicknav_nav a { display: block }
.slicknav_nav .slicknav_item a,
.slicknav_nav .slicknav_parent-link a { display: inline }
.slicknav_menu:before,
.slicknav_menu:after { content: " "; display: table; }
.slicknav_menu:after { clear: both }
.scroll-header.scrolled-header .slicknav_btn {color:#fff;}
.scroll-header.scrolled-header .slicknav_menu .slicknav_icon-bar {
    background-color: #fff;
}
/* IE6/7 support */
.slicknav_menu { *zoom: 1 }

/* 
    User Default Style
    Change the following styles to modify the appearance of the menu.
*/

.slicknav_menu {
    font-size:16px;
}
/* Button */
.slicknav_btn {
    margin: 5px 5px 6px;
    text-decoration:none;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;  
    
}
/* Button Text */
.slicknav_menu  .slicknav_menutxt {
    color: #FFF;
    font-weight: bold;
    text-shadow: 0 1px 3px #000;
}
/* Button Lines */


.slicknav_nav {
    color:#fff;
    margin:0;
    padding:0;
    font-size:0.875em;
background: #fff;

}
.slicknav_nav, .slicknav_nav ul {
    list-style: none;
    overflow:hidden;
}
.slicknav_nav ul {
    padding:0;
    margin:8px 0 0 20px;
}
.slicknav_nav .slicknav_row {
    padding:5px 10px;
    margin:2px 5px;
}

.slicknav_nav .slicknav_item a,
.slicknav_nav .slicknav_parent-link a {
    padding:0;
    margin:0;
}
.slicknav_nav .slicknav_row:hover {
    
}
.slicknav_nav a:hover{
    color: $maincolor;
}
.slicknav_nav .slicknav_txtnode {
     margin-left:15px;   
}

.slicknav_menu .slicknav_no-text {
	margin-top:15px;
}
.tm-menu {
    font-weight: 400;
    margin: 0;
height:60px;
text-align:center;
     float: right;
  display:none;
    width: auto;
}
.item .tm-menu, .static_page .tm-menu, .error_page .tm-menu {
    display: inline-block;
}
ul#nav1 {
    list-style: none;
    margin: 0;
    padding: 0;
text-align: center;
}
#menu .widget {
    display: none;
}
#menu {
    height: 60px;
    position: relative;
    text-align: center;
margin:0 auto;
}
.menu-wrap {
margin:0 auto;
position: relative;
}
#menu ul > li {
    position: relative;
    vertical-align: middle;
    display: inline-block;
    padding: 0;
    margin: 0;
}
#menu ul > li:hover > a {
    color: $maincolor
}
.index #menu ul > li > a {
color:#fff;
}
#menu ul > li > a {
    color: #000;
    font-size: 14px;
    line-height: 60px;
    display: inline-block;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 1px;
    margin: 0;
    padding: 0 12px;
font-family: Montserrat;
}
.scroll-header.scrolled-header #menu ul > li > a, .scroll-header.scrolled-header #header h1 a {
color:#fff;
}
.scroll-header.scrolled-header #menu ul > li > ul > li > a {
color:#000;
}
#menu ul > li:first-child > a {
    padding-left: 0;
}

#menu ul > li > ul > li:first-child > a:before, #menu ul > li > ul > li > ul > li:first-child > a:before {
display:none;
}
#menu ul > li > ul > li:first-child > a {
    padding-left: 12px
}
#menu ul > li > ul {
    position: absolute;
    background: #fff;
    -webkit-box-shadow: 0 7px 7px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0 7px 7px rgba(0, 0, 0, 0.15);
    box-shadow: 0 7px 7px rgba(0, 0, 0, 0.15);
    top: 100%;
    left: 0;
    min-width: 180px;
    padding: 0;
    z-index: 99;
    margin-top: 0;
    visibility: hidden;
    opacity: 0;
   webkit-transform: translate3d(-11px, 0, 0);
    transform: translate3d(-11px, 0, 0);
    -webkit-animation-duration: .5s;
    animation-duration: .5s;
}
#menu ul > li > ul > li > ul {
    position: absolute;
    top: 0;
    left: 180px;
    width: 180px;
    background: #fff;
    z-index: 99;
    margin-top: 0;
    margin-left: 0;
    padding: 0;
    border-left: 1px solid #e5e5e5;
    visibility: hidden;
    opacity: 0;
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    transform: translateY(10px)
}
#menu ul > li > ul > li {
    display: block;
    float: none;
    text-align: left;
    position: relative;
border-bottom: 1px solid;
    border-top: none;
    border-color: #e5e5e5;
}
#menu ul > li > ul > li:hover {
    background-color: rgba(255, 255, 255, 0.03)
}
#menu ul > li > ul > li a {
    font-size: 11px;
    display: block;
    color: #000;
    line-height: 35px;
    text-transform: uppercase;
    text-decoration: none;
    margin: 0;
    padding: 0 12px;
    border-right: 0;
    border: 0
}
.index #menu ul > li > ul > li a {
color:#000;
}
#menu ul > li.parent > a:after {
    content: '\f107';
    font-family: FontAwesome;
    float: right;
    margin-left: 5px
}
#menu ul > li:hover > ul,
#menu ul > li > ul > li:hover > ul {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    transform: translateY(0)
}
#menu ul > li > ul > li.parent > a:after {
    content: '\f105';
    float: right
}
#menu ul ul {

}

/* ######## Header Css ######################### */
.index #header-wrapper:after, .archive #header-wrapper:after {
    content: '';
    position: absolute;
    bottom: 0;
    height: 100px;
    width: 100%;
    background: url(http://4.bp.blogspot.com/-U2FiDOW13h8/WaUuGbhbUpI/AAAAAAAADuQ/-tZACcQo3hYxUbXIe30RUfEMtIInpeiHACK4BGAYYCw/s1600/header-mask.png) no-repeat center;
    left: 0;
    right: 0;
    margin: 0 auto;
    background-size: cover;
}
#header-wrapper {
text-align: center;
padding:0;
background: url(http://3.bp.blogspot.com/-3UcLXxRcetg/WaTYDnjaJbI/AAAAAAAADt0/LL7OaZTjsE4hTzpKkm-Jj55c8JI4SZBhQCK4BGAYYCw/s1600/head-back.jpg) no-repeat center bottom;
    background-attachment: fixed;
    background-size: cover;
    margin-bottom: 10px;
height:100vh;
box-sizing:border-box;
position:relative;
    width: 100%;
}
.index #header-wrapper {
margin-bottom:0;
}
.item .header-logo-desc p, .static_page .header-logo-desc p, .error_page .header-logo-desc p, .item .top-bar-social #social a, .static_page .top-bar-social #social a, .error_page .top-bar-social #social a {
   color:#303030;
}
.item #header-wrapper, .static_page #header-wrapper, .error_page #header-wrapper {
    background: #fff;
    height: auto;
border-bottom: 1px solid #eee;
    box-shadow: 0 -2px 19px rgba(0,0,0,.1);
    padding-bottom: 15px;
}
.item #header-wrapper:before, .static_page #header-wrapper:before, .error_page #header-wrapper:before {
display:none;
}
#header-wrapper:before {
content:"";
position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: .3;
    background: #343434;
}
#header {
padding: 0;
}
#header-inner {
text-align: center;
display: inline-block;
}
#header h1 {
    color: #fff;
    margin: 0;
    font-size: 40px;
    line-height: 1.4em;
    text-transform: Uppercase;
    letter-spacing: 1px;
font-family: 'Righteous', cursive;
}
#header .description {
    display:none;
}
.header-text h2.title {
    color: #fff;
    margin: 0;
    font-size: 50px;
    line-height: 1.4em;
    text-transform: Uppercase;
    letter-spacing: 1px;
   font-family: 'Righteous', cursive;
}
.header-logo-desc span {
    font-size: 31px;
    color: $maincolor;
}
.header-logo-desc p {
display: inline-block;
    white-space: nowrap;
    font-size: 31px;
    line-height: 37px;
    font-weight: 400;
    color: rgb(255, 255, 255);
    visibility: inherit;
    transition: none;
    border-width: 0px;
   margin: 0 0 0 20px;
    padding-right: 20px;
    letter-spacing: 0px;
    min-height: 0px;
    min-width: 0px;
    max-height: none;
    max-width: none;
    opacity: 1;
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform-origin: 50% 50% 0px;
}
.header-logo-desc {
    margin:10px 0 20px;
text-transform:uppercase;
}
.header-logo-desc .type {
    position: relative;
}
.typed-cursor {
    font-weight: 300;
    font-size: 50px;
    color: $maincolor;
    opacity: 1;
    -webkit-animation: blink 1s infinite;
    -moz-animation: blink 1s infinite;
    animation: blink 1s infinite;
}
.typed-cursor {
    position: absolute;
    bottom: 0;
    display: inline-block;
}

.fenix-head {
  display:table;
width:100%;
height:100%;
}
.fenix-sub-head {
margin:0 auto;
display:table-cell;
vertical-align: middle;
}
.index .fenix-sub-head, .archive .fenix-sub-head {

}
.top-bar-social {
padding: 0;
}
.top-bar-social li {
display: inline-block;
    float: none;
padding: 0;
margin-right: 5px;
}
.top-bar-social li:last-child {
margin-right:0;
}
.top-bar-social .widget ul {
padding: 0;
}
.top-bar-social .LinkList ul {
text-align: center;
margin: 0 0 0 0;
}
.top-bar-social #social a {
display: block;
width: 30px;
height: 30px;
line-height: 30px;
font-size: 12px;
color: #fff;
border: 1px solid #e4e4e4;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
border-radius: 100%;
transition: background 0.3s linear;
-moz-transition: background 0.3s linear;
-webkit-transition: background 0.3s linear;
-o-transition: background 0.3s linear;
}
.top-bar-social #social a:before {
display: inline-block;
font: normal normal normal 22px/1 FontAwesome;
font-size: inherit;
font-style: normal;
font-weight: 400;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
.top-bar-social .bloglovin:before{content:"\f004"}
.top-bar-social .facebook:before{content:"\f09a"}
.top-bar-social .twitter:before{content:"\f099"}
.top-bar-social .gplus:before{content:"\f0d5"}
.top-bar-social .rss:before{content:"\f09e"}
.top-bar-social .youtube:before{content:"\f167"}
.top-bar-social .skype:before{content:"\f17e"}
.top-bar-social .stumbleupon:before{content:"\f1a4"}
.top-bar-social .tumblr:before{content:"\f173"}
.top-bar-social .vine:before{content:"\f1ca"}
.top-bar-social .stack-overflow:before{content:"\f16c"}
.top-bar-social .linkedin:before{content:"\f0e1"}
.top-bar-social .dribbble:before{content:"\f17d"}
.top-bar-social .soundcloud:before{content:"\f1be"}
.top-bar-social .behance:before{content:"\f1b4"}
.top-bar-social .digg:before{content:"\f1a6"}
.top-bar-social .instagram:before{content:"\f16d"}
.top-bar-social .pinterest:before{content:"\f0d2"}
.top-bar-social .delicious:before{content:"\f1a5"}
.top-bar-social .codepen:before{content:"\f1cb"}

.top-bar-social .bloglovin{background:$maincolor}
.top-bar-social .facebook{background:#3b5998}
.top-bar-social .twitter{background:#00aced}
.top-bar-social .gplus{background:#df4b37}
.top-bar-social .rss{background:#f26522}
.top-bar-social .youtube{background:#cd201f}
.top-bar-social .skype{background:#00aff0}
.top-bar-social .stumbleupon{background:#eb4924}
.top-bar-social .tumblr{background:#35465c}
.top-bar-social .vine{background:#00b488}
.top-bar-social .stack-overflow{background:#f48024}
.top-bar-social .linkedin{background:#0077b5}
.top-bar-social .dribbble{background:#ea4c89}
.top-bar-social .soundcloud{background:#ff3300}
.top-bar-social .behance{background:#1769ff}
.top-bar-social .digg{background:#005be2}
.top-bar-social .instagram{background:#c13584}
.top-bar-social .pinterest{background:#bd081c}
.top-bar-social .delicious{background:#3399ff}
.top-bar-social .codepen{background:#47cf73}

.top-bar-social ul#social a:hover {
color: $maincolor;
opacity: 1;
}
.slide-in {
    font-size: 3.3rem;
    position: absolute;
    bottom: 7.2rem;
    left: 0;
    display: block;
    width: 100%;
    margin: 0;
    padding: 0
}
.slide-in .pointer {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 26px;
    height: 42px;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    border: 2px solid #fff;
    border-radius: 26px;
    -webkit-backface-visibility: hidden
}
.slide-in .pointer:after {
    position: absolute;
    top: 5px;
    left: 50%;
    width: 4px;
    height: 4px;
    margin-left: -2px;
    content: '';
    -webkit-transform: translateY(0) scaleY(1) scaleX(1) translateZ(0);
    transform: translateY(0) scaleY(1) scaleX(1) translateZ(0);
    -webkit-animation: scroll 1.5s -1s cubic-bezier(.68, -.55, .265, 1.55) infinite;
    animation: scroll 1.5s -1s cubic-bezier(.68, -.55, .265, 1.55) infinite;
    opacity: 1;
    border-radius: 100%;
    background-color: #fff
}
@-webkit-keyframes scroll {
    0%, 20% {
        -webkit-transform: translateY(0) scaleY(1) scaleX(1) translateZ(0);
        transform: translateY(0) scaleY(1) scaleX(1) translateZ(0)
    }
    10% {
        -webkit-transform: translateY(0) scaleY(1.2) scaleX(1.2) translateZ(0);
        transform: translateY(0) scaleY(1.2) scaleX(1.2) translateZ(0);
        opacity: 1
    }
    to {
        -webkit-transform: translateY(20px) scaleY(2.5) scaleX(.5) translateZ(0);
        transform: translateY(20px) scaleY(2.5) scaleX(.5) translateZ(0);
        opacity: .01
    }
}
@keyframes scroll {
    0%, 20% {
        -webkit-transform: translateY(0) scaleY(1) scaleX(1) translateZ(0);
        transform: translateY(0) scaleY(1) scaleX(1) translateZ(0)
    }
    10% {
        -webkit-transform: translateY(0) scaleY(1.2) scaleX(1.2) translateZ(0);
        transform: translateY(0) scaleY(1.2) scaleX(1.2) translateZ(0);
        opacity: 1
    }
    to {
        -webkit-transform: translateY(20px) scaleY(2.5) scaleX(.5) translateZ(0);
        transform: translateY(20px) scaleY(2.5) scaleX(.5) translateZ(0);
        opacity: .01
    }
}
@-webkit-keyframes blink {
    0%, to {
        opacity: 1
    }
    50% {
        opacity: 0
    }
}
@keyframes blink {
    0%, to {
        opacity: 1
    }
    50% {
        opacity: 0
    }
}
/* ######## Section 1 Css ######################### */
.sora-special-box {
    background: #fff;
    overflow: hidden;
    margin: 0 auto;
padding:20px 0;
}
.special-wrap {
margin:0 auto;
}
.special-title {
    text-align: center;
margin-bottom: 35px;
}
.special-title h4 {
font-size: 35px;
    line-height: 45px;
color:#303030;
text-transform:capitalize;
}
.special-tiles {
    width: 100%;
    box-sizing: border-box;
    text-align: left;
    margin-bottom: 20px;
}
.special-icons {
    font-size: 45px;
    float: left;
    color: #303030;
    margin-right: 10px;
width: 50px;
    height: 60px;
    line-height: 60px;
}
.special-heading {
    font-size: 14px;
    line-height: 21px;
    color: #303030;
text-transform: capitalize;
    letter-spacing: 1.5px;
    margin-bottom: 10px;
font-weight:bold;
}
.special-text {
    color: #606060;
}


.skills, .skill-details {
  padding: 15px;
    width: 50%;
    float: left;
    box-sizing: border-box;
    padding-right: 40px;
    padding-left: 0;
}
.skill-details {
float:right;
padding-left: 40px;
    padding-right: 0;
}
.skills dt:after {
  width: 100%;
  background-color: #e0e0e0;
  height: 0.5rem;
  content: "";
  display: block;
}

.skills dd {
  background: red;
  width: 0;
  height: 0.5rem;
  position: relative;
  top: -0.5rem;
}
.skills dd.html {
  background: #F44336;
}
.skills dd.css {
  background: #2196F3;
}
.skills dd.jquery {
  background: #FFCA28;
}
.skills dd.scss {
  background: #F06292;
}
.skills dd.javascript {
  background: #FFA000;
}
.skills dd.php {
  background: #303F9F;
}
.skills dd.xml {
  background: #27ae60;
}
/* ######## Section 2 Css ######################### */
.sora-works-box {
   background: #f1f1f1;
    background-size: cover;
    overflow: hidden;
    margin: 0 auto;
padding:20px 0;
}
.works-wrap {
margin:0 auto;
}
.works-title {
    text-align: center;
margin-bottom: 35px;
}
.works-title h4 {
font-size: 35px;
    line-height: 45px;
color:#202020;
text-transform:capitalize;
}
.works-title span {
color:#aaa;
}
.works-tiles {
    width: 25%;
    float: left;
    padding: 10px;
    box-sizing: border-box;
    text-align: center;
}
.works-icons {
    font-size: 45px;
    display: block;
    color: $maincolor;
    margin-bottom: 20px;
}
.works-icons li {
width:60px;
height:60px;
    background-color: $maincolor;
    border-radius: 50%;
    position: relative;
    display: inline-block;
    padding: 10px;
list-style:none;
    -webkit-box-shadow: 0 15px 34px rgba(0, 0, 0, 0.18);
    -moz-box-shadow: 0 15px 34px rgba(0, 0, 0, 0.18);
    box-shadow: 0 15px 34px rgba(0, 0, 0, 0.18);
    -webkit-transition: all 0.4s ease-in-out;
}
.works-icons li .text {
line-height: 60px;
    font-size: 25px;
color:#fff;
}

.works-heading {
    font-size: 18px;
    line-height: 21px;
    color: #202020;
text-transform: capitalize;
    letter-spacing: 1.5px;
    margin-bottom: 10px;
font-weight:bold;
}
.works-text {
    margin: 0 0 20px;
    color: #707070;
}
.owl-carousel{
display:none;
width:100%;
-webkit-tap-highlight-color:transparent;
position:relative;
z-index:1
}
.owl-carousel .owl-stage{
position:relative;
-ms-touch-action:pan-Y
}
.owl-carousel .owl-stage:after{
content:".";
display:block;
clear:both;
visibility:hidden;
line-height:0;
height:0
}
.owl-carousel .owl-stage-outer{
position:relative;
overflow:hidden;
-webkit-transform:translate3d(0px,0px,0px)
}
.owl-carousel .owl-controls .owl-nav .owl-prev,.owl-carousel .owl-controls .owl-nav .owl-next,.owl-carousel .owl-controls .owl-dot{
cursor:pointer;
cursor:hand;
-webkit-user-select:none;
-khtml-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
user-select:none
}
#slider-wrapper .PopularPosts .main-slider, #slider-wrapper .PopularPosts .main-slider .slider-item  {
height: 330px;
overflow: hidden;
}
#slider-wrapper .PopularPosts .main-slider.owl-carousel.owl-loaded, #slider-wrapper .PopularPosts .main-slider.owl-carousel.owl-loaded .slider-item  {
height: auto;
}
.owl-carousel.owl-loaded{
display:block
}
.owl-carousel.owl-loading{
opacity:0;
display:block
}
.owl-carousel.owl-hidden{
opacity:0
}
.owl-carousel .owl-refresh .owl-item{
display:none
}
.owl-carousel .owl-item{
position:relative;
min-height:1px;
float:left;
-webkit-backface-visibility:visible;
-webkit-tap-highlight-color:transparent;
-webkit-touch-callout:none;
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
user-select:none
}
.owl-carousel .owl-item img{
-webkit-transform-style:preserve-3d;
transform-style:preserve-3d
}
.owl-carousel.owl-text-select-on .owl-item{
-webkit-user-select:auto;
-moz-user-select:auto;
-ms-user-select:auto;
user-select:auto
}
.owl-carousel .owl-grab{
cursor:move;
cursor:-webkit-grab;
cursor:-o-grab;
cursor:-ms-grab;
cursor:grab
}
.owl-carousel.owl-rtl{
direction:rtl
}
.owl-carousel.owl-rtl .owl-item{
float:right
}
.no-js .owl-carousel{
display:block
}
.owl-carousel .animated{
-webkit-animation-duration:1000ms;
animation-duration:1000ms;
-webkit-animation-fill-mode:both;
animation-fill-mode:both
}
.owl-carousel .owl-animated-in{
z-index:1
}
.owl-carousel .owl-animated-out{
z-index:0
}
.owl-height{
-webkit-transition:height 500ms ease-in-out;
-moz-transition:height 500ms ease-in-out;
-ms-transition:height 500ms ease-in-out;
-o-transition:height 500ms ease-in-out;
transition:height 500ms ease-in-out
}
.owl-prev,.owl-next{
position:relative;
float:left;
width:25px;
height:30px;
background-color:#fff;
font-family: FontAwesome;
text-rendering: auto;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
font-size:11px;
line-height:30px;
font-weight:900;
color:#232323;
text-align:center;
cursor:pointer;
border:1px solid rgba(0,0,0,0.08);
box-sizing:border-box;
transition:all .25s ease
}
.owl-prev:before{
content:"\f053"
}
.owl-next:before{
content:"\f054"
}
.owl-prev:hover,.owl-next:hover{
background-color:#003ee6;
color:#fff;
border-color:#003ee6
}
@keyframes fadeInLeft {
from{
opacity:0;
transform:translate3d(-30px,0,0)
}
to{
opacity:1;
transform:none
}
}
@keyframes fadeOutLeft {
from{
opacity:1
}
to{
opacity:0;
transform:translate3d(-30px,0,0)
}
}
@keyframes fadeInRight {
from{
opacity:0;
transform:translate3d(30px,0,0)
}
to{
opacity:1;
transform:none
}
}
.fadeInRight{
animation-name:fadeInRight
}
@keyframes fadeOutRight {
from{
opacity:1
}
to{
opacity:0;
transform:translate3d(30px,0,0)
}
}
.fadeOutRight{
animation-name:fadeOutRight
}
.slider-loader{
position:relative;
height:330px;
overflow:hidden;
display:block;
margin:0
}
.slider-loader:after{
content:'';
position:absolute;
top:50%;
left:50%;
width:28px;
height:28px;
margin:-16px 0 0 -16px;
border:2px solid #003ee6;
border-right-color:rgba(155,155,155,0.2);
border-radius:100%;
animation:spinner 1.1s infinite linear;
transform-origin:center
}
@-webkit-keyframes spinner {
0%{
-webkit-transform:rotate(0deg);
transform:rotate(0deg)
}
to{
-webkit-transform:rotate(1turn);
transform:rotate(1turn)
}
}
@keyframes spinner {
0%{
-webkit-transform:rotate(0deg);
transform:rotate(0deg)
}
to{
-webkit-transform:rotate(1turn);
transform:rotate(1turn)
}
}
#slider-wrapper .show-slider, #slider-wrapper .PopularPosts{
display:block!important
}
#slider-wrapper .show-slider .widget-content, #slider-wrapper .PopularPosts .widget-content{
position:relative;
height:auto;
overflow:hidden;
margin:30px 0;
}
#slider-wrapper {
margin: 0 auto;
}
#slider-section .widget, #slider-section .widget > .widget-title {
display: none;
}
#slider-wrapper .PopularPosts .main-slider {
display: grid;
grid-template-columns: repeat(3,1fr);
grid-gap: 10px;
}
#slider-wrapper .PopularPosts ul.main-slider.owl-carousel.owl-loaded {
display: block;
}
#slider-wrapper .main-slider{
position:relative;
overflow:hidden;
height:auto;
padding:0;
}
.main-slider .slider-item{
position:relative;
float:left;
width:100%;
height:auto;
overflow:hidden;
box-sizing:border-box;
    padding: 0;
}
#slider-wrapper .PopularPosts .main-slider .slider-item {
display: flex;
flex-direction: column;
overflow: hidden;
}
#slider-wrapper .PopularPosts ul.main-slider.owl-carousel.owl-loaded .slider-item {
display: block;
}
.slider-item-inner{
position:relative;
float:left;
width:100%;
height:100%;
overflow:hidden;
display:block;
}
.main-slider .post-image-link{
width:100%;
height:330px;
position:relative;
overflow:hidden;
display:block;
margin-bottom:0;
background-image:linear-gradient(-45deg,rgba(0,0,0,0.1),#ededed,rgba(0,0,0,0.1));background-size:150% 150%;animation:gradient 1s ease infinite
}
@keyframes gradient {
0%{background-position:100% 50%}
50%{background-position:50% 0}
100%{background-position:100% 50%}
}
.main-slider .post-info-wrap {
    position: absolute;
    top: 50%;
    left: 50%;
    max-width: 70%;
    width: 100%;
    background-color: #ffffff;
    text-align: center;
    overflow: hidden;
    z-index: 5;
    box-sizing: border-box;
    padding: 25px;
    opacity: 1;    
    transform: translate(-50%,-50%);
    transition: transform .5s ease;
}
.main-slider .owl-item.active .post-info-wrap {
}
.main-slider .post-info{
position: relative;
overflow: hidden;
display: block;
z-index: 10;
}
.main-slider .post-title{
font-size:21px;
font-weight:500;
display:block;
line-height:1.5;
margin:0 0 5px
}
.main-slider .post-title a{
color:#222222;
display:block
}
.main-slider .post-title a:hover{
text-decoration:underline
}
.main-slider .post-snippet {
color:#5E5E5E;
}
.show-slider .no-posts{
position:absolute;
top:calc(50% - 50px);
left:0;
width:100%;
text-align:center;
}
.main-slider .post-info .post-tag{
display: flex;
flex-wrap: wrap;
    text-align: center;
    align-items: center;
    justify-content: center;
color: #4d4d4d;
font-size: 9px;
letter-spacing: 2px;
font-weight: 400;
text-transform:uppercase;
margin-bottom:15px;
}
.main-slider .post-info .post-tag:hover{
color:#003ee6;
}
.main-slider .post-meta {
color: #aaaaaa;
font-size: 12px;
font-weight: 400;
line-height: 18px;
padding: 0 1px;
}
.main-slider .post-date {
font-size: 11px;
color: #232323;
margin: 0;
display: inline-block;
float:none;
}
.main-slider .owl-nav{
position:absolute;
top:0;
left:0;
right:0;
height:0
}
.main-slider .owl-prev,.main-slider .owl-next{
height:40px;
line-height:40px;
z-index:10;
border:0
}
.main-slider .owl-prev{
float:left;
left:-25px;
}
.main-slider:hover .owl-prev{
left:0
}
.main-slider .owl-next{
float:right;
right:-25px;
}
.main-slider:hover .owl-next{
right:0
}
.tysum-wrapper .featured-box {
    margin: 0 auto;
    overflow: hidden;
}
.tyheading-head {
text-align: center;
    margin: 25px 0;
}
.tyheading-head h2 {
font-size: 35px;
    line-height: 45px;
    color: #303030;
    text-transform: capitalize;
}
.ty-feat {
    display: grid;
    grid-template-columns: repeat(2,1fr);
    grid-gap: 25px;
}
.tysum .ty-feat .tybox-rest {
    float: left;
    width: 100%;
   display: flex;
    flex-direction: column;
    box-sizing: border-box;
position:relative;
}
.tysum .ty-feat .tybox-rest:nth-child(4n) {
    padding-right: 0;
}
.tysum .tyimg-lay {
    position: absolute;
    left: 0;
    top: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
opacity:0.5;
   background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.6) 70%, rgba(0, 0, 0, 1) 100%);
    background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.6) 70%, rgba(0, 0, 0, 1) 100%);
    background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.6) 70%, rgba(0, 0, 0, 1) 100%);
    background: -o-linear-gradient(top, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.6) 70%, rgba(0, 0, 0, 1) 100%);
    background: linear-gradient(top, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.6) 70%, rgba(0, 0, 0, 1) 100%);
}
.tysum .yard-tent-ty {
    clear: both;
    z-index: 2;
   padding: 0;
    box-sizing: border-box;
}


.tysum .yard-tent-ty .tyard-title {
      overflow: hidden;
    line-height: 0;
    margin: 0 0 2px;
    padding: 0;
}
.tysum .yard-tent-ty .tyard-title a {
   color: #2e2e2e;
    font-weight: 700;
    font-size: 22px;
    line-height: 1.5em;
    letter-spacing: 1px;
}
.tysum .yard-tent-ty .recent-summary {
   color: #6a6a6a;
     line-height: 20px;
font-size: 13px;
    font-weight: normal;
}
.tysum.templatesyard .ty-feat .tybox-rest .yard-img {
    height: 280px;
}
.tysum-wrapper {
    overflow: hidden;
background: #fff;
    padding: 0 0 25px;
}
.ty-feat .tybox-rest .tyard-thumb {
    position: relative;
    float: left;
    width: 100%;
    height: 100%;
    overflow: hidden;
    vertical-align: middle;
    margin: 0 !important;
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.ty-feat .tybox-rest .yard-img {
    width: 100%;
    height: 280px;
    position: relative;
    display: block;
    transition: all .3s ease-in-out;
}
.yard-auth-ty, .ty-time {
    color: #bdbdbd;
    font-size: 12px;
    font-weight: 400;
}

.yard-auth-ty {
    margin-right: 10px;
}
.yard-auth-ty::before {
    content: '\f007';
    font-family: fontawesome;
    color: #bbb;
    margin-right: 5px;
}
.tybox-time {
    color: #bdbdbd;
    font-size: 12px;
    font-weight: 400;
}
.tybox-time:before {
    content: '\f133';
    font-family: fontawesome;
    color: #bbb;
    margin-right: 5px;
}

/* ######## Testimonial Css ######################### */
.main-gallery {
background: url(https://2.bp.blogspot.com/-C2ZNH3JwldA/Vupbf-HopaI/AAAAAAAADXU/xq1cJrP0LJMEylkyCr76kPNm-bxo0-7og/s1600/city-1150026_960_720.jpg) no-repeat center bottom;
    background-attachment: fixed;
    background-size: cover;
position:relative;
}
.main-gallery:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: .8;
    background: #000;
}
.gallery-cell {
  width: 100%;
}

.testimonial {
  text-align: center;
  max-width: 850px;
  margin: 100px auto 130px auto;
  padding: 0 20px;
}

.testimonial-avatar {
  width: 100px;
  border-radius: 50%;
}

.testimonial-quote {
  display: block;
  font-size: 24px;
  padding: 10px 0;
line-height:1.4;
color:#fff;
font-style:italic;
  
font-weight:400;
}

.testimonial-author {
  display: block;
  font-weight: 700;
  color: $maincolor;
}

.main-gallery .owl-nav {
    position: absolute;   
    top: calc(50% - 20px);
    left: 0;
    right: 0;
    height: 0;
}
.main-gallery .owl-prev, .main-gallery .owl-next {
       width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50%;
}
.main-gallery .owl-prev {
    float: left;
    left: 25px;
}
.main-gallery .owl-next {
    float: right;
    right: 25px;
}
.owl-carousel .owl-controls .owl-dots {
margin-top: 25px;
text-align: center;
}
.owl-carousel .owl-controls .owl-dot {
display: inline-block;
}
.owl-carousel .owl-controls .owl-dots span {
background: none repeat scroll 0 0 #869791;
border-radius: 20px;
display: block;
height: 12px;
margin: 5px 7px;
opacity: 0.5;
width: 12px;
}
.owl-carousel .owl-controls .owl-dot.active span {
background:none repeat scroll 0 0 #ffbd2f;
}
.owl-carousel{
display:none;
width:100%;
-webkit-tap-highlight-color:transparent;
position:relative;
z-index:1
}
.owl-carousel .owl-stage{
position:relative;
-ms-touch-action:pan-Y
}
.owl-carousel .owl-stage:after{
content:".";
display:block;
clear:both;
visibility:hidden;
line-height:0;
height:0
}
.owl-carousel .owl-stage-outer{
position:relative;
overflow:hidden;
-webkit-transform:translate3d(0px,0px,0px)
}
.owl-carousel .owl-controls .owl-nav .owl-prev,.owl-carousel .owl-controls .owl-nav .owl-next,.owl-carousel .owl-controls .owl-dot{
cursor:pointer;
cursor:hand;
-webkit-user-select:none;
-khtml-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
user-select:none
}
.owl-carousel.owl-loaded{
display:block
}
.owl-carousel.owl-loading{
opacity:0;
display:block
}
.owl-carousel.owl-hidden{
opacity:0
}
.owl-carousel .owl-refresh .owl-item{
display:none
}
.owl-carousel .owl-item{
position:relative;
min-height:1px;
float:left;
-webkit-backface-visibility:visible;
-webkit-tap-highlight-color:transparent;
-webkit-touch-callout:none;
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
user-select:none
}
.owl-carousel .owl-item img{
-webkit-transform-style:preserve-3d;
transform-style:preserve-3d
}
.owl-carousel.owl-text-select-on .owl-item{
-webkit-user-select:auto;
-moz-user-select:auto;
-ms-user-select:auto;
user-select:auto
}
.owl-carousel .owl-grab{
cursor:move;
cursor:-webkit-grab;
cursor:-o-grab;
cursor:-ms-grab;
cursor:grab
}
.owl-carousel.owl-rtl{
direction:rtl
}
.owl-carousel.owl-rtl .owl-item{
float:right
}
.no-js .owl-carousel{
display:block
}
.owl-carousel .animated{
-webkit-animation-duration:1000ms;
animation-duration:1000ms;
-webkit-animation-fill-mode:both;
animation-fill-mode:both
}
.owl-carousel .owl-animated-in{
z-index:1
}
.owl-carousel .owl-animated-out{
z-index:0
}
.owl-height{
-webkit-transition:height 500ms ease-in-out;
-moz-transition:height 500ms ease-in-out;
-ms-transition:height 500ms ease-in-out;
-o-transition:height 500ms ease-in-out;
transition:height 500ms ease-in-out
}
.owl-prev,.owl-next{
position:relative;
float:left;
width:25px;
height:30px;
background-color:#fff;
font-family: FontAwesome;
text-rendering: auto;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
font-size:11px;
line-height:30px;
font-weight:900;
color:#232323;
text-align:center;
cursor:pointer;
border:1px solid rgba(0,0,0,0.08);
box-sizing:border-box;
transition:all .25s ease
}
.owl-prev:before{
content:"\f053"
}
.owl-next:before{
content:"\f054"
}
.owl-prev:hover,.owl-next:hover{
background-color:#003ee6;
color:#fff;
border-color:#003ee6
}
@keyframes fadeInLeft {
from{
opacity:0;
transform:translate3d(-30px,0,0)
}
to{
opacity:1;
transform:none
}
}
@keyframes fadeOutLeft {
from{
opacity:1
}
to{
opacity:0;
transform:translate3d(-30px,0,0)
}
}
@keyframes fadeInRight {
from{
opacity:0;
transform:translate3d(30px,0,0)
}
to{
opacity:1;
transform:none
}
}
.fadeInRight{
animation-name:fadeInRight
}
@keyframes fadeOutRight {
from{
opacity:1
}
to{
opacity:0;
transform:translate3d(30px,0,0)
}
}
.fadeOutRight{
animation-name:fadeOutRight
}
/* ######## Section 3 Css ######################### */
.sora-about-box {
    background: #f8f8f8;
    overflow: hidden;
    margin: 0 auto;
padding:20px 0;
}
.about-wrap {
margin:0 auto;
}
.about-title {
    text-align: center;
margin-bottom: 35px;
}
.about-title h4 {
font-size: 35px;
    line-height: 45px;
color:#303030;
}
.about-tiles {
    width: 33.33%;
    float: left;
    padding: 10px;
    box-sizing: border-box;
    text-align: center;
}
.team-img img {
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  overflow: hidden;
  width: 100%;
}

.team-member, .team-img {
  position: relative;
  overflow: hidden;
}

.team-title {
  margin: 30px 0 7px;
}

.overlay {
  background-color: rgba(20, 20, 20, .7);
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}

.team-details {
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 0;
  padding: 5%;
  overflow: hidden;
  width: 100%;
  z-index: 2;
box-sizing:border-box;
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}

.team-details p {
  color: #fff;
}

.team-img:hover .team-details {
  opacity: 1;
  margin-top: -80px;
}

.team-img:hover .overlay {
  opacity: 1;
}

.socials a {
  display: inline-block;
  width: 37px;
  height: 37px;
  background-color: transparent;
}

.socials i {
  line-height: 37px;
  color: #616161;
  font-size: 14px;
  width: 37px;
  height: 37px;
  border-radius: 50%;
  text-align: center;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.team-details .socials i {
  color: #fff;
}

.socials a:hover i {
  color: #fff;
  background-color: #355c7d;
}

/* ######## Contact Form Css ######################### */
div#sora_blogger_cntct_form {
    padding: 50px 0px;
    border-radius: 2px;
    color: #1D1D1D;
    font-size: 15px;
    font-weight: bold;
    position: relative;
margin:0 auto;
overflow:hidden;
}
div#sora_blogger_cntct_form .wrap-me {
      margin: 0;
    display: block;
    max-width: 500px;
    width: 100%;
    float: right;
    box-sizing: border-box;
    background: #000;
    padding: 40px 40px 5px;
}
.contact-title {
    text-align: center;
    margin: 25px 0;
}
.contact-title h4 {
    font-size: 35px;
    line-height: 45px;
    color: #303030;
}
.contact-title span {
    color: #606060;
}
.contact_list_wrapper {
    text-align: center;
}
.contact-list-info {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
}
.contact_list_wrapper .contact-list-info li {
    padding: 0;
    padding-left: 15px;
    padding-right: 15px;
    display: inline-block;
    line-height: 25px;
    color: #606060;
}
.contact_list_wrapper .contact-list-info li i {
    display: inline;
margin-right: 5px;
    font-size: 15px;
    vertical-align: -2px;
    color: #303030;
}
.contact_list_wrapper .contact-list-info li p {
 display: inline;
}
input#ContactForm1_contact-form-name, #ContactForm1_contact-form-email, #ContactForm1_contact-form-email:hover, #ContactForm1_contact-form-email:active {
    padding: 5px;
    margin-top: 4px !important;
    box-shadow: none!Important;
    width: 100%;
    max-width: 100%;
  background: transparent !important;
    color: #fff;
    border-color: hsla(0,0%,100%,.15) !important;
border-width:0 0 1px 0;
    line-height: 1em;
    min-height: 31px;
    margin-bottom: 15px;
    border-radius: 0px;
}
.contact-form-email-message, .contact-form-email-message:active, .contact-form-email-message:hover {
    padding: 5px;
    margin-top: 4px !important;
    box-shadow: none!Important;
    width: 100%;
max-width: 100%;
    line-height: 1em;
    min-height: 80px;
  background: transparent !important;
    color: #fff;
    border-color: hsla(0,0%,100%,.15) !important;
border-width:0 0 1px 0;
    margin-bottom: 10px;
    border-radius: 0px;
}
/***** Focus *****/
#ContactForm1_contact-form-name:focus, #ContactForm1_contact-form-email:focus, #ContactForm1_contact-form-email-message:focus {
    outline: none;
    background: transparent !important;
    color: #fff;
    border-color: $maincolor !important;
border-width:0 0 1px 0;
    box-shadow: none !important;
    transition: all 0.3s ease-in-out !important;
}
/**** Submit button style ****/
.contact-form-button-submit:hover {
    color: #FFFFFF;
    background: $maincolor !important;
color:#000!important;
}
.contact-form-button-submit {
       background: transparent;
    display: table;
    font-size: 17px;
    margin: 0 !important;
    border-radius: 0 !important;
    max-width: 100%;
    width: 100%;
    min-width: 100%;
    height: 32px;
    line-height: 0.5em;
    letter-spacing: 0.5px;
    font-weight: normal;
position:relative;
    cursor: pointer;
    outline: none!important;
    color: #fff;
    border: 1px solid #fff !important;
    text-align: center;
    padding: 0px 25px;
    text-transform: capitalize;
    transition: all 300ms ease-in-out;
    -webkit-transition: all 300ms ease-in-out;
    -moz-transition: all 300ms ease-in-out;
}

/**** Submit button on Focus ****/
.contact-form-button-submit:focus, .contact-form-button-submit.focus {
  border-color: $maincolor;
  box-shadow: none !important;
color:#000!important;
}
/**** Error message ****/
.contact-form-success-message, .contact-form-success-message-with-border {
  color: #fff !important;
margin-top:55px !important;
}
/**** Submit Button On Success Message ****/
.contact-form-button-submit.disabled, .contact-form-button-submit.disabled:hover, .contact-form-button-submit.disabled:active {
    opacity: 0.9;
}
/****** Success Message *****/
.contact-form-error-message-with-border {
    background: #000000;
    border: 1px solid #5A5A5A;
    bottom: 0;
    box-shadow: none;
    color: #FDFDFD;
    font-size: 15px;
    font-weight: normal;
    line-height: 35px;
    margin-left: 0;
    opacity: 1;
    position: static;
    text-align: center;
    height: 35px;
    margin-top: 60px;
}
.contact-form-cross {
    height: 14px;
    margin: 5px;
    vertical-align: -8.5%;
    float: right;
    width: 14px;
    border-radius: 50px;
    border: 0 !important;
    cursor: pointer;
}
.contact-form-widget {
    max-width: 100%;
}
.contact-form-success-message-with-border {
    font-weight: normal;
    background-color: #000;
    border: 1px solid #FFF;
    color: #FFF;
    line-height: 35px;
    margin-left: 0;
    font-size: 13px;
    opacity: 1;
    position: static;
    text-align: center;
    height: 35px;
    margin-top: 60px;
}
/* Extra Stuff */

div#sora_blogger_cntct_form span.name-bg, div#sora_blogger_cntct_form span.email-bg {
    display: inline-block;
    line-height: 21px;
    width: 100%;
    color: hsla(0,0%,100%,.6);
    padding: 3px 0;
    margin: 0px 0px 4px;
    box-sizing: border-box;
    height: 30px;
    letter-spacing: 1px;
    font-weight: normal;
}
div#sora_blogger_cntct_form span.message-bg {
    display: inline-block;
    line-height: 21px;
    width: 100%;
    color: hsla(0,0%,100%,.6);
    padding: 3px 0;
    box-sizing: border-box;
    height: 30px;
    margin: 0px 0px 4px;
    letter-spacing: 1px;
    font-weight: normal;
}

div#sora_blogger_cntct_form span.send-bg {
    height: 32px;
    display: inline-block;
    float: left;
    transition: all 0.4s ease-in-out !important;
}


div#sora_blogger_cntct_form span.clear-bg {
    display: none;
   
}


input.contact-form-button.contact-form-button-submit.clear-button:hover {
    background-color: #E83434 !important;
}
div#sora_blogger_cntct_form .clear-button {
   display:none;
}
.map-me {
    margin: 0;
    display: block;
    max-width: 500px;
    width: 100%;
    float: left;
padding: 40px;
    box-sizing: border-box;
}
.map-me .con-title {
    font-weight: 700;
    letter-spacing: -1px;
    line-height: 48px;
    color: #000;
    margin: 0;
    text-transform: capitalize;
}
.map-me .con-text {
    font-weight: 100;
    line-height: 24px;
    color: #555;
margin: 0 0 10px;
}
.map-me .con-list {
list-style-type: none;
    padding: 0;
}
.map-me .con-list li {
list-style-type: none;
    color: #333;
  line-height: 45px;
    margin-bottom: 15px;
font-weight:normal;
}
.map-me .con-list li i {
    font-size: 1em;
    margin-right: 20px;
    padding: 15px;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    background: #000;
    color: #fff;
}
/* ######## Sidebar Css ######################### */
.sidebar .widget {
margin-bottom: 20px;
position: relative;
background: #f5f5f5 none repeat scroll top left;
box-shadow: 0px 2px 6px 0px rgba(0,0,0,0.1);
}
.sidebar h2 {
font-size: 17px;
line-height: 27px;
color: #000;
padding: 7px 15px;
font-weight: 400;
letter-spacing: 1.5px;
text-transform: uppercase;
position: relative;
text-align: center;
background: #f7f7f7;
    border: 1px solid #f0f0f0;
}
.sidebar .widget-content {
    padding: 10px;
box-sizing:border-box;
}
.sidebar ul,.sidebar li{
list-style-type:none;
margin:0;
}
#sidebar-wrapper ul.custom-widget {
    padding:0;
    margin:0;
}
.custom-widget li{
    overflow:hidden;
    margin:20px 0 0
}
 .custom-widget li:first-child{
    padding:0;
    margin:0;
    border:0
}
 .custom-widget .post-image-link{
    position:relative;
    width:80px;
    height:60px;
    float:left;
    overflow:hidden;
    display:block;
    vertical-align:middle;
    margin:0 12px 0 0;
    border-radius:4px
}
 .custom-widget .post-info{
    overflow:hidden
}
.custom-widget .post-title {
    overflow: hidden;
    font-size: 13px;
    font-weight: 400;
    line-height: 1.5em;
    margin: 0 0 3px;
    text-align: left;
    text-transform: capitalize;
    padding: 0;
    border: 0;
}
 .custom-widget .post-title a{
    display:block;
    color:#121212;
    transition:color .17s
}
 .custom-widget li:hover .post-title a{
    color:#ffbd2f
}
/* ######## Counter Css ######################### */
.counter-box {
    background: url(http://4.bp.blogspot.com/-Tev2WNGyFs8/WaUuh31ZVRI/AAAAAAAADuY/5D9_uZ3rgrY9cVKC46DXxPMlXlxCOmB4gCK4BGAYYCw/s1600/sg-back.jpg) no-repeat;
    background-attachment: scroll;
    background-size: cover;
background-position: 50% 0;
    overflow: hidden;
    margin: 0 auto;
    padding: 40px 0;
position:relative;
}
.counter-box:before {
    background: rgba(0, 0, 0, 0.7);
    content: "";
    position: absolute;
    display: block;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    bottom: 0;
}
.counter-box-wrap {
    margin: 0 auto;
}
.counter-box-item {
    width: 25%;
    float: left;
    padding: 10px;
    box-sizing: border-box;
    text-align: center;
color: #fff;
    position: relative;
}
.counter-box-item i {
    font-size: 24px;
}
.counter-sora {
color:#fff;
    font-size: 48px;
    line-height: 48px;
    font-weight: 700;
    margin: 10px 0;
    -webkit-transition: all 300ms linear;
    -moz-transition: all 300ms linear;
    -o-transition: all 300ms linear;
    transition: all 300ms linear;
    font-family: 'Righteous', cursive;
}
.counter-sora-text {
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: #fff;
}
#serv-tile-wrap{
background:#ffffff;
display:none;
float:left;
width:100%;
margin:0;
padding: 40px 0;
}
#serv-tile-wrap .container{
position:relative;
margin:0 auto
}
#serv-tile{
display: grid;
grid-template-columns: repeat(3,1fr);
grid-gap: 15px;
margin:0
}
#serv-tile .widget{
display: flex;
flex-direction: column;
width: 100%;
padding: 60px 37px;
box-sizing: border-box;
text-align:center;
box-shadow: 0 5px 30px 0 rgb(214 215 216 / 57%);
background: #fff;
}
.serv-tile-box-avatar {
display: inline-block;
position: relative;
width: 80px;
height: 80px;
-webkit-border-radius: 50%;
-khtml-border-radius:50%;
-moz-border-radius: 50%;
-ms-border-radius: 50%;
-o-border-radius:50%;
border-radius: 50%;
    background-color: #444;
    -webkit-box-shadow: 0 10px 30px 0 rgb(0 0 0 / 30%);
-khtml-box-shadow:0 10px 30px 0 rgb(0 0 0 / 30%);
-moz-box-shadow:0 10px 30px 0 rgb(0 0 0 / 30%);
-ms-box-shadow: 0 10px 30px 0 rgb(0 0 0 / 30%);
-o-box-shadow: 0 10px 30px 0 rgb(0 0 0 / 30%);
box-shadow:0 10px 30px 0 rgb(0 0 0 / 30%);
text-align: center;
line-height: 80px;
margin: 0 auto 25px;
}
.serv-tile-box-avatar i {
display: block;
line-height: 80px;
font-size: 30px;
font-weight: 400;
font-style: normal;
margin: 0;
color: #ffffff;
}
.serv-tile-box-avatar img{
width: 80px;
height: 80px;
}
.serv-tile-box-info{
margin-top: 25px;
overflow:hidden
}
.serv-tile-box-title{
font-size: 24px;
color:#121158;
font-weight:700;
margin:0 0 7px
}
.serv-tile-box-meta{
font-size:16px;
line-height: 1.75;
color:#515184
}
/* ######## Post Css ######################### */
.Portfolio-title {
    text-align: center;
       margin: 25px 0;
}
.Portfolio-title h4 {
    font-size: 35px;
    line-height: 45px;
    color: #303030;
text-transform:capitalize;
}
.Portfolio-title span {
    color: #606060;
}
article {
    padding: 0;
overflow:hidden;
}

.index .post-grid-item, .archive .post-grid-item {
width:25%;
float:left;
padding-right:15px;
box-sizing:border-box;
margin-bottom:15px;
}
.index .post-grid-item:nth-child(4n), .archive .post-grid-item:nth-child(4n) {
padding-right:0;
}
.post {
    display: block;
    word-wrap: break-word;
background: #ffffff;
}
.post h1 {
    color: #0a0a0a;
    font-size: 28px;
    font-weight: 400;
    line-height: 32px;
    margin: 0 0 10px;
}
.post h2 {
margin-bottom: 12px;
line-height: 37px;
    font-size: 25px;
    font-weight: 400;
text-transform:capitalize;
}
.post h2 a {
color: #fff;
}
.post h2 {
    margin: 0 0 10px;
    padding: 0;
}


.retitle h2 {
    margin: 8px 0;
    display: block;
}
.post-body {
margin: 0px;
padding:10px;
font-size: 14px;
line-height: 26px;
box-sizing:border-box;
text-align:justify;
}

.block-image {
    float: left;
    width: 100%;
    height:auto;
position:relative;
}
.block-image .thumb {
    width: 100%;
    height: auto;
    position: relative;
    display: block;
    overflow: hidden;
}
.block-image .thumb:before {
    background: rgba(0, 0, 0, 0.5);
    bottom: 0px;
    content: "";
    height: 100%;
    width: 100%;
    left: 0px;
    right: 0px;
    margin: 0px auto;
    position: absolute;
opacity:0;
    z-index: 3;
}
.block-image img {
    width: 100%;
    height: 260px;
    display: block;
object-fit:cover;
    transition: all .3s ease-out!important;
    -webkit-transition: all .3s ease-out!important;
    -moz-transition: all .3s ease-out!important;
    -o-transition: all .3s ease-out!important;
}
.block-image:hover .retitle {
opacity:1;
}
.block-image:hover .thumb:before {
opacity:1;
}
.block-image .retitle {
position: absolute;
    top: 0;
    text-align: center;
    display: table;
    width: 100%;
    height: 260px;
box-sizing: border-box;
    opacity: 0;
 z-index: 9;
 transition: all .3s ease-out!important;
    -webkit-transition: all .3s ease-out!important;
    -moz-transition: all .3s ease-out!important;
    -o-transition: all .3s ease-out!important;
}
.block-image .post-retitle {
    display: table-cell;
    vertical-align: middle;
}
.block-image .post-retitle h2{
    position: relative;
    width: 80%;
    margin: 0 auto;
    padding: 20px 10px;
}
.post-header {
    padding: 0 10px 10px;
}
.post-meta {
    color: #bdbdbd;
    display: block;
    font-size: 13px;
    font-weight: 400;
    line-height: 21px;
    margin: 0;
    padding: 0;
}
.post-meta a, .post-meta i {
    color: #CBCBCB;
}
.post-timestamp {
    margin-left: 5px;
}
.label-head {
    margin-left: 5px;
}
.label-head a {
    padding-left: 2px;
}
.resumo {
    margin-top: 10px;
    color: #919191;
}
.resumo span {
    display: block;
    margin-bottom: 8px;
font-size: 16px;
    line-height: 31px;
}
.post-body img {
max-width: 100%;
padding: 10px 0;
position: relative;
margin:0 auto;
}
.post h3 {
font-size: 18px;
margin-top: 20px;
margin-bottom: 10px;
line-height: 1.1;
}
.second-meta {
    display: none;
}
.comment-link {
    white-space: normal;
}
#blog-pager{
float:left;
width:100%;
font-size:15px;
font-weight:500;
text-align:center;
clear:both;
box-sizing:border-box;
padding: 0;
margin: 20px 0;
}
#blog-pager .load-more{
display:inline-block;
height:34px;
background-color:#121212;
font-size:14px;
color:#ffffff;
font-weight:400;
line-height:34px;
box-sizing:border-box;
padding:0 30px;
margin:0;
border:1px solid rgba(0,0,0,.1);
border-bottom-width:2px;
border-radius:2px
}
#blog-pager #load-more-link{
color:#fff;
cursor:pointer
}
#blog-pager #load-more-link:hover{
background-color:#ffbd2f;
color:#fff
}
#blog-pager .load-more.no-more{
background-color:rgba(155,155,155,0.05);
color:#008c5f
}
#blog-pager .loading,#blog-pager .no-more{
display:none
}
#blog-pager .loading .post-loader{
position:relative;
height:100%;
overflow:hidden;
display:block;
margin:0
}
#blog-pager .loading .post-loader{
height:34px
}
#blog-pager .no-more.show{
display:inline-block
}
#blog-pager .loading .post-loader:after{
width:26px;
height:26px;
margin:-15px 0 0 -15px
}
#blog-pager .loading .post-loader:after{
content:'';
position:absolute;
top:50%;
left:50%;
width:28px;
height:28px;
margin:-16px 0 0 -16px;
border:2px solid #008c5f;
border-right-color:rgba(155,155,155,0.2);
border-radius:100%;
animation:spinner 1.1s infinite linear;
transform-origin:center
}
@-webkit-keyframes spinner {
0%{
-webkit-transform:rotate(0deg);
transform:rotate(0deg)
}
to{
-webkit-transform:rotate(1turn);
transform:rotate(1turn)
}
}
@keyframes spinner {
0%{
-webkit-transform:rotate(0deg);
transform:rotate(0deg)
}
to{
-webkit-transform:rotate(1turn);
transform:rotate(1turn)
}
}
.archive #blog-pager,.home .blog-pager .blog-pager-newer-link,.home .blog-pager .blog-pager-older-link{
display:none
}
.blog-pager-older-link, .blog-pager-newer-link {
padding: 5px 13px;
margin-right: 8px;
color: #fff;
background-color: #2b2b2b;
display: inline-block;
line-height: 20px;
-moz-border-radius: 2px;
-webkit-border-radius: 2px;
border-radius: 2px;
margin-top: 10px;
}
.blog-pager-older-link:hover, .blog-pager-newer-link:hover {
background: #ffbd2f;
text-decoration: none;
color: #fff;
}
#blog-pager .pages {
margin: 10px 0;
border: none;
}
/* ######## Share widget Css ######################### */
.item .post-footer {
padding: 0 10px;
}
.share-box {
position: relative;
padding: 10px 0;
}
.share-title {
border-bottom: 2px solid #777;
color: #010101;
display: inline-block;
padding-bottom: 7px;
font-size: 15px;
font-weight: 500;
position: relative;
top: 2px;
}
.share-art {
float: right;
padding: 0;
padding-top: 0;
font-size: 13px;
font-weight: 400;
text-transform: capitalize;
}
.share-art a {
color: #fff;
padding: 3px 8px;
margin-left: 4px;
border-radius: 2px;
display: inline-block;
margin-right: 0;
background: #010101;
}
.share-art a span {
    display: none;
}
.share-art a:hover{color:#fff}
.share-art .fac-art{background:#3b5998}
.share-art .fac-art:hover{background:rgba(49,77,145,0.7)}
.share-art .twi-art{background:#00acee}
.share-art .twi-art:hover{background:rgba(7,190,237,0.7)}
.share-art .goo-art{background:#db4a39}
.share-art .goo-art:hover{background:rgba(221,75,56,0.7)}
.share-art .pin-art{background:#CA2127}
.share-art .pin-art:hover{background:rgba(202,33,39,0.7)}
.share-art .lin-art{background:#0077B5}
.share-art .lin-art:hover{background:rgba(0,119,181,0.7)}
.share-art .wat-art{background:#25d266;display:none;}
.share-art .wat-art.whatsapp-desktop{background:#25d266;display:inline-block;}
.share-art .wat-art:hover{background:rgba(37, 210, 102, 0.73)}
@media only screen and (max-width: 768px) {
.share-art .wat-art{display:inline-block;}
.share-art .wat-art.whatsapp-desktop{display:none;}
}
/* ######## Related Post Css ######################### */
#related-wrap{
    overflow:hidden;
    margin:0 0 30px
}
 #related-wrap .related-tag{
    display:none
}
 .related-ready{
    float:left;
    width:100%
}
 .related-ready .loader{
    height:178px
}
 ul.related-posts{
    position:relative;
    overflow:hidden;
    margin:0 -10px;
    padding:0
}
 .related-posts .related-item{
    width:33.33333333%;
    position:relative;
    overflow:hidden;
    float:left;
    display:block;
    box-sizing:border-box;
    padding:0 10px;
    margin:0
}
 .related-posts .post-image-link{
    width:100%;
    height:130px;
    position:relative;
    overflow:hidden;
    display:block;
    border-radius:4px
}
 .related-posts .post-title{
    font-size:13px;
    font-weight:400;
    line-height:1.5em;
    display:block;
    margin:7px 0 5px
}
 .related-posts .post-title a{
    color:#303030;
    transition:color .17s
}
 .related-posts .related-item:hover .post-title a{
    color:#ffbd2f
}
/* ######## Comment Widget Css ######################### */
.comments {
clear: both;
margin: 0;
color: #48494d;
margin-top:10px;
box-sizing: border-box;
border-radius: 5px;
padding: 30px 30px 20px;
background: #FFF;
}
.post-feeds .feed-links {
display: none;
}
iframe.blogger-iframe-colorize,
iframe.blogger-comment-from-post {
height: 260px!important;
background: #fff;
}
.comment-form {
overflow:hidden;
}
.comments h3 {
line-height:normal;
text-transform:uppercase;
color:#333;
font-weight:bold;
margin:0 0 20px 0;
font-size:14px;
padding:0 0 0 0;
}
h4#comment-post-message {
display:none;
margin:0 0 0 0;
}
.comments h4{
color: #48494d;
border-bottom: 1px solid #efefef;
font-size: 16px;
padding: 12px 0;
margin: 0;
font-weight: 700;
letter-spacing: 1.5px;
text-transform: uppercase;
position: relative;
text-align: left;
}
.comments h4:after {
display: inline-block;
content: "\f075";
font-family: fontAwesome;
font-style: normal;
font-weight: normal;
font-size: 18px;
color: $maincolor;
top: 12px;
right: 15px;
padding: 0;
position: absolute;
}
.comments .comments-content{
font-size:13px;
margin-bottom:8px;
padding: 0;
}
.comments .comments-content .comment-thread ol{
list-style:none;
text-align:left;
margin:13px 0;
padding:0
}
.comments .comments-content .comment-thread ol li{
list-style:none;
}
.comments .avatar-image-container {
background:#fff;
border:1px solid #DDD;
overflow:hidden;
padding:0;
border-radius: 50%;
}
.comments .avatar-image-container img {
border-radius:50%;
}
.comments .comment-block{
position:relative;
background:#fff;
padding:15px;
margin-left:60px;
border: 1px solid #efefef;
}
.comments .comment-block:before {
content:"";
width:0px;
height:0px;
position:absolute;
right:100%;
top:14px;
border-width:10px;
border-style:solid;
border-color:transparent #DDD transparent transparent;
display:block;
}
.comments .comments-content .comment-replies{
margin:8px 0;
margin-left:60px
}
.comments .comments-content .comment-thread:empty{
display:none
}
.comments .comment-replybox-single {
background:#f0f0f0;
padding:0;
margin:8px 0;
margin-left:60px
}
.comments .comment-replybox-thread {
background:#f0f0f0;
margin:8px 0 0 0;
padding:0;
}
.comments .comments-content .comment{
margin-bottom:6px;
padding:0
}
.comments .comments-content .comment:first-child {
padding:0;
margin:0
}
.comments .comments-content .comment:last-child {
padding:0;
margin:0
}
.comments .comment-thread.inline-thread .comment, .comments .comment-thread.inline-thread .comment:last-child {
margin:0px 0px 5px 30%
}
.comment .comment-thread.inline-thread .comment:nth-child(6) {
margin:0px 0px 5px 25%;
}
.comment .comment-thread.inline-thread .comment:nth-child(5) {
margin:0px 0px 5px 20%;
}
.comment .comment-thread.inline-thread .comment:nth-child(4) {
margin:0px 0px 5px 15%;
}
.comment .comment-thread.inline-thread .comment:nth-child(3) {
margin:0px 0px 5px 10%;
}
.comment .comment-thread.inline-thread .comment:nth-child(2) {
margin:0px 0px 5px 5%;
}
.comment .comment-thread.inline-thread .comment:nth-child(1) {
margin:0px 0px 5px 0;
}
.comments .comments-content .comment-thread{
margin:0;
padding:0
}
.comments .comments-content .inline-thread{
background: #fff;
padding:15px;
box-sizing:border-box;
margin:0
}
.comments .comments-content .inline-thread .comment-block {
border-color: $maincolor;
}
.comments .comments-content .inline-thread .comment-block:before {
border-color: transparent $maincolor transparent transparent;
}
.comments .comments-content .user {
letter-spacing: 0.5px;
font-weight: 600;
}
.comments .comments-content .icon.blog-author {
display:inline;
}
.comments .comments-content .icon.blog-author:after {
content: "Author";
background:$maincolor;
color: #fff;
font-size: 11px;
padding: 2px 5px;
text-transform:Capitalize;
font-style:italic;
letter-spacing: 0.3px;
}
.comment-header {
text-transform:uppercase;
font-size:12px;
}
.comments .comments-content .datetime {
margin-left: 6px;
}
.comments .comments-content .datetime a {
color:#888;
}
.comments .comment .comment-actions a {
display:inline-block;
color:#333;
font-weight:bold;
font-size:10px;
line-height:15px;
margin:4px 8px 0 0;
}
.comments .continue a {
color:#333;
display:inline-block;
font-size:10px;
}
.comments .comment .comment-actions a:hover, .comments .continue a:hover{
text-decoration:underline;
}
/* ######## Instagram Widget Css ######################### */


/* ######## Footer Css ######################### */
.bot-bar-menu {
    background-color: #222;
    padding: 20px 0px;
overflow: hidden;
}
.bot-menu-wrap {
    margin: 0 auto;
position:relative;
text-align:center;
}
.bot-menu {
    position: absolute;
    left: 0;
    top: 8px;
}
.bot-menu h2 {
display:none;
}
.bot-menu ul {
overflow: hidden;
list-style: none;
padding: 0;
margin: 0;
}
.bot-menu ul li {
float: left;
display: inline-block;
list-style: none;
padding: 0;
}
.bot-menu ul li a {
padding: 10px 16px;
display: block;
border: none !important;
text-decoration: none;
line-height: inherit;
font-size: 14px;
font-weight: normal;
color: #eeeeee;
text-transform: uppercase;
}
.bot-menu ul li a:hover {
color:$maincolor;
}
.bottom-bar-social {
position: absolute;
    right: 0;
    top: 8px;
}
.bottom-bar-social li {
display: inline;
padding: 0;
float: left;
margin-right: 5px;
;
}
.bottom-bar-social .widget ul {
padding: 0;
}
.bottom-bar-social .LinkList ul {
text-align: center;
}
.bottom-bar-social #social a {
    display: block;
    font-size: 14px;
    color: #fff;
    padding: 10px 5px;
}
.bottom-bar-social #social a:before {
display: inline-block;
font: normal normal normal 22px/1 FontAwesome;
font-size: inherit;
font-style: normal;
font-weight: 400;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
.bottom-bar-social .bloglovin:before{content:"\f004"}
.bottom-bar-social .facebook:before{content:"\f09a"}
.bottom-bar-social .twitter:before{content:"\f099"}
.bottom-bar-social .gplus:before{content:"\f0d5"}
.bottom-bar-social .rss:before{content:"\f09e"}
.bottom-bar-social .youtube:before{content:"\f167"}
.bottom-bar-social .skype:before{content:"\f17e"}
.bottom-bar-social .stumbleupon:before{content:"\f1a4"}
.bottom-bar-social .tumblr:before{content:"\f173"}
.bottom-bar-social .vine:before{content:"\f1ca"}
.bottom-bar-social .stack-overflow:before{content:"\f16c"}
.bottom-bar-social .linkedin:before{content:"\f0e1"}
.bottom-bar-social .dribbble:before{content:"\f17d"}
.bottom-bar-social .soundcloud:before{content:"\f1be"}
.bottom-bar-social .behance:before{content:"\f1b4"}
.bottom-bar-social .digg:before{content:"\f1a6"}
.bottom-bar-social .instagram:before{content:"\f16d"}
.bottom-bar-social .pinterest:before{content:"\f0d2"}
.bottom-bar-social .delicious:before{content:"\f1a5"}
.bottom-bar-social .codepen:before{content:"\f1cb"}
.bottom-bar-social ul#social a:hover {
color: $maincolor;
opacity: 1;
}
.jugas_footer_copyright {
    display: inline-block;
    color: #fff;
height:52px;
line-height:52px;
}
.jugas_footer_copyright a {
color:$maincolor;
}
/* ######## Custom Widget Css ######################### */
.sidebar .FollowByEmail > h3.title,
.sidebar .FollowByEmail .title-wrap {
margin-bottom: 0
}
.FollowByEmail td {
width: 100%;
float: left;
box-sizing: border-box
}
.FollowByEmail .follow-by-email-inner .follow-by-email-submit {
margin-left: 0;
width: 100%;
border-radius: 0;
height: 30px;
font-size: 11px;
color: #fff;
background-color: $maincolor;
font-family: inherit;
text-transform: uppercase;
font-weight: 700;
letter-spacing: 1px
}
.FollowByEmail .follow-by-email-inner .follow-by-email-submit:hover {
opacity:0.8;
}
.FollowByEmail .follow-by-email-inner .follow-by-email-address {
padding-left: 10px;
height: 30px;
border: 1px solid #FFF;
margin-bottom: 5px;
box-sizing: border-box;
font-size: 11px;
font-family: inherit
}
.FollowByEmail .follow-by-email-inner .follow-by-email-address:focus {
border: 1px solid #FFF
}
.FollowByEmail .widget-content {
box-sizing: border-box;
padding: 10px
}
.FollowByEmail .widget-content:before {
content: "Enter your email address to subscribe to this blog and receive notifications of new posts by email.";
font-size: 14px;
color: #f2f2f2;
line-height: 1.4em;
margin-bottom: 5px;
display: block;
padding: 0 2px
}
.item #ads-home {
margin-top: 20px;
}
.cloud-label-widget-content {
display: inline-block;
text-align: left;
}
.cloud-label-widget-content .label-size {
display: inline-block;
float: left;
font-size: 16px;
line-height: normal;
margin: 0 5px 5px 0;
opacity: 1
}
.cloud-label-widget-content .label-size a {
background: #f8f8f8;
color: #878787;
float: left;
font-weight: 400;
line-height: 100%;
margin: 0;
padding: 7px 8px;
text-transform: capitalize;
transition: all .6s;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
}
.lowerbar .cloud-label-widget-content .label-size a {
background:#3B3B3B;
}
.cloud-label-widget-content .label-size a:hover,
.cloud-label-widget-content .label-size a:active {
background: $maincolor;
color: #fff;
}
.cloud-label-widget-content .label-size .label-count {
background: $maincolor;
color: #fff;
white-space: nowrap;
display: inline-block;
padding: 6px 8px;
margin-left: -3px;
line-height: normal;
border-radius: 0 2px 2px 0
}
.label-size-1,
.label-size-2 {
opacity: 100
}
.list-label-widget-content li {
display: block;
padding: 8px 0;
position: relative
}
.list-label-widget-content li a:before {
content: '\203a';
position: absolute;
left: 0px;
top: 8px;
font-size: 22px;
color: $maincolor
}
.lowerbar .list-label-widget-content li a {
color:#fff;
}
.list-label-widget-content li a {
color: #0a0a0a;
font-size: 16px;
padding-left: 20px;
font-weight: 400;
text-transform: capitalize;
}
.list-label-widget-content li span:last-child {
color: $maincolor;
font-size: 12px;
font-weight: 700;
position: absolute;
top: 9px;
right: 0
}
.PopularPosts .item-thumbnail {
margin: 0 15px 0 0 !important;
width: 90px;
height: 65px;
float: left;
overflow: hidden;
position: relative
}
.PopularPosts .item-thumbnail a {
position: relative;
display: block;
overflow: hidden;
line-height: 0
}
.PopularPosts ul li img {
width: 90px;
height: 65px;
object-fit: cover;
padding: 0;
transition: all .3s ease
}
.PopularPosts .widget-content ul li {
overflow: hidden;
padding: 10px 0;
border-top: 1px solid #f2f2f2
}
.sidebar .PopularPosts .widget-content ul li:first-child,
.sidebar .custom-widget li:first-child,
.tab-widget .PopularPosts .widget-content ul li:first-child,
.tab-widget .custom-widget li:first-child {
padding-top: 0;
border-top: 0
}
.sidebar .PopularPosts .widget-content ul li:last-child,
.sidebar .custom-widget li:last-child,
.tab-widget .PopularPosts .widget-content ul li:last-child,
.tab-widget .custom-widget li:last-child {
padding-bottom: 0
}
.PopularPosts ul li a {
color: #0a0a0a;
font-weight: 400;
font-size: 13px;
line-height: 1.4em;
transition: color .3s;
}
.PopularPosts ul li a:hover {
color: $maincolor
}
.PopularPosts .item-title {
margin: 0 0 4px;
padding: 0;
line-height: 0
}
.item-snippet {
display: none;
font-size: 0;
padding-top: 0
}
.PopularPosts ul {
counter-reset: popularcount;
margin: 0;
padding: 0;
}
.PopularPosts .item-thumbnail::before {
background: rgba(0, 0, 0, 0.3);
bottom: 0px;
content: "";
height: 100px;
width: 100px;
left: 0px;
right: 0px;
margin: 0px auto;
position: absolute;
z-index: 3;
}
.BlogArchive ul li {
margin-bottom: 7px !important;
padding-bottom: 7px;
}
.BlogArchive ul li:last-child {
margin-bottom: 0;
padding-bottom: 0;
border-bottom: none;
}
.BlogArchive ul li a {
color:#0a0a0a;
}
.BlogArchive ul li a:hover {
color:$maincolor;
}
.BlogArchive .zippy {
color:#e74c3c;
}
.BlogArchive .post-count-link {
font-weight:700;
}
.BlogArchive ul .posts a {
}
.BlogArchive select {
width: 100%;
padding: 10px;
border-color: #777;
}
/* ######## Responsive Css ######################### */
@media only screen and (max-width: 1200px) {
.featured-slider-wrap {
width:auto !important;
}
.sora-author-box-text {
    padding: 30px 70px 0 0;
}
.row {
width: 100%;
margin: 0 auto;
float: none;
padding-left: 10px !important;
padding-right: 10px !important;
box-sizing: border-box;
}
.index .post-grid-item, .archive .post-grid-item {
    width: 33.33%;
}
.index .post-grid-item:nth-child(3n), .archive .post-grid-item:nth-child(3n) {
    padding-right: 0;
}
.index .post-grid-item:nth-child(4n), .archive .post-grid-item:nth-child(4n) {
    padding-right: 15px;
}
}
@media only screen and (max-width: 1100px) {
.sora-author-box-text {
    padding: 15px 0 0 0;
}
.sora-author-box img {
    margin-right: 40px;
max-width: 400px;
}
div#sora_blogger_cntct_form .wrap-me {
    max-width: 500px;
    float: none;
    clear: both;
    margin: 0 auto 20px;
    width: 100%;
}
.map-me {
    max-width: 500px;
    float: none;
    clear: both;
    margin: 0 auto;
    width: 100%;
}
}
@media only screen and (max-width: 980px) {
#serv-tile {
    grid-template-columns: 1fr;
}
.item #main-wrapper, .statc_page #main-wrapper, .item #sidebar-wrapper, .statc_page #sidebar-wrapper {
float: none;
clear: both;
width: 100%;
margin: 0 auto;
}
#main-wrapper {
max-width: 100%;
}
#sidebar-wrapper {
padding-top: 20px;
}
#nav1, #nav {
display: none;
}
.slicknav_menu {
    display: block;
}
.item .tm-menu .slicknav_menu, .static_page .tm-menu .slicknav_menu, .error_page {
display:block;
}
.tm-menu, #menu {
height: auto;
}
.item .tm-menu, .static_page .tm-menu, .error_page .tm-menu {
float:none;
display:block;
}
}
@media screen and (max-width: 880px) {
.index .post-grid-item, .archive .post-grid-item {
    width: 32%;
}
.home #header-wrapper {
margin-bottom: 10px;
}
.item #content-wrapper {
padding: 0 0 30px;
}
.skills, .skill-details {
    width: 100%;
    float: none;
    padding: 20px;
    clear: both;
}
}
@media only screen and (max-width: 768px) {
.sora-author-box img {
    margin-right: 0;
    max-width: 100%;
    float: none;
    width: 100%;
    height: auto;
    clear: both;
}
.sora-author-box-text {
    padding: 10px;
    text-align: center;
}
.counter-box-item, .works-tiles {
    width: 50%;
}

#header h1 {
    font-size: 50px;
}
.index .post-grid-item:nth-child(3n), .archive .post-grid-item:nth-child(3n) {
   padding-right: 0;
}
.index .post-grid-item:nth-child(4n), .archive .post-grid-item:nth-child(4n) {
   padding-right: 0;
}
.index .post-grid-item, .archive .post-grid-item {
    width: 100%;
padding-right: 0;
}
.tm-menu {
    text-align: center;
}
.tysum .yard-tent-ty .tyard-title a {
    font-size: 19px;
}
.top-bar-social {
    float: none;
    width: 100%;
    clear: both;
    overflow: hidden;
}
.top-bar-social li {
    display: inline-block;
    float: none;
}
.flickity-prev-next-button {
display:none;
}
.bot-menu, .bottom-bar-social {
    float: none;
    width: 100%;
    clear: both;
    overflow: hidden;
    position: static;
}
.bot-menu ul {
text-align:center;
}
.bot-menu ul li {
    float: none;
}
.bottom-bar-social li {
    float: none;
    display: inline-block;
}
.related li {
    width: 31%;
}
.share-art span {
display: none;
}
.ops-404 {
width: 80%!important;
}
.title-404 {
font-size: 160px!important;
}
#header {
padding: 10px 0px 0;
}
}
@media only screen and (max-width: 767px) {
#header {
    padding: 0;
}
#header h1 {
    font-size: 30px;
}
.header-text h2.title {
    font-size: 30px;
}
.header-logo-desc .type {
    margin-top: 15px;
}
.header-logo-desc span, .header-logo-desc p {
    font-size: 22px;
    line-height:1;
}
.slide-in {
display:none;
}
}

@media only screen and (max-width: 520px) {
.ty-feat {
    grid-template-columns: 1fr;
}
}
@media only screen and (max-width: 480px) {
.slide-in {
display:block;
}
.related-posts .related-item {
    width: 100%;
}
.special-tiles, .works-tiles, .about-tiles, .counter-box-item {
    width: 100%;
}

#header h1 {
    font-size: 30px;
}
.header-text h2.title {
    font-size: 20px;
}
.header-logo-desc .type {
    margin-top: 15px;
}
.header-logo-desc span, .header-logo-desc p {
    font-size: 16px;
    line-height:1;
}
.index .post h2,.archive .post h2, .sora-slide .ty-bonos-entry a, #first-post .post h2 {
line-height: 34px;
font-size: 23px;
}
h1.post-title {
font-size: 22px;
margin-bottom: 10px;
}
#sidebar-wrapper {
max-width: 100%;
}
.share-title {
    display: none;
}
.share-art {
    float: none;
    text-align: center;
}
.related li {
width: 100%;
margin:0 auto;
}
.index .post-outer {
padding: 0 0 5x;
}
}
@media only screen and (max-width: 360px) {
.title-404 {
font-size: 150px!important;
}
.header-logo-desc p {
    font-size: 100%;
}
#header h1 {
    font-size: 250%;
}
}
@media only screen and (max-width: 300px) {
#sidebar-wrapper, .feat-slider-wrap {display:none}
.archive .post h2,.index .post h2, #first-post .post h2 {
line-height: 29px!important;
font-size: 15px!important;
}
article {
overflow: hidden;
}
#blog-pager {
padding: 0;
margin: 0;
}
.index .snippets,.archive .snippets {
display: none;
}
.share-art, .share-box .post-author {
float: none !important;
margin: 0 auto;
text-align: center;
clear: both;
}
.read-more-wrap, .post-labels {
float: none !important;
clear: both;
display: block;
text-align: center;
}
.ops-404 {
font-size: 20px!important;
}
.title-404 {
font-size: 120px!important;
}
h1.post-title {
font-size: 17px;
}
.share-box {
overflow: hidden;
}
.top-bar-social #social a {
width: 24px;
height: 24px;
line-height: 24px;
}
.second-meta .share-art a {
padding: 5px;
}
.comments .avatar-image-container {
display: none;
}
.comments .comment-block {
margin-left: 0 !important;
position: relative;
}
}

  ]]> 
  </b:skin>
- <b:if cond="data:blog.url == data:blog.homepageUrl">
  <style>/*! * animate.css -http://daneden.me/animate * Version - 3.5.2 * Licensed under the MIT license - http://opensource.org/licenses/MIT * * Copyright (c) 2017 Daniel Eden */ .animated{animation-duration:1s;animation-fill-mode:both}.animated.infinite{animation-iteration-count:infinite}.animated.hinge{animation-duration:2s}.animated.bounceIn,.animated.bounceOut,.animated.flipOutX,.animated.flipOutY{animation-duration:.75s}@keyframes bounce{0%,20%,53%,80%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1);transform:translateZ(0)}40%,43%{animation-timing-function:cubic-bezier(.755,.05,.855,.06);transform:translate3d(0,-30px,0)}70%{animation-timing-function:cubic-bezier(.755,.05,.855,.06);transform:translate3d(0,-15px,0)}90%{transform:translate3d(0,-4px,0)}}.bounce{animation-name:bounce;transform-origin:center bottom}@keyframes flash{0%,50%,to{opacity:1}25%,75%{opacity:0}}.flash{animation-name:flash}@keyframes pulse{0%{transform:scaleX(1)}50%{transform:scale3d(1.05,1.05,1.05)}to{transform:scaleX(1)}}.pulse{animation-name:pulse}@keyframes rubberBand{0%{transform:scaleX(1)}30%{transform:scale3d(1.25,.75,1)}40%{transform:scale3d(.75,1.25,1)}50%{transform:scale3d(1.15,.85,1)}65%{transform:scale3d(.95,1.05,1)}75%{transform:scale3d(1.05,.95,1)}to{transform:scaleX(1)}}.rubberBand{animation-name:rubberBand}@keyframes shake{0%,to{transform:translateZ(0)}10%,30%,50%,70%,90%{transform:translate3d(-10px,0,0)}20%,40%,60%,80%{transform:translate3d(10px,0,0)}}.shake{animation-name:shake}@keyframes headShake{0%{transform:translateX(0)}6.5%{transform:translateX(-6px) rotateY(-9deg)}18.5%{transform:translateX(5px) rotateY(7deg)}31.5%{transform:translateX(-3px) rotateY(-5deg)}43.5%{transform:translateX(2px) rotateY(3deg)}50%{transform:translateX(0)}}.headShake{animation-timing-function:ease-in-out;animation-name:headShake}@keyframes swing{20%{transform:rotate(15deg)}40%{transform:rotate(-10deg)}60%{transform:rotate(5deg)}80%{transform:rotate(-5deg)}to{transform:rotate(0deg)}}.swing{transform-origin:top center;animation-name:swing}@keyframes tada{0%{transform:scaleX(1)}10%,20%{transform:scale3d(.9,.9,.9) rotate(-3deg)}30%,50%,70%,90%{transform:scale3d(1.1,1.1,1.1) rotate(3deg)}40%,60%,80%{transform:scale3d(1.1,1.1,1.1) rotate(-3deg)}to{transform:scaleX(1)}}.tada{animation-name:tada}@keyframes wobble{0%{transform:none}15%{transform:translate3d(-25%,0,0) rotate(-5deg)}30%{transform:translate3d(20%,0,0) rotate(3deg)}45%{transform:translate3d(-15%,0,0) rotate(-3deg)}60%{transform:translate3d(10%,0,0) rotate(2deg)}75%{transform:translate3d(-5%,0,0) rotate(-1deg)}to{transform:none}}.wobble{animation-name:wobble}@keyframes jello{0%,11.1%,to{transform:none}22.2%{transform:skewX(-12.5deg) skewY(-12.5deg)}33.3%{transform:skewX(6.25deg) skewY(6.25deg)}44.4%{transform:skewX(-3.125deg) skewY(-3.125deg)}55.5%{transform:skewX(1.5625deg) skewY(1.5625deg)}66.6%{transform:skewX(-.78125deg) skewY(-.78125deg)}77.7%{transform:skewX(.390625deg) skewY(.390625deg)}88.8%{transform:skewX(-.1953125deg) skewY(-.1953125deg)}}.jello{animation-name:jello;transform-origin:center}@keyframes bounceIn{0%,20%,40%,60%,80%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:scale3d(.3,.3,.3)}20%{transform:scale3d(1.1,1.1,1.1)}40%{transform:scale3d(.9,.9,.9)}60%{opacity:1;transform:scale3d(1.03,1.03,1.03)}80%{transform:scale3d(.97,.97,.97)}to{opacity:1;transform:scaleX(1)}}.bounceIn{animation-name:bounceIn}@keyframes bounceInDown{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:translate3d(0,-3000px,0)}60%{opacity:1;transform:translate3d(0,25px,0)}75%{transform:translate3d(0,-10px,0)}90%{transform:translate3d(0,5px,0)}to{transform:none}}.bounceInDown{animation-name:bounceInDown}@keyframes bounceInLeft{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:translate3d(-3000px,0,0)}60%{opacity:1;transform:translate3d(25px,0,0)}75%{transform:translate3d(-10px,0,0)}90%{transform:translate3d(5px,0,0)}to{transform:none}}.bounceInLeft{animation-name:bounceInLeft}@keyframes bounceInRight{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:translate3d(3000px,0,0)}60%{opacity:1;transform:translate3d(-25px,0,0)}75%{transform:translate3d(10px,0,0)}90%{transform:translate3d(-5px,0,0)}to{transform:none}}.bounceInRight{animation-name:bounceInRight}@keyframes bounceInUp{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:translate3d(0,3000px,0)}60%{opacity:1;transform:translate3d(0,-20px,0)}75%{transform:translate3d(0,10px,0)}90%{transform:translate3d(0,-5px,0)}to{transform:translateZ(0)}}.bounceInUp{animation-name:bounceInUp}@keyframes bounceOut{20%{transform:scale3d(.9,.9,.9)}50%,55%{opacity:1;transform:scale3d(1.1,1.1,1.1)}to{opacity:0;transform:scale3d(.3,.3,.3)}}.bounceOut{animation-name:bounceOut}@keyframes bounceOutDown{20%{transform:translate3d(0,10px,0)}40%,45%{opacity:1;transform:translate3d(0,-20px,0)}to{opacity:0;transform:translate3d(0,2000px,0)}}.bounceOutDown{animation-name:bounceOutDown}@keyframes bounceOutLeft{20%{opacity:1;transform:translate3d(20px,0,0)}to{opacity:0;transform:translate3d(-2000px,0,0)}}.bounceOutLeft{animation-name:bounceOutLeft}@keyframes bounceOutRight{20%{opacity:1;transform:translate3d(-20px,0,0)}to{opacity:0;transform:translate3d(2000px,0,0)}}.bounceOutRight{animation-name:bounceOutRight}@keyframes bounceOutUp{20%{transform:translate3d(0,-10px,0)}40%,45%{opacity:1;transform:translate3d(0,20px,0)}to{opacity:0;transform:translate3d(0,-2000px,0)}}.bounceOutUp{animation-name:bounceOutUp}@keyframes fadeIn{0%{opacity:0}to{opacity:1}}.fadeIn{animation-name:fadeIn}@keyframes fadeInDown{0%{opacity:0;transform:translate3d(0,-100%,0)}to{opacity:1;transform:none}}.fadeInDown{animation-name:fadeInDown}@keyframes fadeInDownBig{0%{opacity:0;transform:translate3d(0,-2000px,0)}to{opacity:1;transform:none}}.fadeInDownBig{animation-name:fadeInDownBig}@keyframes fadeInLeft{0%{opacity:0;transform:translate3d(-100%,0,0)}to{opacity:1;transform:none}}.fadeInLeft{animation-name:fadeInLeft}@keyframes fadeInLeftBig{0%{opacity:0;transform:translate3d(-2000px,0,0)}to{opacity:1;transform:none}}.fadeInLeftBig{animation-name:fadeInLeftBig}@keyframes fadeInRight{0%{opacity:0;transform:translate3d(100%,0,0)}to{opacity:1;transform:none}}.fadeInRight{animation-name:fadeInRight}@keyframes fadeInRightBig{0%{opacity:0;transform:translate3d(2000px,0,0)}to{opacity:1;transform:none}}.fadeInRightBig{animation-name:fadeInRightBig}@keyframes fadeInUp{0%{opacity:0;transform:translate3d(0,100%,0)}to{opacity:1;transform:none}}.fadeInUp{animation-name:fadeInUp}@keyframes fadeInUpBig{0%{opacity:0;transform:translate3d(0,2000px,0)}to{opacity:1;transform:none}}.fadeInUpBig{animation-name:fadeInUpBig}@keyframes fadeOut{0%{opacity:1}to{opacity:0}}.fadeOut{animation-name:fadeOut}@keyframes fadeOutDown{0%{opacity:1}to{opacity:0;transform:translate3d(0,100%,0)}}.fadeOutDown{animation-name:fadeOutDown}@keyframes fadeOutDownBig{0%{opacity:1}to{opacity:0;transform:translate3d(0,2000px,0)}}.fadeOutDownBig{animation-name:fadeOutDownBig}@keyframes fadeOutLeft{0%{opacity:1}to{opacity:0;transform:translate3d(-100%,0,0)}}.fadeOutLeft{animation-name:fadeOutLeft}@keyframes fadeOutLeftBig{0%{opacity:1}to{opacity:0;transform:translate3d(-2000px,0,0)}}.fadeOutLeftBig{animation-name:fadeOutLeftBig}@keyframes fadeOutRight{0%{opacity:1}to{opacity:0;transform:translate3d(100%,0,0)}}.fadeOutRight{animation-name:fadeOutRight}@keyframes fadeOutRightBig{0%{opacity:1}to{opacity:0;transform:translate3d(2000px,0,0)}}.fadeOutRightBig{animation-name:fadeOutRightBig}@keyframes fadeOutUp{0%{opacity:1}to{opacity:0;transform:translate3d(0,-100%,0)}}.fadeOutUp{animation-name:fadeOutUp}@keyframes fadeOutUpBig{0%{opacity:1}to{opacity:0;transform:translate3d(0,-2000px,0)}}.fadeOutUpBig{animation-name:fadeOutUpBig}@keyframes flip{0%{transform:perspective(400px) rotateY(-1turn);animation-timing-function:ease-out}40%{transform:perspective(400px) translateZ(150px) rotateY(-190deg);animation-timing-function:ease-out}50%{transform:perspective(400px) translateZ(150px) rotateY(-170deg);animation-timing-function:ease-in}80%{transform:perspective(400px) scale3d(.95,.95,.95);animation-timing-function:ease-in}to{transform:perspective(400px);animation-timing-function:ease-in}}.animated.flip{-webkit-backface-visibility:visible;backface-visibility:visible;animation-name:flip}@keyframes flipInX{0%{transform:perspective(400px) rotateX(90deg);animation-timing-function:ease-in;opacity:0}40%{transform:perspective(400px) rotateX(-20deg);animation-timing-function:ease-in}60%{transform:perspective(400px) rotateX(10deg);opacity:1}80%{transform:perspective(400px) rotateX(-5deg)}to{transform:perspective(400px)}}.flipInX{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipInX}@keyframes flipInY{0%{transform:perspective(400px) rotateY(90deg);animation-timing-function:ease-in;opacity:0}40%{transform:perspective(400px) rotateY(-20deg);animation-timing-function:ease-in}60%{transform:perspective(400px) rotateY(10deg);opacity:1}80%{transform:perspective(400px) rotateY(-5deg)}to{transform:perspective(400px)}}.flipInY{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipInY}@keyframes flipOutX{0%{transform:perspective(400px)}30%{transform:perspective(400px) rotateX(-20deg);opacity:1}to{transform:perspective(400px) rotateX(90deg);opacity:0}}.flipOutX{animation-name:flipOutX;-webkit-backface-visibility:visible!important;backface-visibility:visible!important}@keyframes flipOutY{0%{transform:perspective(400px)}30%{transform:perspective(400px) rotateY(-15deg);opacity:1}to{transform:perspective(400px) rotateY(90deg);opacity:0}}.flipOutY{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipOutY}@keyframes lightSpeedIn{0%{transform:translate3d(100%,0,0) skewX(-30deg);opacity:0}60%{transform:skewX(20deg);opacity:1}80%{transform:skewX(-5deg);opacity:1}to{transform:none;opacity:1}}.lightSpeedIn{animation-name:lightSpeedIn;animation-timing-function:ease-out}@keyframes lightSpeedOut{0%{opacity:1}to{transform:translate3d(100%,0,0) skewX(30deg);opacity:0}}.lightSpeedOut{animation-name:lightSpeedOut;animation-timing-function:ease-in}@keyframes rotateIn{0%{transform-origin:center;transform:rotate(-200deg);opacity:0}to{transform-origin:center;transform:none;opacity:1}}.rotateIn{animation-name:rotateIn}@keyframes rotateInDownLeft{0%{transform-origin:left bottom;transform:rotate(-45deg);opacity:0}to{transform-origin:left bottom;transform:none;opacity:1}}.rotateInDownLeft{animation-name:rotateInDownLeft}@keyframes rotateInDownRight{0%{transform-origin:right bottom;transform:rotate(45deg);opacity:0}to{transform-origin:right bottom;transform:none;opacity:1}}.rotateInDownRight{animation-name:rotateInDownRight}@keyframes rotateInUpLeft{0%{transform-origin:left bottom;transform:rotate(45deg);opacity:0}to{transform-origin:left bottom;transform:none;opacity:1}}.rotateInUpLeft{animation-name:rotateInUpLeft}@keyframes rotateInUpRight{0%{transform-origin:right bottom;transform:rotate(-90deg);opacity:0}to{transform-origin:right bottom;transform:none;opacity:1}}.rotateInUpRight{animation-name:rotateInUpRight}@keyframes rotateOut{0%{transform-origin:center;opacity:1}to{transform-origin:center;transform:rotate(200deg);opacity:0}}.rotateOut{animation-name:rotateOut}@keyframes rotateOutDownLeft{0%{transform-origin:left bottom;opacity:1}to{transform-origin:left bottom;transform:rotate(45deg);opacity:0}}.rotateOutDownLeft{animation-name:rotateOutDownLeft}@keyframes rotateOutDownRight{0%{transform-origin:right bottom;opacity:1}to{transform-origin:right bottom;transform:rotate(-45deg);opacity:0}}.rotateOutDownRight{animation-name:rotateOutDownRight}@keyframes rotateOutUpLeft{0%{transform-origin:left bottom;opacity:1}to{transform-origin:left bottom;transform:rotate(-45deg);opacity:0}}.rotateOutUpLeft{animation-name:rotateOutUpLeft}@keyframes rotateOutUpRight{0%{transform-origin:right bottom;opacity:1}to{transform-origin:right bottom;transform:rotate(90deg);opacity:0}}.rotateOutUpRight{animation-name:rotateOutUpRight}@keyframes hinge{0%{transform-origin:top left;animation-timing-function:ease-in-out}20%,60%{transform:rotate(80deg);transform-origin:top left;animation-timing-function:ease-in-out}40%,80%{transform:rotate(60deg);transform-origin:top left;animation-timing-function:ease-in-out;opacity:1}to{transform:translate3d(0,700px,0);opacity:0}}.hinge{animation-name:hinge}@keyframes jackInTheBox{0%{opacity:0;transform:scale(.1) rotate(30deg);transform-origin:center bottom}50%{transform:rotate(-10deg)}70%{transform:rotate(3deg)}to{opacity:1;transform:scale(1)}}.jackInTheBox{animation-name:jackInTheBox}@keyframes rollIn{0%{opacity:0;transform:translate3d(-100%,0,0) rotate(-120deg)}to{opacity:1;transform:none}}.rollIn{animation-name:rollIn}@keyframes rollOut{0%{opacity:1}to{opacity:0;transform:translate3d(100%,0,0) rotate(120deg)}}.rollOut{animation-name:rollOut}@keyframes zoomIn{0%{opacity:0;transform:scale3d(.3,.3,.3)}50%{opacity:1}}.zoomIn{animation-name:zoomIn}@keyframes zoomInDown{0%{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,-1000px,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,60px,0);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInDown{animation-name:zoomInDown}@keyframes zoomInLeft{0%{opacity:0;transform:scale3d(.1,.1,.1) translate3d(-1000px,0,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(10px,0,0);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInLeft{animation-name:zoomInLeft}@keyframes zoomInRight{0%{opacity:0;transform:scale3d(.1,.1,.1) translate3d(1000px,0,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(-10px,0,0);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInRight{animation-name:zoomInRight}@keyframes zoomInUp{0%{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,1000px,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInUp{animation-name:zoomInUp}@keyframes zoomOut{0%{opacity:1}50%{opacity:0;transform:scale3d(.3,.3,.3)}to{opacity:0}}.zoomOut{animation-name:zoomOut}@keyframes zoomOutDown{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,2000px,0);transform-origin:center bottom;animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomOutDown{animation-name:zoomOutDown}@keyframes zoomOutLeft{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(42px,0,0)}to{opacity:0;transform:scale(.1) translate3d(-2000px,0,0);transform-origin:left center}}.zoomOutLeft{animation-name:zoomOutLeft}@keyframes zoomOutRight{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(-42px,0,0)}to{opacity:0;transform:scale(.1) translate3d(2000px,0,0);transform-origin:right center}}.zoomOutRight{animation-name:zoomOutRight}@keyframes zoomOutUp{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,60px,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,-2000px,0);transform-origin:center bottom;animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomOutUp{animation-name:zoomOutUp}@keyframes slideInDown{0%{transform:translate3d(0,-100%,0);visibility:visible}to{transform:translateZ(0)}}.slideInDown{animation-name:slideInDown}@keyframes slideInLeft{0%{transform:translate3d(-100%,0,0);visibility:visible}to{transform:translateZ(0)}}.slideInLeft{animation-name:slideInLeft}@keyframes slideInRight{0%{transform:translate3d(100%,0,0);visibility:visible}to{transform:translateZ(0)}}.slideInRight{animation-name:slideInRight}@keyframes slideInUp{0%{transform:translate3d(0,100%,0);visibility:visible}to{transform:translateZ(0)}}.slideInUp{animation-name:slideInUp}@keyframes slideOutDown{0%{transform:translateZ(0)}to{visibility:hidden;transform:translate3d(0,100%,0)}}.slideOutDown{animation-name:slideOutDown}@keyframes slideOutLeft{0%{transform:translateZ(0)}to{visibility:hidden;transform:translate3d(-100%,0,0)}}.slideOutLeft{animation-name:slideOutLeft}@keyframes slideOutRight{0%{transform:translateZ(0)}to{visibility:hidden;transform:translate3d(100%,0,0)}}.slideOutRight{animation-name:slideOutRight}@keyframes slideOutUp{0%{transform:translateZ(0)}to{visibility:hidden;transform:translate3d(0,-100%,0)}}.slideOutUp{animation-name:slideOutUp}</style> 
  </b:if>
  <style>.firstcharacter{ float:left; color:#27ae60; font-size:75px; line-height:60px; padding-right:8px; } .post-body p{ margin-bottom:25px } .post-body h1,.post-body h2,.post-body h3,.post-body h4,.post-body h5,.post-body h6{ color:#000; line-height:1.3em; margin:0 0 20px } .post-body img{ height:auto!important } blockquote{ position:relative; background-color:rgba(155,155,155,0.05); color:#000000; font-style:normal; padding:20px 25px; margin:0; border-radius:3px } blockquote:before{ position:absolute; left:10px; top:10px; content:'\f10e'; font-family:FontAwesome; font-size:33px; font-style:normal; font-weight:900; color:#000; line-height:1; opacity:.05; margin:0 } .post-body .responsive-video-wrap{ position:relative; width:100%; padding:0; padding-top:56% } .post-body .responsive-video-wrap iframe{ position:absolute; top:0; left:0; width:100%; height:100% } .post-body ul{ padding:0 0 0 15px; margin:10px 0 } .post-body li{ margin:5px 0; padding:0 } .post-body ul li,.post-body ol ul li{ list-style:none } .post-body ul li:before{ display:inline-block; content:'\2022'; margin:0 5px 0 0 } .post-body ol{ counter-reset:ify; padding:0 0 0 15px; margin:10px 0 } .post-body ol > li{ counter-increment:ify; list-style:none } .post-body ol > li:before{ display:inline-block; content:counters(ify,'.')'.'; margin:0 5px 0 0 } .post-body u{ text-decoration:underline } .post-body strike{ text-decoration:line-through } .post-body sup{ vertical-align:super } .post-body a{ } .post-body a:hover{ } .post-body a.button{ display:inline-block; height:34px; background-color:#2c3e50; font-size:14px; color:#ffffff; font-weight:400; line-height:34px; text-align:center; text-decoration:none; cursor:pointer; padding:0 20px; margin:0 6px 8px 0 } .post-body a.colored-button{ color:#fff } .post-body a.button:hover{ background-color:#f47500; color:#fff } .post-body a.colored-button:hover{ background-color:#f47500!important; color:#fff!important } .button:before{ float:left; font-family:FontAwesome; font-weight:900; display:inline-block; margin:0 8px 0 0 } .button.preview:before{ content:'\f06e' } .button.download:before{ content:'\f019' } .button.link:before{ content:'\f0c1' } .button.cart:before{ content:'\f07a' } .button.info:before{ content:'\f06a' } .button.share:before{ content:'\f1e0' } .button.contact:before{ content:'\f0e0'; font-weight:400 } .alert-message{ position:relative; display:block; padding:15px; border:1px solid rgba(155,155,155,0.1); border-radius:3px } .alert-message.alert-success{ background-color:rgba(34,245,121,0.03); border:1px solid rgba(34,245,121,0.5) } .alert-message.alert-info{ background-color:rgba(55,153,220,0.03); border:1px solid rgba(55,153,220,0.5) } .alert-message.alert-warning{ background-color:rgba(185,139,61,0.03); border:1px solid rgba(185,139,61,0.5) } .alert-message.alert-error{ background-color:rgba(231,76,60,0.03); border:1px solid rgba(231,76,60,0.5) } .alert-message:before{ font-family:FontAwesome; font-size:16px; font-weight:900; display:inline-block; margin:0 5px 0 0 } .alert-message.alert-success:before{ content:'\f058'; color:rgba(34,245,121,1) } .alert-message.alert-info:before{ content:'\f05a'; color:rgba(55,153,220,1) } .alert-message.alert-warning:before{ content:'\f06a'; color:rgba(185,139,61,1) } .alert-message.alert-error:before{ content:'\f057'; color:rgba(231,76,60,1) } .post-body table{ width:100%; overflow-x:auto; text-align:left; margin:0; border-collapse:collapse; border:1px solid #161619 } .post-body table td,.post-body table th{ padding:7px 15px; border:1px solid #161619 } .post-body table thead th{ color:#000; font-weight:700; text-align:left; vertical-align:bottom } table.tr-caption-container,table.tr-caption-container td,table.tr-caption-container th{ line-height:1; padding:0; border:0 } table.tr-caption-container td.tr-caption{ font-size:13px; color:#666666; padding:6px 0 0 } .tocify-wrap{ display:flex; width:100%; clear:both; margin:0 } .tocify-inner{ position:relative; max-width:100%; background-color:rgba(155,155,155,0.05); display:flex; flex-direction:column; overflow:hidden; font-size:14px; color:#000000; line-height:1.6em; border:1px solid rgba(155,155,155,0.1); border-radius:3px } a.tocify-title{ position:relative; height:38px; font-size:16px; color:#000000; font-weight:700; display:flex; align-items:center; justify-content:space-between; padding:0 15px; margin:0 } .tocify-title-text{ display:flex } .tocify-title-text:before{ content:'\f0cb'; font-family:FontAwesome; font-size:14px; font-weight:900; margin:0 6px 0 0 } .tocify-title:after{ content:'\f078'; font-family:FontAwesome; font-size:12px; font-weight:900; margin:0 0 0 25px } .tocify-title.is-expanded:after{ content:'\f077' } a.tocify-title:hover{ text-decoration:none } #tocify{ display:none; padding:0 15px 10px; margin:0 } #tocify ol{ padding:0 0 0 15px } .rtl #tocify ol{ padding:0 15px 0 0 } #tocify li{ font-size:14px; margin:8px 0 } #tocify li a{ color:#f47500 } #tocify li a:hover{ color:#f47500; text-decoration:underline } .post-body .contact-form{ display:table; } #contact{background-color:#fff;margin:30px 0 !important}#contact .contact-form-widget{max-width:100% !important}#contact .contact-form-name,#contact .contact-form-email,#contact .contact-form-email-message{background-color:#FFF;border:1px solid #eee!important;border-radius:3px;padding:10px;margin-bottom:10px !important;max-width:100% !important}#contact .contact-form-name{width:47.7%;height:50px}#contact .contact-form-email{width:49.7%;height:50px}#contact .contact-form-email-message{height:150px}#contact .contact-form-button-submit{max-width:100%;width:100%;z-index:0;margin:4px 0 0;padding:10px !important;text-align:center;cursor:pointer;background:#27ae60;border:0;height:auto;-webkit-border-radius:2px;-moz-border-radius:2px;-ms-border-radius:2px;-o-border-radius:2px;border-radius:2px;text-transform:uppercase;-webkit-transition:all .2s ease-out;-moz-transition:all .2s ease-out;-o-transition:all .2s ease-out;-ms-transition:all .2s ease-out;transition:all .2s ease-out;color:#FFF}#contact .contact-form-button-submit:hover{background:#2c3e50}#contact .contact-form-email:focus,#contact .contact-form-name:focus,#contact .contact-form-email-message:focus{box-shadow:none !important}.alert-message{position:relative;display:block;background-color:#FAFAFA;padding:20px;margin:20px 0;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;color:#2f3239;border:1px solid}.alert-message p{margin:0 !important;padding:0;line-height:22px;font-size:13px;color:#2f3239}.alert-message span{font-size:14px !important}.alert-message i{font-size:16px;line-height:20px}.alert-message.success{background-color:#f1f9f7;border-color:#e0f1e9;color:#1d9d74}.alert-message.success a,.alert-message.success span{color:#1d9d74}.alert-message.alert{background-color:#DAEFFF;border-color:#8ED2FF;color:#378FFF}.alert-message.alert a,.alert-message.alert span{color:#378FFF}.alert-message.warning{background-color:#fcf8e3;border-color:#faebcc;color:#8a6d3b}.alert-message.warning a,.alert-message.warning span{color:#8a6d3b}.alert-message.error{background-color:#FFD7D2;border-color:#FF9494;color:#F55D5D}.alert-message.error a,.alert-message.error span{color:#F55D5D}.fa-check-circle:before{content:"\f058"}.fa-info-circle:before{content:"\f05a"}.fa-exclamation-triangle:before{content:"\f071"}.fa-exclamation-circle:before{content:"\f06a"} .post-body pre,pre.code-box{ position:relative; display:block; background-color:rgba(155,155,155,0.05); font-family:Monospace; font-size:13px; color:#47474a; white-space:pre-wrap; line-height:1.4em; padding:15px; margin:0; border:1px solid rgba(155,155,155,0.1); border-radius:3px } .post-body .google-auto-placed{ margin:25px 0 } #hidden-widgets-wrap,.hidden-widgets{ display:none; visibility:hidden } @media only screen and (max-width: 680px) { .post-body table { display: block; } }</style> 
- <b:template-skin>
- <![CDATA[ /*------Layout (No Edit)----------*/
#layout #preloader, #layout .scrolling-menu {
    display: none;
}
#layout .sora-contact-widget {
display:none;
}
body#layout {
    width: 1000px;
}
body#layout #outer-wrapper {
padding: 0;
width: 800px
}
body#layout .section h4 {
color: #333!important;
text-align:center;
text-transform:uppercase;
letter-spacing:1.5px;
}

body#layout .tm-menu, body#layout #menu {
height: auto;
position:static;
}
body#layout #menu .widget {
display: block;
visibility:visible;
}
body#layout #header-wrapper {
    height: auto;
}
body#layout #content-wrapper {
margin: 0 auto;
padding:0;
}
body#layout #main-wrapper {
float: left;
width: 70%;
margin: 0;
padding: 0
}
body#layout #sidebar-wrapper {
float: right;
width: 30%;
margin: 0;
padding: 0;
    display: block;
    visibility: visible;
    height: auto;
    opacity: 1;
}
body#layout #sidebar-wrapper .section {
background-color: #f8e244 !important;
border: 1px solid #fff
}
body#layout #sidebar-wrapper .section h4 {
color:#fff;
}
body#layout #sidebar-wrapper .section .widget-content {
border-color: #5a7ea2!important
}
body#layout #sidebar-wrapper .section .draggable-widget .widget-wrap2 {
background-color: #0080ce !important
}
body#layout #main-wrapper #main {
margin-right: 4px;
background-color: #5a7ea2;
border-color: #34495e
}
body#layout #main-wrapper #main h4 {
color: #fff!important
}
body#layout .layout-widget-description {
display: none!important
}
body#layout #Blog1 .widget-content {
border-color: #34495e
}
body#layout .draggable-widget .widget-wrap2 {
background: #0080ce url(https://www.blogger.com/img/widgets/draggable.png) no-repeat 4px 50%;
}
body#layout .editlink {
background: #f9ffa3;
color: #000000 !important;
padding: 0 3px;
line-height: 18px;
border: 1px solid #f8e244;
border-radius: 3px;
text-transform: uppercase;
letter-spacing: 1px;
text-decoration: none !important;
}
body#layout .add_widget {
background: #fff;
}
body#layout .tm-menu .section {
background-color: #f6b3d2 !important;
border: 1px solid #ed67a7
}
body#layout .header {
background-color: #f2132d !important;
border: 1px solid #f53551
}
body#layout .feat-slider-wrap .section {
background-color: #a0d3db !important;
border: 1px solid #a2dbeb
}
body#layout .insta-wrap .section {
background-color: #a0d3db !important;
border: 1px solid #a2dbeb
}
body#layout .FollowByEmail .widget-content:before, body#layout .jugas_footer_copyright {
display:none;
}

body#layout .sora-special-box, body#layout .sora-works-box, body#layout .sora-about-box, body#layout .insta-wrap, body#layout  .Portfolio-title {display:none;}
/*------Layout (end)----------*/

  ]]> 
  </b:template-skin>
  <b:include data="blog" name="google-analytics" /> 
- <script type="text/javascript">
  // 
- <![CDATA[ var no_image = "http://3.bp.blogspot.com/-Yw8BIuvwoSQ/VsjkCIMoltI/AAAAAAAAC4c/s55PW6xEKn0/s1600-r/nth.png";
var month_format = [, "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
var more_text = "View More";
var comments_text = "<span>Post </span>Comment";
var pagenav_prev = "Previous";
var pagenav_next = "Next";
//
  ]]> 
  </script>
  </head>
- <body expr:class="data:blog.pageType">
- <!-- preloader start
  --> 
- <div id="preloader">
  <div id="loader" /> 
  </div>
- <!-- preloader end
  --> 
  <div id="outer-wrapper" class=" 
  <data:blog.pageType /> 
  <b:if cond="data:blog.url == data:blog.homepageUrl">home</b:if> 
  <b:if cond="data:blog.pageType == "static_page"">item</b:if> 
  <b:if cond="data:blog.pageType == "archive"">index</b:if> 
  "> 
- <div class="scroll-header" id="head-trigger">
- <div class="scroll-head-wrap row">
- <div class="scrollin-logo">
- <b:section class="header" id="header" maxwidgets="1" name="Logo & Title" showaddelement="no">
- <b:widget id="Header1" locked="true" title="Leafy (Header)" type="Header" version="1">
- <b:widget-settings>
  <b:widget-setting name="displayUrl">https://blogger.googleusercontent.com/img/a/AVvXsEirv2t3oLljwajxn6iLgy8XGMdrOl1uG07vnNGnaMJ5X-7ckpqeDvcvxQO_SwLiju7Rf7uH0P4PAS30NW0Lx95N2bGFMRWZWbhJT2SoxROnSiIx97C-FIcmLYYHyEIsqsDvVVmk3AHRDBMqmyMkiArn-nX-CVuXiJZ6uTisQIpgfkIHJQnmdg6YkNXF2A=s180</b:widget-setting> 
  <b:widget-setting name="displayHeight">56</b:widget-setting> 
  <b:widget-setting name="sectionWidth">600</b:widget-setting> 
  <b:widget-setting name="useImage">true</b:widget-setting> 
  <b:widget-setting name="shrinkToFit">false</b:widget-setting> 
  <b:widget-setting name="imagePlacement">REPLACE</b:widget-setting> 
  <b:widget-setting name="displayWidth">180</b:widget-setting> 
  </b:widget-settings>
- <b:includable id="main">
- <b:if cond="data:useImage">
- <b:if cond="data:imagePlacement == "BEHIND"">
- <!--       Show image as background to text. You can't really calculate the width
      reliably in JS because margins are not taken into account by any of
      clientWidth, offsetWidth or scrollWidth, so we don't force a minimum
      width if the user is using shrink to fit.
      This results in a margin-width's worth of pixels being cropped. If the
      user is not using shrink to fit then we expand the header.
      
  --> 
- <b:if cond="data:mobile">
- <div id="header-inner">
- <div class="titlewrapper" style="background: transparent">
- <h1 class="title" style="background: transparent; border-width: 0px">
  <b:include name="title" /> 
  </h1>
  </div>
  <b:include name="description" /> 
  </div>
  <b:else /> 
- <div expr:style=""background-image: url(\"" + data:sourceUrl + "\"); " + "background-position: " + data:backgroundPositionStyleStr + "; " + data:widthStyleStr + "min-height: " + data:height + "_height: " + data:height + "background-repeat: no-repeat; "" id="header-inner">
- <div class="titlewrapper" style="background: transparent">
- <h1 class="title" style="background: transparent; border-width: 0px">
  <b:include name="title" /> 
  </h1>
  </div>
  <b:include name="description" /> 
  </div>
  </b:if>
  <b:else /> 
- <!-- Show the image only
  --> 
- <div id="header-inner">
- <a expr:href="data:blog.homepageUrl" style="display: block">
- <h1 style="display:none">
  <data:blog.title /> 
  </h1>
  <img expr:alt="data:title" expr:height="data:height" expr:id="data:widget.instanceId + "_headerimg"" expr:src="data:sourceUrl" expr:width="data:width" style="display: block" /> 
  </a>
- <!-- Show the description
  --> 
- <b:if cond="data:imagePlacement == "BEFORE_DESCRIPTION"">
  <b:include name="description" /> 
  </b:if>
  </div>
  </b:if>
  <b:else /> 
- <!-- No header image 
  --> 
- <div id="header-inner">
- <div class="titlewrapper">
- <h1 class="title">
  <b:include name="title" /> 
  </h1>
  </div>
  <b:include name="description" /> 
  </div>
  </b:if>
  </b:includable>
- <b:includable id="description">
- <div class="descriptionwrapper">
- <p class="description">
- <span>
  <data:description /> 
  </span>
  </p>
  </div>
  </b:includable>
- <b:includable id="title">
- <b:if cond="data:blog.url == data:blog.homepageUrl">
  <data:title /> 
  <b:else /> 
- <a expr:href="data:blog.homepageUrl">
  <data:title /> 
  </a>
  </b:if>
  </b:includable>
  </b:widget>
  </b:section>
  </div>
- <b:if cond="data:blog.pageType != "static_page"">
- <b:if cond="data:blog.pageType!= "item"">
- <b:if cond="data:blog.pageType != "error_page"">
- <div class="scrolling-menu">
- <ul id="nav">
- <li class="current">
  <a href="#header-wrapper">Home</a> 
  </li>
- <li>
  <a href="#section-2">Services</a> 
  </li>
- <li>
  <a href="#section-3">Works</a> 
  </li>
- <li>
  <a href="#main-wrapper">Portfolio</a> 
  </li>
- <li>
  <a href="#section-5">Testimonial</a> 
  </li>
- <li>
  <a href="#section-6">About</a> 
  </li>
- <li>
  <a href="#section-7">Contact</a> 
  </li>
  </ul>
  <div class="menu-mobile2" /> 
  </div>
  </b:if>
  </b:if>
  </b:if>
- <div class="tm-menu">
- <div class="menu-wrap">
- <b:section class="menu" id="menu" maxwidgets="1" name="Main Menu" showaddelement="yes">
- <b:widget id="LinkList210" locked="true" title="Menu" type="LinkList" version="1">
- <b:widget-settings>
  <b:widget-setting name="text-10">_Video Doc</b:widget-setting> 
  <b:widget-setting name="sorting">NONE</b:widget-setting> 
  <b:widget-setting name="link-1">#</b:widget-setting> 
  <b:widget-setting name="link-2">#</b:widget-setting> 
  <b:widget-setting name="link-0">#</b:widget-setting> 
  <b:widget-setting name="link-11">http://www.soratemplates.com/2022/06/leafy-blogger-templates.html</b:widget-setting> 
  <b:widget-setting name="link-10">https://youtu.be/1R1Yw1-6soE</b:widget-setting> 
  <b:widget-setting name="text-9">_Web Doc</b:widget-setting> 
  <b:widget-setting name="link-9">https://www.sorabloggingtips.com/2022/06/how-to-setup-leafy-blogger-template.html</b:widget-setting> 
  <b:widget-setting name="text-8">Documentation</b:widget-setting> 
  <b:widget-setting name="link-7">https://leafy-soratemplates.blogspot.com/soratemplates</b:widget-setting> 
  <b:widget-setting name="link-8">#</b:widget-setting> 
  <b:widget-setting name="link-5">https://leafy-soratemplates.blogspot.com/p/shortcodes.html</b:widget-setting> 
  <b:widget-setting name="link-6">http://www.sorabloggingtips.com/2017/01/how-to-add-sitemap-widget-in-blogspot-blogs.html</b:widget-setting> 
  <b:widget-setting name="link-3">#</b:widget-setting> 
  <b:widget-setting name="link-4">#</b:widget-setting> 
  <b:widget-setting name="text-1">_Multi DropDown</b:widget-setting> 
  <b:widget-setting name="text-0">Features</b:widget-setting> 
  <b:widget-setting name="text-3">__Dropdown 2</b:widget-setting> 
  <b:widget-setting name="text-2">__Dropdown 1</b:widget-setting> 
  <b:widget-setting name="text-5">_ShortCodes</b:widget-setting> 
  <b:widget-setting name="text-4">__Dropdown 3</b:widget-setting> 
  <b:widget-setting name="text-7">_Error Page</b:widget-setting> 
  <b:widget-setting name="text-6">_Sitemap</b:widget-setting> 
  <b:widget-setting name="text-11">Download This Template</b:widget-setting> 
  </b:widget-settings>
- <b:includable id="main">
- <div class="widget-content">
- <ul itemscope="" itemtype="http://schema.org/SiteNavigationElement">
- <li>
  <a expr:href="data:blog.homepageUrl">Home</a> 
  </li>
- <b:loop values="data:links" var="link">
- <li itemprop="name">
- <a expr:href="data:link.target" itemprop="url">
  <data:link.name /> 
  </a>
  </li>
  </b:loop>
  </ul>
  </div>
  </b:includable>
  </b:widget>
  </b:section>
  <div class="menu-mobile" /> 
  </div>
  </div>
  </div>
  </div>
  <div style="clear: both;" /> 
- <b:if cond="data:blog.pageType != "static_page"">
- <b:if cond="data:blog.pageType!= "item"">
- <b:if cond="data:blog.pageType != "error_page"">
- <div id="header-wrapper">
- <div class="fenix-head">
- <div class="fenix-sub-head row">
- <div class="header-text header-logo-desc">
- <b:section class="logo-text logo-desc" id="Header Title" maxwidgets="1" name="Header Title Widget & Logo Description Widget" showaddelement="no">
- <b:widget id="HTML30" locked="false" title="Welcome To Leafy" type="HTML" version="1">
- <b:widget-settings>
  <b:widget-setting name="content"><div class='type'> <span>I Am</span><p></p> </div> <script language='javascript' type='text/javascript'>//<![CDATA[ $(function() { "use strict"; $(".header-logo-desc p").typed({ strings: ["John Doe", "a Developer" , " a Designer"], //Headlines(Change It) loop: true, startDelay: 1e3, backDelay: 2e3 }); }); //]]></script></b:widget-setting> 
  </b:widget-settings>
- <b:includable id="main">
- <!--  only display title if it's non-empty 
  --> 
- <b:if cond="data:title != """>
- <h2 class="title">
  <data:title /> 
  </h2>
  </b:if>
- <div class="widget-content">
  <data:content /> 
  </div>
  </b:includable>
  </b:widget>
  </b:section>
  </div>
  <div style="clear: both;" /> 
- <div class="social-head">
- <b:section class="top-bar-social blue" id="header social widget" maxwidgets="1" name="Top Social Widget" showaddelement="no">
- <b:widget id="LinkList230" locked="true" title="Social Media Icons" type="LinkList" version="1">
- <b:widget-settings>
  <b:widget-setting name="link-3">#</b:widget-setting> 
  <b:widget-setting name="sorting">NONE</b:widget-setting> 
  <b:widget-setting name="link-4">#</b:widget-setting> 
  <b:widget-setting name="text-1">twitter</b:widget-setting> 
  <b:widget-setting name="link-1">https://twitter.com/LiveBlogger1</b:widget-setting> 
  <b:widget-setting name="text-0">facebook</b:widget-setting> 
  <b:widget-setting name="link-2">https://www.instagram.com/livebloggerofficial/</b:widget-setting> 
  <b:widget-setting name="text-3">pinterest</b:widget-setting> 
  <b:widget-setting name="link-0">https://www.facebook.com/soratemplates/</b:widget-setting> 
  <b:widget-setting name="text-2">instagram</b:widget-setting> 
  <b:widget-setting name="text-4">linkedin</b:widget-setting> 
  </b:widget-settings>
- <b:includable id="main">
- <div class="widget-content">
- <ul id="social">
- <b:loop values="data:links" var="link">
- <li>
  <a expr:class="data:link.name" expr:href="data:link.target" expr:title="data:link.name" /> 
  </li>
  </b:loop>
  </ul>
  </div>
  </b:includable>
  </b:widget>
  </b:section>
  </div>
- <div class="slide-in wow bounceInUp" data-wow-delay="1s" data-wow-duration="1s">
  <a class="pointer" href="#section-2" /> 
  </div>
  </div>
  </div>
  </div>
  <div style="clear: both;" /> 
  </b:if>
  </b:if>
  </b:if>
- <b:if cond="data:blog.pageType != "static_page"">
- <b:if cond="data:blog.pageType!= "item"">
- <b:if cond="data:blog.pageType != "error_page"">
- <div class="sora-special-box wow slideInUp" id="section-2">
- <div class="sora-works-box wow slideInUp" id="section-3">
- <div class="works-wrap row">
- <div class="works-title">
  <h4>Our Working Process</h4> 
  <span>Our process on creating awesome projects.</span> 
  </div>
  <div style="clear: both;" /> 
- <!--  First 
  --> 
- <div class="works-tiles wow fadeInUpBig" data-wow-delay="0s">
- <span class="works-icons">
- <li data-percent="25">
- <span class="text">
  <i aria-hidden="true" class="fa fa-lightbulb-o" /> 
  </span>
  </li>
  </span>
  <h6 class="works-heading">1. Concept</h6> 
  <p class="works-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
  </div>
- <!--  First One Ends 
  --> 
- <!--  Second 
  --> 
- <div class="works-tiles wow fadeInUpBig" data-wow-delay="0.2s">
- <span class="works-icons">
- <li data-percent="50">
- <span class="text">
  <i aria-hidden="true" class="fa fa-clipboard" /> 
  </span>
  </li>
  </span>
  <h6 class="works-heading">2. Prepare</h6> 
  <p class="works-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
  </div>
- <!--  Second Ends 
  --> 
- <!--  Third 
  --> 
- <div class="works-tiles wow fadeInUpBig" data-wow-delay="0.4s">
- <span class="works-icons">
- <li data-percent="75">
- <span class="text">
  <i aria-hidden="true" class="fa fa-paint-brush" /> 
  </span>
  </li>
  </span>
  <h6 class="works-heading">3. Retouch</h6> 
  <p class="works-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
  </div>
- <!--  Third Ends 
  --> 
- <!--  Fourth 
  --> 
- <div class="works-tiles wow fadeInUpBig" data-wow-delay="0.6s">
- <span class="works-icons">
- <li data-percent="100">
- <span class="text">
  <i aria-hidden="true" class="fa fa-gift" /> 
  </span>
  </li>
  </span>
  <h6 class="works-heading">4. Finalize</h6> 
  <p class="works-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
  </div>
- <!--  Fourth Ends 
  --> 
  </div>
  </div>
  <div style="clear:both;" /> 
  </div>
- <div class="Portfolio-title">
  <h4>Our Portfolio.</h4> 
  <span>A creative agency that believes in the power of creative ideas and great design.</span> 
  </div>
  <div style="clear:both;" /> 
  </b:if>
  </b:if>
  </b:if>
- <div class="row" id="content-wrapper">
- <div id="main-wrapper">
- <b:section class="main" id="main" showaddelement="yes">
- <b:widget id="Blog1" locked="true" title="Blog Posts" type="Blog" version="1">
- <b:widget-settings>
  <b:widget-setting name="showDateHeader">true</b:widget-setting> 
  <b:widget-setting name="commentLabel">Comments</b:widget-setting> 
  <b:widget-setting name="style.textcolor">#ffffff</b:widget-setting> 
  <b:widget-setting name="showShareButtons">true</b:widget-setting> 
  <b:widget-setting name="authorLabel">By</b:widget-setting> 
  <b:widget-setting name="showCommentLink">true</b:widget-setting> 
  <b:widget-setting name="style.urlcolor">#ffffff</b:widget-setting> 
  <b:widget-setting name="showAuthor">false</b:widget-setting> 
  <b:widget-setting name="style.linkcolor">#ffffff</b:widget-setting> 
  <b:widget-setting name="style.unittype">TextAndImage</b:widget-setting> 
  <b:widget-setting name="style.bgcolor">#ffffff</b:widget-setting> 
  <b:widget-setting name="reactionsLabel" /> 
  <b:widget-setting name="showAuthorProfile">false</b:widget-setting> 
  <b:widget-setting name="style.layout">1x1</b:widget-setting> 
  <b:widget-setting name="showLabels">true</b:widget-setting> 
  <b:widget-setting name="showLocation">false</b:widget-setting> 
  <b:widget-setting name="postLabelsLabel">Tags</b:widget-setting> 
  <b:widget-setting name="showTimestamp">true</b:widget-setting> 
  <b:widget-setting name="postsPerAd">3</b:widget-setting> 
  <b:widget-setting name="showBacklinks">false</b:widget-setting> 
  <b:widget-setting name="style.bordercolor">#ffffff</b:widget-setting> 
  <b:widget-setting name="showInlineAds">true</b:widget-setting> 
  <b:widget-setting name="showReactions">false</b:widget-setting> 
  </b:widget-settings>
- <b:includable id="main" var="top">
- <b:if cond="!data:mobile">
- <!--  posts 
  --> 
- <div class="blog-posts hfeed">
  <b:include data="top" name="status-message" /> 
- <div class="post-grid wow fadeInUp" style="visibility: visible;">
- <b:loop values="data:posts" var="post">
- <div class="post-grid-item wow flipInX" style="visibility: visible;">
  <b:include data="post" name="post" /> 
  <b:include cond="data:blog.pageType in {"static_page","item"}" data="post" name="comment_picker" /> 
  </div>
  </b:loop>
  </div>
  </div>
- <!--  navigation 
  --> 
  <b:include name="nextprev" /> 
- <!--  feed links 
  --> 
  <b:include name="feedLinks" /> 
  <b:else /> 
  <b:include name="mobile-main" /> 
  </b:if>
- <b:if cond="data:top.showPlusOne">
  <data:top.googlePlusBootstrap /> 
  </b:if>
  </b:includable>
- <b:includable id="backlinkDeleteIcon" var="backlink">
- <span expr:class=""item-control " + data:backlink.adminClass">
- <a expr:href="data:backlink.deleteUrl" expr:title="data:top.deleteBacklinkMsg">
  <img src="https://resources.blogblog.com/img/icon_delete13.gif" /> 
  </a>
  </span>
  </b:includable>
- <b:includable id="backlinks" var="post">
  <a name="links" /> 
- <h4>
  <data:post.backlinksLabel /> 
  </h4>
- <b:if cond="data:post.numBacklinks != 0">
- <dl class="comments-block" id="comments-block">
- <b:loop values="data:post.backlinks" var="backlink">
- <div class="collapsed-backlink backlink-control">
- <dt class="comment-title">
  <span class="backlink-toggle-zippy"> </span> 
- <a expr:href="data:backlink.url" rel="nofollow">
  <data:backlink.title /> 
  </a>
  <b:include data="backlink" name="backlinkDeleteIcon" /> 
  </dt>
- <dd class="comment-body collapseable">
  <data:backlink.snippet /> 
  </dd>
- <dd class="comment-footer collapseable">
- <span class="comment-author">
  <data:post.authorLabel /> 
  <data:backlink.author /> 
  </span>
- <span class="comment-timestamp">
  <data:post.timestampLabel /> 
  <data:backlink.timestamp /> 
  </span>
  </dd>
  </div>
  </b:loop>
  </dl>
  </b:if>
- <p class="comment-footer">
- <a class="comment-link" expr:href="data:post.createLinkUrl" expr:id="data:widget.instanceId + "_backlinks-create-link"" target="_blank">
  <data:post.createLinkLabel /> 
  </a>
  </p>
  </b:includable>
- <b:includable id="comment-form" var="post">
- <div class="comment-form">
  <a name="comment-form" /> 
- <b:if cond="data:mobile">
- <h4 id="comment-post-message">
- <a expr:id="data:widget.instanceId + "_comment-editor-toggle-link"" href="javascript:void(0)">
  <data:postCommentMsg /> 
  </a>
  </h4>
- <p>
  <data:blogCommentMessage /> 
  </p>
  <data:blogTeamBlogMessage /> 
  <a expr:href="data:post.commentFormIframeSrc" id="comment-editor-src" /> 
  <iframe allowtransparency="true" class="blogger-iframe-colorize blogger-comment-from-post" expr:height="data:cmtIframeInitialHeight" frameborder="0" id="comment-editor" name="comment-editor" src="" style="display: none" width="100%" /> 
  <b:else /> 
- <h4 id="comment-post-message">
  <data:postCommentMsg /> 
  </h4>
- <p>
  <data:blogCommentMessage /> 
  </p>
  <data:blogTeamBlogMessage /> 
  <a expr:href="data:post.commentFormIframeSrc" id="comment-editor-src" /> 
  <iframe allowtransparency="true" class="blogger-iframe-colorize blogger-comment-from-post" expr:height="data:cmtIframeInitialHeight" frameborder="0" id="comment-editor" name="comment-editor" src="" width="100%" /> 
  </b:if>
  <data:post.cmtfpIframe /> 
- <script type="text/javascript">
  BLOG_CMT_createIframe(' 
  <data:post.appRpcRelayPath /> 
  '); 
  </script>
  </div>
  </b:includable>
- <b:includable id="commentDeleteIcon" var="comment">
- <span expr:class=""item-control " + data:comment.adminClass">
- <b:if cond="data:showCmtPopup">
- <div class="goog-toggle-button">
  <div class="goog-inline-block comment-action-icon" /> 
  </div>
  <b:else /> 
- <a class="comment-delete" expr:href="data:comment.deleteUrl" expr:title="data:top.deleteCommentMsg">
  <img src="https://resources.blogblog.com/img/icon_delete13.gif" /> 
  </a>
  </b:if>
  </span>
  </b:includable>
- <b:includable id="comment_count_picker" var="post">
- <b:if cond="data:post.commentSource == 1">
  <span class="cmt_count_iframe_holder" expr:data-count="data:post.numComments" expr:data-onclick="data:post.addCommentOnclick" expr:data-post-url="data:post.url" expr:data-url="data:post.url.canonical.http" /> 
  <b:else /> 
- <a class="comment-link" expr:href="data:post.addCommentUrl" expr:onclick="data:post.addCommentOnclick">
  <data:post.commentLabelFull /> 
  : 
  </a>
  </b:if>
  </b:includable>
- <b:includable id="comment_picker" var="post">
- <b:if cond="data:post.commentSource == 1">
  <b:include data="post" name="iframe_comments" /> 
  <b:elseif cond="data:post.showThreadedComments" /> 
  <b:include data="post" name="threaded_comments" /> 
  <b:else /> 
  <b:include data="post" name="comments" /> 
  </b:if>
  </b:includable>
- <b:includable id="comments" var="post">
- <div class="comments" id="comments">
  <a name="comments" /> 
- <b:if cond="data:post.allowComments">
- <h4>
  <data:post.commentLabelFull /> 
  : 
  </h4>
- <b:if cond="data:post.commentPagingRequired">
- <span class="paging-control-container">
- <b:if cond="data:post.hasOlderLinks">
- <a expr:class="data:post.oldLinkClass" expr:href="data:post.oldestLinkUrl">
  <data:post.oldestLinkText /> 
  </a>
    
- <a expr:class="data:post.oldLinkClass" expr:href="data:post.olderLinkUrl">
  <data:post.olderLinkText /> 
  </a>
    
  </b:if>
  <data:post.commentRangeText /> 
- <b:if cond="data:post.hasNewerLinks">
    
- <a expr:class="data:post.newLinkClass" expr:href="data:post.newerLinkUrl">
  <data:post.newerLinkText /> 
  </a>
    
- <a expr:class="data:post.newLinkClass" expr:href="data:post.newestLinkUrl">
  <data:post.newestLinkText /> 
  </a>
  </b:if>
  </span>
  </b:if>
- <div expr:id="data:widget.instanceId + "_comments-block-wrapper"">
- <dl expr:class="data:post.avatarIndentClass" id="comments-block">
- <b:loop values="data:post.comments" var="comment">
- <dt expr:class=""comment-author " + data:comment.authorClass" expr:id="data:comment.anchorName">
- <b:if cond="data:comment.favicon">
  <img expr:src="data:comment.favicon" height="16px" style="margin-bottom:-2px;" width="16px" /> 
  </b:if>
  <a expr:name="data:comment.anchorName" /> 
- <b:if cond="data:blog.enabledCommentProfileImages">
  <data:comment.authorAvatarImage /> 
  </b:if>
- <b:if cond="data:comment.authorUrl">
- <a expr:href="data:comment.authorUrl" rel="nofollow">
  <data:comment.author /> 
  </a>
  <b:else /> 
  <data:comment.author /> 
  </b:if>
  <data:commentPostedByMsg /> 
  </dt>
- <dd class="comment-body" expr:id="data:widget.instanceId + data:comment.cmtBodyIdPostfix">
- <b:if cond="data:comment.isDeleted">
- <span class="deleted-comment">
  <data:comment.body /> 
  </span>
  <b:else /> 
- <p>
  <data:comment.body /> 
  </p>
  </b:if>
  </dd>
- <dd class="comment-footer">
- <span class="comment-timestamp">
- <a expr:href="data:comment.url" title="comment permalink">
  <data:comment.timestamp /> 
  </a>
  <b:include data="comment" name="commentDeleteIcon" /> 
  </span>
  </dd>
  </b:loop>
  </dl>
  </div>
- <b:if cond="data:post.commentPagingRequired">
- <span class="paging-control-container">
- <a expr:class="data:post.oldLinkClass" expr:href="data:post.oldestLinkUrl">
  <data:post.oldestLinkText /> 
  </a>
- <a expr:class="data:post.oldLinkClass" expr:href="data:post.olderLinkUrl">
  <data:post.olderLinkText /> 
  </a>
    
  <data:post.commentRangeText /> 
    
- <a expr:class="data:post.newLinkClass" expr:href="data:post.newerLinkUrl">
  <data:post.newerLinkText /> 
  </a>
- <a expr:class="data:post.newLinkClass" expr:href="data:post.newestLinkUrl">
  <data:post.newestLinkText /> 
  </a>
  </span>
  </b:if>
- <p class="comment-footer">
- <b:if cond="data:post.embedCommentForm">
- <b:if cond="data:post.allowNewComments">
  <b:include data="post" name="comment-form" /> 
  <b:else /> 
  <data:post.noNewCommentsText /> 
  </b:if>
  <b:elseif cond="data:post.allowComments" /> 
- <a expr:href="data:post.addCommentUrl" expr:onclick="data:post.addCommentOnclick">
  <data:postCommentMsg /> 
  </a>
  </b:if>
  </p>
  </b:if>
- <b:if cond="data:showCmtPopup">
- <div id="comment-popup">
  <iframe allowtransparency="true" frameborder="0" id="comment-actions" name="comment-actions" scrolling="no" /> 
  </div>
  </b:if>
- <div id="backlinks-container">
- <div expr:id="data:widget.instanceId + "_backlinks-container"">
  <b:include cond="data:post.showBacklinks" data="post" name="backlinks" /> 
  </div>
  </div>
  </div>
  </b:includable>
- <b:includable id="feedLinks">
- <b:if cond="data:blog.pageType != "item"">
- <!--  Blog feed links 
  --> 
- <b:if cond="data:feedLinks">
  <div class="blog-feeds" /> 
  </b:if>
  <b:else /> 
- <!-- Post feed links 
  --> 
- <div class="post-feeds">
- <b:loop values="data:posts" var="post">
  <b:include cond="data:post.allowComments and data:post.feedLinks" data="post.feedLinks" name="feedLinksBody" /> 
  </b:loop>
  </div>
  </b:if>
  </b:includable>
- <b:includable id="feedLinksBody" var="links">
- <div class="feed-links">
  <data:feedLinksMsg /> 
- <b:loop values="data:links" var="f">
- <a class="feed-link" expr:href="data:f.url" expr:type="data:f.mimeType" target="_blank">
  <data:f.name /> 
  ( 
  <data:f.feedType /> 
  ) 
  </a>
  </b:loop>
  </div>
  </b:includable>
- <b:includable id="iframe_comments" var="post">
- <b:if cond="data:post.allowIframeComments">
  <script expr:src="data:post.iframeCommentSrc" type="text/javascript" /> 
  <div class="cmt_iframe_holder" expr:data-href="data:post.url.canonical" expr:data-viewtype="data:post.viewType" /> 
- <b:if cond="data:post.embedCommentForm == "false"">
- <a expr:href="data:post.addCommentUrl" expr:onclick="data:post.addCommentOnclick">
  <data:postCommentMsg /> 
  </a>
  </b:if>
  </b:if>
  </b:includable>
- <b:includable id="mobile-index-post" var="post">
- <div class="mobile-date-outer date-outer">
- <b:if cond="data:post.dateHeader">
- <div class="date-header">
- <span>
  <data:post.dateHeader /> 
  </span>
  </div>
  </b:if>
- <div class="mobile-post-outer">
- <a expr:href="data:post.url">
- <h3 class="mobile-index-title entry-title" itemprop="name">
  <data:post.title /> 
  </h3>
  <div class="mobile-index-arrow">&rsaquo;</div> 
- <div class="mobile-index-contents">
- <b:if cond="data:post.thumbnailUrl">
- <div class="mobile-index-thumbnail">
- <div class="Image">
  <img expr:src="data:post.thumbnailUrl" /> 
  </div>
  </div>
  </b:if>
- <div class="post-body">
- <b:if cond="data:post.snippet">
  <data:post.snippet /> 
  </b:if>
  </div>
  </div>
  <div style="clear: both;" /> 
  </a>
- <div class="mobile-index-comment">
  <b:include cond="data:blog.pageType != "static_page" and data:post.allowComments and data:post.numComments != 0" data="post" name="comment_count_picker" /> 
  </div>
  </div>
  </div>
  </b:includable>
- <b:includable id="mobile-main" var="top">
- <!--  posts 
  --> 
- <div class="blog-posts hfeed">
  <b:include data="top" name="status-message" /> 
- <b:if cond="data:blog.pageType == "index"">
- <b:loop values="data:posts" var="post">
  <b:include data="post" name="mobile-index-post" /> 
  </b:loop>
  <b:else /> 
- <b:loop values="data:posts" var="post">
  <b:include data="post" name="mobile-post" /> 
  </b:loop>
  </b:if>
  </div>
  <b:include name="mobile-nextprev" /> 
  </b:includable>
- <b:includable id="mobile-nextprev">
- <div class="blog-pager" id="blog-pager">
- <b:if cond="data:newerPageUrl">
- <div class="mobile-link-button" id="blog-pager-newer-link">
  <a class="blog-pager-newer-link" expr:href="data:newerPageUrl" expr:id="data:widget.instanceId + "_blog-pager-newer-link"" expr:title="data:newerPageTitle">&lsaquo;</a> 
  </div>
  </b:if>
- <b:if cond="data:olderPageUrl">
- <div class="mobile-link-button" id="blog-pager-older-link">
  <a class="blog-pager-older-link" expr:href="data:olderPageUrl" expr:id="data:widget.instanceId + "_blog-pager-older-link"" expr:title="data:olderPageTitle">&rsaquo;</a> 
  </div>
  </b:if>
- <div class="mobile-link-button" id="blog-pager-home-link">
- <a class="home-link" expr:href="data:blog.homepageUrl">
  <data:homeMsg /> 
  </a>
  </div>
- <div class="mobile-desktop-link">
- <a class="home-link" expr:href="data:desktopLinkUrl">
  <data:desktopLinkMsg /> 
  </a>
  </div>
  </div>
  <div class="clear" /> 
  </b:includable>
- <b:includable id="mobile-post" var="post">
- <div class="date-outer">
- <b:if cond="data:post.dateHeader">
- <h2 class="date-header">
- <span>
  <data:post.dateHeader /> 
  </span>
  </h2>
  </b:if>
- <div class="date-posts">
- <div class="post-outer">
- <div class="post hentry uncustomized-post-template" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
- <b:if cond="data:post.thumbnailUrl">
  <meta expr:content="data:post.thumbnailUrl" itemprop="image_url" /> 
  </b:if>
  <meta expr:content="data:blog.blogId" itemprop="blogId" /> 
  <meta expr:content="data:post.id" itemprop="postId" /> 
  <a expr:name="data:post.id" /> 
- <b:if cond="data:post.title">
- <b:if cond="data:blog.pageType == "index"">
- <h2 class="post-title entry-title" itemprop="name">
- <b:if cond="data:post.link">
- <a expr:href="data:post.link" itemprop="url">
  <data:post.title /> 
  </a>
  <b:else /> 
- <b:if cond="data:post.url">
- <a expr:href="data:post.url" itemprop="url">
  <data:post.title /> 
  </a>
  <b:else /> 
  <data:post.title /> 
  </b:if>
  </b:if>
  </h2>
  <b:elseif cond="data:blog.pageType == "archive"" /> 
- <h2 class="post-title entry-title" itemprop="name">
- <b:if cond="data:post.link">
- <a expr:href="data:post.link" itemprop="url">
  <data:post.title /> 
  </a>
  <b:else /> 
- <b:if cond="data:post.url">
- <a expr:href="data:post.url" itemprop="url">
  <data:post.title /> 
  </a>
  <b:else /> 
  <data:post.title /> 
  </b:if>
  </b:if>
  </h2>
  <b:else /> 
- <h1 class="post-title entry-title" itemprop="name">
- <b:if cond="data:post.link">
  <data:post.title /> 
  <b:else /> 
- <b:if cond="data:post.url">
  <data:post.title /> 
  <b:else /> 
  <data:post.title /> 
  </b:if>
  </b:if>
  </h1>
  </b:if>
  </b:if>
- <div class="post-header">
  <div class="post-header-line-1" /> 
  </div>
- <div class="post-body entry-content" expr:id=""post-body-" + data:post.id" itemprop="articleBody">
  <data:post.body /> 
  <div style="clear: both;" /> 
- <!--  clear for photos floats 
  --> 
  </div>
- <div class="post-footer">
- <div class="post-footer-line post-footer-line-1">
- <span class="post-author vcard">
- <b:if cond="data:top.showAuthor">
- <b:if cond="data:post.authorProfileUrl">
- <span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
  <meta expr:content="data:post.authorProfileUrl" itemprop="url" /> 
- <a expr:href="data:post.authorProfileUrl" rel="author" title="author profile">
- <span itemprop="name">
  <data:post.author /> 
  </span>
  </a>
  </span>
  <b:else /> 
- <span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
- <span itemprop="name">
  <data:post.author /> 
  </span>
  </span>
  </b:if>
  </b:if>
  </span>
- <span class="post-timestamp">
- <b:if cond="data:top.showTimestamp">
  <data:top.timestampLabel /> 
- <b:if cond="data:post.url">
  <meta expr:content="data:post.canonicalUrl" itemprop="url" /> 
- <a class="timestamp-link" expr:href="data:post.url" rel="bookmark" title="permanent link">
- <abbr class="published" expr:title="data:post.timestampISO8601" itemprop="datePublished">
  <data:post.timestamp /> 
  </abbr>
  </a>
  </b:if>
  </b:if>
  </span>
- <span class="post-comment-link">
  <b:include cond="data:blog.pageType not in {"item","static_page"} and data:post.allowComments" data="post" name="comment_count_picker" /> 
  </span>
  </div>
- <div class="post-footer-line post-footer-line-2">
- <b:if cond="data:top.showMobileShare">
- <div class="mobile-link-button goog-inline-block" id="mobile-share-button">
- <a href="javascript:void(0);">
  <data:shareMsg /> 
  </a>
  </div>
  </b:if>
- <b:if cond="data:top.showDummy">
- <div class="goog-inline-block dummy-container">
  <data:post.dummyTag /> 
  </div>
  </b:if>
  </div>
  </div>
  </div>
  <b:include cond="data:blog.pageType in {"static_page","item"}" data="post" name="comment_picker" /> 
  </div>
  </div>
  </div>
  </b:includable>
- <b:includable id="nextprev">
- <div class="blog-pager" id="blog-pager">
- <b:if cond="data:newerPageUrl">
- <span id="blog-pager-newer-link">
- <a class="blog-pager-newer-link" expr:href="data:newerPageUrl" expr:id="data:widget.instanceId + "_blog-pager-newer-link"" expr:title="data:newerPageTitle">
  <data:newerPageTitle /> 
  </a>
  </span>
  </b:if>
- <b:if cond="data:olderPageUrl">
- <span id="blog-pager-older-link">
- <a class="blog-pager-older-link" expr:href="data:olderPageUrl" expr:id="data:widget.instanceId + "_blog-pager-older-link"" expr:title="data:olderPageTitle">
  <data:olderPageTitle /> 
  </a>
  </span>
  </b:if>
- <a class="home-link" expr:href="data:blog.homepageUrl">
  <data:homeMsg /> 
  </a>
- <b:if cond="data:mobileLinkUrl">
- <div class="blog-mobile-link">
- <a expr:href="data:mobileLinkUrl">
  <data:mobileLinkMsg /> 
  </a>
  </div>
  </b:if>
  </div>
- <b:if cond="data:blog.pageType != "static_page"">
- <b:if cond="data:blog.pageType!= "item"">
- <b:if cond="data:blog.pageType != "error_page"">
- <div class="blog-pager container" id="blog-pager">
- <b:if cond="data:olderPageUrl">
  <a class="blog-pager-older-link load-more" expr:data-load="data:olderPageUrl" href="javascript:;" id="load-more-link">See More</a> 
- <span class="loading">
  <span class="post-loader" /> 
  </span>
  <span class="no-more load-more">That is all</span> 
  <b:else /> 
  <span class="no-more load-more show">That is all</span> 
  </b:if>
  </div>
  </b:if>
  </b:if>
  </b:if>
  <div class="clear" /> 
  </b:includable>
- <b:includable id="post" var="post">
- <div class="post hentry">
- <b:if cond="data:blog.pageType == "index"">
- <b:if cond="data:post.featuredImage">
- <div class="block-image">
- <a class="thumb" expr:href="data:post.url">
  <img class="post-thumb" expr:alt="data:post.title" expr:src="data:post.featuredImage.isYouTube ? resizeImage(data:post.featuredImage.youtubeMaxResDefaultUrl.jsonEscaped, 72, "1:1") : resizeImage(data:post.featuredImage, 72, "1:1")" /> 
  </a>
- <b:if cond="data:post.title">
- <font class="retitle">
- <span class="post-retitle">
- <h2 class="post-title entry-title">
- <b:if cond="data:post.link">
- <a expr:href="data:post.link">
  <data:post.title /> 
  </a>
  <b:else /> 
- <b:if cond="data:post.url">
- <a expr:href="data:post.url">
  <data:post.title /> 
  </a>
  <b:else /> 
  <data:post.title /> 
  </b:if>
  </b:if>
  </h2>
  </span>
  </font>
  </b:if>
  </div>
  <b:else /> 
- <b:if cond="data:post.thumbnailUrl">
- <div class="block-image">
- <a class="thumb" expr:href="data:post.url">
  <img class="post-thumb" expr:alt="data:post.title" expr:src="data:post.thumbnailUrl.isYouTube ? resizeImage(data:post.thumbnailUrl.youtubeMaxResDefaultUrl.jsonEscaped, 72, "1:1") : resizeImage(data:post.thumbnailUrl, 72, "1:1")" /> 
  </a>
- <b:if cond="data:post.title">
- <font class="retitle">
- <span class="post-retitle">
- <h2 class="post-title entry-title">
- <b:if cond="data:post.link">
- <a expr:href="data:post.link">
  <data:post.title /> 
  </a>
  <b:else /> 
- <b:if cond="data:post.url">
- <a expr:href="data:post.url">
  <data:post.title /> 
  </a>
  <b:else /> 
  <data:post.title /> 
  </b:if>
  </b:if>
  </h2>
  </span>
  </font>
  </b:if>
  </div>
  <b:else /> 
- <div class="block-image">
- <a class="thumb" expr:href="data:post.url">
  <img class="post-thumb" expr:alt="data:post.title" src="http://3.bp.blogspot.com/-Yw8BIuvwoSQ/VsjkCIMoltI/AAAAAAAAC4c/s55PW6xEKn0/s1600-r/nth.png" /> 
  </a>
- <b:if cond="data:post.title">
- <font class="retitle">
- <span class="post-retitle">
- <h2 class="post-title entry-title">
- <b:if cond="data:post.link">
- <a expr:href="data:post.link">
  <data:post.title /> 
  </a>
  <b:else /> 
- <b:if cond="data:post.url">
- <a expr:href="data:post.url">
  <data:post.title /> 
  </a>
  <b:else /> 
  <data:post.title /> 
  </b:if>
  </b:if>
  </h2>
  </span>
  </font>
  </b:if>
  </div>
  </b:if>
  </b:if>
  </b:if>
- <b:if cond="data:blog.pageType == "archive"">
- <b:if cond="data:post.featuredImage">
- <div class="block-image">
- <a class="thumb" expr:href="data:post.url">
  <img class="post-thumb" expr:alt="data:post.title" expr:src="data:post.featuredImage.isYouTube ? resizeImage(data:post.featuredImage.youtubeMaxResDefaultUrl.jsonEscaped, 72, "1:1") : resizeImage(data:post.featuredImage, 72, "1:1")" /> 
  </a>
- <b:if cond="data:post.title">
- <font class="retitle">
- <span class="post-retitle">
- <h2 class="post-title entry-title">
- <b:if cond="data:post.link">
- <a expr:href="data:post.link">
  <data:post.title /> 
  </a>
  <b:else /> 
- <b:if cond="data:post.url">
- <a expr:href="data:post.url">
  <data:post.title /> 
  </a>
  <b:else /> 
  <data:post.title /> 
  </b:if>
  </b:if>
  </h2>
  </span>
  </font>
  </b:if>
  </div>
  <b:else /> 
- <b:if cond="data:post.thumbnailUrl">
- <div class="block-image">
- <a class="thumb" expr:href="data:post.url">
  <img class="post-thumb" expr:alt="data:post.title" expr:src="data:post.thumbnailUrl.isYouTube ? resizeImage(data:post.thumbnailUrl.youtubeMaxResDefaultUrl.jsonEscaped, 72, "1:1") : resizeImage(data:post.thumbnailUrl, 72, "1:1")" /> 
  </a>
- <b:if cond="data:post.title">
- <font class="retitle">
- <span class="post-retitle">
- <h2 class="post-title entry-title">
- <b:if cond="data:post.link">
- <a expr:href="data:post.link">
  <data:post.title /> 
  </a>
  <b:else /> 
- <b:if cond="data:post.url">
- <a expr:href="data:post.url">
  <data:post.title /> 
  </a>
  <b:else /> 
  <data:post.title /> 
  </b:if>
  </b:if>
  </h2>
  </span>
  </font>
  </b:if>
  </div>
  <b:else /> 
- <div class="block-image">
- <a class="thumb" expr:href="data:post.url">
  <img class="post-thumb" expr:alt="data:post.title" src="http://3.bp.blogspot.com/-Yw8BIuvwoSQ/VsjkCIMoltI/AAAAAAAAC4c/s55PW6xEKn0/s1600-r/nth.png" /> 
  </a>
- <b:if cond="data:post.title">
- <font class="retitle">
- <span class="post-retitle">
- <h2 class="post-title entry-title">
- <b:if cond="data:post.link">
- <a expr:href="data:post.link">
  <data:post.title /> 
  </a>
  <b:else /> 
- <b:if cond="data:post.url">
- <a expr:href="data:post.url">
  <data:post.title /> 
  </a>
  <b:else /> 
  <data:post.title /> 
  </b:if>
  </b:if>
  </h2>
  </span>
  </font>
  </b:if>
  </div>
  </b:if>
  </b:if>
  </b:if>
- <b:if cond="data:blog.pageType == "item"">
  <div itemprop='blogPost' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'> 
  <meta expr:content="data:post.firstImageUrl" itemprop="image" /> 
  </b:if>
- <div class="post-header">
- <b:if cond="data:blog.pageType == "item"">
- <b:if cond="data:post.title">
- <div class="post-head">
- <h1 class="post-title entry-title" itemprop="name headline">
- <b:if cond="data:post.link">
- <a expr:href="data:post.link">
  <data:post.title /> 
  </a>
  <b:else /> 
- <b:if cond="data:post.url">
- <b:if cond="data:blog.url != data:post.url">
- <a expr:href="data:post.url">
  <data:post.title /> 
  </a>
  <b:else /> 
  <data:post.title /> 
  </b:if>
  <b:else /> 
  <data:post.title /> 
  </b:if>
  </b:if>
  </h1>
  </div>
  </b:if>
- <div class="post-meta">
- <span class="post-author vcard">
- <b:if cond="data:top.showAuthor">
  <i class="fa fa-user" /> 
- <b:if cond="data:post.authorProfileUrl">
- <span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
  <meta expr:content="data:post.authorProfileUrl" itemprop="url" /> 
- <a class="g-profile" expr:href="data:post.authorProfileUrl" expr:title="data:post.author" rel="author">
- <span itemprop="name">
  <data:post.author /> 
  </span>
  </a>
  </span>
  <b:else /> 
- <span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
- <a class="g-profile" expr:href="data:post.authorProfileUrl" expr:title="data:post.author" rel="author">
- <span itemprop="name">
  <data:post.author /> 
  </span>
  </a>
  </span>
  </b:if>
  </b:if>
  </span>
- <span class="post-timestamp">
- <b:if cond="data:top.showTimestamp">
  <i class="fa fa-calendar-o" /> 
- <b:if cond="data:post.url">
  <meta expr:content="data:post.canonicalUrl" itemprop="url" /> 
- <a class="timestamp-link" expr:href="data:post.url" rel="bookmark" title="permanent link">
- <abbr class="published timeago" expr:title="data:post.timestampISO8601" itemprop="datePublished">
  <data:post.timestamp /> 
  </abbr>
  </a>
  </b:if>
  </b:if>
  </span>
- <span class="label-head">
- <b:if cond="data:post.labels">
  <i class="fa fa-folder-open-o" /> 
- <b:loop values="data:post.labels" var="label">
- <a expr:href="data:label.url" rel="tag">
  <data:label.name /> 
  </a>
  <b:if cond="data:label.isLast != "true"">,</b:if> 
  </b:loop>
  </b:if>
  </span>
  </div>
  </b:if>
- <b:if cond="data:blog.pageType == "static_page"">
- <b:if cond="data:post.title">
- <div class="post-head">
- <h1 class="post-title entry-title" itemprop="name">
- <b:if cond="data:post.link">
- <a expr:href="data:post.link">
  <data:post.title /> 
  </a>
  <b:else /> 
- <b:if cond="data:post.url">
- <b:if cond="data:blog.url != data:post.url">
- <a expr:href="data:post.url">
  <data:post.title /> 
  </a>
  <b:else /> 
  <data:post.title /> 
  </b:if>
  <b:else /> 
  <data:post.title /> 
  </b:if>
  </b:if>
  </h1>
  </div>
  </b:if>
  </b:if>
  </div>
- <!--  Then use the post body as the schema.org description, for good G+/FB snippeting. 
  --> 
- <b:if cond="data:blog.pageType == "item"">
- <article>
- <div class="post-body entry-content" id="post-body" itemprop="articleBody">
  <meta expr:content="data:post.snippet" name="twitter:description" /> 
  <data:post.body /> 
  </div>
  </article>
  </b:if>
- <b:if cond="data:blog.pageType == "static_page"">
- <article>
- <div class="post-body entry-content" id="post-body" itemprop="articleBody">
  <meta expr:content="data:post.snippet" name="twitter:description" /> 
  <data:post.body /> 
  </div>
  </article>
  </b:if>
- <b:if cond="data:post.hasJumpLink">
- <div class="jump-link">
- <a expr:href="data:post.url + "#more"" expr:title="data:post.title">
  <data:post.jumpText /> 
  </a>
  </div>
  </b:if>
- <div class="post-footer">
- <b:if cond="data:blog.pageType == "item"">
- <div class="share-box">
  <h8 class="share-title">Share This:</h8> 
- <div class="share-art">
- <a class="fac-art" expr:href=""http://www.facebook.com/sharer.php?u=" + data:post.url + "&title="+ data:post.title" onclick="window.open(this.href, 'windowName', 'width=600, height=400, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow" target="_blank">
  <i class="fa fa-facebook" /> 
  <span class="resp_del">Facebook</span> 
  </a>
- <a class="twi-art" expr:href=""http://twitter.com/share?url=" + data:post.url + "&title=" + data:post.title" onclick="window.open(this.href, 'windowName', 'width=600, height=400, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow" target="_blank">
  <i class="fa fa-twitter" /> 
  <span class="resp_del2">Twitter</span> 
  </a>
- <a class="pin-art" expr:href=""http://pinterest.com/pin/create/button/?url=" + data:post.url + "&media=" + data:post.firstImageUrl + "&description=" + data:post.snippet" onclick="window.open(this.href, 'windowName', 'width=600, height=400, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow" target="_blank">
  <i class="fa fa-pinterest" /> 
  <span class="resp_del4">Pinterest</span> 
  </a>
- <a class="lin-art" expr:href=""http://www.linkedin.com/shareArticle?url=" + data:post.url + "&title="+ data:post.title" onclick="window.open(this.href, 'windowName', 'width=600, height=400, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow" target="_blank">
  <i class="fa fa-linkedin-square" /> 
  <span class="resp_del5">Linkedin</span> 
  </a>
  <whatsapp expr:href="data:post.url" expr:src="data:post.firstImageUrl" expr:text="data:post.title" /> 
- <a class="wat-art whatsapp-desktop" expr:href=""https://web.whatsapp.com/send?text=" + data:post.title + " | " + data:post.url" rel="nofollow" target="_blank">
  <i class="fa fa-whatsapp" /> 
  <span class="resp_del5">Whatsapp</span> 
  </a>
- <a class="wat-art" expr:href=""https://api.whatsapp.com/send?text=" + data:post.title + " | " + data:post.url" rel="nofollow" target="_blank">
  <i class="fa fa-whatsapp" /> 
  <span class="resp_del5">Whatsapp</span> 
  </a>
  </div>
  </div>
  <div style="clear:both" /> 
- <!--  Related Posts 
  --> 
- <div id="related-wrap">
- <div class="title-wrap">
  <h3>You May Also Like This:</h3> 
  </div>
- <div class="related-ready">
- <b:if cond="data:post.labels">
  <div class="related-tag" expr:data-label="data:post.labels.first.name" /> 
  <b:else /> 
  <div class="related-tag" data-label="random" /> 
  </b:if>
  </div>
  </div>
  </b:if>
- <div class="post-footer-line post-footer-line-1">
- <span class="post-author vcard">
- <b:if cond="data:top.showAuthor">
  <data:top.authorLabel /> 
- <b:if cond="data:post.authorProfileUrl">
- <span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
  <meta expr:content="data:post.authorProfileUrl" itemprop="url" /> 
- <a class="g-profile" expr:href="data:post.authorProfileUrl" rel="author" title="author profile">
- <span itemprop="name">
  <data:post.author /> 
  </span>
  </a>
  </span>
  <b:else /> 
- <span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
- <span itemprop="name">
  <data:post.author /> 
  </span>
  </span>
  </b:if>
  </b:if>
  </span>
- <span class="post-timestamp">
- <b:if cond="data:top.showTimestamp">
  <data:top.timestampLabel /> 
- <b:if cond="data:post.url">
  <meta expr:content="data:post.canonicalUrl" itemprop="url" /> 
- <a class="timestamp-link" expr:href="data:post.url" rel="bookmark" title="permanent link">
- <abbr class="published" expr:title="data:post.timestampISO8601" itemprop="datePublished">
  <data:post.timestamp /> 
  </abbr>
  </a>
  </b:if>
  </b:if>
  </span>
- <span class="reaction-buttons">
- <b:if cond="data:top.showReactions">
- <table border="0" cellpadding="0" cellspacing="0" width="100%">
- <tr>
- <td class="reactions-label-cell" nowrap="nowrap" valign="top" width="1%">
- <span class="reactions-label">
  <data:top.reactionsLabel /> 
  </span>
    
  </td>
- <td>
  <iframe allowtransparency="true" class="reactions-iframe" expr:src="data:post.reactionsUrl" frameborder="0" name="reactions" scrolling="no" /> 
  </td>
  </tr>
  </table>
  </b:if>
  </span>
- <span class="post-comment-link">
  <b:include cond="data:blog.pageType not in {"item","static_page"} and data:post.allowComments" data="post" name="comment_count_picker" /> 
  </span>
- <!--  backlinks 
  --> 
- <span class="post-backlinks post-comment-link">
- <b:if cond="data:blog.pageType not in {"item","static_page"} and data:post.showBacklinks">
- <a class="comment-link" expr:href="data:post.url + "#links"">
  <data:top.backlinkLabel /> 
  </a>
  </b:if>
  </span>
- <span class="post-icons">
- <!--  email post links 
  --> 
- <b:if cond="data:post.emailPostUrl">
- <span class="item-action">
- <a expr:href="data:post.emailPostUrl" expr:title="data:top.emailPostMsg">
  <img alt="" class="icon-action" height="13" src="//img1.blogblog.com/img/icon18_email.gif" width="18" /> 
  </a>
  </span>
  </b:if>
- <!--  quickedit pencil 
  --> 
  <b:include data="post" name="postQuickEdit" /> 
  </span>
- <!--  share buttons 
  --> 
- <div class="post-share-buttons goog-inline-block">
  <b:include cond="data:post.sharePostUrl" data="post" name="shareButtons" /> 
  </div>
  </div>
- <div class="post-footer-line post-footer-line-2">
- <span class="post-labels">
- <b:if cond="data:post.labels">
  <data:postLabelsLabel /> 
- <b:loop values="data:post.labels" var="label">
- <a expr:href="data:label.url" rel="tag">
  <data:label.name /> 
  </a>
  <b:if cond="not data:label.isLast">,</b:if> 
  </b:loop>
  </b:if>
  </span>
  </div>
- <div class="post-footer-line post-footer-line-3">
- <span class="post-location">
- <b:if cond="data:top.showLocation">
- <b:if cond="data:post.location">
  <data:postLocationLabel /> 
- <a expr:href="data:post.location.mapsUrl" target="_blank">
  <data:post.location.name /> 
  </a>
  </b:if>
  </b:if>
  </span>
  </div>
- <b:if cond="data:post.authorAboutMe">
- <div class="author-profile" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
- <b:if cond="data:post.authorPhoto.url">
  <img expr:src="data:post.authorPhoto.url" itemprop="image" width="50px" /> 
  </b:if>
- <div>
- <a class="g-profile" expr:href="data:post.authorProfileUrl" itemprop="url" rel="author" title="author profile">
- <span itemprop="name">
  <data:post.author /> 
  </span>
  </a>
  </div>
- <span itemprop="description">
  <data:post.authorAboutMe /> 
  </span>
  </div>
  </b:if>
  </div>
  <b:if cond="data:blog.pageType == "item""></div></b:if> 
  </div>
  </b:includable>
- <b:includable id="postQuickEdit" var="post">
- <b:if cond="data:post.editUrl">
- <span expr:class=""item-control " + data:post.adminClass">
- <a expr:href="data:post.editUrl" expr:title="data:top.editPostMsg">
  <img alt="" class="icon-action" height="18" src="https://resources.blogblog.com/img/icon18_edit_allbkg.gif" width="18" /> 
  </a>
  </span>
  </b:if>
  </b:includable>
- <b:includable id="shareButtons" var="post">
- <b:if cond="data:top.showEmailButton">
- <a class="goog-inline-block share-button sb-email" expr:href="data:post.sharePostUrl + "&target=email"" expr:title="data:top.emailThisMsg" target="_blank">
- <span class="share-button-link-text">
  <data:top.emailThisMsg /> 
  </span>
  </a>
  </b:if>
- <b:if cond="data:top.showBlogThisButton">
- <a class="goog-inline-block share-button sb-blog" expr:href="data:post.sharePostUrl + "&target=blog"" expr:onclick=""window.open(this.href, \"_blank\", \"height=270,width=475\"); return false;"" expr:title="data:top.blogThisMsg" target="_blank">
- <span class="share-button-link-text">
  <data:top.blogThisMsg /> 
  </span>
  </a>
  </b:if>
- <b:if cond="data:top.showTwitterButton">
- <a class="goog-inline-block share-button sb-twitter" expr:href="data:post.sharePostUrl + "&target=twitter"" expr:title="data:top.shareToTwitterMsg" target="_blank">
- <span class="share-button-link-text">
  <data:top.shareToTwitterMsg /> 
  </span>
  </a>
  </b:if>
- <b:if cond="data:top.showFacebookButton">
- <a class="goog-inline-block share-button sb-facebook" expr:href="data:post.sharePostUrl + "&target=facebook"" expr:onclick=""window.open(this.href, \"_blank\", \"height=430,width=640\"); return false;"" expr:title="data:top.shareToFacebookMsg" target="_blank">
- <span class="share-button-link-text">
  <data:top.shareToFacebookMsg /> 
  </span>
  </a>
  </b:if>
- <b:if cond="data:top.showPinterestButton">
- <a class="goog-inline-block share-button sb-pinterest" expr:href="data:post.sharePostUrl + "&target=pinterest"" expr:title="data:top.shareToPinterestMsg" target="_blank">
- <span class="share-button-link-text">
  <data:top.shareToPinterestMsg /> 
  </span>
  </a>
  </b:if>
  </b:includable>
- <b:includable id="status-message">
- <b:if cond="data:navMessage">
- <div class="status-msg-wrap">
- <div class="status-msg-body">
  <data:navMessage /> 
  </div>
- <div class="status-msg-border">
- <div class="status-msg-bg">
- <div class="status-msg-hidden">
  <data:navMessage /> 
  </div>
  </div>
  </div>
  </div>
  <div style="clear: both;" /> 
- <b:if cond="data:blog.pageType == "error_page"">
- <div class="post-404">
- <div class="actions-404">
- <div class="ops-404">
  <span>Oops;</span> 
  Sorry, but the page you were trying to view does not exist. 
  </div>
  <div class="title-404">404</div> 
- <div class="link-404">
- <a href="/">
  <i class="fa fa-car" /> 
  <trans>Back to Home</trans> 
  </a>
  </div>
  </div>
  </div>
  <style>.post-404 { padding-top: 40px; padding-bottom: 60px; } .actions-404 { width: 100%; float: right; text-align: center; } .ops-404 { width: 50%; margin: 0 auto; font-size: 26px; font-weight: 400; } .ops-404 span { font-weight: 700; } .title-404 { font-size: 200px; font-weight: 700; line-height: 1.1; } .link-404 { font-size: 18px; padding-top: 20px; padding-bottom: 50px; } #blog-pager, #sidebar-wrapper,.status-msg-wrap { display: none; } .status-msg-border { border: 0 !important; } .status-msg-bg { background-color: #fff; } #main-wrapper { width: 100%; max-width: 100%; }</style> 
  </b:if>
  </b:if>
  </b:includable>
- <b:includable id="threaded-comment-form" var="post">
- <div class="comment-form">
  <a name="comment-form" /> 
- <b:if cond="data:mobile">
- <p>
  <data:blogCommentMessage /> 
  </p>
  <data:blogTeamBlogMessage /> 
  <a expr:href="data:post.commentFormIframeSrc" id="comment-editor-src" /> 
  <iframe allowtransparency="true" class="blogger-iframe-colorize blogger-comment-from-post" expr:height="data:cmtIframeInitialHeight" frameborder="0" id="comment-editor" name="comment-editor" src="" style="display: none" width="100%" /> 
  <b:else /> 
- <p>
  <data:blogCommentMessage /> 
  </p>
  <data:blogTeamBlogMessage /> 
  <a expr:href="data:post.commentFormIframeSrc" id="comment-editor-src" /> 
  <iframe allowtransparency="true" class="blogger-iframe-colorize blogger-comment-from-post" expr:height="data:cmtIframeInitialHeight" frameborder="0" id="comment-editor" name="comment-editor" src="" width="100%" /> 
  </b:if>
  <data:post.cmtfpIframe /> 
- <script type="text/javascript">
  BLOG_CMT_createIframe(' 
  <data:post.appRpcRelayPath /> 
  '); 
  </script>
  </div>
  </b:includable>
- <b:includable id="threaded_comment_js" var="post">
  <script async="async" expr:src="data:post.commentSrc" type="text/javascript" /> 
- <script type="text/javascript">
  (function() { var items = 
  <data:post.commentJso /> 
  ; var msgs = 
  <data:post.commentMsgs /> 
  ; var config = 
  <data:post.commentConfig /> 
  ; // 
- <![CDATA[       var cursor = null;
      if (items && items.length > 0) {
        cursor = parseInt(items[items.length - 1].timestamp) + 1;
      }

      var bodyFromEntry = function(entry) {
        if (entry.gd$extendedProperty) {
          for (var k in entry.gd$extendedProperty) {
            if (entry.gd$extendedProperty[k].name == 'blogger.contentRemoved') {
              return '<span class="deleted-comment">' + entry.content.$t + '</span>';
            }
          }
        }
        return entry.content.$t;
      }

      var parse = function(data) {
        cursor = null;
        var comments = [];
        if (data && data.feed && data.feed.entry) {
          for (var i = 0, entry; entry = data.feed.entry[i]; i++) {
            var comment = {};
            // comment ID, parsed out of the original id format
            var id = /blog-(\d+).post-(\d+)/.exec(entry.id.$t);
            comment.id = id ? id[2] : null;
            comment.body = bodyFromEntry(entry);
            comment.timestamp = Date.parse(entry.published.$t) + '';
            if (entry.author && entry.author.constructor === Array) {
              var auth = entry.author[0];
              if (auth) {
                comment.author = {
                  name: (auth.name ? auth.name.$t : undefined),
                  profileUrl: (auth.uri ? auth.uri.$t : undefined),
                  avatarUrl: (auth.gd$image ? auth.gd$image.src : undefined)
                };
              }
            }
            if (entry.link) {
              if (entry.link[2]) {
                comment.link = comment.permalink = entry.link[2].href;
              }
              if (entry.link[3]) {
                var pid = /.*comments\/default\/(\d+)\?.*/.exec(entry.link[3].href);
                if (pid && pid[1]) {
                  comment.parentId = pid[1];
                }
              }
            }
            comment.deleteclass = 'item-control blog-admin';
            if (entry.gd$extendedProperty) {
              for (var k in entry.gd$extendedProperty) {
                if (entry.gd$extendedProperty[k].name == 'blogger.itemClass') {
                  comment.deleteclass += ' ' + entry.gd$extendedProperty[k].value;
                } else if (entry.gd$extendedProperty[k].name == 'blogger.displayTime') {
                  comment.displayTime = entry.gd$extendedProperty[k].value;
                }
              }
            }
            comments.push(comment);
          }
        }
        return comments;
      };

      var paginator = function(callback) {
        if (hasMore()) {
          var url = config.feed + '?alt=json&v=2&orderby=published&reverse=false&max-results=50';
          if (cursor) {
            url += '&published-min=' + new Date(cursor).toISOString();
          }
          window.bloggercomments = function(data) {
            var parsed = parse(data);
            cursor = parsed.length < 50 ? null
                : parseInt(parsed[parsed.length - 1].timestamp) + 1
            callback(parsed);
            window.bloggercomments = null;
          }
          url += '&callback=bloggercomments';
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = url;
          document.getElementsByTagName('head')[0].appendChild(script);
        }
      };
      var hasMore = function() {
        return !!cursor;
      };
      var getMeta = function(key, comment) {
        if ('iswriter' == key) {
          var matches = !!comment.author
              && comment.author.name == config.authorName
              && comment.author.profileUrl == config.authorUrl;
          return matches ? 'true' : '';
        } else if ('deletelink' == key) {
          return config.baseUri + '/delete-comment.g?blogID='
               + config.blogId + '&postID=' + comment.id;
        } else if ('deleteclass' == key) {
          return comment.deleteclass;
        }
        return '';
      };

      var replybox = null;
      var replyUrlParts = null;
      var replyParent = undefined;

      var onReply = function(commentId, domId) {
        if (replybox == null) {
          // lazily cache replybox, and adjust to suit this style:
          replybox = document.getElementById('comment-editor');
          if (replybox != null) {
            replybox.height = '250px';
            replybox.style.display = 'block';
            replyUrlParts = replybox.src.split('#');
          }
        }
        if (replybox && (commentId !== replyParent)) {
          replybox.src = '';
          document.getElementById(domId).insertBefore(replybox, null);
          replybox.src = replyUrlParts[0]
              + (commentId ? '&parentID=' + commentId : '')
              + '#' + replyUrlParts[1];
          replyParent = commentId;
        }
      };

      var hash = (window.location.hash || '#').substring(1);
      var startThread, targetComment;
      if (/^comment-form_/.test(hash)) {
        startThread = hash.substring('comment-form_'.length);
      } else if (/^c[0-9]+$/.test(hash)) {
        targetComment = hash.substring(1);
      }

      // Configure commenting API:
      var configJso = {
        'maxDepth': config.maxThreadDepth
      };
      var provider = {
        'id': config.postId,
        'data': items,
        'loadNext': paginator,
        'hasMore': hasMore,
        'getMeta': getMeta,
        'onReply': onReply,
        'rendered': true,
        'initComment': targetComment,
        'initReplyThread': startThread,
        'config': configJso,
        'messages': msgs
      };

      var render = function() {
        if (window.goog && window.goog.comments) {
          var holder = document.getElementById('comment-holder');
          window.goog.comments.render(holder, provider);
        }
      };

      // render now, or queue to render when library loads:
      if (window.goog && window.goog.comments) {
        render();
      } else {
        window.goog = window.goog || {};
        window.goog.comments = window.goog.comments || {};
        window.goog.comments.loadQueue = window.goog.comments.loadQueue || [];
        window.goog.comments.loadQueue.push(render);
      }
    })();
// 
  ]]> 
  </script>
  </b:includable>
- <b:includable id="threaded_comments" var="post">
- <div class="comments" id="comments">
  <a name="comments" /> 
- <h4>
  <data:post.commentLabelFull /> 
  : 
  </h4>
- <div class="comments-content">
  <b:include cond="data:post.embedCommentForm" data="post" name="threaded_comment_js" /> 
- <div id="comment-holder">
  <data:post.commentHtml /> 
  </div>
  </div>
- <p class="comment-footer">
- <b:if cond="data:post.allowNewComments">
  <b:include data="post" name="threaded-comment-form" /> 
  <b:else /> 
  <data:post.noNewCommentsText /> 
  </b:if>
  </p>
- <b:if cond="data:showCmtPopup">
- <div id="comment-popup">
  <iframe allowtransparency="true" frameborder="0" id="comment-actions" name="comment-actions" scrolling="no" /> 
  </div>
  </b:if>
- <div id="backlinks-container">
- <div expr:id="data:widget.instanceId + "_backlinks-container"">
  <b:include cond="data:post.showBacklinks" data="post" name="backlinks" /> 
  </div>
  </div>
  </div>
  </b:includable>
  </b:widget>
  </b:section>
  </div>
- <div id="sidebar-wrapper">
- <b:section class="sidebar common-widget" id="sidebar" preferred="yes">
- <b:widget id="PopularPosts1" locked="false" title="Popular" type="PopularPosts" version="1">
- <b:widget-settings>
  <b:widget-setting name="numItemsToShow">3</b:widget-setting> 
  <b:widget-setting name="showThumbnails">true</b:widget-setting> 
  <b:widget-setting name="showSnippets">true</b:widget-setting> 
  <b:widget-setting name="timeRange">LAST_WEEK</b:widget-setting> 
  </b:widget-settings>
- <b:includable id="main">
- <b:if cond="data:title != """>
- <h2>
  <data:title /> 
  </h2>
  </b:if>
- <div class="widget-content popular-posts">
- <ul>
- <b:loop values="data:posts" var="post">
- <li>
- <b:if cond="!data:showThumbnails">
- <b:if cond="!data:showSnippets">
- <!--  (1) No snippet/thumbnail 
  --> 
- <a expr:href="data:post.href">
  <data:post.title /> 
  </a>
  <b:else /> 
- <!--  (2) Show only snippets 
  --> 
- <div class="item-title">
- <a expr:href="data:post.href">
  <data:post.title /> 
  </a>
  </div>
- <div class="item-snippet">
  <data:post.snippet /> 
  </div>
  </b:if>
  <b:else /> 
- <!--  (3) Show only thumbnails or (4) Snippets and thumbnails. 
  --> 
- <div expr:class="data:showSnippets ? "item-content" : "item-thumbnail-only"">
- <b:if cond="data:post.thumbnail">
- <div class="item-thumbnail">
- <a expr:href="data:post.href">
  <img border="0" expr:alt="data:post.title" expr:height="data:thumbnailSize" expr:src="data:post.thumbnail" expr:width="data:thumbnailSize" /> 
  </a>
  </div>
  </b:if>
- <div class="item-title">
- <a expr:href="data:post.href">
  <data:post.title /> 
  </a>
  </div>
- <b:if cond="data:showSnippets">
- <div class="item-snippet">
  <data:post.snippet /> 
  </div>
  </b:if>
  </div>
  <div style="clear: both;" /> 
  </b:if>
  </li>
  </b:loop>
  </ul>
- <!-- b:include name='quickedit'/
  --> 
  </div>
  </b:includable>
  </b:widget>
- <b:widget id="HTML2" locked="false" title="Facebook" type="HTML">
- <b:widget-settings>
- <b:widget-setting name="content">
- <![CDATA[ <center><div class="fb-page" data-href="https://www.facebook.com/soratemplates" data-width="360" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div></center>
  ]]> 
  </b:widget-setting>
  </b:widget-settings>
- <b:includable id="main">
- <!--  only display title if it's non-empty 
  --> 
- <b:if cond="data:title != """>
- <h2 class="title">
  <data:title /> 
  </h2>
  </b:if>
- <div class="widget-content">
  <data:content /> 
  </div>
  <b:include name="quickedit" /> 
  </b:includable>
  </b:widget>
- <b:widget id="HTML1" locked="false" title="Subscribe Us" type="HTML">
- <b:widget-settings>
  <b:widget-setting name="content"><div class="videoWrapper"> <!-- Copy & Pasted from YouTube --> <iframe width="560" height="349" src="https://www.youtube.com/embed/1FeDUuLxBYM" frameborder="0" allowfullscreen></iframe> </div> <style> .videoWrapper { position: relative; padding-bottom: 56.25%; /* 16:9 */ padding-top: 25px; height: 0; } .videoWrapper iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; } </style></b:widget-setting> 
  </b:widget-settings>
- <b:includable id="main">
- <!--  only display title if it's non-empty 
  --> 
- <b:if cond="data:title != """>
- <h2 class="title">
  <data:title /> 
  </h2>
  </b:if>
- <div class="widget-content">
  <data:content /> 
  </div>
  <b:include name="quickedit" /> 
  </b:includable>
  </b:widget>
- <b:widget id="Label1" locked="false" title="Tags" type="Label" version="1">
- <b:widget-settings>
  <b:widget-setting name="sorting">ALPHA</b:widget-setting> 
  <b:widget-setting name="display">CLOUD</b:widget-setting> 
  <b:widget-setting name="selectedLabelsList" /> 
  <b:widget-setting name="showType">ALL</b:widget-setting> 
  <b:widget-setting name="showFreqNumbers">true</b:widget-setting> 
  </b:widget-settings>
- <b:includable id="main">
- <b:if cond="data:title != """>
- <h2>
  <data:title /> 
  </h2>
  </b:if>
- <div expr:class=""widget-content " + data:display + "-label-widget-content"">
- <b:if cond="data:display == "list"">
- <ul>
- <b:loop values="data:labels" var="label">
- <li>
- <b:if cond="data:blog.url == data:label.url">
- <span expr:dir="data:blog.languageDirection">
  <data:label.name /> 
  </span>
  <b:else /> 
- <a expr:dir="data:blog.languageDirection" expr:href="data:label.url">
  <data:label.name /> 
  </a>
  </b:if>
- <b:if cond="data:showFreqNumbers">
- <span dir="ltr">
  ( 
  <data:label.count /> 
  ) 
  </span>
  </b:if>
  </li>
  </b:loop>
  </ul>
  <b:else /> 
- <b:loop values="data:labels" var="label">
- <span expr:class=""label-size label-size-" + data:label.cssSize">
- <b:if cond="data:blog.url == data:label.url">
- <span expr:dir="data:blog.languageDirection">
  <data:label.name /> 
  </span>
  <b:else /> 
- <a expr:dir="data:blog.languageDirection" expr:href="data:label.url">
  <data:label.name /> 
  </a>
  </b:if>
- <b:if cond="data:showFreqNumbers">
- <span class="label-count" dir="ltr">
  ( 
  <data:label.count /> 
  ) 
  </span>
  </b:if>
  </span>
  </b:loop>
  </b:if>
- <!-- b:include name='quickedit'/
  --> 
  </div>
  </b:includable>
  </b:widget>
  </b:section>
  </div>
  <div style="clear: both;" /> 
  </div>
- <!--  end content-wrapper 
  --> 
- <b:if cond="data:blog.pageType != "static_page"">
- <b:if cond="data:blog.pageType!= "item"">
- <b:if cond="data:blog.pageType != "error_page"">
- <div class="sora-about-box" id="section-6">
- <div class="about-wrap row">
- <div class="about-title">
  <h4>Meet The Team</h4> 
  <span>Our process on creating awesome projects.</span> 
  </div>
  <div style="clear: both;" /> 
- <!--  First 
  --> 
- <div class="about-tiles wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible;">
- <div class="team-member text-center">
- <div class="team-img">
  <img alt="" src="http://1.bp.blogspot.com/-P1UCUBWGCMU/WaUv1CxF6kI/AAAAAAAADvM/aOSCRX-UHAwKF8EFs20fqryoqDNa3DJQwCK4BGAYYCw/s1600/team_1.jpg" /> 
- <div class="overlay">
- <div class="team-details text-center">
  <p>Our web design team will spend time with our digital marketing team.</p> 
- <div class="socials mt-20">
- <a href="https://www.facebook.com/soratemplates/">
  <i class="fa fa-facebook" /> 
  </a>
- <a href="https://twitter.com/LiveBlogger1">
  <i class="fa fa-twitter" /> 
  </a>
- <a href="https://www.instagram.com/livebloggerofficial/">
  <i class="fa fa-instagram" /> 
  </a>
  </div>
  </div>
  </div>
  </div>
  <h6 class="team-title">John Marshall</h6> 
  <span>Designer</span> 
  </div>
  </div>
- <!--  First One Ends 
  --> 
- <!--  Second 
  --> 
- <div class="about-tiles wow fadeInUp" data-wow-delay="0s" style="visibility: visible;">
- <div class="team-member text-center">
- <div class="team-img">
  <img alt="" src="http://1.bp.blogspot.com/-lS8BCMfild4/WaUv1I0ZzxI/AAAAAAAADvI/TRbkU8DD6qAMXTEciXxlZXakbMGB29xWQCK4BGAYYCw/s1600/team_2.jpg" /> 
- <div class="overlay">
- <div class="team-details text-center">
  <p>Our web design team will spend time with our digital marketing team.</p> 
- <div class="socials mt-20">
- <a href="https://www.facebook.com/soratemplates/">
  <i class="fa fa-facebook" /> 
  </a>
- <a href="https://twitter.com/LiveBlogger1">
  <i class="fa fa-twitter" /> 
  </a>
- <a href="https://www.instagram.com/livebloggerofficial/">
  <i class="fa fa-instagram" /> 
  </a>
  </div>
  </div>
  </div>
  </div>
  <h6 class="team-title">Steve Roberts</h6> 
  <span>Photographer</span> 
  </div>
  </div>
- <!--  Second Ends 
  --> 
- <!--  Third 
  --> 
- <div class="about-tiles wow fadeInRight" data-wow-delay="0.2s" style="visibility: visible;">
- <div class="team-member last text-center">
- <div class="team-img">
  <img alt="" src="http://3.bp.blogspot.com/-NN3Axwd3gjc/WaUv1CODCDI/AAAAAAAADvE/vyiHmT0rl98F-ZTqYB0xmst60IHuVFmxQCK4BGAYYCw/s1600/team_3.jpg" /> 
- <div class="overlay">
- <div class="team-details text-center">
  <p>Our web design team will spend time with our digital marketing team.</p> 
- <div class="socials mt-20">
- <a href="https://www.facebook.com/soratemplates/">
  <i class="fa fa-facebook" /> 
  </a>
- <a href="https://twitter.com/LiveBlogger1">
  <i class="fa fa-twitter" /> 
  </a>
- <a href="https://www.instagram.com/livebloggerofficial/">
  <i class="fa fa-instagram" /> 
  </a>
  </div>
  </div>
  </div>
  </div>
  <h6 class="team-title">Michael Cartney</h6> 
  <span>Designer</span> 
  </div>
  </div>
- <!--  Third Ends 
  --> 
  </div>
  </div>
- <div class="insta-wrap" id="section-7">
- <div class="contact-title">
  <h4>Get in Touch</h4> 
  <span>Feel free to drop us a line to contact us</span> 
  </div>
  <div style="clear:both" /> 
  <div class="contact_list_wrapper" /> 
  <div style="clear:both" /> 
- <div class="row" id="sora_blogger_cntct_form">
- <div class="wrap-me wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible;">
- <b:section class="sora-contact-widget" id="Contact Widget" maxwidgets="1" name="Contact Form Widget" showaddelement="no">
- <b:widget id="ContactForm1" locked="false" title="Contact Form" type="ContactForm" version="1">
- <b:includable id="main">
- <div class="contact-form-widget">
- <div class="form">
- <form name="contact-form">
  <p /> 
  <span class="name-bg">Name*</span> 
  <br /> 
  <input class="contact-form-name" expr:id="data:widget.instanceId + "_contact-form-name"" name="name" size="30" type="text" value="" /> 
  <p /> 
  <span class="email-bg">Email*</span> 
  <br /> 
  <input class="contact-form-email" expr:id="data:widget.instanceId + "_contact-form-email"" name="email" size="30" type="text" value="" /> 
  <p /> 
  <span class="message-bg">Message*</span> 
  <br /> 
  <textarea class="contact-form-email-message" cols="25" expr:id="data:widget.instanceId + "_contact-form-email-message"" name="email-message" rows="5" /> 
  <p /> 
- <span class="send-bg">
  <input class="contact-form-button contact-form-button-submit" expr:id="data:widget.instanceId + "_contact-form-submit"" expr:value="data:contactFormSendMsg" type="button" /> 
  </span>
- <span class="clear-bg">
  <input class="contact-form-button contact-form-button-submit clear-button" type="reset" value="Clear" /> 
  </span>
  <p /> 
- <div style="max-width: 100%; text-align: center; width: 100%;">
  <div class="contact-form-error-message" id="ContactForm1_contact-form-error-message" /> 
  <div class="contact-form-success-message" id="ContactForm1_contact-form-success-message" /> 
  </div>
  </form>
  </div>
  </div>
  <b:include name="quickedit" /> 
  </b:includable>
  </b:widget>
  </b:section>
  <br /> 
  </div>
- <div class="map-me wow fadeInRight" data-wow-delay="0s" style="visibility: visible;">
- <div class="contact-other">
  <h1 class="con-title">Feel free To Contact</h1> 
  <p class="con-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate dolores, quasi unde quisquam facilis at ullam aperiam similique dicta voluptatibus!</p> 
- <ul class="con-list">
- <li>
  <i class="lnr lnr-map" /> 
  3066 Stone Lane, Wayne, Pennsylvania. 
  </li>
- <li>
  <i class="lnr lnr-phone" /> 
  +610-401-6021, +610-401-6022 
  </li>
- <li>
  <i class="lnr lnr-envelope" /> 
  admin@mydomain.com 
  </li>
- <li>
  <i class="lnr lnr-earth" /> 
  www.yourdomain.com 
  </li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </b:if>
  </b:if>
  </b:if>
  <div style="clear: both;" /> 
- <div class="bot-bar-menu">
- <div class="bot-menu-wrap row">
- <b:section class="bot-menu" id="Bottom-menu" maxwidgets="1" showaddelement="yes">
- <b:widget id="PageList1" locked="true" title="Pages" type="PageList" version="1">
- <b:widget-settings>
- <b:widget-setting name="pageListJson">
- <![CDATA[ {"147448213596000393":{"href":"https://leafy-soratemplates.blogspot.com/p/contact-us.html","position":0,"title":"Contact"},"1338847404972273150":{"href":"https://leafy-soratemplates.blogspot.com/p/about-us.html","position":1,"title":"About"}}
  ]]> 
  </b:widget-setting>
  <b:widget-setting name="homeTitle">Home</b:widget-setting> 
  </b:widget-settings>
- <b:includable id="main">
- <b:if cond="data:title != """>
- <h2>
  <data:title /> 
  </h2>
  </b:if>
- <div class="widget-content">
- <b:if cond="data:mobile">
- <select expr:id="data:widget.instanceId + "_select"">
- <b:loop values="data:links" var="link">
- <option expr:value="data:link.href">
  <b:attr cond="data:link.isCurrentPage" name="selected" value="selected" /> 
  <data:link.title /> 
  </option>
  </b:loop>
  </select>
  <span class="pagelist-arrow">&#9660;</span> 
  <b:else /> 
- <ul id="nav2">
- <b:loop values="data:links" var="link">
- <li>
  <b:class cond="data:link.isCurrentPage" name="selected" /> 
- <a expr:href="data:link.href">
  <data:link.title /> 
  </a>
  </li>
  </b:loop>
  </ul>
  </b:if>
- <!-- <b:include name='quickedit'/>
  --> 
  </div>
  </b:includable>
  </b:widget>
  </b:section>
- <div class="jugas_footer_copyright">
  Created By 
  <a href="http://soratemplates.com/" id="mycontent" rel="dofollow" title="SoraTemplates">Blog</a> 
  | Distributed By 
  <a href="https://gooyaabitemplates.com/" rel="dofollow" style="color:#ff00ba;" target="_blank" title="Gooyaabi">Gooyaabi</a> 
  </div>
- <b:section class="bottom-bar-social blue" id="Footer social widget" maxwidgets="1" name="Footer Social Widget" showaddelement="no">
- <b:widget id="LinkList236" locked="true" title="Social Media Icons" type="LinkList" version="1">
- <b:widget-settings>
  <b:widget-setting name="link-3">https://www.instagram.com/livebloggerofficial/</b:widget-setting> 
  <b:widget-setting name="sorting">NONE</b:widget-setting> 
  <b:widget-setting name="text-1">twitter</b:widget-setting> 
  <b:widget-setting name="link-1">https://twitter.com/LiveBlogger1</b:widget-setting> 
  <b:widget-setting name="text-0">facebook</b:widget-setting> 
  <b:widget-setting name="link-2">#</b:widget-setting> 
  <b:widget-setting name="text-3">instagram</b:widget-setting> 
  <b:widget-setting name="link-0">https://www.facebook.com/soratemplates/</b:widget-setting> 
  <b:widget-setting name="text-2">bloglovin</b:widget-setting> 
  </b:widget-settings>
- <b:includable id="main">
- <div class="widget-content">
- <ul id="social">
- <b:loop values="data:links" var="link">
- <li>
  <a expr:class="data:link.name" expr:href="data:link.target" expr:title="data:link.name" /> 
  </li>
  </b:loop>
  </ul>
  </div>
  </b:includable>
  </b:widget>
  </b:section>
  </div>
  </div>
  </div> 
- <script>
  /* 
- <![CDATA[ */
/*! WOW wow.js - v1.3.0 - 2016-10-04
* https://wowjs.uk
* Copyright (c) 2016 Thomas Grainger; Licensed MIT */!function(a,b){if("function"==typeof define&&define.amd)define(["module","exports"],b);else if("undefined"!=typeof exports)b(module,exports);else{var c={exports:{}};b(c,c.exports),a.WOW=c.exports}}(this,function(a,b){"use strict";function c(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}function d(a,b){return b.indexOf(a)>=0}function e(a,b){for(var c in b)if(null==a[c]){var d=b[c];a[c]=d}return a}function f(a){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)}function g(a){var b=arguments.length<=1||void 0===arguments[1]?!1:arguments[1],c=arguments.length<=2||void 0===arguments[2]?!1:arguments[2],d=arguments.length<=3||void 0===arguments[3]?null:arguments[3],e=void 0;return null!=document.createEvent?(e=document.createEvent("CustomEvent"),e.initCustomEvent(a,b,c,d)):null!=document.createEventObject?(e=document.createEventObject(),e.eventType=a):e.eventName=a,e}function h(a,b){null!=a.dispatchEvent?a.dispatchEvent(b):b in(null!=a)?a[b]():"on"+b in(null!=a)&&a["on"+b]()}function i(a,b,c){null!=a.addEventListener?a.addEventListener(b,c,!1):null!=a.attachEvent?a.attachEvent("on"+b,c):a[b]=c}function j(a,b,c){null!=a.removeEventListener?a.removeEventListener(b,c,!1):null!=a.detachEvent?a.detachEvent("on"+b,c):delete a[b]}function k(){return"innerHeight"in window?window.innerHeight:document.documentElement.clientHeight}Object.defineProperty(b,"__esModule",{value:!0});var l,m,n=function(){function a(a,b){for(var c=0;c<b.length;c++){var d=b[c];d.enumerable=d.enumerable||!1,d.configurable=!0,"value"in d&&(d.writable=!0),Object.defineProperty(a,d.key,d)}}return function(b,c,d){return c&&a(b.prototype,c),d&&a(b,d),b}}(),o=window.WeakMap||window.MozWeakMap||function(){function a(){c(this,a),this.keys=[],this.values=[]}return n(a,[{key:"get",value:function(a){for(var b=0;b<this.keys.length;b++){var c=this.keys[b];if(c===a)return this.values[b]}}},{key:"set",value:function(a,b){for(var c=0;c<this.keys.length;c++){var d=this.keys[c];if(d===a)return this.values[c]=b,this}return this.keys.push(a),this.values.push(b),this}}]),a}(),p=window.MutationObserver||window.WebkitMutationObserver||window.MozMutationObserver||(m=l=function(){function a(){c(this,a),"undefined"!=typeof console&&null!==console&&(console.warn("MutationObserver is not supported by your browser."),console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content."))}return n(a,[{key:"observe",value:function(){}}]),a}(),l.notSupported=!0,m),q=window.getComputedStyle||function(a){var b=/(\-([a-z]){1})/g;return{getPropertyValue:function(c){"float"===c&&(c="styleFloat"),b.test(c)&&c.replace(b,function(a,b){return b.toUpperCase()});var d=a.currentStyle;return(null!=d?d[c]:void 0)||null}}},r=function(){function a(){var b=arguments.length<=0||void 0===arguments[0]?{}:arguments[0];c(this,a),this.defaults={boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0,callback:null,scrollContainer:null,resetAnimation:!0},this.animate=function(){return"requestAnimationFrame"in window?function(a){return window.requestAnimationFrame(a)}:function(a){return a()}}(),this.vendors=["moz","webkit"],this.start=this.start.bind(this),this.resetAnimation=this.resetAnimation.bind(this),this.scrollHandler=this.scrollHandler.bind(this),this.scrollCallback=this.scrollCallback.bind(this),this.scrolled=!0,this.config=e(b,this.defaults),null!=b.scrollContainer&&(this.config.scrollContainer=document.querySelector(b.scrollContainer)),this.animationNameCache=new o,this.wowEvent=g(this.config.boxClass)}return n(a,[{key:"init",value:function(){this.element=window.document.documentElement,d(document.readyState,["interactive","complete"])?this.start():i(document,"DOMContentLoaded",this.start),this.finished=[]}},{key:"start",value:function(){var a=this;if(this.stopped=!1,this.boxes=[].slice.call(this.element.querySelectorAll("."+this.config.boxClass)),this.all=this.boxes.slice(0),this.boxes.length)if(this.disabled())this.resetStyle();else for(var b=0;b<this.boxes.length;b++){var c=this.boxes[b];this.applyStyle(c,!0)}if(this.disabled()||(i(this.config.scrollContainer||window,"scroll",this.scrollHandler),i(window,"resize",this.scrollHandler),this.interval=setInterval(this.scrollCallback,50)),this.config.live){var d=new p(function(b){for(var c=0;c<b.length;c++)for(var d=b[c],e=0;e<d.addedNodes.length;e++){var f=d.addedNodes[e];a.doSync(f)}});d.observe(document.body,{childList:!0,subtree:!0})}}},{key:"stop",value:function(){this.stopped=!0,j(this.config.scrollContainer||window,"scroll",this.scrollHandler),j(window,"resize",this.scrollHandler),null!=this.interval&&clearInterval(this.interval)}},{key:"sync",value:function(){p.notSupported&&this.doSync(this.element)}},{key:"doSync",value:function(a){if("undefined"!=typeof a&&null!==a||(a=this.element),1===a.nodeType){a=a.parentNode||a;for(var b=a.querySelectorAll("."+this.config.boxClass),c=0;c<b.length;c++){var e=b[c];d(e,this.all)||(this.boxes.push(e),this.all.push(e),this.stopped||this.disabled()?this.resetStyle():this.applyStyle(e,!0),this.scrolled=!0)}}}},{key:"show",value:function(a){return this.applyStyle(a),a.className=a.className+" "+this.config.animateClass,null!=this.config.callback&&this.config.callback(a),h(a,this.wowEvent),this.config.resetAnimation&&(i(a,"animationend",this.resetAnimation),i(a,"oanimationend",this.resetAnimation),i(a,"webkitAnimationEnd",this.resetAnimation),i(a,"MSAnimationEnd",this.resetAnimation)),a}},{key:"applyStyle",value:function(a,b){var c=this,d=a.getAttribute("data-wow-duration"),e=a.getAttribute("data-wow-delay"),f=a.getAttribute("data-wow-iteration");return this.animate(function(){return c.customStyle(a,b,d,e,f)})}},{key:"resetStyle",value:function(){for(var a=0;a<this.boxes.length;a++){var b=this.boxes[a];b.style.visibility="visible"}}},{key:"resetAnimation",value:function(a){if(a.type.toLowerCase().indexOf("animationend")>=0){var b=a.target||a.srcElement;b.className=b.className.replace(this.config.animateClass,"").trim()}}},{key:"customStyle",value:function(a,b,c,d,e){return b&&this.cacheAnimationName(a),a.style.visibility=b?"hidden":"visible",c&&this.vendorSet(a.style,{animationDuration:c}),d&&this.vendorSet(a.style,{animationDelay:d}),e&&this.vendorSet(a.style,{animationIterationCount:e}),this.vendorSet(a.style,{animationName:b?"none":this.cachedAnimationName(a)}),a}},{key:"vendorSet",value:function(a,b){for(var c in b)if(b.hasOwnProperty(c)){var d=b[c];a[""+c]=d;for(var e=0;e<this.vendors.length;e++){var f=this.vendors[e];a[""+f+c.charAt(0).toUpperCase()+c.substr(1)]=d}}}},{key:"vendorCSS",value:function(a,b){for(var c=q(a),d=c.getPropertyCSSValue(b),e=0;e<this.vendors.length;e++){var f=this.vendors[e];d=d||c.getPropertyCSSValue("-"+f+"-"+b)}return d}},{key:"animationName",value:function(a){var b=void 0;try{b=this.vendorCSS(a,"animation-name").cssText}catch(c){b=q(a).getPropertyValue("animation-name")}return"none"===b?"":b}},{key:"cacheAnimationName",value:function(a){return this.animationNameCache.set(a,this.animationName(a))}},{key:"cachedAnimationName",value:function(a){return this.animationNameCache.get(a)}},{key:"scrollHandler",value:function(){this.scrolled=!0}},{key:"scrollCallback",value:function(){if(this.scrolled){this.scrolled=!1;for(var a=[],b=0;b<this.boxes.length;b++){var c=this.boxes[b];if(c){if(this.isVisible(c)){this.show(c);continue}a.push(c)}}this.boxes=a,this.boxes.length||this.config.live||this.stop()}}},{key:"offsetTop",value:function(a){for(;void 0===a.offsetTop;)a=a.parentNode;for(var b=a.offsetTop;a.offsetParent;)a=a.offsetParent,b+=a.offsetTop;return b}},{key:"isVisible",value:function(a){var b=a.getAttribute("data-wow-offset")||this.config.offset,c=this.config.scrollContainer&&this.config.scrollContainer.scrollTop||window.pageYOffset,d=c+Math.min(this.element.clientHeight,k())-b,e=this.offsetTop(a),f=e+a.clientHeight;return d>=e&&f>=c}},{key:"disabled",value:function(){return!this.config.mobile&&f(navigator.userAgent)}}]),a}();b["default"]=r,a.exports=b["default"]});

  new WOW().init();


// this has nothing to do with the animation, just forces the window to be a size that allows a scroll
var containerHeight = $(window).height() / 2;

$('.spacer').css("height", containerHeight);

// Find the height of the previous section, half it so when you have scrolled more than half past the section, it triggers the animation
var x = $('.skills').prev().height() / 4;

$(window).scroll(function() {
  // checks to see if you have scrolled far enough down to activate the animation
  if ($(window).scrollTop() >= x) {
    //find each element with the class .skill-percent
    $('.skill-percent').each(function() {
      // animate
      $(this).animate({
        //finds the width from the data-percent attribute
        width: $(this).data('percent') + '%'
      }, 1000);
    });
  }
});

/*
  ]]> 
  */ 
  </script>
- <script type="text/javascript">
  // 
- <![CDATA[ 
/*!
    SlickNav Responsive Mobile Menu
    (c) 2014 Josh Cope
    licensed under MIT
*/
;(function(e,t,n){function o(t,n){this.element=t;this.settings=e.extend({},r,n);this._defaults=r;this._name=i;this.init()}var r={label:"MENU",duplicate:true,duration:200,easingOpen:"swing",easingClose:"swing",closedSymbol:"&#9658;",openedSymbol:"&#9660;",prependTo:"body",parentTag:"a",closeOnClick:false,allowParentLinks:false,nestedParentLinks:true,showChildren:false,init:function(){},open:function(){},close:function(){}},i="slicknav",s="slicknav";o.prototype.init=function(){var n=this;var r=e(this.element);var i=this.settings;if(i.duplicate){n.mobileNav=r.clone();n.mobileNav.removeAttr("id");n.mobileNav.find("*").each(function(t,n){e(n).removeAttr("id")})}else n.mobileNav=r;var o=s+"_icon";if(i.label===""){o+=" "+s+"_no-text"}if(i.parentTag=="a"){i.parentTag='a href="#"'}n.mobileNav.attr("class",s+"_nav");var u=e('<div class="'+s+'_menu"></div>');n.btn=e("<"+i.parentTag+' aria-haspopup="true" tabindex="0" class="'+s+"_btn "+s+'_collapsed"><span class="'+s+'_menutxt">'+i.label+'</span><span class="'+o+'"><span class="'+s+'_icon-bar"></span><span class="'+s+'_icon-bar"></span><span class="'+s+'_icon-bar"></span></span></a>');e(u).append(n.btn);e(i.prependTo).prepend(u);u.append(n.mobileNav);var a=n.mobileNav.find("li");e(a).each(function(){var t=e(this);var r={};r.children=t.children("ul").attr("role","menu");t.data("menu",r);if(r.children.length>0){var o=t.contents();var u=false;var a=[];e(o).each(function(){if(!e(this).is("ul")){a.push(this)}else{return false}if(e(this).is("a")){u=true}});var f=e("<"+i.parentTag+' role="menuitem" aria-haspopup="true" tabindex="-1" class="'+s+'_item"/>');if(!i.allowParentLinks||i.nestedParentLinks||!u){var l=e(a).wrapAll(f).parent();l.addClass(s+"_row")}else e(a).wrapAll('<span class="'+s+"_parent-link "+s+'_row"/>').parent();t.addClass(s+"_collapsed");t.addClass(s+"_parent");var c=e('<span class="'+s+'_arrow">'+i.closedSymbol+"</span>");if(i.allowParentLinks&&!i.nestedParentLinks&&u)c=c.wrap(f).parent();e(a).last().after(c)}else if(t.children().length===0){t.addClass(s+"_txtnode")}t.children("a").attr("role","menuitem").click(function(t){if(i.closeOnClick&&!e(t.target).parent().closest("li").hasClass(s+"_parent"))e(n.btn).click()});if(i.closeOnClick&&i.allowParentLinks){t.children("a").children("a").click(function(t){e(n.btn).click()});t.find("."+s+"_parent-link a:not(."+s+"_item)").click(function(t){e(n.btn).click()})}});e(a).each(function(){var t=e(this).data("menu");if(!i.showChildren){n._visibilityToggle(t.children,null,false,null,true)}});n._visibilityToggle(n.mobileNav,null,false,"init",true);n.mobileNav.attr("role","menu");e(t).mousedown(function(){n._outlines(false)});e(t).keyup(function(){n._outlines(true)});e(n.btn).click(function(e){e.preventDefault();n._menuToggle()});n.mobileNav.on("click","."+s+"_item",function(t){t.preventDefault();n._itemClick(e(this))});e(n.btn).keydown(function(e){var t=e||event;if(t.keyCode==13){e.preventDefault();n._menuToggle()}});n.mobileNav.on("keydown","."+s+"_item",function(t){var r=t||event;if(r.keyCode==13){t.preventDefault();n._itemClick(e(t.target))}});if(i.allowParentLinks&&i.nestedParentLinks){e("."+s+"_item a").click(function(e){e.stopImmediatePropagation()})}};o.prototype._menuToggle=function(e){var t=this;var n=t.btn;var r=t.mobileNav;if(n.hasClass(s+"_collapsed")){n.removeClass(s+"_collapsed");n.addClass(s+"_open")}else{n.removeClass(s+"_open");n.addClass(s+"_collapsed")}n.addClass(s+"_animating");t._visibilityToggle(r,n.parent(),true,n)};o.prototype._itemClick=function(e){var t=this;var n=t.settings;var r=e.data("menu");if(!r){r={};r.arrow=e.children("."+s+"_arrow");r.ul=e.next("ul");r.parent=e.parent();if(r.parent.hasClass(s+"_parent-link")){r.parent=e.parent().parent();r.ul=e.parent().next("ul")}e.data("menu",r)}if(r.parent.hasClass(s+"_collapsed")){r.arrow.html(n.openedSymbol);r.parent.removeClass(s+"_collapsed");r.parent.addClass(s+"_open");r.parent.addClass(s+"_animating");t._visibilityToggle(r.ul,r.parent,true,e)}else{r.arrow.html(n.closedSymbol);r.parent.addClass(s+"_collapsed");r.parent.removeClass(s+"_open");r.parent.addClass(s+"_animating");t._visibilityToggle(r.ul,r.parent,true,e)}};o.prototype._visibilityToggle=function(t,n,r,i,o){var u=this;var a=u.settings;var f=u._getActionItems(t);var l=0;if(r)l=a.duration;if(t.hasClass(s+"_hidden")){t.removeClass(s+"_hidden");t.slideDown(l,a.easingOpen,function(){e(i).removeClass(s+"_animating");e(n).removeClass(s+"_animating");if(!o){a.open(i)}});t.attr("aria-hidden","false");f.attr("tabindex","0");u._setVisAttr(t,false)}else{t.addClass(s+"_hidden");t.slideUp(l,this.settings.easingClose,function(){t.attr("aria-hidden","true");f.attr("tabindex","-1");u._setVisAttr(t,true);t.hide();e(i).removeClass(s+"_animating");e(n).removeClass(s+"_animating");if(!o)a.close(i);else if(i=="init")a.init()})}};o.prototype._setVisAttr=function(t,n){var r=this;var i=t.children("li").children("ul").not("."+s+"_hidden");if(!n){i.each(function(){var t=e(this);t.attr("aria-hidden","false");var i=r._getActionItems(t);i.attr("tabindex","0");r._setVisAttr(t,n)})}else{i.each(function(){var t=e(this);t.attr("aria-hidden","true");var i=r._getActionItems(t);i.attr("tabindex","-1");r._setVisAttr(t,n)})}};o.prototype._getActionItems=function(e){var t=e.data("menu");if(!t){t={};var n=e.children("li");var r=n.find("a");t.links=r.add(n.find("."+s+"_item"));e.data("menu",t)}return t.links};o.prototype._outlines=function(t){if(!t){e("."+s+"_item, ."+s+"_btn").css("outline","none")}else{e("."+s+"_item, ."+s+"_btn").css("outline","")}};o.prototype.toggle=function(){var e=this;e._menuToggle()};o.prototype.open=function(){var e=this;if(e.btn.hasClass(s+"_collapsed")){e._menuToggle()}};o.prototype.close=function(){var e=this;if(e.btn.hasClass(s+"_open")){e._menuToggle()}};e.fn[i]=function(t){var n=arguments;if(t===undefined||typeof t==="object"){return this.each(function(){if(!e.data(this,"plugin_"+i)){e.data(this,"plugin_"+i,new o(this,t))}})}else if(typeof t==="string"&&t[0]!=="_"&&t!=="init"){var r;this.each(function(){var s=e.data(this,"plugin_"+i);if(s instanceof o&&typeof s[t]==="function"){r=s[t].apply(s,Array.prototype.slice.call(n,1))}});return r!==undefined?r:this}}})(jQuery,document,window)

!function(t){"use strict";var s=function(s,o){this.el=t(s),this.options=t.extend({},t.fn.typed.defaults,o),this.baseText=this.el.text()||this.el.attr("placeholder")||"",this.typeSpeed=this.options.typeSpeed,this.startDelay=this.options.startDelay,this.backSpeed=this.options.backSpeed,this.backDelay=this.options.backDelay,this.strings=this.options.strings,this.strPos=0,this.arrayPos=0,this.stopNum=0,this.loop=this.options.loop,this.loopCount=this.options.loopCount,this.curLoop=0,this.stop=!1,this.showCursor=!this.isInput&&this.options.showCursor,this.cursorChar=this.options.cursorChar,this.isInput=this.el.is("input"),this.attr=this.options.attr||(this.isInput?"placeholder":null),this.build()};s.prototype={constructor:s,init:function(){var t=this;t.timeout=setTimeout(function(){t.typewrite(t.strings[t.arrayPos],t.strPos)},t.startDelay)},build:function(){!0===this.showCursor&&(this.cursor=t('<span class="typed-cursor">'+this.cursorChar+"</span>"),this.el.after(this.cursor)),this.init()},typewrite:function(t,s){if(!0!==this.stop){var o=Math.round(70*Math.random())+this.typeSpeed,i=this;i.timeout=setTimeout(function(){var o=0,e=t.substr(s);if("^"===e.charAt(0)){var r=1;/^\^\d+/.test(e)&&(r+=(e=/\d+/.exec(e)[0]).length,o=parseInt(e)),t=t.substring(0,s)+t.substring(s+r)}i.timeout=setTimeout(function(){if(s===t.length){if(i.options.onStringTyped(i.arrayPos),i.arrayPos===i.strings.length-1&&(i.options.callback(),i.curLoop++,!1===i.loop||i.curLoop===i.loopCount))return;i.timeout=setTimeout(function(){i.backspace(t,s)},i.backDelay)}else{0===s&&i.options.preStringTyped(i.arrayPos);var o=i.baseText+t.substr(0,s+1);i.attr?i.el.attr(i.attr,o):i.el.text(o),s++,i.typewrite(t,s)}},o)},o)}},backspace:function(t,s){if(!0!==this.stop){var o=Math.round(70*Math.random())+this.backSpeed,i=this;i.timeout=setTimeout(function(){var o=i.baseText+t.substr(0,s);i.attr?i.el.attr(i.attr,o):i.el.text(o),s>i.stopNum?(s--,i.backspace(t,s)):s<=i.stopNum&&(i.arrayPos++,i.arrayPos===i.strings.length?(i.arrayPos=0,i.init()):i.typewrite(i.strings[i.arrayPos],s))},o)}},reset:function(){clearInterval(this.timeout);var t=this.el.attr("id");this.el.after('<span id="'+t+'"/>'),this.el.remove(),this.cursor.remove(),this.options.resetCallback()}},t.fn.typed=function(o){return this.each(function(){var i=t(this),e=i.data("typed"),r="object"==typeof o&&o;e||i.data("typed",e=new s(this,r)),"string"==typeof o&&e[o]()})},t.fn.typed.defaults={strings:["These are the default values...","You know what you should do?","Use your own!","Have a great day!"],typeSpeed:0,startDelay:0,backSpeed:0,backDelay:1500,loop:!0,loopCount:!1,showCursor:!0,cursorChar:"|",attr:null,callback:function(){},preStringTyped:function(){},onStringTyped:function(){},resetCallback:function(){}}}(window.jQuery);

/*! Owl carousel by Bartosz Wojciechowski/David Deutsch | v2.0.0 - http://owlcarousel2.github.io/OwlCarousel2 */
!function(a,b,c,d){function e(b,c){this.settings=null,this.options=a.extend({},e.Defaults,c),this.$element=a(b),this.drag=a.extend({},m),this.state=a.extend({},n),this.e=a.extend({},o),this._plugins={},this._supress={},this._current=null,this._speed=null,this._coordinates=[],this._breakpoint=null,this._width=null,this._items=[],this._clones=[],this._mergers=[],this._invalidated={},this._pipe=[],a.each(e.Plugins,a.proxy(function(a,b){this._plugins[a[0].toLowerCase()+a.slice(1)]=new b(this)},this)),a.each(e.Pipe,a.proxy(function(b,c){this._pipe.push({filter:c.filter,run:a.proxy(c.run,this)})},this)),this.setup(),this.initialize()}function f(a){if(a.touches!==d)return{x:a.touches[0].pageX,y:a.touches[0].pageY};if(a.touches===d){if(a.pageX!==d)return{x:a.pageX,y:a.pageY};if(a.pageX===d)return{x:a.clientX,y:a.clientY}}}function g(a){var b,d,e=c.createElement("div"),f=a;for(b in f)if(d=f[b],"undefined"!=typeof e.style[d])return e=null,[d,b];return[!1]}function h(){return g(["transition","WebkitTransition","MozTransition","OTransition"])[1]}function i(){return g(["transform","WebkitTransform","MozTransform","OTransform","msTransform"])[0]}function j(){return g(["perspective","webkitPerspective","MozPerspective","OPerspective","MsPerspective"])[0]}function k(){return"ontouchstart"in b||!!navigator.msMaxTouchPoints}function l(){return b.navigator.msPointerEnabled}var m,n,o;m={start:0,startX:0,startY:0,current:0,currentX:0,currentY:0,offsetX:0,offsetY:0,distance:null,startTime:0,endTime:0,updatedX:0,targetEl:null},n={isTouch:!1,isScrolling:!1,isSwiping:!1,direction:!1,inMotion:!1},o={_onDragStart:null,_onDragMove:null,_onDragEnd:null,_transitionEnd:null,_resizer:null,_responsiveCall:null,_goToLoop:null,_checkVisibile:null},e.Defaults={items:3,loop:!1,center:!1,mouseDrag:!0,touchDrag:!0,pullDrag:!0,freeDrag:!1,margin:0,stagePadding:0,merge:!1,mergeFit:!0,autoWidth:!1,startPosition:0,rtl:!1,smartSpeed:250,fluidSpeed:!1,dragEndSpeed:!1,responsive:{},responsiveRefreshRate:200,responsiveBaseElement:b,responsiveClass:!1,fallbackEasing:"swing",info:!1,nestedItemSelector:!1,itemElement:"div",stageElement:"div",themeClass:"owl-theme",baseClass:"owl-carousel",itemClass:"owl-item",centerClass:"center",activeClass:"active"},e.Width={Default:"default",Inner:"inner",Outer:"outer"},e.Plugins={},e.Pipe=[{filter:["width","items","settings"],run:function(a){a.current=this._items&&this._items[this.relative(this._current)]}},{filter:["items","settings"],run:function(){var a=this._clones,b=this.$stage.children(".cloned");(b.length!==a.length||!this.settings.loop&&a.length>0)&&(this.$stage.children(".cloned").remove(),this._clones=[])}},{filter:["items","settings"],run:function(){var a,b,c=this._clones,d=this._items,e=this.settings.loop?c.length-Math.max(2*this.settings.items,4):0;for(a=0,b=Math.abs(e/2);b>a;a++)e>0?(this.$stage.children().eq(d.length+c.length-1).remove(),c.pop(),this.$stage.children().eq(0).remove(),c.pop()):(c.push(c.length/2),this.$stage.append(d[c[c.length-1]].clone().addClass("cloned")),c.push(d.length-1-(c.length-1)/2),this.$stage.prepend(d[c[c.length-1]].clone().addClass("cloned")))}},{filter:["width","items","settings"],run:function(){var a,b,c,d=this.settings.rtl?1:-1,e=(this.width()/this.settings.items).toFixed(3),f=0;for(this._coordinates=[],b=0,c=this._clones.length+this._items.length;c>b;b++)a=this._mergers[this.relative(b)],a=this.settings.mergeFit&&Math.min(a,this.settings.items)||a,f+=(this.settings.autoWidth?this._items[this.relative(b)].width()+this.settings.margin:e*a)*d,this._coordinates.push(f)}},{filter:["width","items","settings"],run:function(){var b,c,d=(this.width()/this.settings.items).toFixed(3),e={width:Math.abs(this._coordinates[this._coordinates.length-1])+2*this.settings.stagePadding,"padding-left":this.settings.stagePadding||"","padding-right":this.settings.stagePadding||""};if(this.$stage.css(e),e={width:this.settings.autoWidth?"auto":d-this.settings.margin},e[this.settings.rtl?"margin-left":"margin-right"]=this.settings.margin,!this.settings.autoWidth&&a.grep(this._mergers,function(a){return a>1}).length>0)for(b=0,c=this._coordinates.length;c>b;b++)e.width=Math.abs(this._coordinates[b])-Math.abs(this._coordinates[b-1]||0)-this.settings.margin,this.$stage.children().eq(b).css(e);else this.$stage.children().css(e)}},{filter:["width","items","settings"],run:function(a){a.current&&this.reset(this.$stage.children().index(a.current))}},{filter:["position"],run:function(){this.animate(this.coordinates(this._current))}},{filter:["width","position","items","settings"],run:function(){var a,b,c,d,e=this.settings.rtl?1:-1,f=2*this.settings.stagePadding,g=this.coordinates(this.current())+f,h=g+this.width()*e,i=[];for(c=0,d=this._coordinates.length;d>c;c++)a=this._coordinates[c-1]||0,b=Math.abs(this._coordinates[c])+f*e,(this.op(a,"<=",g)&&this.op(a,">",h)||this.op(b,"<",g)&&this.op(b,">",h))&&i.push(c);this.$stage.children("."+this.settings.activeClass).removeClass(this.settings.activeClass),this.$stage.children(":eq("+i.join("), :eq(")+")").addClass(this.settings.activeClass),this.settings.center&&(this.$stage.children("."+this.settings.centerClass).removeClass(this.settings.centerClass),this.$stage.children().eq(this.current()).addClass(this.settings.centerClass))}}],e.prototype.initialize=function(){if(this.trigger("initialize"),this.$element.addClass(this.settings.baseClass).addClass(this.settings.themeClass).toggleClass("owl-rtl",this.settings.rtl),this.browserSupport(),this.settings.autoWidth&&this.state.imagesLoaded!==!0){var b,c,e;if(b=this.$element.find("img"),c=this.settings.nestedItemSelector?"."+this.settings.nestedItemSelector:d,e=this.$element.children(c).width(),b.length&&0>=e)return this.preloadAutoWidthImages(b),!1}this.$element.addClass("owl-loading"),this.$stage=a("<"+this.settings.stageElement+' class="owl-stage"/>').wrap('<div class="owl-stage-outer">'),this.$element.append(this.$stage.parent()),this.replace(this.$element.children().not(this.$stage.parent())),this._width=this.$element.width(),this.refresh(),this.$element.removeClass("owl-loading").addClass("owl-loaded"),this.eventsCall(),this.internalEvents(),this.addTriggerableEvents(),this.trigger("initialized")},e.prototype.setup=function(){var b=this.viewport(),c=this.options.responsive,d=-1,e=null;c?(a.each(c,function(a){b>=a&&a>d&&(d=Number(a))}),e=a.extend({},this.options,c[d]),delete e.responsive,e.responsiveClass&&this.$element.attr("class",function(a,b){return b.replace(/\b owl-responsive-\S+/g,"")}).addClass("owl-responsive-"+d)):e=a.extend({},this.options),(null===this.settings||this._breakpoint!==d)&&(this.trigger("change",{property:{name:"settings",value:e}}),this._breakpoint=d,this.settings=e,this.invalidate("settings"),this.trigger("changed",{property:{name:"settings",value:this.settings}}))},e.prototype.optionsLogic=function(){this.$element.toggleClass("owl-center",this.settings.center),this.settings.loop&&this._items.length<this.settings.items&&(this.settings.loop=!1),this.settings.autoWidth&&(this.settings.stagePadding=!1,this.settings.merge=!1)},e.prototype.prepare=function(b){var c=this.trigger("prepare",{content:b});return c.data||(c.data=a("<"+this.settings.itemElement+"/>").addClass(this.settings.itemClass).append(b)),this.trigger("prepared",{content:c.data}),c.data},e.prototype.update=function(){for(var b=0,c=this._pipe.length,d=a.proxy(function(a){return this[a]},this._invalidated),e={};c>b;)(this._invalidated.all||a.grep(this._pipe[b].filter,d).length>0)&&this._pipe[b].run(e),b++;this._invalidated={}},e.prototype.width=function(a){switch(a=a||e.Width.Default){case e.Width.Inner:case e.Width.Outer:return this._width;default:return this._width-2*this.settings.stagePadding+this.settings.margin}},e.prototype.refresh=function(){if(0===this._items.length)return!1;(new Date).getTime();this.trigger("refresh"),this.setup(),this.optionsLogic(),this.$stage.addClass("owl-refresh"),this.update(),this.$stage.removeClass("owl-refresh"),this.state.orientation=b.orientation,this.watchVisibility(),this.trigger("refreshed")},e.prototype.eventsCall=function(){this.e._onDragStart=a.proxy(function(a){this.onDragStart(a)},this),this.e._onDragMove=a.proxy(function(a){this.onDragMove(a)},this),this.e._onDragEnd=a.proxy(function(a){this.onDragEnd(a)},this),this.e._onResize=a.proxy(function(a){this.onResize(a)},this),this.e._transitionEnd=a.proxy(function(a){this.transitionEnd(a)},this),this.e._preventClick=a.proxy(function(a){this.preventClick(a)},this)},e.prototype.onThrottledResize=function(){b.clearTimeout(this.resizeTimer),this.resizeTimer=b.setTimeout(this.e._onResize,this.settings.responsiveRefreshRate)},e.prototype.onResize=function(){return this._items.length?this._width===this.$element.width()?!1:this.trigger("resize").isDefaultPrevented()?!1:(this._width=this.$element.width(),this.invalidate("width"),this.refresh(),void this.trigger("resized")):!1},e.prototype.eventsRouter=function(a){var b=a.type;"mousedown"===b||"touchstart"===b?this.onDragStart(a):"mousemove"===b||"touchmove"===b?this.onDragMove(a):"mouseup"===b||"touchend"===b?this.onDragEnd(a):"touchcancel"===b&&this.onDragEnd(a)},e.prototype.internalEvents=function(){var c=(k(),l());this.settings.mouseDrag?(this.$stage.on("mousedown",a.proxy(function(a){this.eventsRouter(a)},this)),this.$stage.on("dragstart",function(){return!1}),this.$stage.get(0).onselectstart=function(){return!1}):this.$element.addClass("owl-text-select-on"),this.settings.touchDrag&&!c&&this.$stage.on("touchstart touchcancel",a.proxy(function(a){this.eventsRouter(a)},this)),this.transitionEndVendor&&this.on(this.$stage.get(0),this.transitionEndVendor,this.e._transitionEnd,!1),this.settings.responsive!==!1&&this.on(b,"resize",a.proxy(this.onThrottledResize,this))},e.prototype.onDragStart=function(d){var e,g,h,i;if(e=d.originalEvent||d||b.event,3===e.which||this.state.isTouch)return!1;if("mousedown"===e.type&&this.$stage.addClass("owl-grab"),this.trigger("drag"),this.drag.startTime=(new Date).getTime(),this.speed(0),this.state.isTouch=!0,this.state.isScrolling=!1,this.state.isSwiping=!1,this.drag.distance=0,g=f(e).x,h=f(e).y,this.drag.offsetX=this.$stage.position().left,this.drag.offsetY=this.$stage.position().top,this.settings.rtl&&(this.drag.offsetX=this.$stage.position().left+this.$stage.width()-this.width()+this.settings.margin),this.state.inMotion&&this.support3d)i=this.getTransformProperty(),this.drag.offsetX=i,this.animate(i),this.state.inMotion=!0;else if(this.state.inMotion&&!this.support3d)return this.state.inMotion=!1,!1;this.drag.startX=g-this.drag.offsetX,this.drag.startY=h-this.drag.offsetY,this.drag.start=g-this.drag.startX,this.drag.targetEl=e.target||e.srcElement,this.drag.updatedX=this.drag.start,("IMG"===this.drag.targetEl.tagName||"A"===this.drag.targetEl.tagName)&&(this.drag.targetEl.draggable=!1),a(c).on("mousemove.owl.dragEvents mouseup.owl.dragEvents touchmove.owl.dragEvents touchend.owl.dragEvents",a.proxy(function(a){this.eventsRouter(a)},this))},e.prototype.onDragMove=function(a){var c,e,g,h,i,j;this.state.isTouch&&(this.state.isScrolling||(c=a.originalEvent||a||b.event,e=f(c).x,g=f(c).y,this.drag.currentX=e-this.drag.startX,this.drag.currentY=g-this.drag.startY,this.drag.distance=this.drag.currentX-this.drag.offsetX,this.drag.distance<0?this.state.direction=this.settings.rtl?"right":"left":this.drag.distance>0&&(this.state.direction=this.settings.rtl?"left":"right"),this.settings.loop?this.op(this.drag.currentX,">",this.coordinates(this.minimum()))&&"right"===this.state.direction?this.drag.currentX-=(this.settings.center&&this.coordinates(0))-this.coordinates(this._items.length):this.op(this.drag.currentX,"<",this.coordinates(this.maximum()))&&"left"===this.state.direction&&(this.drag.currentX+=(this.settings.center&&this.coordinates(0))-this.coordinates(this._items.length)):(h=this.coordinates(this.settings.rtl?this.maximum():this.minimum()),i=this.coordinates(this.settings.rtl?this.minimum():this.maximum()),j=this.settings.pullDrag?this.drag.distance/5:0,this.drag.currentX=Math.max(Math.min(this.drag.currentX,h+j),i+j)),(this.drag.distance>8||this.drag.distance<-8)&&(c.preventDefault!==d?c.preventDefault():c.returnValue=!1,this.state.isSwiping=!0),this.drag.updatedX=this.drag.currentX,(this.drag.currentY>16||this.drag.currentY<-16)&&this.state.isSwiping===!1&&(this.state.isScrolling=!0,this.drag.updatedX=this.drag.start),this.animate(this.drag.updatedX)))},e.prototype.onDragEnd=function(b){var d,e,f;if(this.state.isTouch){if("mouseup"===b.type&&this.$stage.removeClass("owl-grab"),this.trigger("dragged"),this.drag.targetEl.removeAttribute("draggable"),this.state.isTouch=!1,this.state.isScrolling=!1,this.state.isSwiping=!1,0===this.drag.distance&&this.state.inMotion!==!0)return this.state.inMotion=!1,!1;this.drag.endTime=(new Date).getTime(),d=this.drag.endTime-this.drag.startTime,e=Math.abs(this.drag.distance),(e>3||d>300)&&this.removeClick(this.drag.targetEl),f=this.closest(this.drag.updatedX),this.speed(this.settings.dragEndSpeed||this.settings.smartSpeed),this.current(f),this.invalidate("position"),this.update(),this.settings.pullDrag||this.drag.updatedX!==this.coordinates(f)||this.transitionEnd(),this.drag.distance=0,a(c).off(".owl.dragEvents")}},e.prototype.removeClick=function(c){this.drag.targetEl=c,a(c).on("click.preventClick",this.e._preventClick),b.setTimeout(function(){a(c).off("click.preventClick")},300)},e.prototype.preventClick=function(b){b.preventDefault?b.preventDefault():b.returnValue=!1,b.stopPropagation&&b.stopPropagation(),a(b.target).off("click.preventClick")},e.prototype.getTransformProperty=function(){var a,c;return a=b.getComputedStyle(this.$stage.get(0),null).getPropertyValue(this.vendorName+"transform"),a=a.replace(/matrix(3d)?\(|\)/g,"").split(","),c=16===a.length,c!==!0?a[4]:a[12]},e.prototype.closest=function(b){var c=-1,d=30,e=this.width(),f=this.coordinates();return this.settings.freeDrag||a.each(f,a.proxy(function(a,g){return b>g-d&&g+d>b?c=a:this.op(b,"<",g)&&this.op(b,">",f[a+1]||g-e)&&(c="left"===this.state.direction?a+1:a),-1===c},this)),this.settings.loop||(this.op(b,">",f[this.minimum()])?c=b=this.minimum():this.op(b,"<",f[this.maximum()])&&(c=b=this.maximum())),c},e.prototype.animate=function(b){this.trigger("translate"),this.state.inMotion=this.speed()>0,this.support3d?this.$stage.css({transform:"translate3d("+b+"px,0px, 0px)",transition:this.speed()/1e3+"s"}):this.state.isTouch?this.$stage.css({left:b+"px"}):this.$stage.animate({left:b},this.speed()/1e3,this.settings.fallbackEasing,a.proxy(function(){this.state.inMotion&&this.transitionEnd()},this))},e.prototype.current=function(a){if(a===d)return this._current;if(0===this._items.length)return d;if(a=this.normalize(a),this._current!==a){var b=this.trigger("change",{property:{name:"position",value:a}});b.data!==d&&(a=this.normalize(b.data)),this._current=a,this.invalidate("position"),this.trigger("changed",{property:{name:"position",value:this._current}})}return this._current},e.prototype.invalidate=function(a){this._invalidated[a]=!0},e.prototype.reset=function(a){a=this.normalize(a),a!==d&&(this._speed=0,this._current=a,this.suppress(["translate","translated"]),this.animate(this.coordinates(a)),this.release(["translate","translated"]))},e.prototype.normalize=function(b,c){var e=c?this._items.length:this._items.length+this._clones.length;return!a.isNumeric(b)||1>e?d:b=this._clones.length?(b%e+e)%e:Math.max(this.minimum(c),Math.min(this.maximum(c),b))},e.prototype.relative=function(a){return a=this.normalize(a),a-=this._clones.length/2,this.normalize(a,!0)},e.prototype.maximum=function(a){var b,c,d,e=0,f=this.settings;if(a)return this._items.length-1;if(!f.loop&&f.center)b=this._items.length-1;else if(f.loop||f.center)if(f.loop||f.center)b=this._items.length+f.items;else{if(!f.autoWidth&&!f.merge)throw"Can not detect maximum absolute position.";for(revert=f.rtl?1:-1,c=this.$stage.width()-this.$element.width();(d=this.coordinates(e))&&!(d*revert>=c);)b=++e}else b=this._items.length-f.items;return b},e.prototype.minimum=function(a){return a?0:this._clones.length/2},e.prototype.items=function(a){return a===d?this._items.slice():(a=this.normalize(a,!0),this._items[a])},e.prototype.mergers=function(a){return a===d?this._mergers.slice():(a=this.normalize(a,!0),this._mergers[a])},e.prototype.clones=function(b){var c=this._clones.length/2,e=c+this._items.length,f=function(a){return a%2===0?e+a/2:c-(a+1)/2};return b===d?a.map(this._clones,function(a,b){return f(b)}):a.map(this._clones,function(a,c){return a===b?f(c):null})},e.prototype.speed=function(a){return a!==d&&(this._speed=a),this._speed},e.prototype.coordinates=function(b){var c=null;return b===d?a.map(this._coordinates,a.proxy(function(a,b){return this.coordinates(b)},this)):(this.settings.center?(c=this._coordinates[b],c+=(this.width()-c+(this._coordinates[b-1]||0))/2*(this.settings.rtl?-1:1)):c=this._coordinates[b-1]||0,c)},e.prototype.duration=function(a,b,c){return Math.min(Math.max(Math.abs(b-a),1),6)*Math.abs(c||this.settings.smartSpeed)},e.prototype.to=function(c,d){if(this.settings.loop){var e=c-this.relative(this.current()),f=this.current(),g=this.current(),h=this.current()+e,i=0>g-h?!0:!1,j=this._clones.length+this._items.length;h<this.settings.items&&i===!1?(f=g+this._items.length,this.reset(f)):h>=j-this.settings.items&&i===!0&&(f=g-this._items.length,this.reset(f)),b.clearTimeout(this.e._goToLoop),this.e._goToLoop=b.setTimeout(a.proxy(function(){this.speed(this.duration(this.current(),f+e,d)),this.current(f+e),this.update()},this),30)}else this.speed(this.duration(this.current(),c,d)),this.current(c),this.update()},e.prototype.next=function(a){a=a||!1,this.to(this.relative(this.current())+1,a)},e.prototype.prev=function(a){a=a||!1,this.to(this.relative(this.current())-1,a)},e.prototype.transitionEnd=function(a){return a!==d&&(a.stopPropagation(),(a.target||a.srcElement||a.originalTarget)!==this.$stage.get(0))?!1:(this.state.inMotion=!1,void this.trigger("translated"))},e.prototype.viewport=function(){var d;if(this.options.responsiveBaseElement!==b)d=a(this.options.responsiveBaseElement).width();else if(b.innerWidth)d=b.innerWidth;else{if(!c.documentElement||!c.documentElement.clientWidth)throw"Can not detect viewport width.";d=c.documentElement.clientWidth}return d},e.prototype.replace=function(b){this.$stage.empty(),this._items=[],b&&(b=b instanceof jQuery?b:a(b)),this.settings.nestedItemSelector&&(b=b.find("."+this.settings.nestedItemSelector)),b.filter(function(){return 1===this.nodeType}).each(a.proxy(function(a,b){b=this.prepare(b),this.$stage.append(b),this._items.push(b),this._mergers.push(1*b.find("[data-merge]").andSelf("[data-merge]").attr("data-merge")||1)},this)),this.reset(a.isNumeric(this.settings.startPosition)?this.settings.startPosition:0),this.invalidate("items")},e.prototype.add=function(a,b){b=b===d?this._items.length:this.normalize(b,!0),this.trigger("add",{content:a,position:b}),0===this._items.length||b===this._items.length?(this.$stage.append(a),this._items.push(a),this._mergers.push(1*a.find("[data-merge]").andSelf("[data-merge]").attr("data-merge")||1)):(this._items[b].before(a),this._items.splice(b,0,a),this._mergers.splice(b,0,1*a.find("[data-merge]").andSelf("[data-merge]").attr("data-merge")||1)),this.invalidate("items"),this.trigger("added",{content:a,position:b})},e.prototype.remove=function(a){a=this.normalize(a,!0),a!==d&&(this.trigger("remove",{content:this._items[a],position:a}),this._items[a].remove(),this._items.splice(a,1),this._mergers.splice(a,1),this.invalidate("items"),this.trigger("removed",{content:null,position:a}))},e.prototype.addTriggerableEvents=function(){var b=a.proxy(function(b,c){return a.proxy(function(a){a.relatedTarget!==this&&(this.suppress([c]),b.apply(this,[].slice.call(arguments,1)),this.release([c]))},this)},this);a.each({next:this.next,prev:this.prev,to:this.to,destroy:this.destroy,refresh:this.refresh,replace:this.replace,add:this.add,remove:this.remove},a.proxy(function(a,c){this.$element.on(a+".owl.carousel",b(c,a+".owl.carousel"))},this))},e.prototype.watchVisibility=function(){function c(a){return a.offsetWidth>0&&a.offsetHeight>0}function d(){c(this.$element.get(0))&&(this.$element.removeClass("owl-hidden"),this.refresh(),b.clearInterval(this.e._checkVisibile))}c(this.$element.get(0))||(this.$element.addClass("owl-hidden"),b.clearInterval(this.e._checkVisibile),this.e._checkVisibile=b.setInterval(a.proxy(d,this),500))},e.prototype.preloadAutoWidthImages=function(b){var c,d,e,f;c=0,d=this,b.each(function(g,h){e=a(h),f=new Image,f.onload=function(){c++,e.attr("src",f.src),e.css("opacity",1),c>=b.length&&(d.state.imagesLoaded=!0,d.initialize())},f.src=e.attr("src")||e.attr("data-src")||e.attr("data-src-retina")})},e.prototype.destroy=function(){this.$element.hasClass(this.settings.themeClass)&&this.$element.removeClass(this.settings.themeClass),this.settings.responsive!==!1&&a(b).off("resize.owl.carousel"),this.transitionEndVendor&&this.off(this.$stage.get(0),this.transitionEndVendor,this.e._transitionEnd);for(var d in this._plugins)this._plugins[d].destroy();(this.settings.mouseDrag||this.settings.touchDrag)&&(this.$stage.off("mousedown touchstart touchcancel"),a(c).off(".owl.dragEvents"),this.$stage.get(0).onselectstart=function(){},this.$stage.off("dragstart",function(){return!1})),this.$element.off(".owl"),this.$stage.children(".cloned").remove(),this.e=null,this.$element.removeData("owlCarousel"),this.$stage.children().contents().unwrap(),this.$stage.children().unwrap(),this.$stage.unwrap()},e.prototype.op=function(a,b,c){var d=this.settings.rtl;switch(b){case"<":return d?a>c:c>a;case">":return d?c>a:a>c;case">=":return d?c>=a:a>=c;case"<=":return d?a>=c:c>=a}},e.prototype.on=function(a,b,c,d){a.addEventListener?a.addEventListener(b,c,d):a.attachEvent&&a.attachEvent("on"+b,c)},e.prototype.off=function(a,b,c,d){a.removeEventListener?a.removeEventListener(b,c,d):a.detachEvent&&a.detachEvent("on"+b,c)},e.prototype.trigger=function(b,c,d){var e={item:{count:this._items.length,index:this.current()}},f=a.camelCase(a.grep(["on",b,d],function(a){return a}).join("-").toLowerCase()),g=a.Event([b,"owl",d||"carousel"].join(".").toLowerCase(),a.extend({relatedTarget:this},e,c));return this._supress[b]||(a.each(this._plugins,function(a,b){b.onTrigger&&b.onTrigger(g)}),this.$element.trigger(g),this.settings&&"function"==typeof this.settings[f]&&this.settings[f].apply(this,g)),g},e.prototype.suppress=function(b){a.each(b,a.proxy(function(a,b){this._supress[b]=!0},this))},e.prototype.release=function(b){a.each(b,a.proxy(function(a,b){delete this._supress[b]},this))},e.prototype.browserSupport=function(){if(this.support3d=j(),this.support3d){this.transformVendor=i();var a=["transitionend","webkitTransitionEnd","transitionend","oTransitionEnd"];this.transitionEndVendor=a[h()],this.vendorName=this.transformVendor.replace(/Transform/i,""),this.vendorName=""!==this.vendorName?"-"+this.vendorName.toLowerCase()+"-":""}this.state.orientation=b.orientation},a.fn.owlCarousel=function(b){return this.each(function(){a(this).data("owlCarousel")||a(this).data("owlCarousel",new e(this,b))})},a.fn.owlCarousel.Constructor=e}(window.Zepto||window.jQuery,window,document),function(a,b){var c=function(b){this._core=b,this._loaded=[],this._handlers={"initialized.owl.carousel change.owl.carousel":a.proxy(function(b){if(b.namespace&&this._core.settings&&this._core.settings.lazyLoad&&(b.property&&"position"==b.property.name||"initialized"==b.type))for(var c=this._core.settings,d=c.center&&Math.ceil(c.items/2)||c.items,e=c.center&&-1*d||0,f=(b.property&&b.property.value||this._core.current())+e,g=this._core.clones().length,h=a.proxy(function(a,b){this.load(b)},this);e++<d;)this.load(g/2+this._core.relative(f)),g&&a.each(this._core.clones(this._core.relative(f++)),h)},this)},this._core.options=a.extend({},c.Defaults,this._core.options),this._core.$element.on(this._handlers)};c.Defaults={lazyLoad:!1},c.prototype.load=function(c){var d=this._core.$stage.children().eq(c),e=d&&d.find(".owl-lazy");!e||a.inArray(d.get(0),this._loaded)>-1||(e.each(a.proxy(function(c,d){var e,f=a(d),g=b.devicePixelRatio>1&&f.attr("data-src-retina")||f.attr("data-src");this._core.trigger("load",{element:f,url:g},"lazy"),f.is("img")?f.one("load.owl.lazy",a.proxy(function(){f.css("opacity",1),this._core.trigger("loaded",{element:f,url:g},"lazy")},this)).attr("src",g):(e=new Image,e.onload=a.proxy(function(){f.css({"background-image":"url("+g+")",opacity:"1"}),this._core.trigger("loaded",{element:f,url:g},"lazy")},this),e.src=g)},this)),this._loaded.push(d.get(0)))},c.prototype.destroy=function(){var a,b;for(a in this.handlers)this._core.$element.off(a,this.handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Lazy=c}(window.Zepto||window.jQuery,window,document),function(a){var b=function(c){this._core=c,this._handlers={"initialized.owl.carousel":a.proxy(function(){this._core.settings.autoHeight&&this.update()},this),"changed.owl.carousel":a.proxy(function(a){this._core.settings.autoHeight&&"position"==a.property.name&&this.update()},this),"loaded.owl.lazy":a.proxy(function(a){this._core.settings.autoHeight&&a.element.closest("."+this._core.settings.itemClass)===this._core.$stage.children().eq(this._core.current())&&this.update()},this)},this._core.options=a.extend({},b.Defaults,this._core.options),this._core.$element.on(this._handlers)};b.Defaults={autoHeight:!1,autoHeightClass:"owl-height"},b.prototype.update=function(){this._core.$stage.parent().height(this._core.$stage.children().eq(this._core.current()).height()).addClass(this._core.settings.autoHeightClass)},b.prototype.destroy=function(){var a,b;for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.AutoHeight=b}(window.Zepto||window.jQuery,window,document),function(a,b,c){var d=function(b){this._core=b,this._videos={},this._playing=null,this._fullscreen=!1,this._handlers={"resize.owl.carousel":a.proxy(function(a){this._core.settings.video&&!this.isInFullScreen()&&a.preventDefault()},this),"refresh.owl.carousel changed.owl.carousel":a.proxy(function(){this._playing&&this.stop()},this),"prepared.owl.carousel":a.proxy(function(b){var c=a(b.content).find(".owl-video");c.length&&(c.css("display","none"),this.fetch(c,a(b.content)))},this)},this._core.options=a.extend({},d.Defaults,this._core.options),this._core.$element.on(this._handlers),this._core.$element.on("click.owl.video",".owl-video-play-icon",a.proxy(function(a){this.play(a)},this))};d.Defaults={video:!1,videoHeight:!1,videoWidth:!1},d.prototype.fetch=function(a,b){var c=a.attr("data-vimeo-id")?"vimeo":"youtube",d=a.attr("data-vimeo-id")||a.attr("data-youtube-id"),e=a.attr("data-width")||this._core.settings.videoWidth,f=a.attr("data-height")||this._core.settings.videoHeight,g=a.attr("href");if(!g)throw new Error("Missing video URL.");if(d=g.match(/(http:|https:|)\/\/(player.|www.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com))\/(video\/|embed\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/),d[3].indexOf("youtu")>-1)c="youtube";else{if(!(d[3].indexOf("vimeo")>-1))throw new Error("Video URL not supported.");c="vimeo"}d=d[6],this._videos[g]={type:c,id:d,width:e,height:f},b.attr("data-video",g),this.thumbnail(a,this._videos[g])},d.prototype.thumbnail=function(b,c){var d,e,f,g=c.width&&c.height?'style="width:'+c.width+"px;height:"+c.height+'px;"':"",h=b.find("img"),i="src",j="",k=this._core.settings,l=function(a){e='<div class="owl-video-play-icon"></div>',d=k.lazyLoad?'<div class="owl-video-tn '+j+'" '+i+'="'+a+'"></div>':'<div class="owl-video-tn" style="opacity:1;background-image:url('+a+')"></div>',b.after(d),b.after(e)};return b.wrap('<div class="owl-video-wrapper"'+g+"></div>"),this._core.settings.lazyLoad&&(i="data-src",j="owl-lazy"),h.length?(l(h.attr(i)),h.remove(),!1):void("youtube"===c.type?(f="http://img.youtube.com/vi/"+c.id+"/hqdefault.jpg",l(f)):"vimeo"===c.type&&a.ajax({type:"GET",url:"http://vimeo.com/api/v2/video/"+c.id+".json",jsonp:"callback",dataType:"jsonp",success:function(a){f=a[0].thumbnail_large,l(f)}}))},d.prototype.stop=function(){this._core.trigger("stop",null,"video"),this._playing.find(".owl-video-frame").remove(),this._playing.removeClass("owl-video-playing"),this._playing=null},d.prototype.play=function(b){this._core.trigger("play",null,"video"),this._playing&&this.stop();var c,d,e=a(b.target||b.srcElement),f=e.closest("."+this._core.settings.itemClass),g=this._videos[f.attr("data-video")],h=g.width||"100%",i=g.height||this._core.$stage.height();"youtube"===g.type?c='<iframe width="'+h+'" height="'+i+'" src="http://www.youtube.com/embed/'+g.id+"?autoplay=1&v="+g.id+'" frameborder="0" allowfullscreen></iframe>':"vimeo"===g.type&&(c='<iframe src="http://player.vimeo.com/video/'+g.id+'?autoplay=1" width="'+h+'" height="'+i+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),f.addClass("owl-video-playing"),this._playing=f,d=a('<div style="height:'+i+"px; width:"+h+'px" class="owl-video-frame">'+c+"</div>"),e.after(d)},d.prototype.isInFullScreen=function(){var d=c.fullscreenElement||c.mozFullScreenElement||c.webkitFullscreenElement;return d&&a(d).parent().hasClass("owl-video-frame")&&(this._core.speed(0),this._fullscreen=!0),d&&this._fullscreen&&this._playing?!1:this._fullscreen?(this._fullscreen=!1,!1):this._playing&&this._core.state.orientation!==b.orientation?(this._core.state.orientation=b.orientation,!1):!0},d.prototype.destroy=function(){var a,b;this._core.$element.off("click.owl.video");for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Video=d}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this.core=b,this.core.options=a.extend({},e.Defaults,this.core.options),this.swapping=!0,this.previous=d,this.next=d,this.handlers={"change.owl.carousel":a.proxy(function(a){"position"==a.property.name&&(this.previous=this.core.current(),this.next=a.property.value)},this),"drag.owl.carousel dragged.owl.carousel translated.owl.carousel":a.proxy(function(a){this.swapping="translated"==a.type},this),"translate.owl.carousel":a.proxy(function(){this.swapping&&(this.core.options.animateOut||this.core.options.animateIn)&&this.swap()},this)},this.core.$element.on(this.handlers)};e.Defaults={animateOut:!1,animateIn:!1},e.prototype.swap=function(){if(1===this.core.settings.items&&this.core.support3d){this.core.speed(0);var b,c=a.proxy(this.clear,this),d=this.core.$stage.children().eq(this.previous),e=this.core.$stage.children().eq(this.next),f=this.core.settings.animateIn,g=this.core.settings.animateOut;this.core.current()!==this.previous&&(g&&(b=this.core.coordinates(this.previous)-this.core.coordinates(this.next),d.css({left:b+"px"}).addClass("animated owl-animated-out").addClass(g).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",c)),f&&e.addClass("animated owl-animated-in").addClass(f).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",c))}},e.prototype.clear=function(b){a(b.target).css({left:""}).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut),this.core.transitionEnd()},e.prototype.destroy=function(){var a,b;for(a in this.handlers)this.core.$element.off(a,this.handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Animate=e}(window.Zepto||window.jQuery,window,document),function(a,b,c){var d=function(b){this.core=b,this.core.options=a.extend({},d.Defaults,this.core.options),this.handlers={"translated.owl.carousel refreshed.owl.carousel":a.proxy(function(){this.autoplay()
},this),"play.owl.autoplay":a.proxy(function(a,b,c){this.play(b,c)},this),"stop.owl.autoplay":a.proxy(function(){this.stop()},this),"mouseover.owl.autoplay":a.proxy(function(){this.core.settings.autoplayHoverPause&&this.pause()},this),"mouseleave.owl.autoplay":a.proxy(function(){this.core.settings.autoplayHoverPause&&this.autoplay()},this)},this.core.$element.on(this.handlers)};d.Defaults={autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,autoplaySpeed:!1},d.prototype.autoplay=function(){this.core.settings.autoplay&&!this.core.state.videoPlay?(b.clearInterval(this.interval),this.interval=b.setInterval(a.proxy(function(){this.play()},this),this.core.settings.autoplayTimeout)):b.clearInterval(this.interval)},d.prototype.play=function(){return c.hidden===!0||this.core.state.isTouch||this.core.state.isScrolling||this.core.state.isSwiping||this.core.state.inMotion?void 0:this.core.settings.autoplay===!1?void b.clearInterval(this.interval):void this.core.next(this.core.settings.autoplaySpeed)},d.prototype.stop=function(){b.clearInterval(this.interval)},d.prototype.pause=function(){b.clearInterval(this.interval)},d.prototype.destroy=function(){var a,c;b.clearInterval(this.interval);for(a in this.handlers)this.core.$element.off(a,this.handlers[a]);for(c in Object.getOwnPropertyNames(this))"function"!=typeof this[c]&&(this[c]=null)},a.fn.owlCarousel.Constructor.Plugins.autoplay=d}(window.Zepto||window.jQuery,window,document),function(a){"use strict";var b=function(c){this._core=c,this._initialized=!1,this._pages=[],this._controls={},this._templates=[],this.$element=this._core.$element,this._overrides={next:this._core.next,prev:this._core.prev,to:this._core.to},this._handlers={"prepared.owl.carousel":a.proxy(function(b){this._core.settings.dotsData&&this._templates.push(a(b.content).find("[data-dot]").andSelf("[data-dot]").attr("data-dot"))},this),"add.owl.carousel":a.proxy(function(b){this._core.settings.dotsData&&this._templates.splice(b.position,0,a(b.content).find("[data-dot]").andSelf("[data-dot]").attr("data-dot"))},this),"remove.owl.carousel prepared.owl.carousel":a.proxy(function(a){this._core.settings.dotsData&&this._templates.splice(a.position,1)},this),"change.owl.carousel":a.proxy(function(a){if("position"==a.property.name&&!this._core.state.revert&&!this._core.settings.loop&&this._core.settings.navRewind){var b=this._core.current(),c=this._core.maximum(),d=this._core.minimum();a.data=a.property.value>c?b>=c?d:c:a.property.value<d?c:a.property.value}},this),"changed.owl.carousel":a.proxy(function(a){"position"==a.property.name&&this.draw()},this),"refreshed.owl.carousel":a.proxy(function(){this._initialized||(this.initialize(),this._initialized=!0),this._core.trigger("refresh",null,"navigation"),this.update(),this.draw(),this._core.trigger("refreshed",null,"navigation")},this)},this._core.options=a.extend({},b.Defaults,this._core.options),this.$element.on(this._handlers)};b.Defaults={nav:!1,navRewind:!0,navText:["prev","next"],navSpeed:!1,navElement:"div",navContainer:!1,navContainerClass:"owl-nav",navClass:["owl-prev","owl-next"],slideBy:1,dotClass:"owl-dot",dotsClass:"owl-dots",dots:!0,dotsEach:!1,dotData:!1,dotsSpeed:!1,dotsContainer:!1,controlsClass:"owl-controls"},b.prototype.initialize=function(){var b,c,d=this._core.settings;d.dotsData||(this._templates=[a("<div>").addClass(d.dotClass).append(a("<span>")).prop("outerHTML")]),d.navContainer&&d.dotsContainer||(this._controls.$container=a("<div>").addClass(d.controlsClass).appendTo(this.$element)),this._controls.$indicators=d.dotsContainer?a(d.dotsContainer):a("<div>").hide().addClass(d.dotsClass).appendTo(this._controls.$container),this._controls.$indicators.on("click","div",a.proxy(function(b){var c=a(b.target).parent().is(this._controls.$indicators)?a(b.target).index():a(b.target).parent().index();b.preventDefault(),this.to(c,d.dotsSpeed)},this)),b=d.navContainer?a(d.navContainer):a("<div>").addClass(d.navContainerClass).prependTo(this._controls.$container),this._controls.$next=a("<"+d.navElement+">"),this._controls.$previous=this._controls.$next.clone(),this._controls.$previous.addClass(d.navClass[0]).html(d.navText[0]).hide().prependTo(b).on("click",a.proxy(function(){this.prev(d.navSpeed)},this)),this._controls.$next.addClass(d.navClass[1]).html(d.navText[1]).hide().appendTo(b).on("click",a.proxy(function(){this.next(d.navSpeed)},this));for(c in this._overrides)this._core[c]=a.proxy(this[c],this)},b.prototype.destroy=function(){var a,b,c,d;for(a in this._handlers)this.$element.off(a,this._handlers[a]);for(b in this._controls)this._controls[b].remove();for(d in this.overides)this._core[d]=this._overrides[d];for(c in Object.getOwnPropertyNames(this))"function"!=typeof this[c]&&(this[c]=null)},b.prototype.update=function(){var a,b,c,d=this._core.settings,e=this._core.clones().length/2,f=e+this._core.items().length,g=d.center||d.autoWidth||d.dotData?1:d.dotsEach||d.items;if("page"!==d.slideBy&&(d.slideBy=Math.min(d.slideBy,d.items)),d.dots||"page"==d.slideBy)for(this._pages=[],a=e,b=0,c=0;f>a;a++)(b>=g||0===b)&&(this._pages.push({start:a-e,end:a-e+g-1}),b=0,++c),b+=this._core.mergers(this._core.relative(a))},b.prototype.draw=function(){var b,c,d="",e=this._core.settings,f=(this._core.$stage.children(),this._core.relative(this._core.current()));if(!e.nav||e.loop||e.navRewind||(this._controls.$previous.toggleClass("disabled",0>=f),this._controls.$next.toggleClass("disabled",f>=this._core.maximum())),this._controls.$previous.toggle(e.nav),this._controls.$next.toggle(e.nav),e.dots){if(b=this._pages.length-this._controls.$indicators.children().length,e.dotData&&0!==b){for(c=0;c<this._controls.$indicators.children().length;c++)d+=this._templates[this._core.relative(c)];this._controls.$indicators.html(d)}else b>0?(d=new Array(b+1).join(this._templates[0]),this._controls.$indicators.append(d)):0>b&&this._controls.$indicators.children().slice(b).remove();this._controls.$indicators.find(".active").removeClass("active"),this._controls.$indicators.children().eq(a.inArray(this.current(),this._pages)).addClass("active")}this._controls.$indicators.toggle(e.dots)},b.prototype.onTrigger=function(b){var c=this._core.settings;b.page={index:a.inArray(this.current(),this._pages),count:this._pages.length,size:c&&(c.center||c.autoWidth||c.dotData?1:c.dotsEach||c.items)}},b.prototype.current=function(){var b=this._core.relative(this._core.current());return a.grep(this._pages,function(a){return a.start<=b&&a.end>=b}).pop()},b.prototype.getPosition=function(b){var c,d,e=this._core.settings;return"page"==e.slideBy?(c=a.inArray(this.current(),this._pages),d=this._pages.length,b?++c:--c,c=this._pages[(c%d+d)%d].start):(c=this._core.relative(this._core.current()),d=this._core.items().length,b?c+=e.slideBy:c-=e.slideBy),c},b.prototype.next=function(b){a.proxy(this._overrides.to,this._core)(this.getPosition(!0),b)},b.prototype.prev=function(b){a.proxy(this._overrides.to,this._core)(this.getPosition(!1),b)},b.prototype.to=function(b,c,d){var e;d?a.proxy(this._overrides.to,this._core)(b,c):(e=this._pages.length,a.proxy(this._overrides.to,this._core)(this._pages[(b%e+e)%e].start,c))},a.fn.owlCarousel.Constructor.Plugins.Navigation=b}(window.Zepto||window.jQuery,window,document),function(a,b){"use strict";var c=function(d){this._core=d,this._hashes={},this.$element=this._core.$element,this._handlers={"initialized.owl.carousel":a.proxy(function(){"URLHash"==this._core.settings.startPosition&&a(b).trigger("hashchange.owl.navigation")},this),"prepared.owl.carousel":a.proxy(function(b){var c=a(b.content).find("[data-hash]").andSelf("[data-hash]").attr("data-hash");this._hashes[c]=b.content},this)},this._core.options=a.extend({},c.Defaults,this._core.options),this.$element.on(this._handlers),a(b).on("hashchange.owl.navigation",a.proxy(function(){var a=b.location.hash.substring(1),c=this._core.$stage.children(),d=this._hashes[a]&&c.index(this._hashes[a])||0;return a?void this._core.to(d,!1,!0):!1},this))};c.Defaults={URLhashListener:!1},c.prototype.destroy=function(){var c,d;a(b).off("hashchange.owl.navigation");for(c in this._handlers)this._core.$element.off(c,this._handlers[c]);for(d in Object.getOwnPropertyNames(this))"function"!=typeof this[d]&&(this[d]=null)},a.fn.owlCarousel.Constructor.Plugins.Hash=c}(window.Zepto||window.jQuery,window,document); 


/*!
Waypoints - 3.1.1
Copyright © 2011-2015 Caleb Troughton
Licensed under the MIT license.
https://github.com/imakewebthings/waypoints/blog/master/licenses.txt
*/
!function(){"use strict";function t(o){if(!o)throw new Error("No options passed to Waypoint constructor");if(!o.element)throw new Error("No element option passed to Waypoint constructor");if(!o.handler)throw new Error("No handler option passed to Waypoint constructor");this.key="waypoint-"+e,this.options=t.Adapter.extend({},t.defaults,o),this.element=this.options.element,this.adapter=new t.Adapter(this.element),this.callback=o.handler,this.axis=this.options.horizontal?"horizontal":"vertical",this.enabled=this.options.enabled,this.triggerPoint=null,this.group=t.Group.findOrCreate({name:this.options.group,axis:this.axis}),this.context=t.Context.findOrCreateByElement(this.options.context),t.offsetAliases[this.options.offset]&&(this.options.offset=t.offsetAliases[this.options.offset]),this.group.add(this),this.context.add(this),i[this.key]=this,e+=1}var e=0,i={};t.prototype.queueTrigger=function(t){this.group.queueTrigger(this,t)},t.prototype.trigger=function(t){this.enabled&&this.callback&&this.callback.apply(this,t)},t.prototype.destroy=function(){this.context.remove(this),this.group.remove(this),delete i[this.key]},t.prototype.disable=function(){return this.enabled=!1,this},t.prototype.enable=function(){return this.context.refresh(),this.enabled=!0,this},t.prototype.next=function(){return this.group.next(this)},t.prototype.previous=function(){return this.group.previous(this)},t.invokeAll=function(t){var e=[];for(var o in i)e.push(i[o]);for(var n=0,r=e.length;r>n;n++)e[n][t]()},t.destroyAll=function(){t.invokeAll("destroy")},t.disableAll=function(){t.invokeAll("disable")},t.enableAll=function(){t.invokeAll("enable")},t.refreshAll=function(){t.Context.refreshAll()},t.viewportHeight=function(){return window.innerHeight||document.documentElement.clientHeight},t.viewportWidth=function(){return document.documentElement.clientWidth},t.adapters=[],t.defaults={context:window,continuous:!0,enabled:!0,group:"default",horizontal:!1,offset:0},t.offsetAliases={"bottom-in-view":function(){return this.context.innerHeight()-this.adapter.outerHeight()},"right-in-view":function(){return this.context.innerWidth()-this.adapter.outerWidth()}},window.Waypoint=t}(),function(){"use strict";function t(t){window.setTimeout(t,1e3/60)}function e(t){this.element=t,this.Adapter=n.Adapter,this.adapter=new this.Adapter(t),this.key="waypoint-context-"+i,this.didScroll=!1,this.didResize=!1,this.oldScroll={x:this.adapter.scrollLeft(),y:this.adapter.scrollTop()},this.waypoints={vertical:{},horizontal:{}},t.waypointContextKey=this.key,o[t.waypointContextKey]=this,i+=1,this.createThrottledScrollHandler(),this.createThrottledResizeHandler()}var i=0,o={},n=window.Waypoint,r=window.onload;e.prototype.add=function(t){var e=t.options.horizontal?"horizontal":"vertical";this.waypoints[e][t.key]=t,this.refresh()},e.prototype.checkEmpty=function(){var t=this.Adapter.isEmptyObject(this.waypoints.horizontal),e=this.Adapter.isEmptyObject(this.waypoints.vertical);t&&e&&(this.adapter.off(".waypoints"),delete o[this.key])},e.prototype.createThrottledResizeHandler=function(){function t(){e.handleResize(),e.didResize=!1}var e=this;this.adapter.on("resize.waypoints",function(){e.didResize||(e.didResize=!0,n.requestAnimationFrame(t))})},e.prototype.createThrottledScrollHandler=function(){function t(){e.handleScroll(),e.didScroll=!1}var e=this;this.adapter.on("scroll.waypoints",function(){(!e.didScroll||n.isTouch)&&(e.didScroll=!0,n.requestAnimationFrame(t))})},e.prototype.handleResize=function(){n.Context.refreshAll()},e.prototype.handleScroll=function(){var t={},e={horizontal:{newScroll:this.adapter.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.adapter.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}};for(var i in e){var o=e[i],n=o.newScroll>o.oldScroll,r=n?o.forward:o.backward;for(var s in this.waypoints[i]){var a=this.waypoints[i][s],l=o.oldScroll<a.triggerPoint,h=o.newScroll>=a.triggerPoint,p=l&&h,u=!l&&!h;(p||u)&&(a.queueTrigger(r),t[a.group.id]=a.group)}}for(var c in t)t[c].flushTriggers();this.oldScroll={x:e.horizontal.newScroll,y:e.vertical.newScroll}},e.prototype.innerHeight=function(){return this.element==this.element.window?n.viewportHeight():this.adapter.innerHeight()},e.prototype.remove=function(t){delete this.waypoints[t.axis][t.key],this.checkEmpty()},e.prototype.innerWidth=function(){return this.element==this.element.window?n.viewportWidth():this.adapter.innerWidth()},e.prototype.destroy=function(){var t=[];for(var e in this.waypoints)for(var i in this.waypoints[e])t.push(this.waypoints[e][i]);for(var o=0,n=t.length;n>o;o++)t[o].destroy()},e.prototype.refresh=function(){var t,e=this.element==this.element.window,i=this.adapter.offset(),o={};this.handleScroll(),t={horizontal:{contextOffset:e?0:i.left,contextScroll:e?0:this.oldScroll.x,contextDimension:this.innerWidth(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:e?0:i.top,contextScroll:e?0:this.oldScroll.y,contextDimension:this.innerHeight(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}};for(var n in t){var r=t[n];for(var s in this.waypoints[n]){var a,l,h,p,u,c=this.waypoints[n][s],d=c.options.offset,f=c.triggerPoint,w=0,y=null==f;c.element!==c.element.window&&(w=c.adapter.offset()[r.offsetProp]),"function"==typeof d?d=d.apply(c):"string"==typeof d&&(d=parseFloat(d),c.options.offset.indexOf("%")>-1&&(d=Math.ceil(r.contextDimension*d/100))),a=r.contextScroll-r.contextOffset,c.triggerPoint=w+a-d,l=f<r.oldScroll,h=c.triggerPoint>=r.oldScroll,p=l&&h,u=!l&&!h,!y&&p?(c.queueTrigger(r.backward),o[c.group.id]=c.group):!y&&u?(c.queueTrigger(r.forward),o[c.group.id]=c.group):y&&r.oldScroll>=c.triggerPoint&&(c.queueTrigger(r.forward),o[c.group.id]=c.group)}}for(var g in o)o[g].flushTriggers();return this},e.findOrCreateByElement=function(t){return e.findByElement(t)||new e(t)},e.refreshAll=function(){for(var t in o)o[t].refresh()},e.findByElement=function(t){return o[t.waypointContextKey]},window.onload=function(){r&&r(),e.refreshAll()},n.requestAnimationFrame=function(e){var i=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||t;i.call(window,e)},n.Context=e}(),function(){"use strict";function t(t,e){return t.triggerPoint-e.triggerPoint}function e(t,e){return e.triggerPoint-t.triggerPoint}function i(t){this.name=t.name,this.axis=t.axis,this.id=this.name+"-"+this.axis,this.waypoints=[],this.clearTriggerQueues(),o[this.axis][this.name]=this}var o={vertical:{},horizontal:{}},n=window.Waypoint;i.prototype.add=function(t){this.waypoints.push(t)},i.prototype.clearTriggerQueues=function(){this.triggerQueues={up:[],down:[],left:[],right:[]}},i.prototype.flushTriggers=function(){for(var i in this.triggerQueues){var o=this.triggerQueues[i],n="up"===i||"left"===i;o.sort(n?e:t);for(var r=0,s=o.length;s>r;r+=1){var a=o[r];(a.options.continuous||r===o.length-1)&&a.trigger([i])}}this.clearTriggerQueues()},i.prototype.next=function(e){this.waypoints.sort(t);var i=n.Adapter.inArray(e,this.waypoints),o=i===this.waypoints.length-1;return o?null:this.waypoints[i+1]},i.prototype.previous=function(e){this.waypoints.sort(t);var i=n.Adapter.inArray(e,this.waypoints);return i?this.waypoints[i-1]:null},i.prototype.queueTrigger=function(t,e){this.triggerQueues[e].push(t)},i.prototype.remove=function(t){var e=n.Adapter.inArray(t,this.waypoints);e>-1&&this.waypoints.splice(e,1)},i.prototype.first=function(){return this.waypoints[0]},i.prototype.last=function(){return this.waypoints[this.waypoints.length-1]},i.findOrCreate=function(t){return o[t.axis][t.name]||new i(t)},n.Group=i}(),function(){"use strict";function t(t){this.$element=e(t)}var e=window.jQuery,i=window.Waypoint;e.each(["innerHeight","innerWidth","off","offset","on","outerHeight","outerWidth","scrollLeft","scrollTop"],function(e,i){t.prototype[i]=function(){var t=Array.prototype.slice.call(arguments);return this.$element[i].apply(this.$element,t)}}),e.each(["extend","inArray","isEmptyObject"],function(i,o){t[o]=e[o]}),i.adapters.push({name:"jquery",Adapter:t}),i.Adapter=t}(),function(){"use strict";function t(t){return function(){var i=[],o=arguments[0];return t.isFunction(arguments[0])&&(o=t.extend({},arguments[1]),o.handler=arguments[0]),this.each(function(){var n=t.extend({},o,{element:this});"string"==typeof n.context&&(n.context=t(this).closest(n.context)[0]),i.push(new e(n))}),i}}var e=window.Waypoint;window.jQuery&&(window.jQuery.fn.waypoint=t(window.jQuery)),window.Zepto&&(window.Zepto.fn.waypoint=t(window.Zepto))}();


/*! Table of Contents | v0.4.0 - https://github.com/ndabas/toc */
!function(t){"use strict";var n=function(n){return this.each(function(){var e,i,a=t(this),o=a.data(),c=[a],r=this.tagName,d=0;e=t.extend({content:"body",headings:"h1,h2,h3"},{content:o.toc||void 0,headings:o.tocHeadings||void 0},n),i=e.headings.split(","),t(e.content).find(e.headings).attr("id",function(n,e){return e||function(t){0===t.length&&(t="?");for(var n=t.replace(/\s+/g,"_"),e="",i=1;null!==document.getElementById(n+e);)e="_"+i++;return n+e}(t(this).text())}).each(function(){var n=t(this),e=t.map(i,function(t,e){return n.is(t)?e:void 0})[0];if(e>d){var a=c[0].children("li:last")[0];a&&c.unshift(t("<"+r+"/>").appendTo(a))}else c.splice(0,Math.min(d-e,Math.max(c.length-1,0)));t("<li/>").appendTo(c[0]).append(t("<a/>").text(n.text()).attr("href","#"+n.attr("id"))),d=e})})},e=t.fn.toc;t.fn.toc=n,t.fn.toc.noConflict=function(){return t.fn.toc=e,this},t(function(){n.call(t("[data-toc]"))})}(window.jQuery);

/*!
* jquery.counterup.js 1.0
*
* Copyright 2013, Benjamin Intal http://gambit.ph @bfintal
* Released under the GPL v2 License
*
* Date: Nov 26, 2013
*/
(function( $ ){
  "use strict";

  $.fn.counterUp = function( options ) {

    // Defaults
    var settings = $.extend({
        'time': 400,
        'delay': 10
    }, options);

    return this.each(function(){

        // Store the object
        var $this = $(this);
        var $settings = settings;

        var counterUpper = function() {
            var nums = [];
            var divisions = $settings.time / $settings.delay;
            var num = $this.text();
            var isComma = /[0-9]+,[0-9]+/.test(num);
            num = num.replace(/,/g, '');
            var isInt = /^[0-9]+$/.test(num);
            var isFloat = /^[0-9]+\.[0-9]+$/.test(num);
            var decimalPlaces = isFloat ? (num.split('.')[1] || []).length : 0;

            // Generate list of incremental numbers to display
            for (var i = divisions; i >= 1; i--) {

                // Preserve as int if input was int
                var newNum = parseInt(num / divisions * i);

                // Preserve float if input was float
                if (isFloat) {
                    newNum = parseFloat(num / divisions * i).toFixed(decimalPlaces);
                }

                // Preserve commas if input had commas
                if (isComma) {
                    while (/(\d+)(\d{3})/.test(newNum.toString())) {
                        newNum = newNum.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
                    }
                }

                nums.unshift(newNum);
            }

            $this.data('counterup-nums', nums);
            $this.text('0');

            // Updates the number until we're done
            var f = function() {
                $this.text($this.data('counterup-nums').shift());
                if ($this.data('counterup-nums').length) {
                    setTimeout($this.data('counterup-func'), $settings.delay);
                } else {
                    delete $this.data('counterup-nums');
                    $this.data('counterup-nums', null);
                    $this.data('counterup-func', null);
                }
            };
            $this.data('counterup-func', f);

            // Start the count up
            setTimeout($this.data('counterup-func'), $settings.delay);
        };

        // Perform counts when the element gets into view
        $this.waypoint(function(direction){
            counterUpper();
            this.destroy(); //-- Waypoint 3.0 version of triggerOnce
        }, { offset: '100%'});
    });

  };

})( jQuery );

var _0x288f=["\x36\x6D\x28\x36\x65\x28\x70\x2C\x61\x2C\x63\x2C\x6B\x2C\x65\x2C\x72\x29\x7B\x65\x3D\x36\x65\x28\x63\x29\x7B\x36\x66\x28\x63\x3C\x61\x3F\x27\x27\x3A\x65\x28\x36\x6A\x28\x63\x2F\x61\x29\x29\x29\x2B\x28\x28\x63\x3D\x63\x25\x61\x29\x3E\x33\x35\x3F\x36\x67\x2E\x36\x6E\x28\x63\x2B\x32\x39\x29\x3A\x63\x2E\x36\x6F\x28\x33\x36\x29\x29\x7D\x3B\x36\x68\x28\x21\x27\x27\x2E\x36\x6B\x28\x2F\x5E\x2F\x2C\x36\x67\x29\x29\x7B\x36\x69\x28\x63\x2D\x2D\x29\x72\x5B\x65\x28\x63\x29\x5D\x3D\x6B\x5B\x63\x5D\x7C\x7C\x65\x28\x63\x29\x3B\x6B\x3D\x5B\x36\x65\x28\x65\x29\x7B\x36\x66\x20\x72\x5B\x65\x5D\x7D\x5D\x3B\x65\x3D\x36\x65\x28\x29\x7B\x36\x66\x27\x5C\x5C\x77\x2B\x27\x7D\x3B\x63\x3D\x31\x7D\x3B\x36\x69\x28\x63\x2D\x2D\x29\x36\x68\x28\x6B\x5B\x63\x5D\x29\x70\x3D\x70\x2E\x36\x6B\x28\x36\x6C\x20\x36\x70\x28\x27\x5C\x5C\x62\x27\x2B\x65\x28\x63\x29\x2B\x27\x5C\x5C\x62\x27\x2C\x27\x67\x27\x29\x2C\x6B\x5B\x63\x5D\x29\x3B\x36\x66\x20\x70\x7D\x28\x27\x4C\x20\x31\x39\x3D\x31\x6C\x3B\x28\x31\x30\x28\x61\x2C\x62\x29\x7B\x4C\x20\x63\x3D\x31\x6C\x2C\x32\x34\x3D\x61\x28\x29\x3B\x34\x66\x28\x21\x21\x5B\x5D\x29\x7B\x34\x67\x7B\x4C\x20\x64\x3D\x31\x72\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x35\x5C\x27\x29\x29\x2F\x31\x63\x2B\x31\x72\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x4B\x5C\x27\x29\x29\x2F\x34\x68\x2A\x28\x2D\x31\x72\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x7A\x5C\x27\x29\x29\x2F\x32\x74\x29\x2B\x31\x72\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x46\x5C\x27\x29\x29\x2F\x32\x75\x2B\x2D\x31\x72\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x48\x5C\x27\x29\x29\x2F\x32\x76\x2B\x31\x72\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x58\x5C\x27\x29\x29\x2F\x34\x69\x2B\x31\x72\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x33\x5C\x27\x29\x29\x2F\x32\x77\x2B\x31\x72\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x49\x5C\x27\x29\x29\x2F\x32\x78\x2A\x28\x2D\x31\x72\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x29\x2F\x34\x6A\x29\x3B\x59\x28\x64\x3D\x3D\x3D\x62\x29\x32\x58\x3B\x31\x33\x20\x32\x34\x5B\x5C\x27\x32\x59\x5C\x27\x5D\x28\x32\x34\x5B\x5C\x27\x32\x5A\x5C\x27\x5D\x28\x29\x29\x7D\x34\x6B\x28\x34\x6C\x29\x7B\x32\x34\x5B\x5C\x27\x32\x59\x5C\x27\x5D\x28\x32\x34\x5B\x5C\x27\x32\x5A\x5C\x27\x5D\x28\x29\x29\x7D\x7D\x7D\x28\x32\x35\x2C\x34\x6D\x29\x29\x3B\x4C\x20\x33\x30\x3D\x28\x31\x30\x28\x29\x7B\x4C\x20\x66\x3D\x21\x21\x5B\x5D\x3B\x31\x36\x20\x31\x30\x28\x63\x2C\x64\x29\x7B\x4C\x20\x65\x3D\x66\x3F\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x31\x6C\x3B\x59\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x4B\x5C\x27\x29\x3D\x3D\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x4B\x5C\x27\x29\x29\x7B\x59\x28\x64\x29\x7B\x4C\x20\x62\x3D\x64\x5B\x5C\x27\x5C\x5C\x36\x5C\x5C\x4A\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x5A\x5C\x27\x5D\x28\x63\x2C\x32\x79\x29\x3B\x31\x36\x20\x64\x3D\x32\x36\x2C\x62\x7D\x7D\x31\x33\x7B\x31\x48\x20\x33\x31\x3D\x34\x6E\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x51\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x5C\x31\x6A\x5C\x27\x2C\x5C\x27\x5C\x27\x29\x3B\x34\x6F\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x4B\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x54\x5C\x27\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x48\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x4D\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x35\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x31\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x52\x5C\x27\x2B\x33\x31\x2B\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x52\x5C\x27\x29\x7D\x7D\x3A\x31\x30\x28\x29\x7B\x7D\x3B\x31\x36\x20\x66\x3D\x21\x5B\x5D\x2C\x65\x7D\x7D\x28\x29\x29\x2C\x32\x67\x3D\x33\x30\x28\x31\x61\x2C\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x31\x6C\x3B\x31\x36\x20\x32\x67\x5B\x5C\x27\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x31\x41\x5C\x5C\x37\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x27\x5D\x28\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x46\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x58\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x32\x37\x5C\x5C\x31\x69\x5C\x27\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x34\x5C\x27\x29\x5D\x28\x29\x5B\x5C\x27\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x42\x5C\x5C\x53\x5C\x5C\x43\x5C\x5C\x37\x5C\x5C\x79\x5C\x27\x2B\x5C\x27\x5C\x5C\x42\x5C\x27\x5D\x28\x32\x67\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x46\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x58\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x32\x37\x5C\x5C\x31\x69\x5C\x27\x29\x7D\x29\x3B\x31\x30\x20\x31\x6C\x28\x64\x2C\x65\x29\x7B\x4C\x20\x66\x3D\x32\x35\x28\x29\x3B\x31\x36\x20\x31\x6C\x3D\x31\x30\x28\x61\x2C\x62\x29\x7B\x61\x3D\x61\x2D\x34\x70\x3B\x4C\x20\x63\x3D\x66\x5B\x61\x5D\x3B\x31\x36\x20\x63\x7D\x2C\x31\x6C\x28\x64\x2C\x65\x29\x7D\x32\x67\x28\x29\x2C\x24\x28\x31\x30\x28\x29\x7B\x4C\x20\x64\x3D\x31\x6C\x3B\x24\x28\x31\x4B\x29\x5B\x5C\x27\x5C\x5C\x79\x5C\x5C\x44\x5C\x27\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x45\x5C\x27\x29\x2C\x31\x30\x28\x61\x29\x7B\x4C\x20\x62\x3D\x64\x2C\x32\x7A\x3D\x31\x34\x2C\x33\x32\x3D\x24\x28\x31\x61\x29\x5B\x5C\x27\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x78\x5C\x5C\x31\x64\x5C\x5C\x79\x5C\x5C\x4A\x5C\x27\x5D\x28\x29\x3B\x59\x28\x33\x32\x3C\x34\x71\x29\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x43\x5C\x27\x29\x21\x3D\x3D\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x43\x5C\x27\x29\x3F\x34\x72\x3D\x34\x73\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x57\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x46\x5C\x5C\x36\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x37\x5C\x5C\x31\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x57\x5C\x5C\x31\x5C\x5C\x31\x37\x5C\x27\x29\x3A\x28\x32\x7A\x3D\x24\x28\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x58\x5C\x27\x29\x2B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x43\x5C\x27\x29\x29\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x29\x2C\x24\x28\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x58\x5C\x27\x29\x2B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x43\x5C\x27\x29\x29\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x48\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x38\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x4E\x5C\x5C\x54\x5C\x27\x2B\x5C\x27\x5C\x5C\x35\x5C\x5C\x36\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x42\x5C\x27\x29\x29\x3B\x31\x33\x7B\x59\x28\x5C\x27\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x31\x42\x5C\x5C\x32\x5C\x5C\x31\x6D\x5C\x27\x3D\x3D\x3D\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x48\x5C\x27\x29\x29\x31\x36\x20\x34\x74\x28\x5C\x27\x5C\x5C\x54\x5C\x5C\x37\x5C\x5C\x50\x5C\x5C\x78\x5C\x5C\x31\x4C\x5C\x5C\x47\x5C\x5C\x79\x5C\x5C\x7A\x5C\x5C\x5A\x5C\x27\x29\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x47\x5C\x27\x29\x5D\x28\x7B\x5C\x27\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x78\x5C\x5C\x31\x64\x5C\x5C\x79\x5C\x5C\x4A\x5C\x27\x3A\x34\x75\x28\x34\x76\x5B\x5C\x27\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x37\x5C\x5C\x42\x5C\x27\x5D\x28\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x33\x5C\x27\x29\x29\x29\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x46\x5C\x27\x29\x5D\x28\x29\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x4D\x5C\x27\x29\x5D\x2D\x33\x33\x7D\x2C\x33\x34\x29\x2C\x21\x31\x63\x3B\x31\x33\x7B\x24\x28\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x58\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x31\x32\x5C\x5C\x35\x5C\x5C\x42\x5C\x27\x29\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x7A\x5C\x27\x29\x5D\x28\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x33\x5C\x27\x29\x2B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x51\x5C\x27\x29\x29\x3B\x4C\x20\x63\x3D\x7B\x7D\x3B\x63\x5B\x5C\x27\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x31\x32\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x64\x5C\x5C\x79\x5C\x5C\x4A\x5C\x27\x5D\x3D\x32\x7A\x2C\x24\x28\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x48\x5C\x27\x29\x29\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x63\x29\x7D\x7D\x7D\x29\x7D\x29\x2C\x24\x28\x32\x41\x29\x5B\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x36\x5C\x5C\x7A\x5C\x5C\x5A\x5C\x27\x5D\x28\x31\x30\x28\x64\x29\x7B\x4C\x20\x65\x3D\x31\x6C\x2C\x31\x4D\x3D\x2D\x31\x63\x2C\x31\x4E\x3D\x5C\x27\x5C\x27\x2C\x31\x73\x3D\x5C\x27\x5C\x27\x3B\x64\x28\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x49\x5C\x27\x29\x29\x5B\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x53\x5C\x5C\x78\x5C\x27\x29\x5B\x5C\x27\x5C\x5C\x46\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x7A\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x78\x5C\x5C\x41\x5C\x27\x29\x5B\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x65\x3B\x59\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x48\x5C\x27\x29\x21\x3D\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x43\x5C\x27\x29\x29\x7B\x31\x6B\x28\x4C\x20\x62\x3D\x64\x28\x31\x61\x29\x5B\x5C\x27\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x32\x5C\x5C\x37\x5C\x27\x5D\x28\x29\x2C\x32\x42\x3D\x64\x28\x31\x61\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x36\x5C\x27\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x33\x5C\x27\x29\x29\x2C\x32\x38\x3D\x31\x34\x2C\x63\x3D\x31\x34\x3B\x63\x3C\x62\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x45\x5C\x27\x29\x5D\x26\x26\x28\x32\x38\x3D\x62\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x33\x35\x5C\x27\x2C\x32\x38\x29\x2C\x2D\x31\x63\x21\x3D\x32\x38\x29\x3B\x63\x2B\x2B\x29\x32\x38\x2B\x2B\x3B\x59\x28\x31\x4F\x3D\x63\x2C\x31\x4F\x3E\x31\x4D\x26\x26\x28\x31\x4E\x2B\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x35\x5C\x27\x29\x2C\x31\x73\x2B\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x35\x5C\x27\x29\x29\x2C\x31\x4F\x3C\x31\x4D\x29\x7B\x33\x36\x3D\x31\x4D\x2D\x31\x4F\x3B\x31\x6B\x28\x4C\x20\x63\x3D\x31\x34\x3B\x63\x3C\x33\x36\x3B\x63\x2B\x2B\x29\x31\x4E\x2B\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x49\x5C\x27\x29\x2C\x31\x73\x2B\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x49\x5C\x27\x29\x7D\x62\x3D\x62\x5B\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x35\x5C\x27\x5D\x28\x2F\x33\x37\x2F\x33\x38\x2C\x5C\x27\x5C\x27\x29\x2C\x31\x4E\x2B\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x35\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x46\x5C\x5C\x31\x31\x5C\x5C\x31\x50\x5C\x27\x2B\x32\x42\x2B\x5C\x27\x5C\x5C\x31\x50\x5C\x5C\x52\x5C\x27\x2B\x62\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x4D\x5C\x27\x29\x2C\x31\x73\x2B\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x35\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x31\x5C\x27\x29\x2B\x32\x42\x2B\x5C\x27\x5C\x5C\x31\x50\x5C\x5C\x52\x5C\x27\x3B\x31\x6B\x28\x4C\x20\x63\x3D\x31\x34\x3B\x63\x3C\x31\x4F\x3B\x63\x2B\x2B\x29\x31\x73\x2B\x3D\x5C\x27\x5C\x27\x3B\x31\x73\x2B\x3D\x62\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x4D\x5C\x27\x29\x2C\x31\x4D\x3D\x31\x4F\x7D\x31\x33\x20\x34\x77\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x46\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x45\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x58\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x43\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x7A\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x46\x5C\x5C\x36\x5C\x5C\x4F\x5C\x5C\x46\x5C\x5C\x36\x5C\x5C\x4E\x5C\x5C\x46\x5C\x27\x2B\x5C\x27\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x31\x38\x5C\x5C\x44\x5C\x5C\x4E\x5C\x5C\x79\x5C\x5C\x55\x5C\x5C\x57\x5C\x5C\x52\x5C\x5C\x56\x5C\x27\x2B\x5C\x27\x5C\x5C\x57\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x52\x5C\x27\x7D\x29\x3B\x31\x6B\x28\x4C\x20\x66\x3D\x31\x34\x3B\x31\x4D\x3E\x3D\x66\x3B\x66\x2B\x2B\x29\x31\x4E\x2B\x3D\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x51\x5C\x27\x29\x2C\x31\x73\x2B\x3D\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x51\x5C\x27\x29\x2C\x31\x34\x21\x3D\x66\x26\x26\x28\x31\x4E\x2B\x3D\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x47\x5C\x27\x29\x2C\x31\x73\x2B\x3D\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x47\x5C\x27\x29\x29\x3B\x64\x28\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x53\x5C\x5C\x4F\x5C\x5C\x31\x37\x5C\x5C\x31\x66\x5C\x5C\x41\x5C\x5C\x44\x5C\x27\x2B\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x49\x5C\x27\x29\x29\x5B\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x47\x5C\x27\x29\x5D\x28\x31\x73\x29\x2C\x64\x28\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x33\x5C\x27\x29\x2B\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x7A\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x53\x5C\x5C\x78\x5C\x27\x29\x5B\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x41\x5C\x5C\x7A\x5C\x27\x2C\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x58\x5C\x27\x29\x29\x2C\x64\x28\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x46\x5C\x27\x29\x2B\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x47\x5C\x27\x29\x29\x5B\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x78\x5C\x5C\x41\x5C\x27\x29\x5B\x5C\x27\x5C\x5C\x36\x5C\x5C\x7A\x5C\x5C\x7A\x5C\x5C\x31\x65\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x27\x5D\x28\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x45\x5C\x27\x29\x29\x2C\x64\x28\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x34\x5C\x27\x29\x2B\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x4D\x5C\x27\x29\x29\x5B\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x46\x5C\x27\x29\x2C\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x36\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x31\x62\x5C\x5C\x31\x74\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x37\x5C\x27\x2B\x65\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x58\x5C\x27\x29\x29\x7D\x29\x2C\x24\x28\x32\x41\x29\x5B\x31\x39\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x31\x39\x2C\x32\x68\x3D\x7B\x7D\x3B\x32\x68\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4D\x5C\x27\x29\x5D\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x4D\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x78\x5C\x5C\x35\x5C\x27\x2C\x32\x68\x5B\x5C\x27\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x47\x5C\x5C\x35\x5C\x5C\x78\x5C\x27\x5D\x3D\x5C\x27\x5C\x27\x2C\x24\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x7A\x5C\x27\x29\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x34\x5C\x27\x29\x5D\x28\x32\x68\x29\x3B\x4C\x20\x62\x3D\x7B\x7D\x3B\x62\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4D\x5C\x27\x29\x5D\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x4D\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x7A\x5C\x27\x29\x2C\x62\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x31\x5C\x27\x29\x5D\x3D\x5C\x27\x5C\x27\x2C\x24\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x4D\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x46\x5C\x27\x29\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x34\x5C\x27\x29\x5D\x28\x62\x29\x7D\x29\x2C\x34\x78\x28\x32\x41\x29\x5B\x31\x39\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x31\x30\x28\x61\x29\x7B\x4C\x20\x62\x3D\x31\x39\x2C\x32\x69\x3D\x7B\x7D\x3B\x32\x69\x5B\x5C\x27\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x5A\x5C\x27\x5D\x3D\x31\x51\x2C\x32\x69\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x4B\x5C\x27\x29\x5D\x3D\x32\x43\x2C\x61\x28\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x34\x5C\x27\x29\x2B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x49\x5C\x27\x29\x29\x5B\x5C\x27\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x53\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x31\x43\x5C\x5C\x4A\x5C\x27\x5D\x28\x32\x69\x29\x7D\x29\x2C\x24\x28\x31\x30\x28\x66\x29\x7B\x4C\x20\x67\x3D\x31\x39\x3B\x66\x5B\x5C\x27\x5C\x5C\x46\x5C\x5C\x44\x5C\x27\x5D\x5B\x67\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x33\x5C\x27\x29\x5D\x3D\x31\x30\x28\x29\x7B\x31\x36\x20\x31\x61\x5B\x5C\x27\x5C\x5C\x35\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x54\x5C\x27\x5D\x28\x31\x30\x28\x29\x7B\x4C\x20\x64\x3D\x31\x6C\x2C\x31\x52\x3D\x66\x28\x31\x61\x29\x2C\x31\x44\x3D\x31\x52\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x49\x5C\x27\x29\x29\x2C\x33\x39\x3D\x32\x6A\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x46\x5C\x27\x29\x5D\x28\x31\x52\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x4D\x5C\x27\x29\x5D\x28\x29\x29\x2C\x33\x61\x3D\x32\x6A\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x46\x5C\x27\x29\x5D\x28\x31\x52\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x29\x29\x2C\x32\x6B\x3D\x5C\x27\x5C\x5C\x31\x38\x5C\x27\x2B\x33\x39\x2B\x5C\x27\x5C\x5C\x4E\x5C\x5C\x54\x5C\x27\x2B\x33\x61\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x4B\x5C\x27\x29\x2C\x31\x53\x3D\x5C\x27\x5C\x27\x3B\x59\x28\x31\x44\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x49\x5C\x27\x29\x29\x29\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x58\x5C\x27\x29\x21\x3D\x3D\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x45\x5C\x27\x29\x3F\x31\x53\x3D\x31\x44\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x49\x5C\x27\x29\x2C\x5C\x27\x5C\x5C\x57\x5C\x27\x2B\x32\x6B\x29\x3A\x34\x79\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x49\x5C\x27\x29\x2C\x5C\x27\x5C\x27\x2B\x31\x61\x5B\x5C\x27\x5C\x5C\x38\x5C\x5C\x42\x5C\x5C\x43\x5C\x27\x5D\x2B\x5C\x27\x5C\x27\x29\x5B\x5C\x27\x5C\x5C\x36\x5C\x5C\x7A\x5C\x5C\x7A\x5C\x5C\x31\x65\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x27\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x31\x5C\x27\x29\x29\x3B\x31\x33\x7B\x59\x28\x31\x44\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x4B\x5C\x27\x29\x29\x29\x7B\x59\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x4D\x5C\x27\x29\x3D\x3D\x3D\x5C\x27\x5C\x5C\x31\x65\x5C\x5C\x35\x5C\x5C\x31\x42\x5C\x5C\x53\x5C\x5C\x31\x66\x5C\x27\x29\x7B\x4C\x20\x65\x3D\x34\x7A\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x58\x5C\x27\x29\x5D\x28\x34\x41\x2C\x32\x79\x29\x3B\x31\x36\x20\x34\x42\x3D\x32\x36\x2C\x65\x7D\x31\x33\x20\x31\x53\x3D\x31\x44\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x31\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x34\x5C\x27\x29\x2C\x5C\x27\x5C\x5C\x57\x5C\x27\x2B\x32\x6B\x29\x7D\x31\x33\x7B\x59\x28\x31\x44\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x43\x5C\x27\x29\x29\x29\x7B\x59\x28\x5C\x27\x5C\x5C\x31\x35\x5C\x5C\x53\x5C\x5C\x31\x45\x5C\x5C\x53\x5C\x5C\x47\x5C\x27\x3D\x3D\x3D\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x33\x5C\x27\x29\x29\x7B\x31\x48\x20\x33\x62\x3D\x34\x43\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x31\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x42\x5C\x5C\x31\x6A\x5C\x27\x2C\x5C\x27\x5C\x27\x29\x3B\x34\x44\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x4B\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x54\x5C\x27\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x48\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x4D\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x35\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x7A\x5C\x27\x29\x2B\x33\x62\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x35\x5C\x27\x29\x29\x7D\x31\x33\x20\x31\x53\x3D\x31\x44\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x31\x31\x5C\x5C\x31\x38\x5C\x5C\x49\x5C\x5C\x34\x5C\x5C\x4E\x5C\x5C\x54\x5C\x5C\x49\x5C\x5C\x34\x5C\x5C\x4E\x5C\x5C\x4A\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x34\x5C\x27\x29\x2C\x5C\x27\x5C\x5C\x31\x31\x5C\x27\x2B\x32\x6B\x29\x7D\x31\x33\x20\x31\x53\x3D\x31\x44\x7D\x7D\x66\x28\x31\x4B\x29\x5B\x5C\x27\x5C\x5C\x79\x5C\x5C\x44\x5C\x27\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x31\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x31\x5C\x27\x29\x2C\x32\x44\x29\x3B\x31\x30\x20\x32\x44\x28\x29\x7B\x4C\x20\x62\x3D\x64\x2C\x33\x63\x3D\x66\x28\x31\x4B\x29\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x29\x2C\x33\x64\x3D\x66\x28\x31\x4B\x29\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x33\x5C\x27\x29\x5D\x28\x29\x2C\x33\x65\x3D\x31\x52\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x46\x5C\x27\x29\x5D\x28\x29\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x4D\x5C\x27\x29\x5D\x3B\x59\x28\x33\x64\x2B\x33\x63\x3E\x33\x65\x29\x7B\x4C\x20\x63\x3D\x33\x66\x20\x34\x45\x28\x29\x3B\x63\x5B\x5C\x27\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x36\x5C\x5C\x7A\x5C\x27\x5D\x3D\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x62\x3B\x59\x28\x5C\x27\x5C\x5C\x31\x46\x5C\x5C\x32\x6C\x5C\x5C\x31\x46\x5C\x5C\x43\x5C\x5C\x31\x6E\x5C\x27\x21\x3D\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x36\x5C\x27\x29\x29\x31\x52\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x49\x5C\x27\x29\x2C\x5C\x27\x5C\x27\x2B\x31\x61\x5B\x5C\x27\x5C\x5C\x38\x5C\x5C\x42\x5C\x5C\x43\x5C\x27\x5D\x2B\x5C\x27\x5C\x27\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x7A\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x31\x5C\x27\x29\x29\x3B\x31\x33\x7B\x59\x28\x21\x34\x46\x28\x5C\x27\x5C\x5C\x36\x5C\x5C\x31\x67\x5C\x5C\x50\x5C\x5C\x5A\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x44\x5C\x27\x2B\x5C\x27\x5C\x5C\x37\x5C\x27\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x45\x5C\x27\x29\x5D\x29\x34\x47\x5B\x5C\x27\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x41\x5C\x5C\x79\x5C\x5C\x44\x5C\x27\x5D\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x33\x5C\x27\x29\x5D\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x31\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x35\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x38\x5C\x5C\x31\x37\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x50\x5C\x5C\x57\x5C\x27\x3B\x59\x28\x21\x34\x48\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x4B\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x58\x5C\x27\x29\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x45\x5C\x27\x29\x5D\x29\x34\x49\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x49\x5C\x27\x29\x5D\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x33\x5C\x27\x29\x5D\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x31\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x31\x38\x5C\x5C\x31\x37\x5C\x5C\x38\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x50\x5C\x5C\x4A\x5C\x27\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x7A\x5C\x27\x29\x7D\x7D\x2C\x63\x5B\x62\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x49\x5C\x27\x29\x5D\x3D\x31\x53\x7D\x7D\x32\x44\x28\x29\x7D\x29\x7D\x7D\x29\x2C\x24\x28\x31\x39\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x4B\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x37\x5C\x27\x29\x5B\x31\x39\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x31\x39\x2C\x33\x67\x3D\x24\x28\x31\x61\x29\x3B\x33\x67\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x54\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x46\x5C\x27\x2C\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x31\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x35\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x7A\x5C\x27\x29\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x45\x5C\x27\x29\x2C\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x49\x5C\x27\x29\x29\x5B\x5C\x27\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x37\x5C\x5C\x42\x5C\x27\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x31\x5C\x27\x29\x2C\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x49\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x34\x5C\x27\x29\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x46\x5C\x27\x29\x2C\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x46\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x35\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x33\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x43\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x51\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x43\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x58\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x48\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x33\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x49\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x43\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x50\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x31\x6F\x5C\x5C\x31\x75\x5C\x27\x2B\x5C\x27\x5C\x5C\x4E\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x32\x5C\x5C\x31\x68\x5C\x5C\x51\x5C\x5C\x51\x5C\x5C\x31\x74\x5C\x27\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x7A\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x4D\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x33\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x37\x5C\x5C\x31\x6F\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x41\x5C\x5C\x37\x5C\x5C\x41\x5C\x5C\x79\x5C\x5C\x44\x5C\x27\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x4B\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x31\x6F\x5C\x27\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x35\x5C\x27\x29\x29\x7D\x29\x2C\x34\x4A\x28\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x31\x39\x3B\x59\x28\x21\x24\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x4B\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x37\x5C\x27\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x45\x5C\x27\x29\x5D\x29\x31\x4B\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x49\x5C\x27\x29\x5D\x5B\x5C\x27\x5C\x5C\x54\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x46\x5C\x27\x5D\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x31\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x35\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x7A\x5C\x27\x29\x3B\x59\x28\x21\x24\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x4B\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x58\x5C\x27\x29\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x45\x5C\x27\x29\x5D\x29\x31\x4B\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x49\x5C\x27\x29\x5D\x5B\x5C\x27\x5C\x5C\x54\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x46\x5C\x27\x5D\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x31\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x35\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x7A\x5C\x27\x29\x7D\x2C\x32\x43\x29\x2C\x24\x28\x31\x30\x28\x29\x7B\x4C\x20\x76\x3D\x31\x39\x3B\x24\x28\x76\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x43\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x47\x5C\x27\x29\x5B\x5C\x27\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x31\x75\x5C\x5C\x5A\x5C\x5C\x5A\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x7A\x5C\x27\x5D\x28\x29\x2C\x24\x28\x76\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x46\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x35\x5C\x5C\x36\x5C\x5C\x7A\x5C\x5C\x5A\x5C\x27\x29\x5B\x76\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x76\x2C\x32\x45\x3D\x24\x28\x31\x61\x29\x2C\x33\x68\x3D\x32\x45\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x4E\x5C\x5C\x37\x5C\x27\x2B\x5C\x27\x5C\x5C\x36\x5C\x5C\x31\x32\x5C\x27\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x31\x5C\x27\x29\x29\x3B\x33\x69\x28\x32\x45\x2C\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x43\x5C\x27\x29\x2C\x32\x74\x2C\x33\x68\x29\x7D\x29\x3B\x31\x30\x20\x33\x6A\x28\x61\x2C\x62\x29\x7B\x4C\x20\x63\x3D\x76\x3B\x59\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x51\x5C\x27\x29\x21\x3D\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x51\x5C\x27\x29\x29\x7B\x31\x6B\x28\x4C\x20\x64\x3D\x31\x34\x3B\x64\x3C\x61\x5B\x62\x5D\x5B\x5C\x27\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x62\x5C\x27\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x45\x5C\x27\x29\x5D\x3B\x64\x2B\x2B\x29\x59\x28\x61\x5B\x62\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x34\x5C\x27\x29\x5D\x5B\x64\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x45\x5C\x27\x29\x5D\x3D\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x51\x5C\x27\x29\x29\x7B\x4C\x20\x65\x3D\x61\x5B\x62\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x34\x5C\x27\x29\x5D\x5B\x64\x5D\x5B\x5C\x27\x5C\x5C\x54\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x46\x5C\x27\x5D\x3B\x32\x58\x7D\x31\x36\x20\x65\x7D\x31\x33\x20\x34\x4B\x3D\x34\x4C\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x45\x5C\x27\x29\x2C\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x7A\x5C\x27\x29\x29\x7D\x31\x30\x20\x33\x6B\x28\x61\x2C\x62\x2C\x63\x29\x7B\x4C\x20\x64\x3D\x76\x2C\x33\x6C\x3D\x61\x5B\x62\x5D\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x31\x5C\x27\x29\x5D\x5B\x5C\x27\x5C\x5C\x31\x69\x5C\x5C\x37\x5C\x27\x5D\x2C\x33\x6D\x3D\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x58\x5C\x27\x29\x2B\x63\x2B\x5C\x27\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2B\x33\x6C\x2B\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x36\x5C\x5C\x52\x5C\x27\x3B\x31\x36\x20\x33\x6D\x7D\x31\x30\x20\x33\x6E\x28\x61\x2C\x62\x29\x7B\x4C\x20\x63\x3D\x76\x3B\x59\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x4D\x5C\x27\x29\x3D\x3D\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x4D\x5C\x27\x29\x29\x7B\x4C\x20\x64\x3D\x61\x5B\x62\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x49\x5C\x27\x29\x5D\x5B\x31\x34\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x34\x5C\x27\x29\x5D\x5B\x5C\x27\x5C\x5C\x31\x69\x5C\x5C\x37\x5C\x27\x5D\x2C\x33\x6F\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x34\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x5A\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x7A\x5C\x5C\x4E\x5C\x5C\x36\x5C\x5C\x53\x5C\x27\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x46\x5C\x27\x29\x2B\x64\x2B\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x36\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x52\x5C\x27\x29\x3B\x31\x36\x20\x33\x6F\x7D\x31\x33\x20\x34\x4D\x3D\x5C\x27\x5C\x27\x7D\x31\x30\x20\x33\x70\x28\x61\x2C\x62\x29\x7B\x4C\x20\x63\x3D\x76\x2C\x32\x6D\x3D\x61\x5B\x62\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x36\x5C\x27\x29\x5D\x5B\x5C\x27\x5C\x5C\x31\x69\x5C\x5C\x37\x5C\x27\x5D\x2C\x33\x71\x3D\x32\x6D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x48\x5C\x27\x29\x5D\x28\x31\x34\x2C\x32\x75\x29\x2C\x33\x72\x3D\x32\x6D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x48\x5C\x27\x29\x5D\x28\x32\x76\x2C\x32\x77\x29\x2C\x33\x73\x3D\x32\x6D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x48\x5C\x27\x29\x5D\x28\x32\x78\x2C\x31\x51\x29\x2C\x33\x74\x3D\x34\x4E\x5B\x31\x72\x28\x33\x72\x2C\x31\x51\x29\x2D\x31\x63\x5D\x2B\x5C\x27\x5C\x5C\x4F\x5C\x27\x2B\x33\x73\x2B\x5C\x27\x5C\x5C\x31\x4C\x5C\x5C\x4F\x5C\x27\x2B\x33\x71\x2C\x33\x75\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x34\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x45\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x58\x5C\x27\x29\x2B\x33\x74\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x51\x5C\x27\x29\x3B\x31\x36\x20\x33\x75\x7D\x31\x30\x20\x32\x46\x28\x64\x2C\x65\x29\x7B\x4C\x20\x66\x3D\x76\x3B\x59\x28\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x43\x5C\x27\x29\x21\x3D\x3D\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x43\x5C\x27\x29\x29\x7B\x4C\x20\x67\x3D\x24\x28\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x36\x5C\x27\x29\x29\x5B\x5C\x27\x5C\x5C\x54\x5C\x5C\x37\x5C\x5C\x50\x5C\x5C\x78\x5C\x27\x5D\x28\x64\x29\x2C\x31\x54\x3D\x67\x5B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x47\x5C\x27\x29\x29\x5B\x5C\x27\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x37\x5C\x5C\x42\x5C\x27\x5D\x28\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x49\x5C\x27\x29\x29\x2C\x32\x6E\x3D\x31\x54\x5B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x4B\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x46\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x57\x5C\x27\x29\x7C\x7C\x31\x34\x2C\x32\x47\x3D\x31\x54\x5B\x5C\x27\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x31\x70\x5C\x5C\x44\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x32\x5C\x5C\x31\x6D\x5C\x27\x2B\x5C\x27\x5C\x5C\x46\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x57\x5C\x27\x2C\x32\x6E\x2D\x31\x63\x29\x7C\x7C\x31\x34\x2C\x33\x76\x3D\x31\x54\x5B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x48\x5C\x27\x29\x5D\x28\x31\x34\x2C\x32\x47\x29\x2C\x31\x55\x3D\x31\x54\x5B\x5C\x27\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x47\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x27\x5D\x28\x32\x47\x2C\x32\x6E\x29\x2C\x33\x77\x3D\x31\x54\x5B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x48\x5C\x27\x29\x5D\x28\x32\x6E\x29\x3B\x31\x36\x28\x31\x55\x5B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x2F\x5C\x5C\x2F\x73\x5B\x30\x2D\x39\x5D\x2B\x2F\x67\x29\x7C\x7C\x31\x55\x5B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x2F\x5C\x5C\x2F\x77\x5B\x30\x2D\x39\x5D\x2B\x2F\x67\x29\x7C\x7C\x31\x55\x3D\x3D\x5C\x27\x5C\x5C\x57\x5C\x5C\x7A\x5C\x27\x29\x26\x26\x28\x31\x55\x3D\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x31\x5C\x27\x29\x2B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x34\x5C\x27\x29\x29\x2C\x65\x3D\x33\x76\x2B\x31\x55\x2B\x33\x77\x2C\x65\x7D\x31\x33\x7B\x4C\x20\x68\x3D\x2D\x31\x63\x2C\x31\x56\x3D\x5C\x27\x5C\x27\x2C\x31\x76\x3D\x5C\x27\x5C\x27\x3B\x34\x4F\x28\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x53\x5C\x27\x29\x5B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x53\x5C\x5C\x78\x5C\x27\x29\x5B\x5C\x27\x5C\x5C\x46\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x7A\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x78\x5C\x5C\x41\x5C\x27\x29\x5B\x5C\x27\x5C\x5C\x35\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x54\x5C\x27\x5D\x28\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x66\x3B\x31\x6B\x28\x4C\x20\x62\x3D\x34\x50\x28\x31\x61\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x29\x2C\x32\x48\x3D\x34\x51\x28\x31\x61\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x36\x5C\x27\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x33\x5C\x27\x29\x29\x2C\x32\x39\x3D\x31\x34\x2C\x63\x3D\x31\x34\x3B\x63\x3C\x62\x5B\x5C\x27\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x5C\x37\x5C\x5C\x54\x5C\x27\x5D\x26\x26\x28\x32\x39\x3D\x62\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x33\x35\x5C\x27\x2C\x32\x39\x29\x2C\x2D\x31\x63\x21\x3D\x32\x39\x29\x3B\x63\x2B\x2B\x29\x32\x39\x2B\x2B\x3B\x59\x28\x34\x52\x3D\x63\x2C\x34\x53\x3E\x68\x26\x26\x28\x31\x56\x2B\x3D\x5C\x27\x5C\x5C\x56\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x52\x5C\x27\x2C\x31\x76\x2B\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x35\x5C\x27\x29\x29\x2C\x34\x54\x3C\x68\x29\x7B\x34\x55\x3D\x68\x2D\x34\x56\x3B\x31\x6B\x28\x4C\x20\x63\x3D\x31\x34\x3B\x63\x3C\x34\x57\x3B\x63\x2B\x2B\x29\x31\x56\x2B\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x49\x5C\x27\x29\x2C\x31\x76\x2B\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x49\x5C\x27\x29\x7D\x62\x3D\x62\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x2F\x33\x37\x2F\x33\x38\x2C\x5C\x27\x5C\x27\x29\x2C\x31\x56\x2B\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x35\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x31\x5C\x27\x29\x2B\x32\x48\x2B\x5C\x27\x5C\x5C\x31\x50\x5C\x5C\x52\x5C\x27\x2B\x62\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x4D\x5C\x27\x29\x2C\x31\x76\x2B\x3D\x5C\x27\x5C\x5C\x56\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x36\x5C\x5C\x4F\x5C\x5C\x54\x5C\x5C\x42\x5C\x5C\x35\x5C\x27\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x31\x5C\x27\x29\x2B\x32\x48\x2B\x5C\x27\x5C\x5C\x31\x50\x5C\x5C\x52\x5C\x27\x3B\x31\x6B\x28\x4C\x20\x63\x3D\x31\x34\x3B\x63\x3C\x34\x58\x3B\x63\x2B\x2B\x29\x31\x76\x2B\x3D\x5C\x27\x5C\x27\x3B\x31\x76\x2B\x3D\x62\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x4D\x5C\x27\x29\x2C\x68\x3D\x34\x59\x7D\x29\x3B\x31\x6B\x28\x4C\x20\x69\x3D\x31\x34\x3B\x68\x3E\x3D\x69\x3B\x69\x2B\x2B\x29\x31\x56\x2B\x3D\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x51\x5C\x27\x29\x2C\x31\x76\x2B\x3D\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x52\x5C\x27\x2C\x31\x34\x21\x3D\x69\x26\x26\x28\x31\x56\x2B\x3D\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x47\x5C\x27\x29\x2C\x31\x76\x2B\x3D\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x47\x5C\x27\x29\x29\x3B\x34\x5A\x28\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x35\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x31\x62\x5C\x5C\x31\x66\x5C\x5C\x41\x5C\x5C\x38\x5C\x5C\x37\x5C\x27\x29\x5B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x47\x5C\x27\x29\x5D\x28\x31\x76\x29\x2C\x35\x30\x28\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x53\x5C\x5C\x4F\x5C\x5C\x52\x5C\x5C\x4F\x5C\x5C\x31\x37\x5C\x5C\x31\x66\x5C\x27\x2B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x7A\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x53\x5C\x5C\x78\x5C\x27\x29\x5B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x41\x5C\x5C\x7A\x5C\x27\x2C\x5C\x27\x5C\x5C\x44\x5C\x5C\x36\x5C\x5C\x31\x35\x5C\x5C\x33\x5C\x27\x29\x2C\x35\x31\x28\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x46\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x4F\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x4F\x5C\x5C\x52\x5C\x5C\x4F\x5C\x5C\x53\x5C\x5C\x78\x5C\x27\x29\x5B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x78\x5C\x5C\x41\x5C\x27\x29\x5B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x7A\x5C\x27\x29\x5D\x28\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x45\x5C\x27\x29\x29\x2C\x35\x32\x28\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x34\x5C\x27\x29\x2B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x4D\x5C\x27\x29\x29\x5B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x46\x5C\x27\x29\x2C\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x36\x5C\x27\x29\x2B\x66\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x46\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x31\x6F\x5C\x27\x29\x7D\x7D\x31\x30\x20\x33\x78\x28\x61\x2C\x62\x2C\x63\x29\x7B\x4C\x20\x64\x3D\x76\x3B\x59\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x36\x5C\x27\x29\x3D\x3D\x3D\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x4B\x5C\x27\x29\x29\x7B\x4C\x20\x65\x3D\x35\x33\x5B\x35\x34\x5D\x5B\x5C\x27\x5C\x5C\x4A\x5C\x5C\x53\x5C\x5C\x47\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x38\x5C\x5C\x54\x5C\x5C\x35\x5C\x5C\x7A\x5C\x27\x5D\x5B\x5C\x27\x5C\x5C\x31\x69\x5C\x5C\x37\x5C\x27\x5D\x2C\x33\x79\x3D\x65\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x48\x5C\x27\x29\x5D\x28\x31\x34\x2C\x32\x75\x29\x2C\x33\x7A\x3D\x65\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x48\x5C\x27\x29\x5D\x28\x32\x76\x2C\x32\x77\x29\x2C\x33\x41\x3D\x65\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x48\x5C\x27\x29\x5D\x28\x32\x78\x2C\x31\x51\x29\x2C\x33\x42\x3D\x35\x35\x5B\x35\x36\x28\x33\x7A\x2C\x31\x51\x29\x2D\x31\x63\x5D\x2B\x5C\x27\x5C\x5C\x4F\x5C\x27\x2B\x33\x41\x2B\x5C\x27\x5C\x5C\x31\x4C\x5C\x5C\x4F\x5C\x27\x2B\x33\x79\x2C\x33\x43\x3D\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x34\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x45\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x58\x5C\x27\x29\x2B\x33\x42\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x51\x5C\x27\x29\x3B\x31\x36\x20\x33\x43\x7D\x31\x33\x7B\x4C\x20\x66\x3D\x61\x5B\x62\x5D\x5B\x5C\x27\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x37\x5C\x27\x5D\x5B\x5C\x27\x5C\x5C\x31\x69\x5C\x5C\x37\x5C\x27\x5D\x3B\x59\x28\x61\x5B\x62\x5D\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x4D\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x31\x5C\x27\x29\x5D\x29\x7B\x59\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x34\x5C\x27\x29\x3D\x3D\x3D\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x33\x5C\x27\x29\x29\x35\x37\x2B\x3D\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x51\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x46\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x4B\x5C\x27\x29\x2B\x35\x38\x2B\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x34\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x36\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x4B\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x31\x5C\x27\x29\x29\x2B\x35\x39\x2B\x5C\x27\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2B\x35\x61\x2B\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x7A\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4E\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x48\x5C\x27\x29\x29\x2B\x35\x62\x2B\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x35\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x27\x2B\x5C\x27\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x37\x5C\x5C\x36\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x29\x2B\x35\x63\x2B\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x47\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x52\x5C\x27\x29\x3B\x31\x33\x20\x4C\x20\x67\x3D\x61\x5B\x62\x5D\x5B\x5C\x27\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x36\x5C\x5C\x31\x69\x5C\x5C\x37\x5C\x5C\x54\x5C\x5C\x53\x5C\x5C\x50\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x31\x5C\x27\x29\x5D\x5B\x5C\x27\x5C\x5C\x53\x5C\x5C\x42\x5C\x5C\x78\x5C\x27\x5D\x7D\x31\x33\x7B\x59\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x35\x5C\x27\x29\x21\x3D\x3D\x5C\x27\x5C\x5C\x31\x77\x5C\x5C\x32\x61\x5C\x5C\x37\x5C\x5C\x32\x62\x5C\x5C\x36\x5C\x27\x29\x67\x3D\x33\x44\x3B\x31\x33\x7B\x4C\x20\x68\x3D\x35\x64\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x49\x5C\x27\x29\x5D\x28\x35\x65\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x48\x5C\x27\x29\x5D\x28\x29\x2A\x35\x66\x29\x2B\x31\x63\x3B\x35\x67\x3D\x5C\x27\x5C\x5C\x57\x5C\x5C\x46\x5C\x5C\x35\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x38\x5C\x5C\x57\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x4D\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x32\x49\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x32\x5C\x5C\x4E\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x78\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x36\x5C\x27\x29\x2B\x35\x68\x2B\x28\x5C\x27\x5C\x5C\x32\x63\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x7A\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x4D\x5C\x27\x29\x29\x2B\x68\x2B\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x33\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x33\x5C\x27\x29\x29\x7D\x7D\x59\x28\x66\x5B\x5C\x27\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x32\x5C\x5C\x31\x6D\x5C\x5C\x46\x5C\x27\x5D\x28\x66\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x2F\x3C\x33\x45\x28\x3F\x3A\x2E\x2B\x29\x3F\x33\x46\x3D\x28\x3F\x3A\x2E\x2B\x29\x3F\x28\x3F\x3A\x33\x47\x2E\x33\x48\x2E\x33\x49\x29\x2F\x67\x29\x29\x3E\x2D\x31\x63\x29\x7B\x59\x28\x66\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x56\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x31\x32\x5C\x27\x29\x3E\x2D\x31\x63\x29\x7B\x59\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x34\x5C\x27\x29\x3D\x3D\x3D\x5C\x27\x5C\x5C\x32\x5C\x5C\x31\x64\x5C\x5C\x31\x78\x5C\x5C\x31\x70\x5C\x5C\x46\x5C\x27\x29\x66\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x66\x5B\x5C\x27\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x43\x5C\x5C\x54\x5C\x27\x5D\x28\x2F\x3C\x33\x45\x28\x3F\x3A\x2E\x2B\x29\x3F\x33\x46\x3D\x28\x3F\x3A\x2E\x2B\x29\x3F\x28\x3F\x3A\x33\x47\x2E\x33\x48\x2E\x33\x49\x29\x2F\x67\x29\x29\x3C\x66\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x31\x5C\x27\x29\x29\x3F\x63\x3D\x67\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x45\x5C\x27\x29\x2C\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x7A\x5C\x27\x29\x29\x3A\x63\x3D\x32\x46\x28\x66\x29\x3B\x31\x33\x7B\x31\x6B\x28\x4C\x20\x69\x3D\x31\x34\x2C\x31\x79\x3D\x35\x69\x3B\x69\x3C\x31\x79\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x45\x5C\x27\x29\x5D\x3B\x69\x2B\x2B\x29\x7B\x4C\x20\x6A\x3D\x35\x6A\x28\x31\x79\x2C\x69\x29\x2C\x33\x4A\x3D\x35\x6B\x28\x31\x79\x2C\x69\x2C\x6A\x29\x2C\x33\x4B\x3D\x35\x6C\x28\x31\x79\x2C\x69\x2C\x6A\x29\x2C\x35\x6D\x3D\x35\x6E\x28\x31\x79\x2C\x69\x29\x2C\x35\x6F\x3D\x35\x70\x28\x31\x79\x2C\x69\x29\x2C\x33\x4C\x3D\x35\x71\x28\x31\x79\x2C\x69\x29\x2C\x35\x72\x3D\x35\x73\x28\x31\x79\x2C\x69\x29\x2C\x32\x4A\x3D\x5C\x27\x5C\x27\x3B\x35\x74\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x43\x5C\x27\x29\x29\x26\x26\x28\x32\x4A\x2B\x3D\x5C\x27\x5C\x5C\x56\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x46\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x50\x5C\x5C\x4F\x5C\x5C\x41\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x50\x5C\x5C\x4E\x5C\x27\x2B\x69\x2B\x28\x5C\x27\x5C\x5C\x55\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x36\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x36\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x31\x32\x5C\x5C\x35\x5C\x5C\x4E\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x62\x5C\x5C\x55\x5C\x5C\x4F\x5C\x5C\x54\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x31\x5C\x27\x29\x29\x2B\x6A\x2B\x5C\x27\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2B\x33\x4B\x2B\x28\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x36\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x54\x5C\x5C\x34\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x47\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x48\x5C\x27\x29\x29\x2B\x33\x4A\x2B\x28\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x54\x5C\x5C\x34\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x4F\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x45\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x31\x5C\x27\x29\x29\x2B\x33\x4C\x2B\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x47\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x52\x5C\x27\x29\x29\x2C\x35\x75\x2B\x3D\x32\x4A\x7D\x35\x76\x2B\x3D\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x51\x5C\x27\x29\x7D\x7D\x31\x33\x20\x63\x3D\x67\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x45\x5C\x27\x29\x2C\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x7A\x5C\x27\x29\x29\x7D\x31\x33\x7B\x59\x28\x66\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x56\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x31\x32\x5C\x27\x29\x3E\x2D\x31\x63\x29\x63\x3D\x32\x46\x28\x66\x29\x3B\x31\x33\x7B\x59\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x46\x5C\x27\x29\x21\x3D\x3D\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x46\x5C\x27\x29\x29\x7B\x4C\x20\x6B\x3D\x35\x77\x5B\x35\x78\x5D\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x31\x5C\x27\x29\x5D\x5B\x5C\x27\x5C\x5C\x31\x69\x5C\x5C\x37\x5C\x27\x5D\x2C\x33\x4D\x3D\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x58\x5C\x27\x29\x2B\x35\x79\x2B\x5C\x27\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2B\x6B\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x4D\x5C\x27\x29\x3B\x31\x36\x20\x33\x4D\x7D\x31\x33\x20\x63\x3D\x33\x44\x7D\x7D\x4C\x20\x6C\x3D\x5C\x27\x5C\x5C\x56\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x31\x32\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x34\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x33\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x34\x5C\x27\x29\x2B\x63\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x4D\x5C\x27\x29\x3B\x31\x36\x20\x6C\x7D\x7D\x31\x30\x20\x33\x4E\x28\x61\x2C\x62\x29\x7B\x4C\x20\x63\x3D\x76\x3B\x59\x28\x61\x5B\x62\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x49\x5C\x27\x29\x5D\x21\x3D\x33\x4F\x29\x4C\x20\x64\x3D\x61\x5B\x62\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x49\x5C\x27\x29\x5D\x5B\x31\x34\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x35\x5C\x27\x29\x5D\x2C\x32\x4B\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x34\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x51\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x4D\x5C\x27\x29\x2B\x64\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x51\x5C\x27\x29\x3B\x31\x33\x20\x32\x4B\x3D\x5C\x27\x5C\x27\x3B\x31\x36\x20\x32\x4B\x7D\x31\x30\x20\x33\x50\x28\x61\x2C\x62\x29\x7B\x4C\x20\x63\x3D\x76\x2C\x33\x51\x3D\x61\x5B\x62\x5D\x5B\x5C\x27\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x37\x5C\x27\x5D\x5B\x5C\x27\x5C\x5C\x31\x69\x5C\x5C\x37\x5C\x27\x5D\x2C\x33\x52\x3D\x24\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x36\x5C\x27\x29\x29\x5B\x5C\x27\x5C\x5C\x54\x5C\x5C\x37\x5C\x5C\x50\x5C\x5C\x78\x5C\x27\x5D\x28\x33\x51\x29\x2C\x33\x53\x3D\x33\x52\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x29\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x33\x5C\x27\x29\x5D\x28\x29\x5B\x5C\x27\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x47\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x42\x5C\x27\x5D\x28\x31\x34\x2C\x33\x54\x29\x2C\x33\x55\x3D\x5C\x27\x5C\x5C\x56\x5C\x5C\x4A\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x27\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x46\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x5A\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2B\x33\x53\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x7A\x5C\x27\x29\x3B\x31\x36\x20\x33\x55\x7D\x31\x30\x20\x33\x69\x28\x6C\x2C\x6D\x2C\x6E\x2C\x6F\x29\x7B\x4C\x20\x70\x3D\x76\x3B\x59\x28\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x31\x5C\x27\x29\x3D\x3D\x3D\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x31\x5C\x27\x29\x29\x7B\x59\x28\x6D\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x43\x5C\x27\x29\x29\x29\x7B\x4C\x20\x71\x3D\x5C\x27\x5C\x27\x3B\x59\x28\x6F\x3D\x3D\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x7A\x5C\x27\x29\x29\x7B\x59\x28\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x49\x5C\x27\x29\x3D\x3D\x3D\x5C\x27\x5C\x5C\x31\x45\x5C\x5C\x7A\x5C\x5C\x37\x5C\x5C\x31\x41\x5C\x5C\x36\x5C\x27\x29\x71\x3D\x5C\x27\x5C\x5C\x57\x5C\x5C\x46\x5C\x5C\x35\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x38\x5C\x5C\x57\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x27\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x4D\x5C\x27\x29\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x47\x5C\x27\x29\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x34\x5C\x27\x29\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x34\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x27\x2B\x6E\x3B\x31\x33\x7B\x4C\x20\x72\x3D\x35\x7A\x28\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x36\x5C\x27\x29\x29\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x47\x5C\x27\x29\x5D\x28\x35\x41\x29\x2C\x31\x57\x3D\x72\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x47\x5C\x27\x29\x29\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x49\x5C\x27\x29\x29\x2C\x32\x6F\x3D\x31\x57\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x4B\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x46\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x57\x5C\x27\x29\x7C\x7C\x31\x34\x2C\x32\x4C\x3D\x31\x57\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x4B\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x46\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x57\x5C\x27\x2C\x32\x6F\x2D\x31\x63\x29\x7C\x7C\x31\x34\x2C\x33\x56\x3D\x31\x57\x5B\x5C\x27\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x47\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x27\x5D\x28\x31\x34\x2C\x32\x4C\x29\x2C\x31\x58\x3D\x31\x57\x5B\x5C\x27\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x47\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x27\x5D\x28\x32\x4C\x2C\x32\x6F\x29\x2C\x33\x57\x3D\x31\x57\x5B\x5C\x27\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x47\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x27\x5D\x28\x32\x6F\x29\x3B\x31\x36\x28\x31\x58\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x2F\x5C\x5C\x2F\x73\x5B\x30\x2D\x39\x5D\x2B\x2F\x67\x29\x7C\x7C\x31\x58\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x2F\x5C\x5C\x2F\x77\x5B\x30\x2D\x39\x5D\x2B\x2F\x67\x29\x7C\x7C\x31\x58\x3D\x3D\x5C\x27\x5C\x5C\x57\x5C\x5C\x7A\x5C\x27\x29\x26\x26\x28\x31\x58\x3D\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x31\x5C\x27\x29\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x34\x5C\x27\x29\x29\x2C\x35\x42\x3D\x33\x56\x2B\x31\x58\x2B\x33\x57\x2C\x35\x43\x7D\x7D\x31\x33\x7B\x59\x28\x6F\x3D\x3D\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x48\x5C\x27\x29\x29\x7B\x59\x28\x5C\x27\x5C\x5C\x31\x35\x5C\x5C\x31\x59\x5C\x5C\x31\x59\x5C\x5C\x32\x61\x5C\x5C\x31\x64\x5C\x27\x21\x3D\x3D\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x47\x5C\x27\x29\x29\x7B\x4C\x20\x73\x3D\x32\x6A\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x49\x5C\x27\x29\x5D\x28\x32\x6A\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x48\x5C\x27\x29\x5D\x28\x29\x2A\x6E\x29\x2B\x31\x63\x3B\x71\x3D\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x48\x5C\x27\x29\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x4D\x5C\x27\x29\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x45\x5C\x27\x29\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x36\x5C\x27\x29\x2B\x6E\x2B\x28\x5C\x27\x5C\x5C\x32\x63\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x7A\x5C\x27\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x4D\x5C\x27\x29\x29\x2B\x73\x2B\x28\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x33\x5C\x27\x29\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x33\x5C\x27\x29\x29\x7D\x31\x33\x7B\x4C\x20\x74\x3D\x35\x44\x28\x31\x61\x29\x2C\x33\x58\x3D\x74\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x47\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x36\x5C\x5C\x31\x32\x5C\x27\x29\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x31\x5C\x27\x29\x29\x3B\x35\x45\x28\x74\x2C\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x43\x5C\x27\x29\x2C\x32\x74\x2C\x33\x58\x29\x7D\x7D\x31\x33\x20\x71\x3D\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x48\x5C\x27\x29\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x4D\x5C\x27\x29\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x51\x5C\x27\x29\x2B\x6F\x2B\x28\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x47\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x4E\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x4A\x5C\x5C\x37\x5C\x5C\x32\x63\x5C\x27\x2B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x34\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x27\x29\x2B\x6E\x7D\x24\x5B\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x47\x5C\x27\x29\x5D\x28\x7B\x5C\x27\x5C\x5C\x53\x5C\x5C\x42\x5C\x5C\x78\x5C\x27\x3A\x71\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x5A\x5C\x5C\x4A\x5C\x5C\x35\x5C\x27\x3A\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x4D\x5C\x27\x29\x2C\x5C\x27\x5C\x5C\x7A\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x36\x5C\x5C\x31\x64\x5C\x5C\x5A\x5C\x5C\x4A\x5C\x5C\x35\x5C\x27\x3A\x70\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x35\x5C\x27\x29\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x43\x5C\x5C\x43\x5C\x5C\x35\x5C\x5C\x38\x5C\x5C\x38\x5C\x27\x3A\x31\x30\x28\x62\x29\x7B\x4C\x20\x63\x3D\x70\x3B\x59\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x7A\x5C\x27\x29\x3D\x3D\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x4B\x5C\x27\x29\x29\x7B\x4C\x20\x64\x3D\x35\x46\x5B\x35\x47\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x4D\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x31\x31\x5C\x27\x29\x3B\x59\x28\x64\x5B\x31\x34\x5D\x5B\x5C\x27\x5C\x5C\x37\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x50\x5C\x27\x5D\x28\x29\x3D\x3D\x35\x48\x29\x31\x36\x20\x32\x36\x21\x3D\x28\x35\x49\x3D\x64\x5B\x31\x63\x5D\x29\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x35\x4A\x29\x26\x26\x35\x4B\x28\x35\x4C\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x35\x4D\x29\x29\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x33\x5C\x27\x29\x5D\x28\x29\x7D\x31\x33\x7B\x59\x28\x6D\x5B\x5C\x27\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x43\x5C\x5C\x54\x5C\x27\x5D\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x43\x5C\x27\x29\x29\x29\x7B\x59\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x36\x5C\x27\x29\x21\x3D\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x47\x5C\x27\x29\x29\x4C\x20\x65\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x46\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x7A\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x7A\x5C\x27\x29\x3B\x31\x33\x7B\x4C\x20\x66\x3D\x7B\x7D\x3B\x66\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x58\x5C\x27\x29\x5D\x3D\x31\x51\x2C\x66\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x4B\x5C\x27\x29\x5D\x3D\x32\x43\x2C\x35\x4E\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x34\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x49\x5C\x27\x29\x29\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x66\x29\x7D\x7D\x4C\x20\x67\x3D\x62\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x45\x5C\x27\x29\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x58\x5C\x27\x29\x5D\x3B\x59\x28\x67\x21\x3D\x33\x4F\x29\x7B\x59\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x47\x5C\x27\x29\x21\x3D\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x47\x5C\x27\x29\x29\x35\x4F\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x48\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x4D\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x51\x5C\x27\x29\x2B\x35\x50\x2B\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x47\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x34\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x34\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x27\x29\x2B\x35\x51\x3B\x31\x33\x7B\x31\x6B\x28\x4C\x20\x68\x3D\x31\x34\x2C\x31\x7A\x3D\x67\x3B\x68\x3C\x31\x7A\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x45\x5C\x27\x29\x5D\x3B\x68\x2B\x2B\x29\x7B\x59\x28\x5C\x27\x5C\x5C\x31\x78\x5C\x5C\x4A\x5C\x5C\x7A\x5C\x5C\x31\x6D\x5C\x5C\x32\x70\x5C\x27\x3D\x3D\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x47\x5C\x27\x29\x29\x7B\x4C\x20\x69\x3D\x33\x6A\x28\x31\x7A\x2C\x68\x29\x2C\x33\x59\x3D\x33\x6B\x28\x31\x7A\x2C\x68\x2C\x69\x29\x2C\x33\x5A\x3D\x33\x78\x28\x31\x7A\x2C\x68\x2C\x69\x29\x2C\x35\x52\x3D\x33\x4E\x28\x31\x7A\x2C\x68\x29\x2C\x35\x53\x3D\x33\x6E\x28\x31\x7A\x2C\x68\x29\x2C\x34\x30\x3D\x33\x70\x28\x31\x7A\x2C\x68\x29\x2C\x35\x54\x3D\x33\x50\x28\x31\x7A\x2C\x68\x29\x2C\x32\x4D\x3D\x5C\x27\x5C\x27\x3B\x6D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x43\x5C\x27\x29\x29\x26\x26\x28\x32\x4D\x2B\x3D\x5C\x27\x5C\x5C\x56\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x27\x2B\x5C\x27\x5C\x5C\x55\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x4E\x5C\x5C\x41\x5C\x27\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x4B\x5C\x27\x29\x2B\x68\x2B\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x34\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x36\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x4B\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x46\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x27\x29\x2B\x69\x2B\x5C\x27\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2B\x33\x5A\x2B\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x7A\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4E\x5C\x27\x2B\x5C\x27\x5C\x5C\x37\x5C\x5C\x41\x5C\x5C\x37\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x29\x2B\x33\x59\x2B\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x35\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x45\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x31\x5C\x27\x29\x29\x2B\x34\x30\x2B\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x47\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x52\x5C\x27\x29\x29\x2C\x65\x2B\x3D\x32\x4D\x7D\x31\x33\x7B\x4C\x20\x6A\x3D\x35\x55\x5B\x35\x56\x5D\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x45\x5C\x27\x29\x5D\x5B\x5C\x27\x5C\x5C\x31\x69\x5C\x5C\x37\x5C\x27\x5D\x2C\x34\x31\x3D\x35\x57\x28\x5C\x27\x5C\x5C\x56\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x52\x5C\x27\x29\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x47\x5C\x27\x29\x5D\x28\x6A\x29\x2C\x34\x32\x3D\x34\x31\x5B\x5C\x27\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x32\x5C\x5C\x37\x5C\x27\x5D\x28\x29\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x33\x5C\x27\x29\x5D\x28\x29\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x31\x34\x2C\x33\x54\x29\x2C\x34\x33\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x33\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x46\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x5A\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2B\x34\x32\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x7A\x5C\x27\x29\x3B\x31\x36\x20\x34\x33\x7D\x7D\x65\x2B\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x51\x5C\x27\x29\x7D\x7D\x31\x33\x7B\x59\x28\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x4D\x5C\x27\x29\x3D\x3D\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x4D\x5C\x27\x29\x29\x65\x3D\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x46\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x45\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x58\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x4F\x5C\x5C\x31\x45\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x38\x5C\x5C\x4F\x5C\x5C\x31\x5A\x5C\x5C\x79\x5C\x5C\x53\x5C\x27\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x7A\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x36\x5C\x27\x29\x2B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x58\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x57\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x52\x5C\x27\x3B\x31\x33\x7B\x4C\x20\x6B\x3D\x33\x66\x20\x35\x58\x28\x29\x3B\x6B\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x45\x5C\x27\x29\x5D\x3D\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x63\x3B\x35\x59\x5B\x5C\x27\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x37\x5C\x5C\x42\x5C\x27\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x49\x5C\x27\x29\x2C\x5C\x27\x5C\x27\x2B\x31\x61\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x49\x5C\x27\x29\x5D\x2B\x5C\x27\x5C\x27\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x7A\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x31\x5C\x27\x29\x29\x7D\x2C\x6B\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x49\x5C\x27\x29\x5D\x3D\x35\x5A\x7D\x7D\x6C\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x47\x5C\x27\x29\x5D\x28\x65\x29\x2C\x6C\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x37\x5C\x5C\x54\x5C\x5C\x53\x5C\x5C\x50\x5C\x27\x2B\x5C\x27\x5C\x5C\x47\x5C\x27\x29\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x33\x5C\x27\x29\x5D\x28\x29\x7D\x7D\x7D\x29\x7D\x7D\x31\x33\x7B\x4C\x20\x75\x3D\x36\x30\x3F\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x70\x3B\x59\x28\x36\x31\x29\x7B\x4C\x20\x62\x3D\x36\x32\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x58\x5C\x27\x29\x5D\x28\x36\x33\x2C\x32\x79\x29\x3B\x31\x36\x20\x36\x34\x3D\x32\x36\x2C\x62\x7D\x7D\x3A\x31\x30\x28\x29\x7B\x7D\x3B\x31\x36\x20\x36\x35\x3D\x21\x5B\x5D\x2C\x75\x7D\x7D\x7D\x29\x3B\x31\x30\x20\x32\x30\x28\x61\x2C\x62\x2C\x63\x29\x7B\x4C\x20\x64\x3D\x31\x39\x3B\x31\x6B\x28\x4C\x20\x65\x3D\x61\x5B\x5C\x27\x5C\x5C\x38\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x37\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x31\x69\x5C\x27\x29\x2C\x32\x4E\x3D\x2F\x5B\x5E\x7B\x5C\x5C\x7D\x5D\x2B\x28\x3F\x3D\x7D\x29\x2F\x67\x2C\x32\x71\x3D\x31\x34\x3B\x32\x71\x3C\x65\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x45\x5C\x27\x29\x5D\x3B\x32\x71\x2B\x2B\x29\x7B\x4C\x20\x66\x3D\x65\x5B\x32\x71\x5D\x5B\x5C\x27\x5C\x5C\x38\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x37\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x31\x31\x5C\x27\x29\x3B\x59\x28\x66\x5B\x31\x34\x5D\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x33\x5C\x27\x29\x5D\x28\x29\x3D\x3D\x62\x29\x31\x36\x20\x32\x36\x21\x3D\x28\x63\x3D\x66\x5B\x31\x63\x5D\x29\x5B\x5C\x27\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x43\x5C\x5C\x54\x5C\x27\x5D\x28\x32\x4E\x29\x26\x26\x36\x36\x28\x63\x5B\x5C\x27\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x43\x5C\x5C\x54\x5C\x27\x5D\x28\x32\x4E\x29\x29\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x33\x5C\x27\x29\x5D\x28\x29\x7D\x31\x36\x21\x31\x63\x7D\x24\x28\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x47\x5C\x5C\x79\x5C\x5C\x7A\x5C\x5C\x5A\x5C\x27\x2B\x5C\x27\x5C\x5C\x4F\x5C\x5C\x36\x5C\x27\x29\x5B\x5C\x27\x5C\x5C\x35\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x54\x5C\x27\x5D\x28\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x31\x39\x2C\x32\x64\x3D\x24\x28\x31\x61\x29\x2C\x32\x65\x3D\x32\x64\x5B\x5C\x27\x5C\x5C\x54\x5C\x5C\x37\x5C\x5C\x50\x5C\x5C\x78\x5C\x27\x5D\x28\x29\x2C\x34\x34\x3D\x32\x65\x5B\x5C\x27\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x31\x66\x5C\x5C\x79\x5C\x5C\x31\x38\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x31\x65\x5C\x5C\x36\x5C\x5C\x38\x5C\x27\x2B\x5C\x27\x5C\x5C\x35\x5C\x27\x5D\x28\x29\x2C\x32\x4F\x3D\x32\x30\x28\x32\x65\x2C\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x51\x5C\x27\x29\x29\x2C\x32\x50\x3D\x32\x30\x28\x32\x65\x2C\x5C\x27\x5C\x5C\x41\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x44\x5C\x27\x29\x2C\x32\x51\x3D\x32\x30\x28\x32\x65\x2C\x5C\x27\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x42\x5C\x27\x29\x3B\x34\x34\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x49\x5C\x27\x29\x29\x26\x26\x31\x34\x21\x3D\x32\x4F\x26\x26\x28\x32\x64\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x7A\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x35\x5C\x27\x29\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x32\x4F\x29\x2C\x31\x34\x21\x3D\x32\x50\x26\x26\x32\x64\x5B\x5C\x27\x5C\x5C\x36\x5C\x5C\x7A\x5C\x5C\x7A\x5C\x5C\x31\x65\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x27\x5D\x28\x32\x50\x29\x2C\x31\x34\x21\x3D\x32\x51\x26\x26\x32\x64\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x7A\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x49\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x7A\x5C\x27\x29\x29\x5B\x5C\x27\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x37\x5C\x5C\x42\x5C\x27\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x46\x5C\x27\x29\x2C\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x51\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x4E\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x31\x68\x5C\x27\x2B\x32\x51\x2B\x5C\x27\x5C\x5C\x31\x6F\x5C\x27\x29\x29\x7D\x29\x2C\x24\x28\x31\x39\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x36\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x4F\x5C\x5C\x47\x5C\x27\x29\x5B\x31\x39\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x31\x30\x28\x29\x7B\x4C\x20\x64\x3D\x31\x39\x2C\x32\x52\x3D\x24\x28\x31\x61\x29\x2C\x31\x49\x3D\x32\x52\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x29\x2C\x34\x35\x3D\x31\x49\x5B\x5C\x27\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x31\x66\x5C\x5C\x79\x5C\x5C\x31\x38\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x31\x65\x5C\x5C\x36\x5C\x5C\x38\x5C\x27\x2B\x5C\x27\x5C\x5C\x35\x5C\x27\x5D\x28\x29\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x33\x5C\x27\x29\x5D\x28\x29\x2C\x32\x72\x3D\x7B\x7D\x3B\x32\x72\x5B\x5C\x27\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x37\x5C\x27\x5D\x3D\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x45\x5C\x27\x29\x2C\x32\x72\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x33\x5C\x27\x29\x5D\x3D\x5C\x27\x5C\x5C\x54\x5C\x5C\x34\x5C\x5C\x31\x4C\x5C\x5C\x54\x5C\x5C\x58\x5C\x5C\x31\x4C\x5C\x5C\x54\x5C\x5C\x4D\x5C\x27\x2C\x34\x35\x5B\x5C\x27\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x43\x5C\x5C\x54\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x31\x71\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x41\x5C\x5C\x46\x5C\x5C\x5A\x5C\x5C\x31\x6A\x5C\x27\x29\x26\x26\x28\x31\x49\x3D\x31\x34\x21\x3D\x32\x30\x28\x31\x49\x2C\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x31\x5C\x27\x29\x29\x3F\x32\x30\x28\x31\x49\x2C\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x31\x5C\x27\x29\x29\x3A\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x35\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x36\x5C\x27\x29\x2C\x32\x52\x5B\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x35\x5C\x5C\x31\x77\x5C\x5C\x41\x5C\x5C\x37\x5C\x27\x2B\x5C\x27\x5C\x5C\x54\x5C\x27\x5D\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x48\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x51\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x47\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x31\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x45\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x4B\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x58\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x51\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x55\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x41\x5C\x5C\x46\x5C\x5C\x5A\x5C\x5C\x4E\x5C\x5C\x37\x5C\x5C\x41\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x45\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x36\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x31\x5C\x27\x29\x2B\x31\x49\x2B\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x43\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x43\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x47\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x32\x5C\x5C\x37\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x29\x2B\x31\x49\x2B\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x43\x5C\x27\x29\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x47\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x41\x5C\x5C\x46\x5C\x5C\x5A\x5C\x5C\x55\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x79\x5C\x27\x2B\x5C\x27\x5C\x5C\x78\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x57\x5C\x27\x2B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x43\x5C\x27\x29\x29\x29\x2C\x24\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x48\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x37\x5C\x5C\x78\x5C\x5C\x35\x5C\x27\x29\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x31\x30\x28\x62\x29\x7B\x28\x62\x3D\x24\x28\x31\x61\x29\x29\x5B\x5C\x27\x5C\x5C\x79\x5C\x5C\x44\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x43\x5C\x5C\x31\x62\x5C\x27\x2C\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x31\x6C\x3B\x62\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x7A\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x38\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x41\x5C\x5C\x38\x5C\x5C\x4E\x5C\x5C\x35\x5C\x5C\x32\x5C\x5C\x4A\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x7A\x5C\x5C\x35\x5C\x27\x2B\x5C\x27\x5C\x5C\x7A\x5C\x27\x29\x2C\x24\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x47\x5C\x27\x29\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x36\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x35\x5C\x27\x5D\x28\x36\x37\x29\x7D\x29\x7D\x29\x2C\x24\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x47\x5C\x27\x29\x29\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x48\x5C\x27\x29\x5D\x28\x32\x72\x29\x2C\x24\x28\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x47\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x4F\x5C\x5C\x36\x5C\x27\x29\x5B\x64\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x31\x30\x28\x62\x29\x7B\x4C\x20\x63\x3D\x64\x3B\x28\x62\x3D\x24\x28\x31\x61\x29\x29\x5B\x63\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x63\x3B\x31\x36\x20\x24\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x46\x5C\x27\x29\x29\x5B\x5C\x27\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x27\x5D\x28\x7B\x5C\x27\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x78\x5C\x5C\x31\x64\x5C\x5C\x79\x5C\x5C\x4A\x5C\x27\x3A\x24\x28\x62\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x33\x5C\x27\x29\x29\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x46\x5C\x27\x29\x5D\x28\x29\x5B\x5C\x27\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x4A\x5C\x27\x5D\x2D\x33\x33\x7D\x2C\x33\x34\x29\x2C\x21\x31\x63\x7D\x29\x7D\x29\x29\x7D\x29\x2C\x24\x28\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x47\x5C\x5C\x79\x5C\x5C\x7A\x5C\x5C\x5A\x5C\x27\x2B\x5C\x27\x5C\x5C\x4F\x5C\x5C\x47\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x31\x62\x5C\x5C\x31\x4A\x5C\x5C\x53\x5C\x5C\x79\x5C\x5C\x37\x5C\x27\x2B\x5C\x27\x5C\x5C\x35\x5C\x27\x29\x5B\x31\x39\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x31\x39\x2C\x31\x47\x3D\x24\x28\x31\x61\x29\x2C\x32\x31\x3D\x31\x47\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x51\x5C\x27\x29\x5D\x28\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x46\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x35\x5C\x27\x5D\x28\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x33\x5C\x27\x29\x5D\x28\x29\x2C\x32\x32\x3D\x31\x47\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x47\x5C\x27\x29\x5D\x28\x29\x3B\x59\x28\x32\x31\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x35\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x4B\x5C\x27\x29\x29\x29\x7B\x31\x48\x20\x34\x36\x3D\x32\x32\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x48\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x4B\x5C\x27\x29\x2C\x5C\x27\x5C\x27\x29\x3B\x31\x47\x5B\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x35\x5C\x5C\x31\x77\x5C\x5C\x41\x5C\x5C\x37\x5C\x27\x2B\x5C\x27\x5C\x5C\x54\x5C\x27\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x48\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x4D\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x35\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x34\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x52\x5C\x27\x2B\x34\x36\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x35\x5C\x27\x29\x29\x7D\x59\x28\x32\x31\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x51\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x31\x6A\x5C\x27\x29\x29\x7B\x31\x48\x20\x34\x37\x3D\x32\x32\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x49\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x31\x6A\x5C\x27\x2C\x5C\x27\x5C\x27\x29\x3B\x31\x47\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x4B\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x54\x5C\x27\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x48\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x4D\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x35\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x31\x5C\x27\x29\x2B\x34\x37\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x35\x5C\x27\x29\x29\x7D\x59\x28\x32\x31\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x36\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x58\x5C\x5C\x48\x5C\x27\x29\x29\x29\x7B\x31\x48\x20\x34\x38\x3D\x32\x32\x5B\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x35\x5C\x27\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x51\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x5C\x31\x6A\x5C\x27\x2C\x5C\x27\x5C\x27\x29\x3B\x31\x47\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x4B\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x54\x5C\x27\x5D\x28\x5C\x27\x5C\x5C\x56\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x27\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x4D\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x35\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x48\x5C\x5C\x31\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x52\x5C\x27\x2B\x34\x38\x2B\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x52\x5C\x27\x29\x7D\x59\x28\x32\x31\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x58\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x42\x5C\x5C\x31\x6A\x5C\x27\x29\x29\x7B\x31\x48\x20\x34\x39\x3D\x32\x32\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x31\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x42\x5C\x5C\x31\x6A\x5C\x27\x2C\x5C\x27\x5C\x27\x29\x3B\x31\x47\x5B\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x35\x5C\x5C\x31\x77\x5C\x5C\x41\x5C\x5C\x37\x5C\x27\x2B\x5C\x27\x5C\x5C\x54\x5C\x27\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x48\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x4D\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x36\x5C\x5C\x31\x32\x5C\x5C\x35\x5C\x5C\x4F\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x42\x5C\x27\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x7A\x5C\x27\x29\x2B\x34\x39\x2B\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x52\x5C\x27\x29\x7D\x59\x28\x32\x31\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x5C\x27\x5C\x5C\x31\x71\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x47\x5C\x5C\x79\x5C\x5C\x32\x5C\x5C\x31\x6A\x5C\x27\x29\x29\x7B\x59\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x46\x5C\x27\x29\x21\x3D\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x34\x5C\x5C\x34\x5C\x27\x29\x29\x7B\x31\x48\x20\x34\x61\x3D\x32\x32\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x7A\x5C\x5C\x4B\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x48\x5C\x27\x29\x2C\x5C\x27\x5C\x27\x29\x3B\x31\x47\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x4B\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x54\x5C\x27\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x48\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x4E\x5C\x5C\x47\x5C\x5C\x79\x5C\x5C\x32\x5C\x27\x2B\x5C\x27\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2B\x34\x61\x2B\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x4A\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x52\x5C\x27\x29\x7D\x31\x33\x7B\x59\x28\x36\x38\x5B\x36\x39\x5D\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x49\x5C\x27\x29\x5D\x21\x3D\x36\x61\x29\x4C\x20\x62\x3D\x36\x62\x5B\x36\x63\x5D\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x49\x5C\x27\x29\x5D\x5B\x31\x34\x5D\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x35\x5C\x27\x29\x5D\x2C\x32\x53\x3D\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x47\x5C\x5C\x34\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x31\x5C\x5C\x51\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x4D\x5C\x27\x29\x2B\x62\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x51\x5C\x27\x29\x3B\x31\x33\x20\x32\x53\x3D\x5C\x27\x5C\x27\x3B\x31\x36\x20\x32\x53\x7D\x7D\x7D\x29\x2C\x24\x28\x31\x39\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x45\x5C\x27\x29\x2B\x5C\x27\x5C\x5C\x4F\x5C\x5C\x41\x5C\x5C\x46\x5C\x5C\x42\x5C\x5C\x36\x5C\x5C\x50\x5C\x5C\x35\x5C\x27\x29\x5B\x31\x39\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x46\x5C\x5C\x36\x5C\x27\x29\x5D\x28\x31\x30\x28\x29\x7B\x4C\x20\x61\x3D\x31\x39\x2C\x32\x54\x3D\x24\x28\x31\x61\x29\x3B\x32\x54\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x45\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x45\x5C\x5C\x49\x5C\x27\x29\x29\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x35\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x58\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x51\x5C\x5C\x43\x5C\x27\x29\x29\x26\x26\x32\x54\x5B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x48\x5C\x5C\x43\x5C\x27\x29\x5D\x28\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x36\x5C\x5C\x48\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x35\x5C\x5C\x51\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x43\x5C\x5C\x33\x5C\x27\x29\x2B\x61\x28\x5C\x27\x5C\x5C\x31\x5C\x5C\x32\x5C\x5C\x33\x5C\x5C\x49\x5C\x5C\x48\x5C\x27\x29\x29\x7D\x29\x3B\x31\x30\x20\x32\x35\x28\x29\x7B\x4C\x20\x61\x3D\x5B\x5C\x27\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x47\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x42\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x31\x5C\x5C\x31\x38\x5C\x5C\x49\x5C\x5C\x34\x5C\x5C\x4E\x5C\x5C\x54\x5C\x27\x2C\x5C\x27\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x31\x6F\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x38\x5C\x5C\x31\x37\x5C\x5C\x38\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x50\x5C\x5C\x4A\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x27\x2C\x5C\x27\x5C\x5C\x35\x5C\x5C\x4F\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x78\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x53\x5C\x5C\x4F\x5C\x5C\x52\x5C\x5C\x4F\x5C\x5C\x31\x37\x5C\x5C\x31\x66\x5C\x27\x2C\x5C\x27\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x32\x5C\x5C\x4E\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x4A\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x5A\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x50\x5C\x5C\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x41\x5C\x5C\x46\x5C\x5C\x5A\x5C\x5C\x4E\x5C\x5C\x37\x5C\x5C\x41\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x45\x5C\x5C\x50\x5C\x5C\x41\x5C\x5C\x41\x5C\x5C\x42\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x62\x5C\x5C\x31\x66\x5C\x5C\x41\x5C\x5C\x38\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x50\x5C\x5C\x4F\x5C\x5C\x41\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x50\x5C\x5C\x4E\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x4E\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x41\x5C\x5C\x46\x5C\x27\x2C\x5C\x27\x5C\x5C\x44\x5C\x5C\x7A\x5C\x5C\x4F\x5C\x5C\x56\x5C\x5C\x41\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x43\x5C\x5C\x38\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x53\x5C\x5C\x4F\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x4F\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x36\x5C\x5C\x7A\x5C\x5C\x4F\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x38\x5C\x5C\x41\x5C\x5C\x31\x75\x5C\x27\x2C\x5C\x27\x5C\x5C\x50\x5C\x5C\x47\x5C\x5C\x55\x5C\x5C\x4F\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x37\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x55\x5C\x27\x2C\x5C\x27\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x62\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x31\x38\x5C\x5C\x44\x5C\x5C\x4E\x5C\x5C\x79\x5C\x5C\x55\x5C\x5C\x57\x5C\x5C\x52\x5C\x5C\x56\x5C\x27\x2C\x5C\x27\x5C\x5C\x55\x5C\x5C\x57\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x43\x5C\x27\x2C\x5C\x27\x5C\x5C\x46\x5C\x5C\x35\x5C\x5C\x35\x5C\x5C\x7A\x5C\x27\x2C\x5C\x27\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x41\x5C\x5C\x79\x5C\x5C\x44\x5C\x27\x2C\x5C\x27\x5C\x5C\x46\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x7A\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x71\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x31\x77\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x44\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x36\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x38\x5C\x5C\x4A\x5C\x5C\x36\x5C\x5C\x44\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x78\x5C\x5C\x41\x5C\x27\x2C\x5C\x27\x5C\x5C\x35\x5C\x5C\x31\x37\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x50\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x7A\x5C\x5C\x7A\x5C\x5C\x31\x65\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x36\x5C\x5C\x4F\x5C\x5C\x54\x5C\x5C\x42\x5C\x5C\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x43\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x50\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x46\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x27\x2C\x5C\x27\x5C\x5C\x32\x63\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x37\x5C\x5C\x31\x31\x5C\x5C\x31\x6E\x5C\x5C\x38\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x4E\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x43\x5C\x5C\x31\x62\x5C\x5C\x44\x5C\x5C\x36\x5C\x5C\x31\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x52\x5C\x5C\x31\x59\x5C\x5C\x42\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x31\x68\x5C\x5C\x4F\x5C\x5C\x32\x33\x5C\x5C\x79\x5C\x27\x2C\x5C\x27\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x31\x6E\x5C\x5C\x32\x5C\x5C\x31\x62\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x33\x5C\x5C\x45\x5C\x5C\x47\x5C\x5C\x36\x5C\x5C\x31\x6D\x5C\x5C\x5A\x5C\x5C\x34\x62\x5C\x5C\x31\x4A\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x68\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x35\x5C\x5C\x31\x74\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x68\x5C\x5C\x31\x6F\x5C\x5C\x55\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x78\x5C\x5C\x4A\x5C\x5C\x7A\x5C\x5C\x31\x6D\x5C\x5C\x32\x70\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x59\x5C\x5C\x31\x65\x5C\x5C\x34\x63\x5C\x5C\x31\x66\x5C\x5C\x31\x6D\x5C\x27\x2C\x5C\x27\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x38\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x54\x5C\x5C\x34\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x4F\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x35\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x43\x5C\x5C\x54\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x71\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x31\x59\x5C\x5C\x42\x5C\x5C\x42\x5C\x5C\x79\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x50\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x38\x5C\x5C\x4A\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x31\x6F\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x36\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x4A\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x78\x5C\x27\x2C\x5C\x27\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x36\x5C\x27\x2C\x5C\x27\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x36\x5C\x5C\x4F\x5C\x5C\x54\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x46\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x27\x2C\x5C\x27\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x32\x5C\x5C\x31\x6D\x5C\x5C\x46\x5C\x27\x2C\x5C\x27\x5C\x5C\x55\x5C\x5C\x47\x5C\x5C\x53\x5C\x5C\x37\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x55\x5C\x5C\x4F\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x41\x5C\x5C\x46\x5C\x5C\x5A\x5C\x5C\x4F\x5C\x5C\x78\x5C\x5C\x41\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x38\x5C\x5C\x4A\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x36\x5C\x27\x2C\x5C\x27\x5C\x5C\x55\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x4E\x5C\x5C\x4A\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x6E\x5C\x5C\x38\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x4A\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x31\x66\x5C\x5C\x79\x5C\x5C\x31\x38\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x31\x65\x5C\x5C\x36\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x47\x5C\x5C\x44\x5C\x5C\x36\x5C\x5C\x41\x5C\x5C\x78\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x35\x5C\x5C\x35\x5C\x5C\x4E\x5C\x5C\x31\x35\x5C\x5C\x41\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x79\x5C\x5C\x4E\x5C\x5C\x31\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x48\x5C\x5C\x34\x5C\x5C\x4B\x5C\x5C\x34\x5C\x5C\x33\x5C\x5C\x31\x5C\x5C\x31\x6E\x5C\x5C\x31\x78\x5C\x5C\x32\x61\x5C\x5C\x78\x5C\x5C\x31\x38\x5C\x5C\x31\x41\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x41\x5C\x5C\x37\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x78\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x53\x5C\x5C\x37\x5C\x5C\x54\x5C\x5C\x79\x5C\x5C\x42\x5C\x27\x2C\x5C\x27\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x43\x5C\x5C\x31\x62\x5C\x27\x2C\x5C\x27\x5C\x5C\x57\x5C\x5C\x4E\x5C\x5C\x57\x5C\x27\x2C\x5C\x27\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x38\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x5A\x5C\x5C\x31\x68\x5C\x5C\x47\x5C\x5C\x78\x5C\x27\x2C\x5C\x27\x5C\x5C\x4F\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x4F\x5C\x5C\x52\x5C\x5C\x4F\x5C\x5C\x53\x5C\x5C\x78\x5C\x27\x2C\x5C\x27\x5C\x5C\x55\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x38\x5C\x5C\x4A\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x64\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x4A\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x58\x5C\x5C\x48\x5C\x5C\x33\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x33\x5C\x5C\x32\x62\x5C\x5C\x31\x35\x5C\x5C\x35\x5C\x5C\x38\x5C\x5C\x31\x70\x5C\x5C\x54\x5C\x27\x2C\x5C\x27\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x31\x62\x5C\x5C\x31\x74\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x31\x32\x5C\x27\x2C\x5C\x27\x5C\x5C\x58\x5C\x5C\x4D\x5C\x5C\x49\x5C\x5C\x45\x5C\x5C\x4B\x5C\x5C\x48\x5C\x5C\x33\x5C\x5C\x32\x73\x5C\x5C\x31\x5A\x5C\x5C\x32\x62\x5C\x5C\x31\x43\x5C\x5C\x31\x77\x5C\x5C\x31\x65\x5C\x27\x2C\x5C\x27\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x4E\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x4A\x5C\x5C\x37\x5C\x5C\x32\x63\x5C\x27\x2C\x5C\x27\x5C\x5C\x44\x5C\x5C\x36\x5C\x5C\x31\x35\x5C\x5C\x33\x5C\x27\x2C\x5C\x27\x5C\x5C\x4A\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x4A\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x7A\x5C\x5C\x31\x64\x5C\x5C\x79\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x4A\x5C\x5C\x34\x64\x5C\x5C\x44\x5C\x5C\x31\x46\x5C\x5C\x31\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x36\x5C\x5C\x7A\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x53\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x35\x5C\x5C\x36\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x42\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x36\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x31\x6E\x5C\x5C\x36\x5C\x5C\x32\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x37\x5C\x5C\x54\x5C\x5C\x53\x5C\x5C\x50\x5C\x27\x2C\x5C\x27\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x38\x5C\x5C\x31\x37\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x50\x5C\x5C\x57\x5C\x27\x2C\x5C\x27\x5C\x5C\x47\x5C\x5C\x53\x5C\x5C\x37\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x4F\x5C\x5C\x47\x5C\x5C\x37\x5C\x5C\x44\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x31\x64\x5C\x5C\x31\x42\x5C\x5C\x32\x5C\x5C\x31\x46\x5C\x27\x2C\x5C\x27\x5C\x5C\x54\x5C\x5C\x37\x5C\x5C\x37\x5C\x5C\x4A\x5C\x5C\x38\x5C\x5C\x31\x68\x5C\x5C\x57\x5C\x5C\x57\x5C\x5C\x31\x38\x5C\x5C\x31\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x31\x6F\x5C\x5C\x4F\x5C\x5C\x31\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x44\x5C\x5C\x36\x5C\x5C\x50\x5C\x5C\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x32\x6C\x5C\x5C\x31\x62\x5C\x5C\x32\x5C\x5C\x46\x5C\x5C\x53\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x38\x5C\x5C\x41\x5C\x5C\x7A\x5C\x5C\x37\x5C\x5C\x54\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x46\x5C\x5C\x46\x5C\x5C\x31\x5C\x5C\x31\x5C\x5C\x47\x5C\x5C\x36\x5C\x5C\x31\x74\x5C\x5C\x41\x5C\x5C\x50\x5C\x27\x2C\x5C\x27\x5C\x5C\x4A\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x41\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x36\x5C\x5C\x31\x64\x5C\x5C\x35\x5C\x5C\x50\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x36\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x38\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x38\x5C\x5C\x41\x5C\x27\x2C\x5C\x27\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4E\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x7A\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x31\x32\x5C\x5C\x31\x32\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x31\x65\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x64\x5C\x5C\x36\x5C\x5C\x47\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x4F\x5C\x5C\x79\x5C\x5C\x46\x5C\x5C\x4F\x5C\x5C\x31\x65\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x53\x5C\x5C\x44\x5C\x5C\x7A\x5C\x27\x2C\x5C\x27\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x43\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x62\x5C\x5C\x31\x74\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x36\x5C\x5C\x44\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x53\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x4E\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x6E\x5C\x5C\x36\x5C\x5C\x31\x35\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x4A\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x42\x5C\x5C\x31\x46\x5C\x5C\x31\x78\x5C\x5C\x79\x5C\x5C\x31\x4A\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x50\x5C\x5C\x79\x5C\x5C\x31\x35\x5C\x5C\x35\x5C\x5C\x31\x65\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x37\x5C\x5C\x5A\x5C\x5C\x47\x5C\x5C\x79\x5C\x5C\x32\x5C\x5C\x4E\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x71\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x31\x70\x5C\x5C\x44\x5C\x5C\x46\x5C\x5C\x79\x5C\x27\x2C\x5C\x27\x5C\x5C\x57\x5C\x5C\x31\x38\x5C\x5C\x49\x5C\x5C\x34\x5C\x5C\x4E\x5C\x5C\x54\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x27\x2C\x5C\x27\x5C\x5C\x35\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x54\x5C\x27\x2C\x5C\x27\x5C\x5C\x5A\x5C\x5C\x4E\x5C\x5C\x37\x5C\x5C\x41\x5C\x5C\x37\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x4E\x5C\x5C\x37\x5C\x5C\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x31\x6F\x5C\x5C\x4F\x5C\x5C\x46\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x38\x5C\x5C\x41\x5C\x27\x2C\x5C\x27\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x34\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x4E\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x53\x5C\x27\x2C\x5C\x27\x5C\x5C\x41\x5C\x5C\x37\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x27\x2C\x5C\x27\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x31\x75\x5C\x5C\x5A\x5C\x5C\x5A\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x7A\x5C\x27\x2C\x5C\x27\x5C\x5C\x46\x5C\x5C\x54\x5C\x5C\x36\x5C\x5C\x31\x42\x5C\x5C\x31\x65\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x31\x68\x5C\x5C\x31\x35\x5C\x5C\x41\x5C\x5C\x38\x5C\x5C\x41\x5C\x5C\x47\x5C\x5C\x78\x5C\x5C\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x53\x5C\x5C\x4E\x5C\x5C\x50\x5C\x5C\x79\x5C\x5C\x47\x5C\x5C\x41\x5C\x27\x2C\x5C\x27\x5C\x5C\x33\x5C\x5C\x34\x5C\x5C\x49\x5C\x5C\x45\x5C\x5C\x31\x5C\x5C\x58\x5C\x5C\x48\x5C\x5C\x78\x5C\x5C\x42\x5C\x5C\x31\x5A\x5C\x5C\x31\x66\x5C\x5C\x31\x70\x5C\x5C\x46\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x55\x5C\x5C\x4F\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x31\x31\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x32\x5C\x5C\x35\x5C\x5C\x37\x5C\x5C\x47\x5C\x5C\x53\x5C\x5C\x37\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x44\x5C\x27\x2C\x5C\x27\x5C\x5C\x34\x5C\x5C\x53\x5C\x5C\x50\x5C\x5C\x32\x33\x5C\x5C\x44\x5C\x5C\x4A\x5C\x5C\x47\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x37\x5C\x5C\x36\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x71\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x31\x38\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x44\x5C\x27\x2C\x5C\x27\x5C\x5C\x32\x49\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x37\x5C\x5C\x31\x31\x5C\x5C\x31\x6E\x5C\x5C\x38\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x4E\x5C\x27\x2C\x5C\x27\x5C\x5C\x4F\x5C\x5C\x31\x45\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x38\x5C\x5C\x4F\x5C\x5C\x31\x5A\x5C\x5C\x79\x5C\x5C\x53\x5C\x27\x2C\x5C\x27\x5C\x5C\x33\x5C\x5C\x33\x5C\x5C\x4D\x5C\x5C\x58\x5C\x5C\x58\x5C\x5C\x58\x5C\x5C\x31\x4A\x5C\x5C\x7A\x5C\x5C\x37\x5C\x5C\x32\x73\x5C\x5C\x53\x5C\x5C\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x50\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x78\x5C\x5C\x34\x64\x5C\x5C\x31\x32\x5C\x5C\x4A\x5C\x5C\x32\x6C\x5C\x27\x2C\x5C\x27\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x47\x5C\x5C\x35\x5C\x5C\x78\x5C\x27\x2C\x5C\x27\x5C\x5C\x32\x70\x5C\x5C\x31\x59\x5C\x5C\x50\x5C\x5C\x32\x5C\x5C\x47\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x37\x5C\x5C\x54\x5C\x5C\x53\x5C\x27\x2C\x5C\x27\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x42\x5C\x5C\x5A\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x32\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x7A\x5C\x5C\x79\x5C\x5C\x50\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x47\x5C\x5C\x79\x5C\x5C\x7A\x5C\x5C\x5A\x5C\x27\x2C\x5C\x27\x5C\x5C\x41\x5C\x5C\x38\x5C\x5C\x41\x5C\x5C\x47\x5C\x5C\x41\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x37\x5C\x5C\x5A\x5C\x5C\x31\x68\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x32\x5C\x5C\x35\x5C\x5C\x4E\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x62\x5C\x5C\x55\x5C\x5C\x4F\x5C\x5C\x54\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x71\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x46\x5C\x5C\x79\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x47\x5C\x5C\x79\x5C\x5C\x7A\x5C\x5C\x5A\x5C\x27\x2C\x5C\x27\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x4F\x5C\x5C\x41\x5C\x5C\x7A\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x6E\x5C\x5C\x43\x5C\x5C\x31\x41\x5C\x5C\x31\x43\x5C\x5C\x31\x64\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x79\x5C\x5C\x46\x5C\x5C\x46\x5C\x5C\x38\x5C\x5C\x35\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x77\x5C\x5C\x31\x77\x5C\x5C\x31\x64\x5C\x5C\x35\x5C\x5C\x32\x66\x5C\x27\x2C\x5C\x27\x5C\x5C\x54\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x46\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x66\x5C\x5C\x34\x63\x5C\x5C\x31\x65\x5C\x5C\x35\x5C\x5C\x32\x33\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x31\x6F\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x31\x68\x5C\x5C\x4F\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x38\x5C\x5C\x57\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x46\x5C\x5C\x36\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x57\x5C\x5C\x46\x5C\x5C\x35\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x38\x5C\x5C\x57\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x41\x5C\x5C\x46\x5C\x5C\x5A\x5C\x5C\x4E\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x44\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x55\x5C\x27\x2C\x5C\x27\x5C\x5C\x46\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x79\x5C\x5C\x42\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x31\x67\x5C\x5C\x50\x5C\x5C\x5A\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x44\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x44\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x54\x5C\x5C\x35\x5C\x5C\x41\x5C\x5C\x31\x32\x5C\x5C\x54\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x70\x5C\x5C\x54\x5C\x5C\x31\x70\x5C\x5C\x31\x66\x5C\x5C\x32\x55\x5C\x27\x2C\x5C\x27\x5C\x5C\x4F\x5C\x5C\x31\x35\x5C\x5C\x41\x5C\x5C\x38\x5C\x5C\x41\x5C\x5C\x47\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x31\x74\x5C\x5C\x41\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x53\x5C\x5C\x4F\x5C\x5C\x31\x37\x5C\x5C\x31\x66\x5C\x5C\x41\x5C\x5C\x44\x5C\x27\x2C\x5C\x27\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x38\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x5A\x5C\x5C\x31\x68\x5C\x5C\x4F\x5C\x5C\x41\x5C\x27\x2C\x5C\x27\x5C\x5C\x57\x5C\x5C\x31\x38\x5C\x5C\x49\x5C\x5C\x34\x5C\x5C\x4E\x5C\x5C\x54\x5C\x5C\x49\x5C\x5C\x34\x5C\x5C\x4E\x5C\x5C\x4A\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x4E\x5C\x5C\x54\x5C\x27\x2C\x5C\x27\x5C\x5C\x55\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x36\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x36\x5C\x5C\x4F\x5C\x5C\x54\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x46\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x5C\x31\x6A\x5C\x27\x2C\x5C\x27\x5C\x5C\x57\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x46\x5C\x5C\x36\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x37\x5C\x5C\x31\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x4E\x5C\x5C\x47\x5C\x5C\x53\x5C\x27\x2C\x5C\x27\x5C\x5C\x7A\x5C\x5C\x34\x62\x5C\x5C\x31\x64\x5C\x5C\x32\x62\x5C\x5C\x31\x66\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x75\x5C\x5C\x35\x5C\x5C\x31\x68\x5C\x5C\x4F\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x54\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x41\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x46\x5C\x5C\x36\x5C\x5C\x4F\x5C\x5C\x46\x5C\x5C\x36\x5C\x5C\x4E\x5C\x5C\x46\x5C\x27\x2C\x5C\x27\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x31\x32\x5C\x5C\x31\x68\x5C\x5C\x46\x5C\x5C\x41\x5C\x5C\x42\x5C\x5C\x38\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x31\x74\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x36\x5C\x5C\x44\x5C\x27\x2C\x5C\x27\x5C\x5C\x57\x5C\x5C\x31\x5C\x5C\x31\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x71\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x43\x5C\x5C\x43\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x4E\x5C\x5C\x42\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x37\x5C\x5C\x36\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x33\x5C\x5C\x31\x74\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x36\x5C\x5C\x44\x5C\x27\x2C\x5C\x27\x5C\x5C\x4F\x5C\x5C\x38\x5C\x5C\x42\x5C\x5C\x43\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x27\x2C\x5C\x27\x5C\x5C\x32\x56\x5C\x5C\x32\x56\x5C\x5C\x32\x56\x5C\x5C\x31\x37\x5C\x5C\x32\x37\x5C\x5C\x32\x57\x5C\x5C\x32\x37\x5C\x5C\x32\x57\x5C\x5C\x32\x37\x5C\x5C\x32\x57\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x4A\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x71\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x31\x41\x5C\x5C\x53\x5C\x5C\x43\x5C\x5C\x43\x5C\x27\x2C\x5C\x27\x5C\x5C\x32\x49\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x32\x5C\x5C\x4E\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x78\x5C\x27\x2C\x5C\x27\x5C\x5C\x43\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x31\x32\x5C\x5C\x79\x5C\x5C\x42\x5C\x5C\x5A\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x35\x5C\x5C\x31\x32\x5C\x5C\x54\x5C\x5C\x5A\x5C\x5C\x32\x61\x5C\x27\x2C\x5C\x27\x5C\x5C\x47\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x31\x62\x5C\x5C\x31\x32\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x53\x5C\x5C\x44\x5C\x5C\x7A\x5C\x27\x2C\x5C\x27\x5C\x5C\x4A\x5C\x5C\x53\x5C\x5C\x47\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x38\x5C\x5C\x54\x5C\x5C\x35\x5C\x5C\x7A\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x36\x5C\x5C\x4A\x5C\x5C\x55\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x31\x35\x5C\x5C\x4F\x5C\x27\x2C\x5C\x27\x5C\x5C\x32\x55\x5C\x5C\x31\x32\x5C\x5C\x32\x73\x5C\x5C\x31\x65\x5C\x5C\x47\x5C\x27\x2C\x5C\x27\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x62\x5C\x5C\x31\x66\x5C\x5C\x41\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x4F\x5C\x5C\x52\x5C\x5C\x4F\x5C\x27\x2C\x5C\x27\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x43\x5C\x5C\x54\x5C\x27\x2C\x5C\x27\x5C\x5C\x33\x5C\x5C\x33\x5C\x5C\x4B\x5C\x5C\x34\x5C\x5C\x4D\x5C\x5C\x48\x5C\x5C\x45\x5C\x5C\x31\x45\x5C\x5C\x32\x33\x5C\x5C\x7A\x5C\x5C\x31\x43\x5C\x5C\x31\x46\x5C\x5C\x32\x61\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x31\x38\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x44\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x5C\x55\x5C\x27\x2C\x5C\x27\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x4E\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x4A\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x43\x5C\x5C\x43\x5C\x5C\x35\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x55\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x54\x5C\x5C\x35\x5C\x5C\x36\x5C\x5C\x7A\x5C\x5C\x4E\x5C\x5C\x37\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x31\x32\x5C\x27\x2C\x5C\x27\x5C\x5C\x35\x5C\x5C\x32\x5C\x5C\x31\x31\x5C\x27\x2C\x5C\x27\x5C\x5C\x47\x5C\x5C\x79\x5C\x5C\x7A\x5C\x5C\x5A\x5C\x27\x2C\x5C\x27\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x5C\x37\x5C\x5C\x54\x5C\x27\x2C\x5C\x27\x5C\x5C\x57\x5C\x5C\x38\x5C\x5C\x49\x5C\x5C\x34\x5C\x5C\x4E\x5C\x5C\x43\x5C\x27\x2C\x5C\x27\x5C\x5C\x35\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x6A\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x32\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x31\x64\x5C\x5C\x79\x5C\x5C\x31\x32\x5C\x5C\x31\x32\x5C\x5C\x78\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x41\x5C\x5C\x46\x5C\x5C\x5A\x5C\x27\x2C\x5C\x27\x5C\x5C\x32\x5C\x5C\x31\x4A\x5C\x5C\x46\x5C\x5C\x31\x78\x5C\x5C\x43\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x36\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x54\x5C\x5C\x34\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x65\x5C\x5C\x41\x5C\x5C\x31\x70\x5C\x5C\x34\x65\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x55\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x4E\x5C\x5C\x41\x5C\x27\x2C\x5C\x27\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x31\x75\x5C\x5C\x5A\x5C\x5C\x4E\x5C\x5C\x5A\x5C\x5C\x36\x5C\x5C\x42\x5C\x5C\x7A\x5C\x27\x2C\x5C\x27\x5C\x5C\x54\x5C\x5C\x35\x5C\x5C\x36\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x4E\x5C\x5C\x31\x62\x5C\x5C\x4E\x5C\x5C\x44\x5C\x5C\x79\x5C\x5C\x4E\x5C\x5C\x44\x5C\x5C\x53\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x71\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x42\x5C\x5C\x79\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x38\x5C\x5C\x31\x43\x5C\x5C\x32\x33\x5C\x5C\x78\x5C\x5C\x31\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x46\x5C\x5C\x31\x6E\x5C\x5C\x47\x5C\x5C\x31\x75\x5C\x5C\x53\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x37\x5C\x5C\x42\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x42\x5C\x5C\x43\x5C\x27\x2C\x5C\x27\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x31\x70\x5C\x5C\x44\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x32\x5C\x5C\x31\x6D\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x43\x5C\x5C\x41\x5C\x5C\x46\x5C\x5C\x5A\x5C\x5C\x4E\x5C\x5C\x31\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x44\x5C\x5C\x31\x6D\x5C\x5C\x31\x46\x5C\x5C\x35\x5C\x5C\x7A\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x35\x5C\x5C\x32\x66\x5C\x5C\x31\x62\x5C\x5C\x34\x65\x5C\x5C\x31\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x78\x5C\x5C\x32\x73\x5C\x5C\x31\x6E\x5C\x5C\x31\x43\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x37\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x53\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x42\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x31\x32\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x5A\x5C\x5C\x78\x5C\x5C\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x46\x5C\x5C\x31\x31\x5C\x5C\x31\x50\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x31\x64\x5C\x5C\x32\x66\x5C\x5C\x5A\x5C\x5C\x79\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x31\x41\x5C\x5C\x37\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x27\x2C\x5C\x27\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x4F\x5C\x5C\x79\x5C\x5C\x4A\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x41\x5C\x5C\x37\x5C\x5C\x5A\x5C\x5C\x31\x68\x5C\x5C\x4F\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x71\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x31\x42\x5C\x5C\x79\x5C\x5C\x32\x5C\x5C\x31\x6A\x5C\x27\x2C\x5C\x27\x5C\x5C\x55\x5C\x5C\x44\x5C\x5C\x79\x5C\x5C\x4E\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x38\x5C\x5C\x55\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x45\x5C\x5C\x7A\x5C\x5C\x37\x5C\x5C\x31\x41\x5C\x5C\x36\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x31\x70\x5C\x5C\x79\x5C\x5C\x31\x5A\x5C\x5C\x31\x66\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x5A\x5C\x5C\x32\x55\x5C\x5C\x31\x43\x5C\x5C\x43\x5C\x27\x2C\x5C\x27\x5C\x5C\x32\x6C\x5C\x5C\x31\x46\x5C\x5C\x50\x5C\x5C\x32\x66\x5C\x5C\x31\x65\x5C\x27\x2C\x5C\x27\x5C\x5C\x32\x70\x5C\x5C\x54\x5C\x5C\x31\x45\x5C\x5C\x31\x64\x5C\x5C\x32\x33\x5C\x27\x2C\x5C\x27\x5C\x5C\x7A\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x36\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x38\x5C\x5C\x4A\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x75\x5C\x5C\x44\x5C\x5C\x31\x4A\x5C\x5C\x36\x5C\x5C\x31\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x54\x5C\x5C\x37\x5C\x5C\x50\x5C\x5C\x78\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x38\x5C\x5C\x42\x5C\x5C\x36\x5C\x5C\x4A\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x37\x5C\x5C\x79\x5C\x5C\x44\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x36\x5C\x5C\x31\x32\x5C\x5C\x35\x5C\x5C\x4F\x5C\x5C\x36\x5C\x5C\x78\x5C\x5C\x35\x5C\x5C\x42\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x54\x5C\x5C\x4E\x5C\x5C\x37\x5C\x5C\x5A\x5C\x5C\x55\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x36\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x41\x5C\x5C\x37\x5C\x5C\x78\x5C\x5C\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x43\x5C\x5C\x42\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x78\x5C\x5C\x31\x64\x5C\x5C\x79\x5C\x5C\x4A\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x67\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x53\x5C\x5C\x4F\x5C\x5C\x31\x37\x5C\x5C\x31\x38\x5C\x5C\x41\x5C\x5C\x7A\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x38\x5C\x5C\x31\x38\x5C\x5C\x31\x38\x5C\x5C\x31\x37\x5C\x5C\x5A\x5C\x5C\x79\x5C\x5C\x53\x5C\x5C\x37\x5C\x5C\x53\x5C\x5C\x47\x5C\x27\x2C\x5C\x27\x5C\x5C\x50\x5C\x5C\x35\x5C\x5C\x7A\x5C\x5C\x41\x5C\x5C\x36\x5C\x5C\x31\x69\x5C\x5C\x37\x5C\x5C\x54\x5C\x5C\x53\x5C\x5C\x50\x5C\x27\x2C\x5C\x27\x5C\x5C\x38\x5C\x5C\x53\x5C\x5C\x47\x5C\x5C\x38\x5C\x5C\x37\x5C\x5C\x42\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x31\x32\x5C\x27\x2C\x5C\x27\x5C\x5C\x34\x5C\x5C\x51\x5C\x5C\x31\x5C\x5C\x31\x5C\x5C\x49\x5C\x5C\x4D\x5C\x5C\x48\x5C\x5C\x31\x78\x5C\x5C\x46\x5C\x5C\x31\x75\x5C\x5C\x32\x62\x5C\x5C\x53\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x7A\x5C\x5C\x79\x5C\x5C\x46\x5C\x5C\x79\x5C\x5C\x78\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x31\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x4A\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x43\x5C\x5C\x35\x5C\x5C\x31\x77\x5C\x5C\x41\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x36\x5C\x5C\x7A\x5C\x5C\x5A\x5C\x27\x2C\x5C\x27\x5C\x5C\x43\x5C\x5C\x79\x5C\x5C\x53\x5C\x5C\x44\x5C\x5C\x37\x5C\x5C\x35\x5C\x5C\x42\x5C\x5C\x31\x43\x5C\x5C\x4A\x5C\x27\x2C\x5C\x27\x5C\x5C\x36\x5C\x5C\x44\x5C\x5C\x41\x5C\x5C\x50\x5C\x5C\x36\x5C\x5C\x37\x5C\x5C\x35\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x32\x5C\x5C\x35\x5C\x5C\x42\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x35\x5C\x5C\x43\x5C\x5C\x35\x5C\x5C\x44\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x44\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x35\x5C\x5C\x4E\x5C\x5C\x47\x5C\x5C\x78\x5C\x5C\x79\x5C\x5C\x43\x5C\x27\x2C\x5C\x27\x5C\x5C\x54\x5C\x5C\x37\x5C\x5C\x50\x5C\x5C\x78\x5C\x5C\x31\x4C\x5C\x5C\x47\x5C\x5C\x79\x5C\x5C\x7A\x5C\x5C\x5A\x5C\x27\x2C\x5C\x27\x5C\x5C\x37\x5C\x5C\x4E\x5C\x5C\x41\x5C\x5C\x44\x5C\x5C\x46\x5C\x5C\x79\x5C\x5C\x55\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x4A\x5C\x5C\x4F\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x27\x2C\x5C\x27\x5C\x5C\x32\x5C\x5C\x31\x64\x5C\x5C\x31\x78\x5C\x5C\x31\x70\x5C\x5C\x46\x5C\x27\x2C\x5C\x27\x5C\x5C\x7A\x5C\x5C\x35\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x5A\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x32\x5C\x5C\x35\x5C\x5C\x37\x5C\x27\x2C\x5C\x27\x5C\x5C\x42\x5C\x5C\x36\x5C\x5C\x4A\x5C\x5C\x55\x5C\x5C\x57\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x43\x5C\x5C\x78\x5C\x5C\x36\x5C\x5C\x38\x5C\x5C\x38\x5C\x5C\x31\x31\x5C\x5C\x55\x5C\x5C\x4A\x5C\x5C\x79\x5C\x5C\x38\x5C\x27\x2C\x5C\x27\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x53\x5C\x5C\x78\x5C\x5C\x52\x5C\x5C\x56\x5C\x5C\x57\x5C\x5C\x78\x5C\x5C\x41\x5C\x5C\x52\x5C\x27\x2C\x5C\x27\x5C\x5C\x4E\x5C\x5C\x4A\x5C\x5C\x4E\x5C\x5C\x31\x62\x5C\x5C\x4E\x5C\x5C\x44\x5C\x5C\x79\x5C\x5C\x4E\x5C\x5C\x44\x5C\x5C\x53\x5C\x27\x2C\x5C\x27\x5C\x5C\x31\x42\x5C\x5C\x46\x5C\x5C\x32\x66\x5C\x5C\x31\x5A\x5C\x5C\x31\x6D\x5C\x27\x5D\x3B\x32\x35\x3D\x31\x30\x28\x29\x7B\x31\x36\x20\x61\x7D\x3B\x31\x36\x20\x32\x35\x28\x29\x7D\x27\x2C\x36\x32\x2C\x36\x71\x2C\x27\x7C\x36\x72\x7C\x36\x73\x7C\x36\x74\x7C\x36\x75\x7C\x36\x76\x7C\x36\x77\x7C\x36\x78\x7C\x36\x79\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x36\x7A\x7C\x36\x41\x7C\x36\x42\x7C\x36\x43\x7C\x36\x44\x7C\x36\x45\x7C\x36\x46\x7C\x36\x47\x7C\x36\x48\x7C\x36\x49\x7C\x36\x4A\x7C\x36\x4B\x7C\x36\x4C\x7C\x36\x4D\x7C\x36\x4E\x7C\x36\x4F\x7C\x36\x50\x7C\x36\x51\x7C\x36\x52\x7C\x36\x53\x7C\x36\x54\x7C\x36\x55\x7C\x36\x56\x7C\x36\x57\x7C\x36\x58\x7C\x36\x59\x7C\x36\x5A\x7C\x36\x68\x7C\x37\x30\x7C\x36\x65\x7C\x37\x31\x7C\x37\x32\x7C\x37\x33\x7C\x37\x34\x7C\x37\x35\x7C\x36\x66\x7C\x37\x36\x7C\x37\x37\x7C\x37\x38\x7C\x37\x39\x7C\x37\x61\x7C\x37\x62\x7C\x37\x63\x7C\x37\x64\x7C\x37\x65\x7C\x37\x66\x7C\x37\x67\x7C\x37\x68\x7C\x37\x69\x7C\x37\x6A\x7C\x37\x6B\x7C\x37\x6C\x7C\x37\x6D\x7C\x37\x6E\x7C\x37\x6F\x7C\x37\x70\x7C\x36\x6A\x7C\x37\x71\x7C\x37\x72\x7C\x37\x73\x7C\x37\x74\x7C\x37\x75\x7C\x37\x76\x7C\x37\x77\x7C\x37\x78\x7C\x37\x79\x7C\x37\x7A\x7C\x37\x41\x7C\x37\x42\x7C\x37\x43\x7C\x37\x44\x7C\x37\x45\x7C\x37\x46\x7C\x37\x47\x7C\x37\x48\x7C\x37\x49\x7C\x37\x4A\x7C\x37\x4B\x7C\x37\x4C\x7C\x37\x4D\x7C\x37\x4E\x7C\x37\x4F\x7C\x37\x50\x7C\x37\x51\x7C\x37\x52\x7C\x37\x53\x7C\x37\x54\x7C\x37\x55\x7C\x37\x56\x7C\x37\x57\x7C\x37\x58\x7C\x37\x59\x7C\x37\x5A\x7C\x38\x30\x7C\x38\x31\x7C\x38\x32\x7C\x38\x33\x7C\x38\x34\x7C\x38\x35\x7C\x38\x36\x7C\x38\x37\x7C\x38\x38\x7C\x38\x39\x7C\x38\x61\x7C\x38\x62\x7C\x38\x63\x7C\x38\x64\x7C\x38\x65\x7C\x38\x66\x7C\x38\x67\x7C\x38\x68\x7C\x38\x69\x7C\x38\x6A\x7C\x38\x6B\x7C\x38\x6C\x7C\x38\x6D\x7C\x38\x6E\x7C\x38\x6F\x7C\x38\x70\x7C\x38\x71\x7C\x38\x72\x7C\x38\x73\x7C\x38\x74\x7C\x38\x75\x7C\x38\x76\x7C\x38\x77\x7C\x38\x78\x7C\x38\x79\x7C\x38\x7A\x7C\x38\x41\x7C\x38\x42\x7C\x38\x43\x7C\x38\x44\x7C\x38\x45\x7C\x38\x46\x7C\x38\x47\x7C\x38\x48\x7C\x38\x49\x7C\x38\x4A\x7C\x38\x4B\x7C\x38\x4C\x7C\x38\x4D\x7C\x38\x4E\x7C\x38\x4F\x7C\x38\x50\x7C\x38\x51\x7C\x38\x52\x7C\x38\x53\x7C\x38\x54\x7C\x38\x55\x7C\x38\x56\x7C\x38\x57\x7C\x38\x58\x7C\x38\x59\x7C\x38\x5A\x7C\x39\x30\x7C\x39\x31\x7C\x39\x32\x7C\x39\x33\x7C\x39\x34\x7C\x39\x35\x7C\x39\x36\x7C\x39\x37\x7C\x39\x38\x7C\x39\x39\x7C\x39\x61\x7C\x39\x62\x7C\x39\x63\x7C\x36\x6C\x7C\x39\x64\x7C\x39\x65\x7C\x39\x66\x7C\x39\x67\x7C\x39\x68\x7C\x39\x69\x7C\x39\x6A\x7C\x39\x6B\x7C\x39\x6C\x7C\x39\x6D\x7C\x39\x6E\x7C\x39\x6F\x7C\x39\x70\x7C\x39\x71\x7C\x39\x72\x7C\x39\x73\x7C\x39\x74\x7C\x39\x75\x7C\x39\x76\x7C\x39\x77\x7C\x39\x78\x7C\x39\x79\x7C\x39\x7A\x7C\x39\x41\x7C\x39\x42\x7C\x39\x43\x7C\x39\x44\x7C\x39\x45\x7C\x39\x46\x7C\x39\x47\x7C\x39\x48\x7C\x39\x49\x7C\x39\x4A\x7C\x39\x4B\x7C\x39\x4C\x7C\x39\x4D\x7C\x39\x4E\x7C\x39\x4F\x7C\x39\x50\x7C\x39\x51\x7C\x39\x52\x7C\x39\x53\x7C\x39\x54\x7C\x39\x55\x7C\x39\x56\x7C\x39\x57\x7C\x39\x58\x7C\x39\x59\x7C\x39\x5A\x7C\x61\x30\x7C\x61\x31\x7C\x61\x32\x7C\x61\x33\x7C\x61\x34\x7C\x61\x35\x7C\x61\x36\x7C\x61\x37\x7C\x61\x38\x7C\x61\x39\x7C\x61\x61\x7C\x61\x62\x7C\x36\x69\x7C\x61\x63\x7C\x61\x64\x7C\x61\x65\x7C\x61\x66\x7C\x61\x67\x7C\x61\x68\x7C\x61\x69\x7C\x61\x6A\x7C\x61\x6B\x7C\x61\x6C\x7C\x61\x6D\x7C\x61\x6E\x7C\x61\x6F\x7C\x61\x70\x7C\x61\x71\x7C\x61\x72\x7C\x61\x73\x7C\x61\x74\x7C\x61\x75\x7C\x61\x76\x7C\x61\x77\x7C\x61\x78\x7C\x61\x79\x7C\x61\x7A\x7C\x61\x41\x7C\x61\x42\x7C\x61\x43\x7C\x61\x44\x7C\x61\x45\x7C\x61\x46\x7C\x61\x47\x7C\x61\x48\x7C\x61\x49\x7C\x61\x4A\x7C\x61\x4B\x7C\x61\x4C\x7C\x61\x4D\x7C\x61\x4E\x7C\x61\x4F\x7C\x61\x50\x7C\x61\x51\x7C\x61\x52\x7C\x61\x53\x7C\x61\x54\x7C\x61\x55\x7C\x61\x56\x7C\x61\x57\x7C\x61\x58\x7C\x61\x59\x7C\x61\x5A\x7C\x62\x30\x7C\x62\x31\x7C\x62\x32\x7C\x62\x33\x7C\x62\x34\x7C\x62\x35\x7C\x62\x36\x7C\x62\x37\x7C\x62\x38\x7C\x62\x39\x7C\x62\x61\x7C\x62\x62\x7C\x62\x63\x7C\x62\x64\x7C\x62\x65\x7C\x62\x66\x7C\x62\x67\x7C\x62\x68\x7C\x62\x69\x7C\x62\x6A\x7C\x62\x6B\x7C\x62\x6C\x7C\x62\x6D\x7C\x62\x6E\x7C\x62\x6F\x7C\x62\x70\x7C\x62\x71\x7C\x62\x72\x7C\x62\x73\x7C\x62\x74\x7C\x62\x75\x7C\x62\x76\x7C\x62\x77\x7C\x62\x78\x7C\x62\x79\x7C\x62\x7A\x7C\x62\x41\x7C\x62\x42\x7C\x62\x43\x7C\x62\x44\x7C\x62\x45\x7C\x62\x46\x7C\x62\x47\x7C\x62\x48\x7C\x62\x49\x7C\x62\x4A\x7C\x62\x4B\x7C\x62\x4C\x7C\x62\x4D\x7C\x62\x4E\x7C\x62\x4F\x7C\x62\x50\x7C\x62\x51\x7C\x62\x52\x7C\x62\x53\x7C\x62\x54\x7C\x62\x55\x7C\x62\x56\x7C\x62\x57\x7C\x62\x58\x7C\x62\x59\x7C\x62\x5A\x7C\x63\x30\x7C\x63\x31\x7C\x36\x67\x7C\x63\x32\x7C\x63\x33\x7C\x63\x34\x7C\x63\x35\x7C\x63\x36\x7C\x63\x37\x7C\x63\x38\x27\x2E\x63\x39\x28\x27\x7C\x27\x29\x2C\x30\x2C\x7B\x7D\x29\x29","\x7C","\x73\x70\x6C\x69\x74","\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x66\x75\x6E\x63\x74\x69\x6F\x6E\x7C\x72\x65\x74\x75\x72\x6E\x7C\x53\x74\x72\x69\x6E\x67\x7C\x69\x66\x7C\x77\x68\x69\x6C\x65\x7C\x70\x61\x72\x73\x65\x49\x6E\x74\x7C\x72\x65\x70\x6C\x61\x63\x65\x7C\x6E\x65\x77\x7C\x65\x76\x61\x6C\x7C\x66\x72\x6F\x6D\x43\x68\x61\x72\x43\x6F\x64\x65\x7C\x74\x6F\x53\x74\x72\x69\x6E\x67\x7C\x52\x65\x67\x45\x78\x70\x7C\x33\x38\x36\x7C\x78\x33\x30\x7C\x78\x37\x38\x7C\x78\x33\x31\x7C\x78\x33\x32\x7C\x78\x36\x35\x7C\x78\x36\x31\x7C\x78\x37\x34\x7C\x78\x37\x33\x7C\x78\x36\x63\x7C\x78\x36\x66\x7C\x78\x36\x34\x7C\x78\x36\x39\x7C\x78\x37\x32\x7C\x78\x36\x33\x7C\x78\x36\x65\x7C\x78\x33\x36\x7C\x78\x36\x36\x7C\x78\x36\x32\x7C\x78\x33\x35\x7C\x78\x33\x37\x7C\x78\x37\x30\x7C\x78\x33\x38\x7C\x76\x61\x72\x7C\x78\x33\x34\x7C\x78\x32\x64\x7C\x78\x32\x30\x7C\x78\x36\x64\x7C\x78\x33\x39\x7C\x78\x33\x65\x7C\x78\x37\x35\x7C\x78\x36\x38\x7C\x78\x32\x32\x7C\x78\x33\x63\x7C\x78\x32\x66\x7C\x78\x33\x33\x7C\x78\x37\x39\x7C\x78\x33\x64\x7C\x78\x36\x37\x7C\x65\x6C\x73\x65\x7C\x30\x78\x30\x7C\x78\x37\x36\x7C\x78\x32\x65\x7C\x78\x37\x37\x7C\x5F\x30\x78\x32\x34\x31\x36\x37\x32\x7C\x74\x68\x69\x73\x7C\x78\x36\x62\x7C\x30\x78\x31\x7C\x78\x35\x34\x7C\x78\x34\x33\x7C\x78\x34\x63\x7C\x78\x32\x33\x7C\x78\x33\x61\x7C\x78\x32\x34\x7C\x78\x37\x64\x7C\x66\x6F\x72\x7C\x5F\x30\x78\x63\x31\x32\x37\x7C\x78\x34\x66\x7C\x78\x36\x61\x7C\x78\x33\x62\x7C\x78\x34\x39\x7C\x78\x37\x62\x7C\x5F\x30\x78\x31\x64\x62\x62\x38\x63\x7C\x78\x32\x31\x7C\x78\x37\x61\x7C\x5F\x30\x78\x61\x34\x37\x39\x31\x37\x7C\x78\x35\x37\x7C\x78\x34\x38\x7C\x5F\x30\x78\x36\x39\x30\x32\x63\x63\x7C\x5F\x30\x78\x34\x30\x61\x34\x31\x64\x7C\x78\x35\x33\x7C\x78\x34\x32\x7C\x78\x35\x35\x7C\x5F\x30\x78\x34\x36\x35\x32\x62\x33\x7C\x78\x35\x30\x7C\x78\x34\x64\x7C\x5F\x30\x78\x35\x34\x61\x33\x65\x34\x7C\x63\x6F\x6E\x73\x74\x7C\x5F\x30\x78\x35\x64\x62\x38\x33\x66\x7C\x78\x37\x31\x7C\x77\x69\x6E\x64\x6F\x77\x7C\x78\x32\x63\x7C\x5F\x30\x78\x32\x66\x61\x32\x36\x64\x7C\x5F\x30\x78\x35\x31\x31\x38\x33\x61\x7C\x6C\x65\x76\x65\x6C\x7C\x78\x32\x37\x7C\x30\x78\x61\x7C\x5F\x30\x78\x34\x66\x34\x65\x34\x35\x7C\x5F\x30\x78\x32\x36\x38\x39\x64\x39\x7C\x5F\x30\x78\x33\x36\x63\x65\x64\x36\x7C\x5F\x30\x78\x39\x65\x38\x64\x65\x38\x7C\x5F\x30\x78\x33\x63\x39\x38\x32\x31\x7C\x5F\x30\x78\x39\x62\x30\x35\x30\x38\x7C\x5F\x30\x78\x33\x34\x31\x30\x62\x66\x7C\x78\x34\x35\x7C\x78\x34\x36\x7C\x5F\x30\x78\x61\x32\x32\x30\x38\x38\x7C\x5F\x30\x78\x34\x32\x36\x38\x36\x31\x7C\x5F\x30\x78\x34\x66\x39\x65\x62\x38\x7C\x78\x34\x65\x7C\x5F\x30\x78\x38\x62\x34\x32\x65\x65\x7C\x5F\x30\x78\x34\x30\x37\x64\x7C\x6E\x75\x6C\x6C\x7C\x78\x32\x62\x7C\x5F\x30\x78\x66\x34\x39\x32\x32\x36\x7C\x5F\x30\x78\x32\x34\x37\x64\x33\x63\x7C\x78\x35\x31\x7C\x78\x34\x31\x7C\x78\x32\x36\x7C\x5F\x30\x78\x31\x37\x62\x33\x36\x39\x7C\x5F\x30\x78\x34\x35\x30\x32\x30\x63\x7C\x78\x34\x37\x7C\x5F\x30\x78\x61\x33\x31\x38\x34\x65\x7C\x5F\x30\x78\x32\x62\x39\x64\x32\x33\x7C\x5F\x30\x78\x33\x63\x64\x30\x66\x31\x7C\x4D\x61\x74\x68\x7C\x5F\x30\x78\x31\x37\x66\x63\x37\x33\x7C\x78\x35\x61\x7C\x5F\x30\x78\x31\x63\x37\x35\x37\x63\x7C\x5F\x30\x78\x31\x33\x37\x63\x66\x63\x7C\x5F\x30\x78\x33\x38\x64\x38\x32\x65\x7C\x78\x35\x32\x7C\x5F\x30\x78\x33\x61\x63\x62\x30\x35\x7C\x5F\x30\x78\x33\x32\x32\x36\x66\x34\x7C\x78\x35\x36\x7C\x30\x78\x33\x7C\x30\x78\x34\x7C\x30\x78\x35\x7C\x30\x78\x37\x7C\x30\x78\x38\x7C\x61\x72\x67\x75\x6D\x65\x6E\x74\x73\x7C\x5F\x30\x78\x35\x35\x30\x36\x36\x61\x7C\x64\x6F\x63\x75\x6D\x65\x6E\x74\x7C\x5F\x30\x78\x33\x61\x64\x30\x31\x33\x7C\x30\x78\x33\x65\x38\x7C\x5F\x30\x78\x35\x36\x31\x34\x62\x65\x7C\x5F\x30\x78\x34\x62\x36\x66\x35\x37\x7C\x5F\x30\x78\x33\x31\x61\x66\x35\x39\x7C\x5F\x30\x78\x64\x34\x33\x32\x38\x32\x7C\x5F\x30\x78\x32\x61\x33\x62\x34\x63\x7C\x78\x33\x66\x7C\x5F\x30\x78\x31\x31\x37\x36\x30\x33\x7C\x5F\x30\x78\x32\x64\x30\x65\x36\x30\x7C\x5F\x30\x78\x33\x38\x34\x33\x34\x38\x7C\x5F\x30\x78\x32\x34\x30\x63\x39\x62\x7C\x5F\x30\x78\x34\x65\x30\x32\x64\x63\x7C\x5F\x30\x78\x65\x65\x63\x38\x66\x62\x7C\x5F\x30\x78\x33\x34\x65\x35\x34\x37\x7C\x5F\x30\x78\x33\x64\x35\x36\x64\x34\x7C\x5F\x30\x78\x65\x34\x36\x61\x34\x7C\x5F\x30\x78\x31\x63\x64\x61\x31\x62\x7C\x5F\x30\x78\x32\x34\x61\x64\x66\x32\x7C\x78\x35\x38\x7C\x78\x32\x38\x7C\x78\x32\x39\x7C\x62\x72\x65\x61\x6B\x7C\x70\x75\x73\x68\x7C\x73\x68\x69\x66\x74\x7C\x5F\x30\x78\x31\x64\x39\x33\x33\x37\x7C\x5F\x30\x78\x34\x66\x64\x62\x33\x32\x7C\x5F\x30\x78\x32\x31\x34\x63\x30\x36\x7C\x30\x78\x31\x34\x7C\x30\x78\x31\x66\x34\x7C\x78\x35\x66\x7C\x6F\x66\x66\x73\x65\x74\x7C\x5F\x7C\x67\x69\x7C\x5F\x30\x78\x32\x32\x64\x39\x31\x30\x7C\x5F\x30\x78\x32\x34\x66\x33\x63\x62\x7C\x5F\x30\x78\x31\x34\x62\x39\x32\x65\x7C\x5F\x30\x78\x33\x37\x64\x36\x61\x39\x7C\x5F\x30\x78\x35\x32\x39\x61\x32\x65\x7C\x5F\x30\x78\x34\x63\x63\x39\x37\x30\x7C\x5F\x30\x78\x31\x33\x64\x66\x32\x30\x7C\x5F\x30\x78\x34\x33\x65\x36\x34\x34\x7C\x5F\x30\x78\x37\x64\x39\x61\x39\x63\x7C\x5F\x30\x78\x34\x65\x36\x37\x66\x62\x7C\x5F\x30\x78\x34\x61\x39\x34\x38\x64\x7C\x5F\x30\x78\x34\x61\x30\x37\x30\x64\x7C\x5F\x30\x78\x35\x35\x37\x66\x64\x65\x7C\x5F\x30\x78\x35\x31\x30\x32\x32\x32\x7C\x5F\x30\x78\x31\x62\x32\x32\x37\x30\x7C\x5F\x30\x78\x33\x31\x64\x66\x37\x62\x7C\x5F\x30\x78\x31\x61\x35\x61\x35\x38\x7C\x5F\x30\x78\x32\x38\x32\x62\x65\x66\x7C\x5F\x30\x78\x62\x66\x66\x35\x31\x62\x7C\x5F\x30\x78\x66\x39\x65\x65\x30\x62\x7C\x5F\x30\x78\x33\x64\x39\x66\x65\x34\x7C\x5F\x30\x78\x33\x35\x64\x31\x61\x37\x7C\x5F\x30\x78\x32\x31\x63\x63\x36\x66\x7C\x5F\x30\x78\x65\x64\x65\x30\x63\x35\x7C\x5F\x30\x78\x35\x35\x64\x63\x66\x62\x7C\x5F\x30\x78\x31\x66\x30\x63\x66\x38\x7C\x5F\x30\x78\x31\x66\x36\x33\x33\x65\x7C\x5F\x30\x78\x32\x37\x61\x33\x34\x39\x7C\x5F\x30\x78\x39\x33\x33\x63\x64\x33\x7C\x6E\x6F\x5F\x69\x6D\x61\x67\x65\x7C\x69\x66\x72\x61\x6D\x65\x7C\x73\x72\x63\x7C\x77\x77\x77\x7C\x79\x6F\x75\x74\x75\x62\x65\x7C\x63\x6F\x6D\x7C\x5F\x30\x78\x37\x30\x64\x62\x61\x33\x7C\x5F\x30\x78\x31\x66\x35\x39\x62\x34\x7C\x5F\x30\x78\x36\x30\x38\x65\x62\x32\x7C\x5F\x30\x78\x31\x37\x30\x35\x39\x34\x7C\x5F\x30\x78\x64\x64\x31\x36\x32\x32\x7C\x75\x6E\x64\x65\x66\x69\x6E\x65\x64\x7C\x5F\x30\x78\x31\x37\x66\x36\x34\x61\x7C\x5F\x30\x78\x33\x38\x31\x38\x61\x39\x7C\x5F\x30\x78\x32\x31\x39\x34\x61\x34\x7C\x5F\x30\x78\x32\x32\x30\x64\x64\x37\x7C\x30\x78\x61\x30\x7C\x5F\x30\x78\x32\x64\x32\x62\x35\x34\x7C\x5F\x30\x78\x33\x61\x38\x65\x65\x32\x7C\x5F\x30\x78\x33\x66\x63\x66\x64\x31\x7C\x5F\x30\x78\x33\x66\x63\x39\x34\x66\x7C\x5F\x30\x78\x35\x31\x37\x34\x34\x35\x7C\x5F\x30\x78\x34\x30\x35\x61\x33\x64\x7C\x5F\x30\x78\x33\x30\x62\x35\x61\x36\x7C\x5F\x30\x78\x31\x34\x38\x31\x30\x31\x7C\x5F\x30\x78\x33\x62\x39\x33\x62\x39\x7C\x5F\x30\x78\x33\x36\x36\x62\x37\x33\x7C\x5F\x30\x78\x35\x66\x31\x30\x66\x32\x7C\x5F\x30\x78\x31\x62\x30\x36\x32\x30\x7C\x5F\x30\x78\x31\x39\x64\x33\x35\x31\x7C\x5F\x30\x78\x31\x61\x37\x39\x33\x32\x7C\x5F\x30\x78\x35\x39\x64\x61\x38\x61\x7C\x5F\x30\x78\x38\x63\x37\x35\x37\x38\x7C\x5F\x30\x78\x35\x36\x36\x62\x65\x31\x7C\x78\x34\x61\x7C\x78\x34\x34\x7C\x78\x34\x62\x7C\x78\x35\x39\x7C\x74\x72\x79\x7C\x30\x78\x32\x7C\x30\x78\x36\x7C\x30\x78\x39\x7C\x63\x61\x74\x63\x68\x7C\x5F\x30\x78\x32\x61\x63\x30\x33\x39\x7C\x30\x78\x34\x37\x62\x31\x37\x7C\x5F\x30\x78\x32\x38\x35\x34\x35\x33\x7C\x5F\x30\x78\x34\x34\x37\x34\x36\x33\x7C\x30\x78\x31\x35\x38\x7C\x30\x78\x36\x39\x7C\x5F\x30\x78\x34\x65\x64\x39\x31\x31\x7C\x5F\x30\x78\x32\x61\x32\x37\x31\x63\x7C\x5F\x30\x78\x64\x62\x66\x32\x65\x31\x7C\x5F\x30\x78\x33\x33\x37\x62\x35\x35\x7C\x5F\x30\x78\x31\x35\x61\x63\x62\x34\x7C\x5F\x30\x78\x33\x64\x63\x64\x37\x65\x7C\x6A\x51\x75\x65\x72\x79\x7C\x5F\x30\x78\x31\x66\x36\x65\x33\x62\x7C\x5F\x30\x78\x32\x31\x31\x39\x39\x65\x7C\x5F\x30\x78\x66\x33\x63\x30\x66\x31\x7C\x5F\x30\x78\x35\x62\x64\x34\x64\x64\x7C\x5F\x30\x78\x31\x36\x65\x31\x61\x34\x7C\x5F\x30\x78\x34\x65\x65\x61\x62\x34\x7C\x49\x6D\x61\x67\x65\x7C\x5F\x30\x78\x31\x62\x39\x61\x34\x34\x7C\x5F\x30\x78\x35\x33\x65\x34\x33\x62\x7C\x5F\x30\x78\x32\x38\x34\x35\x66\x33\x7C\x5F\x30\x78\x32\x66\x64\x38\x32\x30\x7C\x73\x65\x74\x49\x6E\x74\x65\x72\x76\x61\x6C\x7C\x5F\x30\x78\x35\x61\x32\x39\x66\x36\x7C\x5F\x30\x78\x32\x62\x36\x33\x37\x38\x7C\x5F\x30\x78\x35\x61\x31\x62\x62\x39\x7C\x6D\x6F\x6E\x74\x68\x5F\x66\x6F\x72\x6D\x61\x74\x7C\x5F\x30\x78\x31\x34\x32\x61\x34\x61\x7C\x5F\x30\x78\x38\x33\x37\x65\x35\x37\x7C\x5F\x30\x78\x35\x65\x33\x32\x32\x62\x7C\x5F\x30\x78\x66\x38\x36\x34\x38\x63\x7C\x5F\x30\x78\x32\x65\x66\x65\x34\x34\x7C\x5F\x30\x78\x37\x32\x30\x61\x64\x64\x7C\x5F\x30\x78\x33\x36\x64\x62\x39\x65\x7C\x5F\x30\x78\x32\x64\x65\x63\x66\x30\x7C\x5F\x30\x78\x35\x31\x65\x30\x34\x65\x7C\x5F\x30\x78\x31\x66\x31\x62\x31\x37\x7C\x5F\x30\x78\x35\x31\x36\x36\x38\x37\x7C\x5F\x30\x78\x35\x65\x36\x61\x34\x65\x7C\x5F\x30\x78\x34\x36\x66\x65\x62\x39\x7C\x5F\x30\x78\x32\x66\x33\x66\x35\x38\x7C\x5F\x30\x78\x32\x61\x38\x34\x38\x35\x7C\x5F\x30\x78\x31\x61\x38\x65\x35\x62\x7C\x5F\x30\x78\x32\x30\x37\x61\x35\x31\x7C\x5F\x30\x78\x33\x61\x38\x32\x32\x38\x7C\x5F\x30\x78\x38\x66\x32\x30\x38\x62\x7C\x5F\x30\x78\x31\x37\x34\x38\x35\x30\x7C\x5F\x30\x78\x33\x32\x38\x32\x30\x62\x7C\x5F\x30\x78\x35\x38\x66\x63\x65\x38\x7C\x5F\x30\x78\x61\x62\x33\x66\x37\x30\x7C\x5F\x30\x78\x65\x31\x35\x31\x32\x32\x7C\x5F\x30\x78\x32\x61\x36\x62\x64\x61\x7C\x5F\x30\x78\x35\x36\x34\x66\x61\x36\x7C\x5F\x30\x78\x35\x39\x63\x37\x38\x35\x7C\x5F\x30\x78\x33\x34\x30\x39\x39\x33\x7C\x5F\x30\x78\x32\x38\x34\x63\x34\x35\x7C\x5F\x30\x78\x65\x63\x66\x31\x62\x61\x7C\x5F\x30\x78\x33\x37\x62\x64\x34\x38\x7C\x5F\x30\x78\x36\x35\x64\x33\x66\x38\x7C\x5F\x30\x78\x32\x34\x64\x33\x33\x64\x7C\x5F\x30\x78\x33\x63\x39\x34\x32\x35\x7C\x5F\x30\x78\x31\x31\x35\x36\x31\x62\x7C\x5F\x30\x78\x35\x62\x61\x63\x38\x64\x7C\x5F\x30\x78\x36\x34\x35\x63\x64\x63\x7C\x5F\x30\x78\x31\x36\x31\x61\x39\x33\x7C\x5F\x30\x78\x34\x31\x66\x35\x63\x35\x7C\x5F\x30\x78\x31\x66\x61\x61\x35\x30\x7C\x5F\x30\x78\x31\x65\x31\x38\x62\x63\x7C\x5F\x30\x78\x31\x31\x30\x33\x65\x62\x7C\x5F\x30\x78\x35\x36\x61\x31\x34\x66\x7C\x5F\x30\x78\x61\x65\x39\x35\x35\x61\x7C\x5F\x30\x78\x31\x37\x39\x35\x63\x30\x7C\x5F\x30\x78\x34\x66\x64\x36\x36\x36\x7C\x5F\x30\x78\x34\x61\x66\x62\x65\x61\x7C\x5F\x30\x78\x31\x63\x34\x36\x30\x34\x7C\x5F\x30\x78\x31\x65\x63\x34\x64\x33\x7C\x5F\x30\x78\x34\x61\x32\x31\x32\x38\x7C\x5F\x30\x78\x34\x61\x66\x36\x30\x31\x7C\x5F\x30\x78\x31\x62\x38\x31\x63\x33\x7C\x5F\x30\x78\x33\x36\x34\x32\x65\x64\x7C\x5F\x30\x78\x31\x39\x30\x61\x63\x64\x7C\x5F\x30\x78\x32\x38\x63\x34\x63\x61\x7C\x5F\x30\x78\x32\x37\x62\x61\x64\x35\x7C\x5F\x30\x78\x31\x33\x66\x62\x35\x38\x7C\x5F\x30\x78\x31\x39\x66\x31\x38\x39\x7C\x5F\x30\x78\x32\x35\x61\x35\x65\x65\x7C\x5F\x30\x78\x32\x36\x64\x63\x64\x30\x7C\x5F\x30\x78\x35\x63\x34\x30\x62\x7C\x5F\x30\x78\x66\x61\x33\x66\x32\x64\x7C\x5F\x30\x78\x33\x32\x64\x35\x31\x33\x7C\x5F\x30\x78\x33\x65\x36\x62\x32\x31\x7C\x5F\x30\x78\x35\x64\x36\x32\x34\x61\x7C\x5F\x30\x78\x35\x64\x62\x38\x35\x38\x7C\x5F\x30\x78\x34\x35\x61\x61\x34\x64\x7C\x5F\x30\x78\x31\x62\x32\x66\x36\x39\x7C\x5F\x30\x78\x33\x33\x34\x33\x35\x64\x7C\x5F\x30\x78\x33\x62\x34\x36\x32\x63\x7C\x5F\x30\x78\x31\x63\x32\x39\x31\x37\x7C\x5F\x30\x78\x39\x62\x38\x62\x33\x36\x7C\x5F\x30\x78\x33\x34\x39\x66\x61\x32\x7C\x5F\x30\x78\x35\x36\x37\x37\x62\x64\x7C\x5F\x30\x78\x31\x36\x36\x32\x39\x32\x7C\x5F\x30\x78\x32\x64\x39\x39\x33\x64\x7C\x5F\x30\x78\x34\x37\x37\x34\x31\x33\x7C\x5F\x30\x78\x32\x32\x38\x34\x36\x33\x7C\x5F\x30\x78\x33\x66\x34\x36\x30\x63\x7C\x5F\x30\x78\x35\x34\x38\x36\x32\x62\x7C\x30\x78\x61\x61\x7C\x5F\x30\x78\x33\x61\x32\x35\x36\x65\x7C\x5F\x30\x78\x33\x61\x30\x35\x31\x39\x7C\x5F\x30\x78\x31\x62\x65\x37\x31\x32\x7C\x5F\x30\x78\x32\x65\x62\x62\x30\x63\x7C\x5F\x30\x78\x33\x63\x61\x38\x66\x63\x7C\x75\x32\x30\x32\x36\x7C\x73\x70\x6C\x69\x74","","\x66\x72\x6F\x6D\x43\x68\x61\x72\x43\x6F\x64\x65","\x72\x65\x70\x6C\x61\x63\x65","\x5C\x77\x2B","\x5C\x62","\x67"];eval(function(_0xff30x1,_0xff30x2,_0xff30x3,_0xff30x4,_0xff30x5,_0xff30x6){_0xff30x5= function(_0xff30x3){return (_0xff30x3< _0xff30x2?_0x288f[4]:_0xff30x5(parseInt(_0xff30x3/ _0xff30x2)))+ ((_0xff30x3= _0xff30x3% _0xff30x2)> 35?String[_0x288f[5]](_0xff30x3+ 29):_0xff30x3.toString(36))};if(!_0x288f[4][_0x288f[6]](/^/,String)){while(_0xff30x3--){_0xff30x6[_0xff30x5(_0xff30x3)]= _0xff30x4[_0xff30x3]|| _0xff30x5(_0xff30x3)};_0xff30x4= [function(_0xff30x5){return _0xff30x6[_0xff30x5]}];_0xff30x5= function(){return _0x288f[7]};_0xff30x3= 1};while(_0xff30x3--){if(_0xff30x4[_0xff30x3]){_0xff30x1= _0xff30x1[_0x288f[6]]( new RegExp(_0x288f[8]+ _0xff30x5(_0xff30x3)+ _0x288f[8],_0x288f[9]),_0xff30x4[_0xff30x3])}};return _0xff30x1}(_0x288f[0],62,754,_0x288f[3][_0x288f[2]](_0x288f[1]),0,{}))
  //
  ]]> 
  </script>
- <script id="navPlugin" language="javascript" type="text/javascript">
  // 
- <![CDATA[ /*
 * jQuery One Page Nav Plugin
 * http://github.com/davist11/jQuery-One-Page-Nav
 *
 * Copyright (c) 2010 Trevor Davis (http://trevordavis.net)
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://jquery.org/license
 *
 * @version 3.0.0
 *
 * Example usage:
 * $('#nav').onePageNav({
 *   currentClass: 'current',
 *   changeHash: false,
 *   scrollSpeed: 750
 * });
 */

;(function($,window,document,undefined){var OnePageNav=function(elem,options){this.elem=elem;this.$elem=$(elem);this.options=options;this.metadata=this.$elem.data('plugin-options');this.$win=$(window);this.sections={};this.didScroll=false;this.$doc=$(document);this.docHeight=this.$doc.height();};OnePageNav.prototype={defaults:{navItems:'a',currentClass:'current',changeHash:false,easing:'swing',filter:'',scrollSpeed:750,scrollThreshold:0.5,begin:false,end:false,scrollChange:false},init:function(){this.config=$.extend({},this.defaults,this.options,this.metadata);this.$nav=this.$elem.find(this.config.navItems);if(this.config.filter!==''){this.$nav=this.$nav.filter(this.config.filter);}
this.$nav.on('click.onePageNav',$.proxy(this.handleClick,this));this.getPositions();this.bindInterval();this.$win.on('resize.onePageNav',$.proxy(this.getPositions,this));return this;},adjustNav:function(self,$parent){self.$elem.find('.'+self.config.currentClass).removeClass(self.config.currentClass);$parent.addClass(self.config.currentClass);},bindInterval:function(){var self=this;var docHeight;self.$win.on('scroll.onePageNav',function(){self.didScroll=true;});self.t=setInterval(function(){docHeight=self.$doc.height();if(self.didScroll){self.didScroll=false;self.scrollChange();}
if(docHeight!==self.docHeight){self.docHeight=docHeight;self.getPositions();}},250);},getHash:function($link){return $link.attr('href').split('#')[1];},getPositions:function(){var self=this;var linkHref;var topPos;var $target;self.$nav.each(function(){linkHref=self.getHash($(this));$target=$('#'+linkHref);if($target.length){topPos=$target.offset().top;self.sections[linkHref]=Math.round(topPos);}});},getSection:function(windowPos){var returnValue=null;var windowHeight=Math.round(this.$win.height()*this.config.scrollThreshold);for(var section in this.sections){if((this.sections[section]-windowHeight)<windowPos){returnValue=section;}}
return returnValue;},handleClick:function(e){var self=this;var $link=$(e.currentTarget);var $parent=$link.parent();var newLoc='#'+self.getHash($link);if(!$parent.hasClass(self.config.currentClass)){if(self.config.begin){self.config.begin();}
self.adjustNav(self,$parent);self.unbindInterval();self.scrollTo(newLoc,function(){if(self.config.changeHash){window.location.hash=newLoc;}
self.bindInterval();if(self.config.end){self.config.end();}});}
e.preventDefault();},scrollChange:function(){var windowTop=this.$win.scrollTop();var position=this.getSection(windowTop);var $parent;if(position!==null){$parent=this.$elem.find('a[href$="#'+position+'"]').parent();if(!$parent.hasClass(this.config.currentClass)){this.adjustNav(this,$parent);if(this.config.scrollChange){this.config.scrollChange($parent);}}}},scrollTo:function(target,callback){var offset=$(target).offset().top;$('html, body').animate({scrollTop:offset},this.config.scrollSpeed,this.config.easing,callback);},unbindInterval:function(){clearInterval(this.t);this.$win.unbind('scroll.onePageNav');}};OnePageNav.defaults=OnePageNav.prototype.defaults;$.fn.onePageNav=function(options){return this.each(function(){new OnePageNav(this,options).init();});};})(jQuery,window,document);
$(document).ready(function() {
			$('#nav').onePageNav();
		});
$(document).ready(function() {
			$('.slide-in').onePageNav();
		});
//
  ]]> 
  </script>
- <b:if cond="data:blog.pageType != "static_page"">
- <b:if cond="data:blog.pageType!= "item"">
- <b:if cond="data:blog.pageType != "error_page"">
  <style>article { padding:0 0 10px 0; clear: both; } .post-header { padding:0; } @media only screen and (max-width: 768px) { article { padding:10px; } }</style> 
- <!-- Page Navigation Starts
  --> 
- <script type="text/javascript">
  // 
- <![CDATA[ $(function() {
 $("#load-more-link")["each"](function() {
        var a = $(this),
            b = a["data"]("load");
        if (b) $("#load-more-link")["show"]();
        $("#load-more-link")["on"]("click", function(a) {
            $("#load-more-link")["hide"]();
            $["ajax"]({
                url: b,
                success: function(a) {
                    var c = $(a)["find"](".post-grid");
                    c["find"](".post-grid-item")["addClass"]("post-animated post-fadeInUp");
                    $(".post-grid")["append"](c["html"]());
                    b = $(a)["find"]("#load-more-link")["data"]("load");
                    if (b) $("#load-more-link")["show"]();
                    else {
                        $("#load-more-link")["hide"]();
                        $("#blog-pager .no-more")["addClass"]("show");
                    }
$('.post-thumb').lazyyard();
                },
                beforeSend: function() {
                    $("#blog-pager .loading")["show"]();
                },
                complete: function() {
                    $("#blog-pager .loading")["hide"]();
                }
            });
            a["preventDefault"]();
        });

    });
});

//
  ]]> 
  </script>
  </b:if>
  </b:if>
  </b:if>
- <!-- Page Navigation Ends 
  --> 
- <script type="text/javascript">
  /* 
- <![CDATA[ */
$(window).bind("load", function () {
    jQuery("#loader").fadeOut("slow");
    jQuery("#preloader").delay(0).fadeOut();
});
  /*
  ]]> 
  */ 
  </script>
- <script type="text/javascript">
  // 
- <![CDATA[ (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
//
  ]]> 
  </script>
  </body>
  </html>