<?php
class LanguageLoader{
    function initialize() {
        $ci =& get_instance();

		$site_lang = $ci->session->userdata('language');

        if ($site_lang) {

            $ci->lang->load('view_main',$ci->session->userdata('language'));
            $ci->lang->load('header',$ci->session->userdata('language'));
            $ci->lang->load('footer',$ci->session->userdata('language'));
            $ci->lang->load('profile',$ci->session->userdata('language'));
            $ci->lang->load('service_list',$ci->session->userdata('language'));
            $ci->lang->load('tags',$ci->session->userdata('language'));

        } else {

            $ci->lang->load('view_main','english');
            $ci->lang->load('header','english');
            $ci->lang->load('footer','english');
            $ci->lang->load('profile','english');
            $ci->lang->load('service_list','english');
            $ci->lang->load('tags','english');
			
        }
    }
}
