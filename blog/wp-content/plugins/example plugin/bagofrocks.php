<?php
/**
*Plugin Name: Bag of Rocks
*Plugin Author: Jordan Buice
**/

    function sage()
    {
        $info = '';
        
        $info .='<form method= "post">';
        
        $info .= '<input type= "text" name="email" placeholder="email" />';
        $info .= '<br />';
        
        $info .= '<input type= "submit" name="submit" value="JOIN" />';
        
        return $info;    
            
    }
    add_shortcode('sage_example', 'sage'); 


    function set_html()
    {
        return 'text/html';    
        
    }


    function form_capture()
    {
        
        global $post;
        
        if(array_key_exists('submit',$_POST))
        {
            $to = "jordanb.422@gmail.com";
            $subject = "Form Submission";
            $body = "";
            
            $body.='Email: '.$_POST['email'].' <br/>';
            
            
            add_filter('wp_mail_content_type', 'set_html');
            wp_mail($to,$subject,$body);
            
            remove_filter('wp_mail_content_type', 'set_html');
            
            
            $time = current_time('mysql');
            
            $data = array( 
            'comment_post_ID' => $post->ID,
            'comment_content' => $body,
            'comment_author_IP' => $SERVER[ 'REMOTE_ADDR'],
            'comment_date' => $time,
            'comment_approved' => 1,   
            
            );
            wp_insert_comment($data);
            
            
        }
        
    }
    
    add_action('wp_head', 'form_capture')

?>