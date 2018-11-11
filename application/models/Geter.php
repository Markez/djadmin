<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    /**
     * CodeIgniter Application Model Classes
     *
     * This classes object are super classes that every library in
     * CodeIgniter will be assigned to.
     *
     * @package     CodeIgniter
     * @subpackage  Query function models
     * @category    Libraries
     * @author      Mark Ochieng'| Vinarq Technologies
     * @license     MIT
     */
class Geter extends CI_Model{
    function __construct(){
        parent::__construct();
    }


    // 
    public function getAllStaff(){
        $items = $this->db->get("staff")->result();
        return $items;
    }
    // 
    public function getAllEmployers(){
        $items = $this->db->get("employers")->result();
        return $items;
    }
    // 
    public function getAllBanners(){
        $items = $this->db->get("banners")->result();
        return $items;
    }
    // 
    public function getAllStories(){
        $items = $this->db->get("stories")->result();
        return $items;
    }
    // 
    public function getActiveEmployees(){
        $status = 'active';
        $items = $this->db->query('SELECT * FROM users WHERE status ="'.$status.'" ')->result();
        return $items;
    }
    // 
    public function getSuspendedEmployees(){
        $status = 'suspended';
        $items = $this->db->query('SELECT * FROM users WHERE status ="'.$status.'" ')->result();
        return $items;
    }
    // 
    public function getActiveEmployers(){
        $status = 'active';
        $items = $this->db->query('SELECT * FROM employers WHERE status ="'.$status.'" ')->result();
        return $items;
    } 
    // 
    public function getSuspendedEmployers(){
        $status = 'suspended';
        $items = $this->db->query('SELECT * FROM employers WHERE status ="'.$status.'" ')->result();
        return $items;
    } 
    // 
    public function getOpenPosts(){
        $status = 'open';
        $items = $this->db->query('SELECT * FROM jobs WHERE status ="'.$status.'" ')->result();
        return $items;
    }
    // 
    public function getClosedPosts(){
        $status = 'closed';
        $items = $this->db->query('SELECT * FROM jobs WHERE status ="'.$status.'" ')->result();
        return $items;
    }
    // 
    public function getSuspendedPosts(){
        $status = 'suspended';
        $items = $this->db->query('SELECT * FROM jobs WHERE status ="'.$status.'" ')->result();
        return $items;
    }

    // 
    public function getTotalStaff(){
        $query = $this->db->get('staff');
        $rowcount = $query->num_rows();
        if ($rowcount < 1) {
            # code...
            $rowcount = 0;
            return $rowcount;
        }
        else{
            return $rowcount;
        }
    }
    // 
    public function getTotalEmployers(){
        $query = $this->db->get('employers');
        $rowcount = $query->num_rows();
        if ($rowcount < 1) {
            # code...
            $rowcount = 0;
            return $rowcount;
        }
        else{
            return $rowcount;
        }
    }
    // 
    public function getTotalEmployees(){
        $query = $this->db->get('users');
        $rowcount = $query->num_rows();
        if ($rowcount < 1) {
            # code...
            $rowcount = 0;
            return $rowcount;
        }
        else{
            return $rowcount;
        }
    }
    // 
    public function getTotalPosts(){
        $query = $this->db->get('jobs');
        $rowcount = $query->num_rows();
        if ($rowcount < 1) {
            # code...
            $rowcount = 0;
            return $rowcount;
        }
        else{
            return $rowcount;
        }
    }

    // 
    public function getSingleEmployer(){
        $id = $this->input->post('id');
        $items = $this->db->query('SELECT * FROM employers WHERE employerId ="'.$id.'" ')->result();
        return $items;
    }
    // 
    public function getSingleBanner(){
        $id = $this->input->post('id');
        $items = $this->db->query('SELECT * FROM banners WHERE bannerId ="'.$id.'" ')->result();
        return $items;  
    }
    // 
    public function getSingleStory(){
        $id = $this->input->post('id');
        $items = $this->db->query('SELECT * FROM stories WHERE storyId ="'.$id.'" ')->result();
        return $items;  
    }

    // 
    public function getJobApplicants(){
        $id = $this->input->post('id');
        $items = $this->db->query('SELECT * FROM applications WHERE jobId ="'.$id.'" ');
        if ($items) {
            # code...
            $q = $this->db->query('SELECT * FROM jobs WHERE jobId="'.$id.'"');
            $sq =  $this->db->query('SELECT * FROM users WHERE userId="'.$items->row()->userId.'"');
            $data['jobdata'] = $q->row();
            $data['applicantsdata'] = $items->result();
            $data['userdata'] = $sq->row();
            return $data;
        }else{
            return False;   
        }
    }
}