<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');
    }


    public function contact_form_submit()
    {


        $this->load->library('email');

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtppro.zoho.in';
        $config['smtp_user'] = 'info@nexuscomchem.com';
        $config['smtp_pass'] = 'Jaipurnexus!';
        $config['smtp_port'] = 465;

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");

        $from = 'Info@nexuscomchem.com';
     $to = 'ronakvaya@gmail.com';
      //   $to = 'Info@nexuscomchem.com';

        $subject = 'Message from ' . $_POST['name'];
        $message = 'Message from - ' . $_POST['email'] . '\n\n' . $_POST['message'];

        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        $this->email->send();
    }

      public function subscriber_submit()
    {


        $this->load->library('email');

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtppro.zoho.in';
        $config['smtp_user'] = 'info@nexuscomchem.com';
        $config['smtp_pass'] = 'Jaipurnexus!';
        $config['smtp_port'] = 465;

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");

        $from = 'Info@nexuscomchem.com';
      // $to = 'ronakvaya@gmail.com';
         $to = 'Info@nexuscomchem.com';

        $subject = 'Subscription from ' . $_POST['email'];
        $message = 'User subscribed to Nexus website - ' . $_POST['email'];

        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        $this->email->send();
    }
}
