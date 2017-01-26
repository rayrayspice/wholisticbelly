<?php
add_action( 'vc_load_default_templates_action','stonedthemes_custom_templates' );
 
function stonedthemes_custom_templates() {

/** Home1 creative page template */
$data = array();
$data['name'] = __( 'Home1-Creativ', 'collective' );
$data['content'] = <<<CONTENT
[vc_row][vc_column css=".vc_custom_1460537374026{padding-top: 0px !important;}"][sth_portfolio grid_elements="3" sorting="DESC" exclude="1182" border_offset="30" item_hover_effect="zoom-effect" title="Portfolio" portfolio_cats="industrial, apartments, classic"][/vc_column][/vc_row][vc_row][vc_column width="1/2" offset="vc_col-lg-3"][sth_services service_title="Interior" icon_type="linecons" color="#999999" service_icon="fa-align-left" icon_linecons="vc_li vc_li-stack" title_color="#000000" href="http://themeforest.net/item/throne-minimal-wordpress-theme/12664890?ref=StonedThemes"]Time goes by fast, so today we'd like to share a colorful freebie to remind ourselves to appreciate each and every month of the year.[/sth_services][/vc_column][vc_column width="1/2" offset="vc_col-lg-3"][sth_services service_title="Architecture" icon_type="linecons" color="#999999" service_icon="fa-archive" title_color="#000000" icon_linecons="vc_li vc_li-shop"]Every month of the year comes loaded with unique energy, so that it can give us inspiration and ideas, and then leave so many.[/sth_services][/vc_column][vc_column width="1/2" offset="vc_col-lg-3"][sth_services service_title="Planning" icon_type="linecons" service_icon="fa-arrows-alt" icon_linecons="vc_li vc_li-params" title_color="#000000" color="#999999"]In the tech industry, many of us came of age during hip-hop's rise as a dominant art form, its spirit of individualism.[/sth_services][/vc_column][vc_column width="1/2" offset="vc_col-lg-3"][sth_services service_title="Engineering" icon_type="linecons" color="#999999" service_icon="fa-arrow-circle-o-up" icon_linecons="vc_li vc_li-truck" title_color="#000000"]If you have been using Sublime Text for some time, now is the time to upgrade your arsenal with new ammunition.[/sth_services][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Home2 creative page template */
$data = array();
$data['name'] = __( 'Home2-Creativ Alt', 'collective' );
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1466760842729{padding-top: 60px !important;padding-bottom: 60px !important;background-image: url(http://collective.stonedthemes.com/wp-content/uploads/2016/03/crop_12.jpg?id=2854) !important;}"][vc_column][vc_column_text]
<h4 style="text-align: center;"><span style="color: #ffffff;">CREATIVE WARFARE</span></h4>
<p style="text-align: center;"><span style="color: #ffffff;">We're a team of badass architects &amp; engineers</span></p>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1467205666691{margin-right: 0px !important;margin-left: 0px !important;}"][vc_column css=".vc_custom_1460537013039{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][sth_portfolio grid_elements="3" overlay_offset="30" overlay_opacity="9" item_hover_effect="zoom-effect" portfolio_cats="46, houses, industrial, classic"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Home3 fullscreen page template */
$data = array();
$data['name'] = __( 'Home3-Fullscreen', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][sth_slider title="Slider" slider="1338"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


/** Home4 Bordered fullscreen page template */
$data = array();
$data['name'] = __( 'Home4-Bordered Fullscreen', 'collective' );
$data['content'] = <<<CONTENT
[vc_row][vc_column][sth_slider title="Slider" slider="1338"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Home6 Fullscreen vertical page template */
$data = array();
$data['name'] = __( 'Home6-Fullscreen Vertical', 'collective' );
$data['content'] = <<<CONTENT
[vc_row][vc_column][sth_portfoliovertical text_position="left-bottom" projects="1182, 1180, 1174, 1177"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

}
