<?php
 
    defined('BASEPATH') OR exit('No direct script access allowed');

	class STASIANA_Model extends CI_Model{	

		function cek_login($table,$where){		
			return $this->db->get_where($table,$where);
		}	

        function tampil(){
            return $this->db->get('laporan');

        }

        function get_data_kejadian(){
        $query = $this->db->query("SELECT provinsi,SUM(kejadian) AS kejadian FROM bencana GROUP BY provinsi");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $rekap){
                $hasil[] = $rekap;
            }
            return $hasil;
        }
    }


       public function upload(){
            $config['upload_path'] = '/asset/img';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size']  = '2048';
            $config['remove_space'] = TRUE;
          
            $this->load->library('upload', $config); // Load konfigurasi uploadnya
            if($this->upload->do_upload('image')){ // Lakukan upload dan Cek jika proses upload berhasil
              // Jika berhasil : 
              $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
              return $return;
            }else{
              // Jika gagal :
              $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
              return $return;
            }
        }

   public function save($upload){

            $data = array(
                'id_laporan' => $this->input->post('id_laporan'),
                'jenis_bencana' => $this->input->post('jenis_bencana'),
                'tanggal' => $this->input->post('tanggal'),
                'provinces_name' => $this->input->post('provinces_name'),
                'regencies_name' => $this->input->post('regencies_name'),
                'kecamatan' => $this->input->post('kecamatan'),
                'alamat_lengkap' => $this->input->post('alamat_lengkap'),
                'deskripsi_bencana' => $this->input->post('deskripsi_bencana'),
                'image' => $upload['file']['file_name']
            );
            
            $this->db->insert('laporan', $data);
          }
 
    public function record_count() {
        return $this->db->count_all("laporan");
    }
             
    public function fetch_departments($limit, $start) {
             
        $this->db->limit($limit, $start);
             
        $query = $this->db->get("laporan");      
             
        if ($query->num_rows() > 0) {
             
            foreach ($query->result() as $row) {
             
                $data[] = $row;
             
            }
             
            return $data;
             
       }
             
        return false;
        }

    public function ceklogin($email,$pass){
            $this->db->where('email',$email);
            $this->db->where('password',md5($pass));
            return $this->db->get('tb_user')->row();
    }
    public function cekloginn($email,$pass){
            $this->db->where('email',$email);
            $this->db->where('password',$pass);
            return $this->db->get('tb_user')->row();
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    
    function edit_data($where,$table){    
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);  
    }

  

        function laporkan($data,$table){
            $this->db->insert($table,$data);
        }

		function fetch_prov(){
          $this->db->order_by("name", "ASC");
          $query = $this->db->get("provinces");
          return $query->result();
        }

         function fetch_kota($province_id){
              $this->db->where('province_id', $province_id);
              $this->db->order_by('name', 'ASC');
              $query = $this->db->get('regencies');
              $output = '<option value="">Pilih Kota/Kabupaten</option>';
              foreach($query->result() as $row){
                $output .= '<option value="'.$row->regency_id.'">'.$row->name.'</option>';
          }
            return $output;
         }

    }
