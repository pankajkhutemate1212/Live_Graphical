<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$rules['URL']  = 'required|trim|max_length[256]|xss_clean|prep_url|valid_url_format|url_exists|callback_duplicate_URL_check';