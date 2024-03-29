<?php

class Contact extends ControllerBase
{
	function __construct()
	{
		parent::__construct();
        $this->load->model(array('mevents', 'mmenu', 'mimages', 'marticles', 'mcategory', 'mtweet'));
        $this->data['last_news'] =  $this->marticles->articles_list_last(5);
        $this->data['cat_left'] = $this->mcategory->categories_list();
        $this->data['menu_id'] = 'contact';
        $this->data['tweets'] = $this->mtweet->tweets_list();
        $this->data['rand_img'] = $this->mimages->random_img();
	}		
	
	function index()
	{
        $this->data['content'] = 'front/contact';
        $this->load->view('front/layout', $this->data);
	}
	function submit()
	{
	//	print_r($_POST);

       $to      = 'tepalenko@gmail.com';
       $subject = 'Freetime contact form';

       $headers = 'From: webmaster@example.com' . "\r\n" .
                   'Reply-To: webmaster@example.com' . "\r\n" .
                   'X-Mailer: PHP/';

		$html = '
		Subject: '.$_POST['u_subject'].'
		Name: '.$_POST['u_name'].'
		Mail: '.$_POST['u_mail'].'
		Phone: '.$_POST['u_phone'].'
		Site: '.$_POST['u_site'].'
		Message: '.$_POST['u_comment'].'
		';


        if (mail($to, $subject, $html, $headers)) {
            echo("Message successfully sent");
        } else {
            echo("Message sending failed");
        }
	  // mail($to, $subject, $html, $headers);
       echo $to.'###'.$subject.'###'.$html.'###'.$headers;
       die;
        redirect('/contact');
	}


   
}

// End of file