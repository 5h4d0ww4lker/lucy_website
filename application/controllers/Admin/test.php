   <?
  //SERVICES AREA

      public function get_all_community_services()
    {

        $this->db->select('*');
        $this->db->from('community_services');
        $query = $this->db->get();
        return $query->result_object();

    }



    public function add_community_service($img_path)
    {
          
      
            
            $data = array(
         
            'title' => $this->input->post('title'),
            'company_id' => $this->input->post('company_id'),
            'image_url' => $img_path,
            'description' => $this->input->post('description'),
            'visiblity' => $this->input->post('visiblity'),
            'created_by' => '1',
            'created_at' =>  date("Y-m-d h:i:sa")
        );

        //die(print_r($data));
     $this->db->insert('community_services', $data);
    }

  

    public function edit_community_service($community_service_id)
    {

        $this->db->select('*');
        $this->db->from('community_services');
        $this->db->where('community_service_id', $community_service_id);
        $query = $this->db->get();
        return $query->result_array();

    }


public function update_community_service($community_service_id, $img_path , $up_1)
    {

      if(!empty($up_1)) {  
     $data = array(
         
            'title' => $this->input->post('title'),
            'company_id' => $this->input->post('company_id'),
            'image_url' => $img_path,
            //'logo_url' => $this->input->post('client_contact_full_name', true),
            'description' => $this->input->post('description'),
            'visiblity' => $this->input->post('visiblity'),
            'updated_by' => '1',
            'updated_at' => date("Y-m-d h:i:sa")
        );
    }
    else {
        $data = array(
         
            'title' => $this->input->post('title'),
            'company_id' => $this->input->post('company_id'),
            //'image_url' => $img_path,
            //'logo_url' => $this->input->post('client_contact_full_name', true),
            'description' => $this->input->post('description'),
            'visiblity' => $this->input->post('visiblity'),
            'updated_by' => '1',
            'updated_at' => date("Y-m-d h:i:sa")
        );  
    }
        
       $this->db->where('community_service_id', $community_service_id);
        $this->db->update('community_services', $data);
    }

    public function delete_community_service($id){

        $this->db->delete('community_service', array('community_service_id' => $id));
    }

//END SERVICES AREA

##############

  #END COMMUNITY SERVICES AREA
