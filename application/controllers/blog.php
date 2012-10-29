<?php

class Blog extends ControllerBase
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('marticles', 'mmenu', 'mimages', 'mcategory', 'mtweet'));
        $this->data['last_news'] =  $this->marticles->articles_list_last(5);
        $this->data['cat_left'] = $this->mcategory->categories_list();
        $this->data['menu_id'] = 'blog';
        $this->data['tweets'] = $this->mtweet->tweets_list();
        $this->data['meta'] = array(
            'title' => 'Афиша на неделю',
            'url' => base_url().'events/week',
            'img' => base_url().'public/logo.jpg',
            'desc' => 'Все события города Черкассы на одном сайте'
        );
	}		
	
	function index()
	{
        $this->data['articles'] = $this->marticles->articles_list();
        $images =  $this->mimages->events_list_img();
        $this->data['articles_images'] = array();
        foreach($images as $img){
            $this->data['articles_images'][$img['item_id']] = $img;
        }
/*
        $new_tweets =  $this->get_tweets();

        $tweetids = $this->mtweet->tweets_ids();
        $newids = array();
        foreach($tweetids as $id){
            if(!isset($newids[$id['tweet_id']]))
                $newids[$id['tweet_id']] = $id['tweet_id'];
        }
        $insert_data = array();
        foreach($new_tweets as $tweet){
            if(!isset($newids[$tweet->id])){
                $insert_data = array(
                    'tweet_id' => $tweet->id,
                    'name' => $tweet->from_user_name,
                    'text' => $tweet->text,
                    'time' => $tweet->created_at
                );
                $this->mtweet->add_tweet($insert_data);
            }
        }
*/
        $this->data['tweets'] = $this->mtweet->tweets_list();
        $this->data['meta'] = array(
            'title' => 'Афиша на неделю',
            'url' => base_url().'events/week',
            'img' => base_url().'public/logo.jpg',
            'desc' => 'Все события города Черкассы на одном сайте'
        );
        $this->data['content'] = 'front/articles_list';
        $this->load->view('front/layout', $this->data);
	}
	function get_article($id)
	{
		$this->data['article'] = $this->marticles->article_info($id);
        $this->data['article_images'] = $this->mimages->event_img($this->data['article']['id']);
       // print_r($this->data['article_images']);die;
		if (!$this->data['article']) show_404();
        //$data = array('view' => 'view+1');
        $this->marticles->update_view($id);
		$this->data['content'] = 'front/article';
        $this->load->view('front/layout', $this->data);
	}

    function popular_article()
	{
       // echo 'asdf';die;
		$this->data['articles'] = $this->marticles->articles_list(null, array('status' => '1'), true, 'view','desc');
       // print_r($this->data['articles']);die;
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);
		$this->data['content'] = 'front/articles_list';
        $this->load->view('front/layout', $this->data);
	}
    function get_tweets()
    {
        $this->load->library('twitter');
        // This is how we do a basic auth:
        $this->twitter->auth('boltonkvn', 'bolton2012');

        // Fill in your twitter oauth client keys here

        $consumer_key = '4nrfPTubPxBkIXf1qvM9A';
        $consumer_key_secret = 'pXJM68uQFBaa2m50zqFoPNdv5nNI6LspxJxgXsDCZc';

        // For this example, we're going to get and save our access_token and access_token_secret
        // in session data, but you might want to use a database instead :)

        $this->load->library('session');

        $tokens['access_token'] = NULL;
        $tokens['access_token_secret'] = NULL;

        // GET THE ACCESS TOKENS

        $oauth_tokens = $this->session->userdata('twitter_oauth_tokens');

        if ( $oauth_tokens !== FALSE ) $tokens = $oauth_tokens;



        $auth = $this->twitter->oauth($consumer_key, $consumer_key_secret, $tokens['access_token'], $tokens['access_token_secret']);

        if ( isset($auth['access_token']) && isset($auth['access_token_secret']) )
        {
            // SAVE THE ACCESS TOKENS

            $this->session->set_userdata('twitter_oauth_tokens', $auth);

            if ( isset($_GET['oauth_token']) )
            {
                $uri = $_SERVER['REQUEST_URI'];
                $parts = explode('?', $uri);

                // Now we redirect the user since we've saved their stuff!

                header('Location: '.$parts[0]);
                return;
            }
        }

        // This is where  you can call a method.
        $twitts = $this->twitter->search('search', array('q' => 'dark_dark_voron', 'rpp' => 3, 'lang' => 'ru'));
        return $twitts->results;
        //$this->twitter->call('statuses/update', array('status' => 'Testing CI Twitter oAuth sexyness by @elliothaughin'));

        // Here's the calls you can make now.
        // Sexy!

        /*
          $this->twitter->call('statuses/friends_timeline');
          $this->twitter->search('search', array('q' => 'elliot'));
          $this->twitter->search('trends');
          $this->twitter->search('trends/current');
          $this->twitter->search('trends/daily');
          $this->twitter->search('trends/weekly');
          $this->twitter->call('statuses/public_timeline');
          $this->twitter->call('statuses/friends_timeline');
          $this->twitter->call('statuses/user_timeline');
          $this->twitter->call('statuses/show', array('id' => 1234));
          $this->twitter->call('direct_messages');
          $this->twitter->call('statuses/update', array('status' => 'If this tweet appears, oAuth is working!'));
          $this->twitter->call('statuses/destroy', array('id' => 1234));
          $this->twitter->call('users/show', array('id' => 'elliothaughin'));
          $this->twitter->call('statuses/friends', array('id' => 'elliothaughin'));
          $this->twitter->call('statuses/followers', array('id' => 'elliothaughin'));
          $this->twitter->call('direct_messages');
          $this->twitter->call('direct_messages/sent');
          $this->twitter->call('direct_messages/new', array('user' => 'jamierumbelow', 'text' => 'This is a library test. Ignore'));
          $this->twitter->call('direct_messages/destroy', array('id' => 123));
          $this->twitter->call('friendships/create', array('id' => 'elliothaughin'));
          $this->twitter->call('friendships/destroy', array('id' => 123));
          $this->twitter->call('friendships/exists', array('user_a' => 'elliothaughin', 'user_b' => 'jamierumbelow'));
          $this->twitter->call('account/verify_credentials');
          $this->twitter->call('account/rate_limit_status');
          $this->twitter->call('account/rate_limit_status');
          $this->twitter->call('account/update_delivery_device', array('device' => 'none'));
          $this->twitter->call('account/update_profile_colors', array('profile_text_color' => '666666'));
          $this->twitter->call('help/test');
          */

    }
   
}

// End of file