<?php defined('BASEPATH') OR exit('No direct script access allowed');

class paylinklogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('paylink');
		$this->load->model('admin/Home_page_report_add');
	}

	// redirect if needed, otherwise display the user list
	public function index()
	{

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('paylinklogin/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}
		else
		{
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data['users'] = $this->ion_auth->users()->result();
			foreach ($this->data['users'] as $k => $user)
			{
				$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}

			$this->_render_page('paylinklogin/index', $this->data);
		}
	}

	// log the user in
	public function login()
	{

		 
		$this->data['title'] = $this->lang->line('login_heading');

		//validate form input
		$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
		$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

		if ($this->form_validation->run() == true)
		{
			// check to see if the user is logging in
			// check for "remember me"
			$remember = (bool) $this->input->post('remember');
			
			//$id=$this->input->get("id");
			
				//if(empty($id)){

			if ($this->ion_auth->login_pay_link($this->input->post('identity'), $this->input->post('password'), $remember))
			{
				//if the login is successful
				//redirect them back to the home page
				
					
					
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				 
				$this->session->set_userdata('log_user', $this->input->post('identity'));
				//redirect('/getleaddata/maildb_management', 'refresh');
				
				 //send otp with mail to user
                                    $length = 4;
                                    $chars = '01234567890';
                                    $chars_length = (strlen($chars) - 1);  
                                     
                                    $string = $chars{rand(0, $chars_length)};  
                                    for ($i = 1; $i < $length; $i = strlen($string))  
                                    {  
                                       $r = $chars{rand(0, $chars_length)};  
                                       if ($r != $string{$i - 1}) $string .= $r;  
                                       
                                      
                                    } 
                                    $otp=$string;
                                    $mail_to_send_otp=$this->input->post('identity');
                                    $this->send_otp_to_mail($mail_to_send_otp, $otp);
                                   
                                   
                                    
                                    
                                    redirect('paylinklogin/pay_link_opt_view');
                                    
			//	redirect('paylinklogin/pay_link', 'refresh');
					
				
					
					
				
				
			}
			
				/*}else if($this->ion_auth->login_approve_link($this->input->post('identity'), $this->input->post('password'), $remember)){
					
					
					$this->session->set_flashdata('message', $this->ion_auth->messages());
					$this->session->set_userdata('log_user', $this->input->post('identity'));
					redirect('pages/approve_link', 'refresh');
					
				}*/
			else
			{
				// if the login was un-successful
				// redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('paylinklogin/login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{
			// the user is not logging in so display the login page
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['identity'] = array('name' => 'identity',
				'id'    => 'identity',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('identity'),
			);
			$this->data['password'] = array('name' => 'password',
				'id'   => 'password',
				'type' => 'password',
			);

			$this->_render_page('paylinklogin/login', $this->data);
		}
	}

	// log the user out
	public function logout()
	{
		$this->data['title'] = "Logout";

		// log the user out
		$logout = $this->ion_auth->logout();
		$this->session->unset_userdata('log_user');

		// redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('paylinklogin/login', 'refresh');
	}

	// change password
	public function change_password()
	{
		$this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
		$this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
		$this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

		if (!$this->ion_auth->logged_in())
		{
			redirect('paylinklogin/login', 'refresh');
		}

		$user = $this->ion_auth->user()->row();

		if ($this->form_validation->run() == false)
		{
			// display the form
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
			$this->data['old_password'] = array(
				'name' => 'old',
				'id'   => 'old',
				'type' => 'password',
			);
			$this->data['new_password'] = array(
				'name'    => 'new',
				'id'      => 'new',
				'type'    => 'password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
			);
			$this->data['new_password_confirm'] = array(
				'name'    => 'new_confirm',
				'id'      => 'new_confirm',
				'type'    => 'password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
			);
			$this->data['user_id'] = array(
				'name'  => 'user_id',
				'id'    => 'user_id',
				'type'  => 'hidden',
				'value' => $user->id,
			);

			// render
			$this->_render_page('paylinklogin/change_password', $this->data);
		}
		else
		{
			$identity = $this->session->userdata('identity');

			$change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

			if ($change)
			{
				//if the password was successfully changed
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				$this->logout();
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('paylinklogin/change_password', 'refresh');
			}
		}
	}

	// forgot password
	public function forgot_password()
	{
		// setting validation rules by checking whether identity is username or email
		if($this->config->item('identity', 'ion_auth') != 'email' )
		{
		   $this->form_validation->set_rules('identity', $this->lang->line('forgot_password_identity_label'), 'required');
		}
		else
		{
		   $this->form_validation->set_rules('identity', $this->lang->line('forgot_password_validation_email_label'), 'required|valid_email');
		}


		if ($this->form_validation->run() == false)
		{
			$this->data['type'] = $this->config->item('identity','ion_auth');
			// setup the input
			$this->data['identity'] = array('name' => 'identity',
				'id' => 'identity',
			);

			if ( $this->config->item('identity', 'ion_auth') != 'email' ){
				$this->data['identity_label'] = $this->lang->line('forgot_password_identity_label');
			}
			else
			{
				$this->data['identity_label'] = $this->lang->line('forgot_password_email_identity_label');
			}

			// set any errors and display the form
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->_render_page('paylinklogin/forgot_password', $this->data);
		}
		else
		{
			$identity_column = $this->config->item('identity','ion_auth');
			$identity = $this->ion_auth->where($identity_column, $this->input->post('identity'))->users()->row();

			if(empty($identity)) {

	            		if($this->config->item('identity', 'ion_auth') != 'email')
		            	{
		            		$this->ion_auth->set_error('forgot_password_identity_not_found');
		            	}
		            	else
		            	{
		            	   $this->ion_auth->set_error('forgot_password_email_not_found');
		            	}

		                $this->session->set_flashdata('message', $this->ion_auth->errors());
                		redirect("paylinklogin/forgot_password", 'refresh');
            		}

			// run the forgotten password method to email an activation code to the user
			$forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});

			if ($forgotten)
			{
				// if there were no errors
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect("paylinklogin/login", 'refresh'); //we should display a confirmation page here instead of the login page
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect("paylinklogin/forgot_password", 'refresh');
			}
		}
	}

	// reset password - final step for forgotten password
	public function reset_password($code = NULL)
	{
		if (!$code)
		{
			show_404();
		}

		$user = $this->ion_auth->forgotten_password_check($code);

		if ($user)
		{
			// if the code is valid then display the password reset form

			$this->form_validation->set_rules('new', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
			$this->form_validation->set_rules('new_confirm', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');

			if ($this->form_validation->run() == false)
			{
				// display the form

				// set the flash data error message if there is one
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

				$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
				$this->data['new_password'] = array(
					'name' => 'new',
					'id'   => 'new',
					'type' => 'password',
					'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
				);
				$this->data['new_password_confirm'] = array(
					'name'    => 'new_confirm',
					'id'      => 'new_confirm',
					'type'    => 'password',
					'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
				);
				$this->data['user_id'] = array(
					'name'  => 'user_id',
					'id'    => 'user_id',
					'type'  => 'hidden',
					'value' => $user->id,
				);
				$this->data['csrf'] = $this->_get_csrf_nonce();
				$this->data['code'] = $code;

				// render
				$this->_render_page('paylinklogin/reset_password', $this->data);
			}
			else
			{
				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id'))
				{

					// something fishy might be up
					$this->ion_auth->clear_forgotten_password_code($code);

					show_error($this->lang->line('error_csrf'));

				}
				else
				{
					// finally change the password
					$identity = $user->{$this->config->item('identity', 'ion_auth')};

					$change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

					if ($change)
					{
						// if the password was successfully changed
						$this->session->set_flashdata('message', $this->ion_auth->messages());
						redirect("paylinklogin/login", 'refresh');
					}
					else
					{
						$this->session->set_flashdata('message', $this->ion_auth->errors());
						redirect('paylinklogin/reset_password/' . $code, 'refresh');
					}
				}
			}
		}
		else
		{
			// if the code is invalid then send them back to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("paylinklogin/forgot_password", 'refresh');
		}
	}


	// activate the user
	public function activate($id, $code=false)
	{
		if ($code !== false)
		{
			$activation = $this->ion_auth->activate($id, $code);
		}
		else if ($this->ion_auth->is_admin())
		{
			$activation = $this->ion_auth->activate($id);
		}

		if ($activation)
		{
			// redirect them to the auth page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect("paylinklogin", 'refresh');
		}
		else
		{
			// redirect them to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("paylinklogin/forgot_password", 'refresh');
		}
	}

	// deactivate the user
	public function deactivate($id = NULL)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}

		$id = (int) $id;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('confirm', $this->lang->line('deactivate_validation_confirm_label'), 'required');
		$this->form_validation->set_rules('id', $this->lang->line('deactivate_validation_user_id_label'), 'required|alpha_numeric');

		if ($this->form_validation->run() == FALSE)
		{
			// insert csrf check
			$this->data['csrf'] = $this->_get_csrf_nonce();
			$this->data['user'] = $this->ion_auth->user($id)->row();

			$this->_render_page('paylinklogin/deactivate_user', $this->data);
		}
		else
		{
			// do we really want to deactivate?
			if ($this->input->post('confirm') == 'yes')
			{
				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
				{
					show_error($this->lang->line('error_csrf'));
				}

				// do we have the right userlevel?
				if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin())
				{
					$this->ion_auth->deactivate($id);
				}
			}

			// redirect them back to the auth page
			redirect('paylinklogin', 'refresh');
		}
	}

	// create a new user
	public function create_user()
    {
        $this->data['title'] = $this->lang->line('create_user_heading');

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
        {
            redirect('paylinklogin', 'refresh');
        }

        $tables = $this->config->item('tables','ion_auth');
        $identity_column = $this->config->item('identity','ion_auth');
        $this->data['identity_column'] = $identity_column;

        // validate form input
        $this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required');
        $this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required');
        if($identity_column!=='email')
        {
            $this->form_validation->set_rules('identity',$this->lang->line('create_user_validation_identity_label'),'required|is_unique['.$tables['users'].'.'.$identity_column.']');
            $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email');
        }
        else
        {
            $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
        }
        $this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim');
        $this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'trim');
        $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

        if ($this->form_validation->run() == true)
        {
            $email    = strtolower($this->input->post('email'));
            $identity = ($identity_column==='email') ? $email : $this->input->post('identity');
            $password = $this->input->post('password');

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name'  => $this->input->post('last_name'),
                'company'    => $this->input->post('company'),
                'phone'      => $this->input->post('phone'),
            );
        }
        if ($this->form_validation->run() == true && $this->ion_auth->register($identity, $password, $email, $additional_data))
        {
            // check to see if we are creating the user
            // redirect them back to the admin page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect("paylinklogin", 'refresh');
        }
        else
        {
            // display the create user form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $this->data['first_name'] = array(
                'name'  => 'first_name',
                'id'    => 'first_name',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('first_name'),
            );
            $this->data['last_name'] = array(
                'name'  => 'last_name',
                'id'    => 'last_name',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('last_name'),
            );
            $this->data['identity'] = array(
                'name'  => 'identity',
                'id'    => 'identity',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $this->data['email'] = array(
                'name'  => 'email',
                'id'    => 'email',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('email'),
            );
            $this->data['company'] = array(
                'name'  => 'company',
                'id'    => 'company',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('company'),
            );
            $this->data['phone'] = array(
                'name'  => 'phone',
                'id'    => 'phone',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('phone'),
            );
            $this->data['password'] = array(
                'name'  => 'password',
                'id'    => 'password',
                'type'  => 'password',
                'value' => $this->form_validation->set_value('password'),
            );
            $this->data['password_confirm'] = array(
                'name'  => 'password_confirm',
                'id'    => 'password_confirm',
                'type'  => 'password',
                'value' => $this->form_validation->set_value('password_confirm'),
            );

            $this->_render_page('paylinklogin/create_user', $this->data);
        }
    }

	// edit a user
	public function edit_user($id)
	{
		$this->data['title'] = $this->lang->line('edit_user_heading');

		if (!$this->ion_auth->logged_in() || (!$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id)))
		{
			redirect('paylinklogin', 'refresh');
		}

		$user = $this->ion_auth->user($id)->row();
		$groups=$this->ion_auth->groups()->result_array();
		$currentGroups = $this->ion_auth->get_users_groups($id)->result();

		// validate form input
		$this->form_validation->set_rules('first_name', $this->lang->line('edit_user_validation_fname_label'), 'required');
		$this->form_validation->set_rules('last_name', $this->lang->line('edit_user_validation_lname_label'), 'required');
		$this->form_validation->set_rules('phone', $this->lang->line('edit_user_validation_phone_label'), 'required');
		$this->form_validation->set_rules('company', $this->lang->line('edit_user_validation_company_label'), 'required');

		if (isset($_POST) && !empty($_POST))
		{
			// do we have a valid request?
			if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
			{
				show_error($this->lang->line('error_csrf'));
			}

			// update the password if it was posted
			if ($this->input->post('password'))
			{
				$this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
				$this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
			}

			if ($this->form_validation->run() === TRUE)
			{
				$data = array(
					'first_name' => $this->input->post('first_name'),
					'last_name'  => $this->input->post('last_name'),
					'company'    => $this->input->post('company'),
					'phone'      => $this->input->post('phone'),
				);

				// update the password if it was posted
				if ($this->input->post('password'))
				{
					$data['password'] = $this->input->post('password');
				}



				// Only allow updating groups if user is admin
				if ($this->ion_auth->is_admin())
				{
					//Update the groups user belongs to
					$groupData = $this->input->post('groups');

					if (isset($groupData) && !empty($groupData)) {

						$this->ion_auth->remove_from_group('', $id);

						foreach ($groupData as $grp) {
							$this->ion_auth->add_to_group($grp, $id);
						}

					}
				}

			// check to see if we are updating the user
			   if($this->ion_auth->update($user->id, $data))
			    {
			    	// redirect them back to the admin page if admin, or to the base url if non admin
				    $this->session->set_flashdata('message', $this->ion_auth->messages() );
				    if ($this->ion_auth->is_admin())
					{
						redirect('paylinklogin', 'refresh');
					}
					else
					{
						redirect('/', 'refresh');
					}

			    }
			    else
			    {
			    	// redirect them back to the admin page if admin, or to the base url if non admin
				    $this->session->set_flashdata('message', $this->ion_auth->errors() );
				    if ($this->ion_auth->is_admin())
					{
						redirect('paylinklogin', 'refresh');
					}
					else
					{
						redirect('/', 'refresh');
					}

			    }

			}
		}

		// display the edit user form
		$this->data['csrf'] = $this->_get_csrf_nonce();

		// set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

		// pass the user to the view
		$this->data['user'] = $user;
		$this->data['groups'] = $groups;
		$this->data['currentGroups'] = $currentGroups;

		$this->data['first_name'] = array(
			'name'  => 'first_name',
			'id'    => 'first_name',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('first_name', $user->first_name),
		);
		$this->data['last_name'] = array(
			'name'  => 'last_name',
			'id'    => 'last_name',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('last_name', $user->last_name),
		);
		$this->data['company'] = array(
			'name'  => 'company',
			'id'    => 'company',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('company', $user->company),
		);
		$this->data['phone'] = array(
			'name'  => 'phone',
			'id'    => 'phone',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('phone', $user->phone),
		);
		$this->data['password'] = array(
			'name' => 'password',
			'id'   => 'password',
			'type' => 'password'
		);
		$this->data['password_confirm'] = array(
			'name' => 'password_confirm',
			'id'   => 'password_confirm',
			'type' => 'password'
		);

		$this->_render_page('paylinklogin/edit_user', $this->data);
	}

	// create a new group
	public function create_group()
	{
		$this->data['title'] = $this->lang->line('create_group_title');

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('paylinklogin', 'refresh');
		}

		// validate form input
		$this->form_validation->set_rules('group_name', $this->lang->line('create_group_validation_name_label'), 'required|alpha_dash');

		if ($this->form_validation->run() == TRUE)
		{
			$new_group_id = $this->ion_auth->create_group($this->input->post('group_name'), $this->input->post('description'));
			if($new_group_id)
			{
				// check to see if we are creating the group
				// redirect them back to the admin page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect("paylinklogin", 'refresh');
			}
		}
		else
		{
			// display the create group form
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data['group_name'] = array(
				'name'  => 'group_name',
				'id'    => 'group_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('group_name'),
			);
			$this->data['description'] = array(
				'name'  => 'description',
				'id'    => 'description',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('description'),
			);

			$this->_render_page('paylinklogin/create_group', $this->data);
		}
	}

	// edit a group
	public function edit_group($id)
	{
		// bail if no group id given
		if(!$id || empty($id))
		{
			redirect('paylinklogin', 'refresh');
		}

		$this->data['title'] = $this->lang->line('edit_group_title');

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('paylinklogin', 'refresh');
		}

		$group = $this->ion_auth->group($id)->row();

		// validate form input
		$this->form_validation->set_rules('group_name', $this->lang->line('edit_group_validation_name_label'), 'required|alpha_dash');

		if (isset($_POST) && !empty($_POST))
		{
			if ($this->form_validation->run() === TRUE)
			{
				$group_update = $this->ion_auth->update_group($id, $_POST['group_name'], $_POST['group_description']);

				if($group_update)
				{
					$this->session->set_flashdata('message', $this->lang->line('edit_group_saved'));
				}
				else
				{
					$this->session->set_flashdata('message', $this->ion_auth->errors());
				}
				redirect("paylinklogin", 'refresh');
			}
		}

		// set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

		// pass the user to the view
		$this->data['group'] = $group;

		$readonly = $this->config->item('admin_group', 'ion_auth') === $group->name ? 'readonly' : '';

		$this->data['group_name'] = array(
			'name'    => 'group_name',
			'id'      => 'group_name',
			'type'    => 'text',
			'value'   => $this->form_validation->set_value('group_name', $group->name),
			$readonly => $readonly,
		);
		$this->data['group_description'] = array(
			'name'  => 'group_description',
			'id'    => 'group_description',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('group_description', $group->description),
		);

		$this->_render_page('paylinklogin/edit_group', $this->data);
	}


	public function _get_csrf_nonce()
	{
		$this->load->helper('string');
		$key   = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return array($key => $value);
	}

	public function _valid_csrf_nonce()
	{
		if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
			$this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		if ($returnhtml) return $view_html;//This will return html on 3rd argument being true
	}
public function home_page(){
	if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('paylinklogin/login', 'refresh');
		}
		else
		{
			$this->load->view('paylinklogin/home_page');
		}

}
public function addtohome(){
	if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('paylinklogin/login', 'refresh');
		}
		else
		{
			
	$id = $this->input->post('id');
	$data['IDMATCH'] = $this->Home_page_report_add->checkId($id);
	if($data['IDMATCH']!=1)
	{
		$data['ISPUBLISHED'] = $this->Home_page_report_add->checkpublished($id);
		
		if($data['ISPUBLISHED']!=1)
		{
			$data['check_home_availability']= $this->Home_page_report_add->check_home_available($id);
			
			if($data['check_home_availability']==1)
			{
			$data['reports'] =$this->Home_page_report_add->confirm_title($id);
			
			$data['msg']='Please Confirm Report Title.';
			}
			else{
				$data['msg']='Report all ready on home page.';
			}
		}
		else{
			$data['msg']='Report is upcoming, we can not add it.';
		}
	}
	else{
		$data['msg']='Report id is incorrect, please enter correct id.';
	}
	$this->load->view('paylinklogin/home_page', $data);
}
}
public function confirmed(){
	if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('paylinklogin/login', 'refresh');
		}
		else
		{
	$id = $this->input->post('id');
	$this->Home_page_report_add->addreport($id);
			$data['msg']='Report added on Home Page.';
			$this->load->view('paylinklogin/home_page', $data);
}
}

   public function pay_link(){

      // $this->load->view('elements/header');
      $this->load->view('paylinklogin/paylink');

      //$this->load->view('elements/footer');

  }
  
  
   //otp view
  public function pay_link_opt_view(){
      
      $this->load->view('paylinklogin/pay_link_opt_view');
  }
  
  //check OTP
  public function check_otp(){
       
      
      $otp = $this->input->post('otp');
      $orignal_otp=$this->session->tempdata('otp');
      
       
      if($otp==$orignal_otp && !empty($otp)){
          
           $this->load->view('paylinklogin/paylink');
      }else{
          
          $this->session->set_flashdata('Error_otp','OTP does not match, Please try again'); 
          $this->load->view('paylinklogin/pay_link_opt_view');
      }
      
      
  }
  
public function paylink(){
			
			
			
			$user=$this->session->userdata('log_user');
			if(empty($user)){

					redirect('paylinklogin/logout');

				}else{
 
            $report_name = $this->input->post('reportname');
            $email = $this->input->post('email');
            $price = $this->input->post('price');  
			$ip = $this->input->post('ip');
			$user_name = $email;
			
			$timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
			
			$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
			$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I")));
 			
            $sql= " INSERT INTO `pay_links` ( `name`,`url`,`user_name`,`ip`, `price_sul`,`creation_date`,`creation_time` ) VALUES (".$this->db->escape($report_name).", '',  ".$this->db->escape($user_name)." ,'$ip' ,'$price','$dates','$time')";
			
            $this->db->query($sql);

             $insert_id = $this->db->insert_id();
             $subject="Payment link";
				$_SESSION['price'] = $price;
				$_SESSION['rName'] = $report_name;
             $url=base_url()."secure-report-purchase/0/".$insert_id."?d=y";
             $to_email =  $email;//from user email
             $from_email='vikas@gminsights.com';
			 
			 $sql_pay_link_url= "update pay_links set url=".$this->db->escape($url)." where id=".$insert_id."";
			 
			

			 
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

                <p><strong>Generated payment link</strong></p>
                <p>Dear Admin,</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one request. Please find the details below.</p>
                <p><strong>Payment link :-</strong>&nbsp;</p>
				<p><strong>Link generated by:</strong> '.$email.'</p>
                <p><strong>Report Name:</strong> '.$report_name.'</p>
                <p><strong>Discount price:</strong> $'.$price.'</p>
                <p><strong>Discounted Payment link: </strong>'.$url.'</p>
				<p><strong>Link generated IP:</strong> '.$ip.'</p>
				 

<p style="font-size:12px;"><b>
Note: This mail came from official website of Graphical Research Inc.</b><p/>
</body>
</html>';
 $body2 ='';

$mail_list="";
			$emails_array=array("","","","","");
			
				//$emails_array=array("nikhil.c@gminsights.com","vikas@gminsights.com");
			for($i=0; $i<count($emails_array); $i++){
				
				$mail_list .=" ".$emails_array[$i];
				
				if($to_email!=$emails_array[$i]){
					
					$mail_list .=" ".$emails_array[$i];
				}
				
			}
			
			
			
			$mail_list=trim($mail_list);
			
			$mail_list= str_replace(" ",", ",$mail_list);
			 
            $result = $this->email
                ->from($from_email)
               
                ->to($to_email)//$to_email
				->cc($mail_list)
                ->subject($subject)
                ->message($body);
             
                
                if ($this->email->send())
            {
				
				 $this->db->query($sql_pay_link_url);
				
				
			 
			 
			 $this->session->set_flashdata('u',$url);
			 $this->session->set_flashdata('use',$user);
			 redirect('paylinklogin/link_done');
			 
			  
            
	
              
          

            exit;
            }
            else
            {
              echo "Link is not created";
             
           
            exit;
            }
			
		}

        }
		
		public function link_done()
		{
			$user=$this->session->userdata('log_user');
			if(empty($user)){

					redirect('paylinklogin/logout');

				}else{
			$data['url']=$this->session->flashdata('u');
			$data['user']=$this->session->flashdata('use');
			$this->load->view('paylinklogin/link-create-success',$data);
			}
			
		}
		public function deactive_link()
		{
			$user=$this->session->userdata('log_user');
			//var_dump($user);
			if(empty($user)){

					redirect('paylinklogin/logout');

				}else{
					
			$data['user']=$user;
					
  	//var_dump($data['user']);
			
			$data['links']=$this->Home_page_report_add->all_disc_links($user);
			//var_dump($data['links']);
			
			$this->load->view('paylinklogin/link_deactive_view',$data);
			}
			
		}
		public function deactivated()
		{
			$user=$this->session->userdata('log_user');
			if(empty($user)){

					redirect('paylinklogin/logout');

				}else{
					$id=$this->input->get('id', TRUE);
			$data['url']=$this->session->flashdata('u');
			$data['user']=$this->session->flashdata('use');
			$data['links']=$this->Home_page_report_add->deactivate_model($id);
			
			redirect('paylinklogin/deactive_link');
			}
			
		}
		 public function link_deactivated()
     {
      $data['title'] = 'Link Deactivated | GM Insights';
	  $data['description'] = 'Link Deactivated | GM Insights';
	  $data['keywords'] = 'Link Deactivated | GM Insights';
	  $data['meta'] ='<meta name="robots" content="noindex, nofollow">';
	  $data['content'] = 'paylinklogin/link_deactivated';
	  $this->load->view('layouts/master_header_footer', $data);

	 }
	 
	 
	 //send otp to register mail id
	 public function send_otp_to_mail($mail_to_send_otp, $otp){
      

             
            $subject =  'OTP verification form Payment link.';
             
            $to_email = $mail_to_send_otp;	  
             
            
           
           $timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
/* $sql= " INSERT INTO `support_ticket` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`,`date`,`time`) VALUES ('$from_email', '$phone', '$company', 'n/a', '$message', 'n/a', 'contact us', '$name', '$ip','$country', '$dates', '$time')";

$this->db->query($sql); */
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>


<p><strong>OTP REQUEST:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Your Payment link OPT</p>
				<p><strong>OTP Details :-</strong>&nbsp;</p>
				<p><strong>OTP:&nbsp;</strong>'.$otp.'</p>
				
<p style="font-size:12px;"><b>
Note: This mail came from official website of Graphical Research Inc.</b><p/>
</body>
</html>';

	  
 
            $result = $this->email
                ->from('pankaj.k@graphicalresearch.com')
                ->reply_to($to_email)    
                ->to($to_email)
                ->subject($subject)
                ->message($body);
				
				

              
                 if ($this->email->send())
            {
				
				
                  $this->session->set_tempdata('otp', $otp, 60);
                 
           // exit;
            }
            else
            {
			
                
                echo "OTP sending Error please login again";
              
               //redirect('thanks');
          

            exit;
            }
                

           

          
		 
                    
                }
                
    //RESEND OTP
	 public function resend_otp_to_mail(){
       
       
             $to_email =$this->session->userdata('log_user');
             
            $subject =  'OTP verification form Payment link.';
             $length = 4;
                                    $chars = '01234567890';
                                    $chars_length = (strlen($chars) - 1);  
                                     
                                    $string = $chars{rand(0, $chars_length)};  
                                    for ($i = 1; $i < $length; $i = strlen($string))  
                                    {  
                                       $r = $chars{rand(0, $chars_length)};  
                                       if ($r != $string{$i - 1}) $string .= $r;  
                                       
                                      
                                    } 
                                    $otp=$string;
             
           	  
             
            
           
           $timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
/* $sql= " INSERT INTO `support_ticket` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`,`date`,`time`) VALUES ('$from_email', '$phone', '$company', 'n/a', '$message', 'n/a', 'contact us', '$name', '$ip','$country', '$dates', '$time')";

$this->db->query($sql); */
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>


<p><strong>OTP REQUEST:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Your Payment link OPT</p>
				<p><strong>OTP Details :-</strong>&nbsp;</p>
				<p><strong>OTP:&nbsp;</strong>'.$otp.'</p>
				
<p style="font-size:12px;"><b>
Note: This mail came from official website of Graphical Research Inc.</b><p/>
</body>
</html>';

	  
  
            $result = $this->email
                ->from('pankaj.k@graphicalresearch.com')
                ->reply_to('pankaj.k@graphicalresearch.com')
                ->to('pankaj.k@graphicalresearch.com')
                ->subject($subject)
                ->message($body);
               
                 if ($this->email->send())
            {
				
				
                  $this->session->set_tempdata('otp', $otp, 60);
                  redirect('paylinklogin/pay_link_opt_view');
                 
           // exit;
            }
            else
            {
                
                echo "OTP sending Error please login again";
              
               //redirect('thanks');
          

            exit;
            }
                

           

          
		 
                    
                }
}
