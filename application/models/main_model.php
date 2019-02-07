<?php

class Main_model extends CI_Model
{
	function get_items()
	{
		$query = $this->db->get("item");
		return $query;
	}

	function get_orders($status)
	{
		$this->db->select('*');
		$this->db->from('order');
		$this->db->where('status',$status);
		$query = $this->db->get();
		return $query;
	}

	function get_customers()
	{
		$query = $this->db->get("user");
		return $query;
	}

	function get_item_details($id)
	{
		//$this->get->where("itemID",$id);
		//$query = $this->db->get("item");

		$this->db->select('*');
		$this->db->from('item');
		$this->db->where('itemID',$id);
		$query = $this->db->get();

		/*$this->db->select('*');
		$query = $this->db->get_where('item','itemID',$id);*/
		return $query;
	}

	function get_item_reviews($id)
	{
		$this->db->select('*');
		$this->db->from('item_review');
		$this->db->where('itemID',$id);
		$query = $this->db->get();
		return $query;
	}

	function get_item_byname($name)
	{
		/*$query = "";


		if($name = "")
		{
			$query = $this->db->get("item");
		}
		else
		{
			$this->db->select('*');
			$this->db->from('item');
			$this->db->where('itemID',$id);
			$query = $this->db->get();
		}

		return $query->result();*/

		$this->db->select("*");
		$whereCondition = array('name' => $name);
		$this->db->where($whereCondition);
		$this->db->from('item');
		$query = $this->db->get();
		return $query->result();
	}

	function insert_item($data)
	{
		$this->db->insert('item', $data);
	}

	function insert_item_review($data)
	{
		$this->db->insert('item_review', $data);
	}

	function delete_item($id)
	{
		$this->db->where('itemID', $id);
		$this->db->delete('item');
	}

	function get_update_item($id)
	{
		$this->db->select('*');
		$this->db->from('item');
		$this->db->where('itemID',$id);
		$query = $this->db->get();
		return $query->row();
	}

	function getPendingCount()
	{
		$this->db->select("COUNT(*) AS pendingcount");
		$this->db->from("order");
		$this->db->where("status", "Pending");
		return $this->db->get();

	}

	function getReadyCount()
	{
		$this->db->select("COUNT(*) AS readycount");
		$this->db->from("order");
		$this->db->where("status", "Ready");
		return $this->db->get();
	}

	function getUserCount()
	{
		$this->db->select("COUNT(*) AS usercount");
		$this->db->from("user");
		return $this->db->get();
	}

	function getItemCount()
	{
		$this->db->select("COUNT(*) AS itemcount");
		$this->db->from("item");
		return $this->db->get();
	}
}
?>
