<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PagesController extends CI_Controller {

    public function index()
    {

        $this->home();

    }



	public function home()
	{
        $data['css']= base_url().'httpdocs/assets/css/';
        $data['js']=base_url().'httpdocs/assets/js/';
        $data['images']=base_url().'httpdocs/assets/images/';
        $data['data_table']=base_url().'httpdocs/assets/data_table/';
        $data['product_list']='';

		$this->load->view('site_header',$data);
		$this->load->view('main',$data);
		$this->load->view('site_footer',$data);
	}

    public function about()
	{
        $data['css']= base_url().'httpdocs/assets/css/';
        $data['js']=base_url().'httpdocs/assets/js/';
        $data['images']=base_url().'httpdocs/assets/images/';
        $data['data_table']=base_url().'httpdocs/assets/data_table/';
		$this->load->view('site_header',$data);
		$this->load->view('about',$data);
		$this->load->view('site_footer',$data);
	}

    public function master(){

        $this->load->view("storeadmin/admin_login");
    }

    public function intro(){

        $this->load->view("storeadmin/index");

    }


    public function inventory(){

        $data['css']= base_url().'httpdocs/assets/css/';
        $data['js']=base_url().'httpdocs/assets/js/';
        $data['images']=base_url().'httpdocs/assets/images/';
        $data['data_table']=base_url().'httpdocs/assets/data_table/';
        $data["product_list"]="";
        $this->load->view("storeadmin/inventory_list",$data);
    }

    function logout()
    {
        session_start();
        $_SESSION = array();

         // If it's desired to kill the session, also delete the session cookie.
         // Note: This will destroy the session, and not just the session data!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name("manager"), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

// Finally, destroy the session.
        session_destroy();
        $this->index();





    }

    function contact()
    {

        $data['css']= base_url().'httpdocs/assets/css/';
        $data['js']=base_url().'httpdocs/assets/js/';
        $data['images']=base_url().'httpdocs/assets/images/';
        $data['data_table']=base_url().'httpdocs/assets/data_table/';
        $this->load->view('site_header',$data);
        $this->load->view('contact',$data);
        $this->load->view('site_footer',$data);

    }

    function products()
    {

        $data['css']= base_url().'httpdocs/assets/css/';
        $data['js']=base_url().'httpdocs/assets/js/';
        $data['images']=base_url().'httpdocs/assets/images/';
        $data['data_table']=base_url().'httpdocs/assets/data_table/';
        $data['product_list']="";
        $this->load->view('site_header',$data);
        $this->load->view('products',$data);
        $this->load->view('site_footer',$data);

    }

    public function d()
    {


        $data['css']= base_url().'httpdocs/assets/css/';
        $data['js']=base_url().'httpdocs/assets/js/';
        $data['images']=base_url().'httpdocs/assets/images/';
        $data['data_table']=base_url().'httpdocs/assets/data_table/';
        $data['product_list']="";

//$data["prdct_id"]=$this->input->get('id');
        $url_check_id=$this->input->get('id');




        $data["prdct_id"]=$this->cleanurl($url_check_id);
        $det=$this->cleanurl($url_check_id);




        $this->load->model("detail");
        $data["results"]=$this->detail->det($det);

        $this->load->view('site_header',$data);
        $this->load->view('detail',$data);
        $this->load->view('site_footer',$data);



    }


    function cleanurl($str, $replace=array(), $delimiter='-')
    {
        setlocale(LC_ALL, 'en_US.UTF8');

        if( !empty($replace) ) {
            $str = str_replace((array)$replace, ' ', $str);
        }

        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

        return $clean;

    }

    public function cleantexteng($str, $replace=array(), $delimiter='-')
    {
        setlocale(LC_ALL, 'en_US.UTF8');


        if( !empty($replace) ) {
            $str = str_replace((array)$replace, ' ', $str);
        }

        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

        return $clean;

    }

    public function cleantexttr($str, $replace=array(), $delimiter='-')
    {


        ///( ! preg_match("/^[a-z\+ü+Ü+ğ+Ğ+ı+İ+ö+Ö+ç+Ç+ş+Ş.\s-]{2,}$/i", $str))
        $clean = preg_replace('|[^a-z0-9çÇğĞıİöÖşŞüÜ \-@]|i', '', $str);


        // $clean = strtolower(trim($clean, '-'));

        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
        $clean = strip_tags($clean);

        return $clean;

    }



    function s()
    {
        $this->load->view("main");


    }

    function referance()

    {

      redirect('httpdocs/home');

    }



}

