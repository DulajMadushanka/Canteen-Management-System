<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->model("main_model");
		$data['pendingCount'] = $this->main_model->getPendingCount();
		$data['readyCount'] = $this->main_model->getReadyCount();
		$data['userCount'] = $this->main_model->getUserCount();
		$data['itemCount'] = $this->main_model->getItemCount();
		$this->load->view('admin/home',$data);
	}

	public function items()
	{
		$this->load->model("main_model");
		$data["fetch_itemlist"] = $this->main_model->get_items();
		$this->load->view('admin/items',$data);
	}

	public function orders()
	{
		$this->load->model("main_model");
		$data["fetch_pendingorderlist"] = $this->main_model->get_orders("Pending");
		$data["fetch_readyorderlist"] = $this->main_model->get_orders("Ready");
		$data["fetch_completeorderlist"] = $this->main_model->get_orders("Completed");
		$this->load->view('admin/orders',$data);
	}

	public function customers()
	{
		$this->load->model("main_model");
		$data["fetch_customerlist"] = $this->main_model->get_customers();
		$this->load->view('admin/customers',$data);
	}

	public function order_details()
	{
		$orderno = $_POST['orderno'];
		$this->load->model("order_processing");
		$fetch_orderdetailslist = $this->order_processing->get_order_details($orderno);
		$fetch_order = $this->order_processing->get_order($orderno);

		foreach($fetch_order as $row2)
		{
			$date = $row2->requiredDate;
			$time = $row2->requiredTime;
		}

		$output = '';
		$output .= '
				<div class= "table-responsive">
					<table class="table table-bordered">
						<tr>
							<td>Item</td>
							<td>Quantity</td>
						</tr>';
						foreach($fetch_orderdetailslist as $row)
						{
							$output .= '
								<tr>
									<td>'.$row->name.'</td>
									<td>'.$row->quantity.'</td>
								</tr>
							';
						}

		$output .= '		
					</table>
				</div>
				
					<label>Required Date</label>
					<input type="date" name="update_date" id="update_date" class="form-control" value='.$date.'>					
					<br>
					<label>Required Time</label>
					<input type="time" name="update_time" id="update_time" class="form-control" value='.$time.'>					
					<br>
					<input type="hidden" name="updateOrderno" id="updateOrderno" value='.$orderno.'>	
		';
		echo $output;
	}

	public function update_order()
	{
		$orderno = $_POST['updateOrderno'];
		$reqDate = $_POST['update_date'];
		$reqTime = $_POST['update_time'];
		$this->load->model("order_processing");
		$this->order_processing->update_order_dates($orderno,$reqDate,$reqTime);
		$this->orders();
	}

	public function add_item()
	{
		//$img = $this->upload_image();
		$imgname =  $img['file_name'];
		$insert_data = array(
			'name'	=> $this->input->post('item_name'),
			'description'	=> $this->input->post('item_description'),
			'price'	=> $this->input->post('item_price'),
		);
		$this->load->model("main_model");
		$this->main_model->insert_item($insert_data);		
	}

	// function upload_image()
	// {
	// 	if(isset($_FILES["userfile"]["name"]))
	// 	{
	// 		$config['upload_path'] = './images/';
	// 		$config['allowed_types'] = 'jpg|jpeg|png';
	// 		$this->load->library('upload',$config);

	// 		if($this->upload->do_upload('userfile'))
	// 		{
	// 			$data = $this->upload->data();
	// 			return $data;
	// 		}
			// $extension = explode('.', $_FILES['userfile']['name']);
			// $new_name = rand() . '.' . $extension[1];
			// $destination = './images/' . $new_name;
			// move_uploaded_file($_FILES['item_image']['tmp_name'], $destination);
			// return $new_name;

	public function delete_item()
	{
		$itemID = $_POST['deletedata'];
		$this->load->model("main_model");
		$this->main_model->delete_item($itemID);
	}

	public function update_item()
	{
		echo "Hi";
		// $itemID = $_POST['itemID'];
		// echo $itemID;
		// $this->load->model("main_model");
		// $result = $this->main_model->get_update_item($itemID);
		// echo json_encode($result);	
	}

	public function update_order_status($status)
	{
		if(isset($_POST['completedata']))
		{
			$orderno = $_POST['completedata'];
		}
		elseif(isset($_POST['readydata']))
		{
			$orderno = $_POST['readydata'];
		}
		$this->load->model("order_processing");
		$this->order_processing->update_order_status($orderno,$status);
		$this->orders();
	}


}
