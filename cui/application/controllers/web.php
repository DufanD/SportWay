<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('cart'));
		$this->load->model('mymodel');
	}
	
	//Ini controller Pencarian

	public function search(){
		$this->load->model('mymodel');
		$produk = $this->input->post('search');
		if(isset($_POST['cari'])){
			if(isset($produk) AND !empty($produk)){
				$cek = $this->mymodel->search($produk);
				if(count($cek) > 0){
					$comp = array(
						"header" => $this->load->view("header",array(
							"navbar_top" => $this->load->view("navbar_top",array(),true)
						),true),
						"content_mid" => $this->contentMidIndex(),
						"content_next" => $this->fcontentNextSearch($produk),
						"footer" => $this->load->view("footer",array(),true),
						"product_modal" => $this->productModalIndex(),
					);
					$this->load->view('index',$comp);
				}else{
					$comp = array(
						"header" => $this->load->view("header",array(
							"navbar_top" => $this->load->view("navbar_top",array(),true)
						),true),
						"content_top" => "<center><div class='alert alert-danger'>No such result</div></center>",
						"content_mid" => $this->contentMidIndex(),
						"content_next" => $this->contentNextIndex(),
						"footer" => $this->load->view("footer",array(),true),
						"product_modal" => $this->productModalIndex(),
					);
					$this->load->view('index',$comp);	
				}
			}else{
				redirect('web/index');
			}
		} else {
			redirect('web/index');
		}

	}

	public function fcontentNextSearch($filter){
		$data = array(
			"kontents_next" => $this->mymodel->search($filter),
		);

		return $this->load->view("content_next",$data,true);		
	}

	// Ini controller index

	public function index()
	{
		$comp = array(
			"header" => $this->load->view("header",array(
				"navbar_top" => $this->load->view("navbar_top",array(),true)
			),true),
			"content_top" => $this->contentTopIndex(),
			"content_mid" => $this->contentMidIndex(),
			"content_next" => $this->contentNextIndex(),
			"footer" => $this->load->view("footer",array(),true),
			"product_modal" => $this->productModalIndex(),
		);
		$this->load->view('index',$comp);
	}

	public function contentTopIndex(){
		$data = array(
			"kontents_top" => $this->mymodel->GetAllProduk(),
		);
		return $this->load->view("content_top",$data,true);
	}

	public function contentMidIndex(){
		$data = array();
		return $this->load->view("content_mid",$data,true);
	}

	public function contentNextIndex(){
		$data = array();
		return $this->load->view("content_next",$data,true);
	}

	public function productModalIndex(){
		$data = array(
			"produk_modals" => $this->mymodel->GetAllProduk()
		);
		return $this->load->view("product_modal",$data,true);
	}

	// Ini controller index filter basket

	public function basket(){
		$cek = $this->mymodel->GetBasket();
		if(count($cek) > 0){
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => $this->contentTopBasket(),
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('basket',$comp);
		}else{
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => "<center><div class='alert alert-danger'>No such result</div></center>",
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);	
			$this->load->view('basket',$comp);
		}
	}

	public function basketf($filter){
		switch ($filter) {
			case "Sepatu":
				$cek = $this->mymodel->GetBasketSepatu();
				break;

			case "Bola":
				$cek = $this->mymodel->GetBasketBola();
				break;

			case "Jersey":
				$cek = $this->mymodel->GetBasketJersey();
				break;

			case "JerseyL":
				$cek = $this->mymodel->GetBasketJerseyL();
				break;

			case "JerseyP":
				$cek = $this->mymodel->GetBasketJerseyP();
				break;

			case "JerseyA":
				$cek = $this->mymodel->GetBasketJerseyA();
				break;

			case "Atribut":
				$cek = $this->mymodel->GetBasketAtribut();
				break;

			case "Peralatan":
				$cek = $this->mymodel->GetBasketPeralatan();
				break;

			default:
				# code...
				break;
		}

		if(count($cek) > 0){
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => $this->fcontentTopBasket($filter),
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('basket',$comp);
		}else{
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => "<center><div class='alert alert-danger'>No such result</div></center>",
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('basket',$comp);	
		}
	}

	public function contentTopBasket(){
		$data = array(
			"kontents_top" => $this->mymodel->GetBasket(),
		);
		return $this->load->view("content_top",$data,true);
	}

	public function fcontentTopBasket($filter){
		switch ($filter) {
			case "Sepatu":
				$data = array(
					"kontents_top" => $this->mymodel->GetBasketSepatu(),
				);
				break;

			case "Bola":
				$data = array(
					"kontents_top" => $this->mymodel->GetBasketBola(),
				);
				break;

			case "Jersey":
				$data = array(
					"kontents_top" => $this->mymodel->GetBasketJersey(),
				);
				break;

			case "JerseyL":
				$data = array(
					"kontents_top" => $this->mymodel->GetBasketJerseyL(),
				);
				break;

			case "JerseyP":
				$data = array(
					"kontents_top" => $this->mymodel->GetBasketJerseyP(),
				);
				break;

			case "JerseyA":
				$data = array(
					"kontents_top" => $this->mymodel->GetBasketJerseyA(),
				);
				break;

			case "Atribut":
				$data = array(
					"kontents_top" => $this->mymodel->GetBasketAtribut(),
				);
				break;

			case "Peralatan":
				$data = array(
					"kontents_top" => $this->mymodel->GetBasketPeralatan(),
				);
				break;

			default:
				# code...
				break;
		}

		return $this->load->view("content_top",$data,true);		
	}

	// Ini controller index filter futsal

	public function futsal(){
		$cek = $this->mymodel->GetFutsal();
		if(count($cek) > 0){
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => $this->contentTopFutsal(),
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('futsal',$comp);
		}else{
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => "<center><div class='alert alert-danger'>No such result</div></center>",
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('futsal',$comp);	
		}
	}

	public function futsalf($filter){
		switch ($filter) {
			case "Sepatu":
				$cek = $this->mymodel->GetFutsalSepatu();
				break;

			case "Bola":
				$cek = $this->mymodel->GetFutsalBola();
				break;

			case "Jersey":
				$cek = $this->mymodel->GetFutsalJersey();
				break;

			case "JerseyL":
				$cek = $this->mymodel->GetFutsalJerseyL();
				break;

			case "JerseyP":
				$cek = $this->mymodel->GetFutsalJerseyP();
				break;

			case "JerseyA":
				$cek = $this->mymodel->GetFutsalJerseyA();
				break;

			case "Atribut":
				$cek = $this->mymodel->GetFutsalAtribut();
				break;

			case "Peralatan":
				$cek = $this->mymodel->GetFutsalPeralatan();
				break;

			default:
				# code...
				break;
		}

		if(count($cek) > 0){
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => $this->fcontentTopFutsal($filter),
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('futsal',$comp);
		}else{
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => "<center><div class='alert alert-danger'>No such result</div></center>",
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('futsal',$comp);	
		}
	}

	public function contentTopFutsal(){
		$data = array(
			"kontents_top" => $this->mymodel->GetFutsal(),
		);
		return $this->load->view("content_top",$data,true);
	}

	public function fcontentTopFutsal($filter){
		switch ($filter) {
			case "Sepatu":
				$data = array(
					"kontents_top" => $this->mymodel->GetFutsalSepatu(),
				);
				break;

			case "Bola":
				$data = array(
					"kontents_top" => $this->mymodel->GetFutsalBola(),
				);
				break;

			case "Jersey":
				$data = array(
					"kontents_top" => $this->mymodel->GetFutsalJersey(),
				);
				break;

			case "JerseyL":
				$data = array(
					"kontents_top" => $this->mymodel->GetFutsalJerseyL(),
				);
				break;

			case "JerseyP":
				$data = array(
					"kontents_top" => $this->mymodel->GetFutsalJerseyP(),
				);
				break;

			case "JerseyA":
				$data = array(
					"kontents_top" => $this->mymodel->GetFutsalJerseyA(),
				);
				break;

			case "Atribut":
				$data = array(
					"kontents_top" => $this->mymodel->GetFutsalAtribut(),
				);
				break;

			case "Peralatan":
				$data = array(
					"kontents_top" => $this->mymodel->GetFutsalPeralatan(),
				);
				break;

			default:
				# code...
				break;
		}

		return $this->load->view("content_top",$data,true);		
	}

	// Ini controller index filter renang

	public function renang(){
		$cek = $this->mymodel->GetRenang();
		if(count($cek) > 0){
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => $this->contentTopRenang(),
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('renang',$comp);
		}else{
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => "<center><div class='alert alert-danger'>No such result</div></center>",
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('renang',$comp);	
		}
	}

	public function renangf($filter){
		switch ($filter) {
			case "Jersey":
				$cek = $this->mymodel->GetRenangJersey();
				break;

			case "JerseyL":
				$cek = $this->mymodel->GetRenangJerseyL();
				break;

			case "JerseyP":
				$cek = $this->mymodel->GetRenangJerseyP();
				break;

			case "JerseyA":
				$cek = $this->mymodel->GetRenangJerseyA();
				break;

			case "JerseyM":
				$cek = $this->mymodel->GetRenangJerseyM();
				break;

			case "Atribut":
				$cek = $this->mymodel->GetRenangAtribut();
				break;

			case "Peralatan":
				$cek = $this->mymodel->GetRenangPeralatan();
				break;

			default:
				# code...
				break;
		}

		if(count($cek) > 0){
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => $this->fcontentTopRenang($filter),
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('renang',$comp);
		}else{
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => "<center><div class='alert alert-danger'>No such result</div></center>",
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('renang',$comp);	
		}
	}

	public function contentTopRenang(){
		$data = array(
			"kontents_top" => $this->mymodel->GetRenang(),
		);
		return $this->load->view("content_top",$data,true);
	}

	public function fcontentTopRenang($filter){
		switch ($filter) {
			case "Jersey":
				$data = array(
					"kontents_top" => $this->mymodel->GetRenangJersey(),
				);
				break;

			case "JerseyL":
				$data = array(
					"kontents_top" => $this->mymodel->GetRenangJerseyL(),
				);
				break;

			case "JerseyP":
				$data = array(
					"kontents_top" => $this->mymodel->GetRenangJerseyP(),
				);
				break;

			case "JerseyA":
				$data = array(
					"kontents_top" => $this->mymodel->GetRenangJerseyA(),
				);
				break;

			case "JerseyM":
				$data = array(
					"kontents_top" => $this->mymodel->GetRenangJerseyM(),
				);
				break;

			case "Atribut":
				$data = array(
					"kontents_top" => $this->mymodel->GetRenangAtribut(),
				);
				break;

			case "Peralatan":
				$data = array(
					"kontents_top" => $this->mymodel->GetRenangPeralatan(),
				);
				break;

			default:
				# code...
				break;
		}

		return $this->load->view("content_top",$data,true);		
	}

	// Ini controller index filter badminton

	public function badminton(){
		$cek = $this->mymodel->GetBadminton();
		if(count($cek) > 0){
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => $this->contentTopBadminton(),
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('badminton',$comp);
		}else{
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => "<center><div class='alert alert-danger'>No such result</div></center>",
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('badminton',$comp);
		}
	}

	public function badmintonf($filter){
		switch ($filter) {
			case "Sepatu":
				$cek = $this->mymodel->GetBadmintonSepatu();
				break;

			case "Raket":
				$cek = $this->mymodel->GetBadmintonRaket();
				break;

			case "Shuttlecock":
				$cek = $this->mymodel->GetBadmintonShuttlecock();
				break;

			case "Jersey":
				$cek = $this->mymodel->GetBadmintonJersey();
				break;

			case "JerseyL":
				$cek = $this->mymodel->GetBadmintonJerseyL();
				break;

			case "JerseyP":
				$cek = $this->mymodel->GetBadmintonJerseyP();
				break;

			case "JerseyA":
				$cek = $this->mymodel->GetBadmintonJerseyA();
				break;

			case "Atribut":
				$cek = $this->mymodel->GetBadmintonAtribut();
				break;

			case "Peralatan":
				$cek = $this->mymodel->GetBadmintonPeralatan();
				break;

			default:
				# code...
				break;
		}

		if(count($cek) > 0){
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => $this->fcontentTopBadminton($filter),
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('badminton',$comp);
		}else{
			$comp = array(
				"header" => $this->load->view("header",array(
					"navbar_top" => $this->load->view("navbar_top",array(),true)
				),true),
				"content_top" => "<center><div class='alert alert-danger'>No such result</div></center>",
				"content_mid" => $this->contentMidIndex(),
				"content_next" => $this->contentNextIndex(),
				"footer" => $this->load->view("footer",array(),true),
				"product_modal" => $this->productModalIndex(),
			);
			$this->load->view('badminton',$comp);	
		}
	}

	public function contentTopBadminton(){
		$data = array(
			"kontents_top" => $this->mymodel->GetBadminton(),
		);
		return $this->load->view("content_top",$data,true);
	}

	public function fcontentTopBadminton($filter){
		switch ($filter) {
			case "Sepatu":
				$data = array(
					"kontents_top" => $this->mymodel->GetBadmintonSepatu(),
				);
				break;

			case "Raket":
				$data = array(
					"kontents_top" => $this->mymodel->GetBadmintonRaket(),
				);
				break;

			case "Shuttlecock":
				$data = array(
					"kontents_top" => $this->mymodel->GetBadmintonShuttlecock(),
				);
				break;

			case "Jersey":
				$data = array(
					"kontents_top" => $this->mymodel->GetBadmintonJersey(),
				);
				break;

			case "JerseyL":
				$data = array(
					"kontents_top" => $this->mymodel->GetBadmintonJerseyL(),
				);
				break;

			case "JerseyP":
				$data = array(
					"kontents_top" => $this->mymodel->GetBadmintonJerseyP(),
				);
				break;

			case "JerseyA":
				$data = array(
					"kontents_top" => $this->mymodel->GetBadmintonJerseyA(),
				);
				break;

			case "Atribut":
				$data = array(
					"kontents_top" => $this->mymodel->GetBadmintonAtribut(),
				);
				break;

			case "Peralatan":
				$data = array(
					"kontents_top" => $this->mymodel->GetBadmintonPeralatan(),
				);
				break;

			default:
				# code...
				break;
		}

		return $this->load->view("content_top",$data,true);		
	}
}
