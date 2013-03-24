<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class report extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('history');
		$this->load->library('dompdf_gen');
		$this->load->database();
		if($this->session->userdata('user_login_key')=="")
			redirect(base_url()."login");
		$this->nav['active'] = "report";
		$this->nav['breadcrumbs'] = array(array("href" => base_url()."home", "label"=> "<i class=\"icon-home\"></i>"));
		$this->head['datepicker'] = "true";
		$this->load->model('usermodel');
		$this->usermodel->id = $this->session->userdata('user_login_key');
		$data = $this->usermodel->load();
		$this->nav['previledge'] = $data[0]->fld_type;
	}
	
	function index()
	{		
		$this->load->view('admin/header',$this->head);
		array_push($this->nav['breadcrumbs'],
				array("href" => "", "label"=> "Reports")
		);
		$this->load->view('admin/navbar',$this->nav);
		$this->load->view('admin/footer');

	}
	
	function daily()
	{		
		$this->load->view('admin/header',$this->head);
		array_push($this->nav['breadcrumbs'],
				array("href" => base_url()."report", "label"=> "Reports"),
				array("href" => "", "label"=> "Daily Sales")
		);
		$this->load->view('admin/navbar',$this->nav);
		$this->load->model('reportmodel');
		if($this->input->post('date')!="")
			$this->reportmodel->date = $this->input->post('date');
		else
			$this->reportmodel->date = date("Y-m-d");
		$this->reportmodel->type = $this->input->post('type');
		$this->reportmodel->status = $this->input->post('status');
		$data['date'] = $this->input->post('date');
		$data['type'] = $this->input->post('type');
		$data['status'] = $this->input->post('status');
		$data['customers'] = $this->reportmodel->customerload();
		$this->load->view('admin/daily', $data);
		$this->load->view('admin/footer');
	}
	
	function stock($page="")
	{		
		$this->load->view('admin/header',$this->head);
		array_push($this->nav['breadcrumbs'],
				array("href" => base_url()."report", "label"=> "Reports"),
				array("href" => "", "label"=> "Stock Invetory")
		);
		$this->load->view('admin/navbar',$this->nav);
		$this->load->model('reportmodel');
		$this->load->model('productmodel');	
		$update = $this->reportmodel->stockupdateload();
		if($update['count'] == '0'){
			$data['update'] = FALSE;	
			if($this->input->post('update')!=""){
				if($this->input->post('update')=='true'){
					$this->reportmodel->stockupdate();		
					redirect(base_url()."report/stock");
				}	
			}	
			if($this->input->post('date')!="")
				$this->reportmodel->date = $this->input->post('date');
			else
				$this->reportmodel->date = date("Y-m-d");
			$this->reportmodel->product = $this->input->post('productID');
			$this->reportmodel->supplier = $this->input->post('supplierID');
			$data['stocks'] = $this->reportmodel->stockload();
			if($this->input->post('date')!="")
				$data['date'] = $this->input->post('date');
			else
				$data['date'] = date("Y-m-d");
			$data['products'] = $this->productmodel->load();			
			$data['supplierID'] = $this->input->post('supplierID');
			$data['productID'] = $this->input->post('productID');
			$data['suppliers'] = $this->productmodel->supplier();
			$data['products'] = $this->productmodel->load();		
			$this->load->view('admin/stock',$data);	
		}else{		
			$data['update'] = TRUE;		
			if($this->input->post('date')!="")
				$this->reportmodel->date = $this->input->post('date');
			else
				$this->reportmodel->date = date("Y-m-d");
			$this->reportmodel->sold = "true";
			if($this->input->post('date')!="")
				$this->productmodel->date = $this->input->post('date');	
			else
				$this->productmodel->date = date("Y-m-d");
			$this->productmodel->product = $this->input->post('productID');
			$this->productmodel->supplier = $this->input->post('supplierID');
			if($this->input->post('date')!="")
				$data['date'] = $this->input->post('date');
			else
				$data['date'] = date("Y-m-d");
			$data['supplierID'] = $this->input->post('supplierID');
			$data['productID'] = $this->input->post('productID');
			$data['stocks'] = $this->productmodel->stockproductload();	
			$data['suppliers'] = $this->productmodel->supplier();
			$data['products'] = $this->productmodel->load();			
			$this->load->view('admin/stock-list',$data);	
		}		
		
		$this->load->view('admin/footer');
	}
	
	function dompdf(){	
		$this->load->model('reportmodel');
		if($this->input->post('date')!=""){
			$this->reportmodel->date = $this->input->post('date');
			$this->reportmodel->type = $this->input->post('type');
			$this->reportmodel->status = $this->input->post('status');
			$data['date'] = $this->input->post('date');
			$data['type'] = $this->input->post('type');
			$data['status'] = $this->input->post('status');
		}
		$data['customers'] = $this->reportmodel->customerload();
		$this->load->view('admin/daily-pdf', $data);
		$html = $this->output->get_output();
		
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("daily-reports.pdf");

	}
	
	function sdompdf(){	
		$this->load->model('reportmodel');
		$this->load->model('productmodel');
		if($this->input->post('date')!=""){
			if($this->input->post('date')!="")
				$this->reportmodel->date = $this->input->post('date');
			else
				$this->reportmodel->date = date("Y-m-d");
			$this->reportmodel->sold = "true";
			if($this->input->post('date')!="")
				$this->productmodel->date = $this->input->post('date');	
			else
				$this->productmodel->date = date("Y-m-d");
			$this->productmodel->product = $this->input->post('productID');
			$this->productmodel->supplier = $this->input->post('supplierID');
			if($this->input->post('date')!="")
				$data['date'] = $this->input->post('date');
			else
				$data['date'] = date("Y-m-d");
			$data['supplierID'] = $this->input->post('supplierID');
			$data['productID'] = $this->input->post('productID');
			$data['stocks'] = $this->productmodel->stockproductload();	
			$data['suppliers'] = $this->productmodel->supplier();
			$data['products'] = $this->productmodel->load();
		}
		$data['customers'] = $this->reportmodel->customerload();
		$this->load->view('admin/stock-pdf', $data);
		$html = $this->output->get_output();
		
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("stock-reports.pdf");

	}
}
	
