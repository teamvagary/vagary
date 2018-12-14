<?php
 
    defined('BASEPATH') OR exit('No direct script access allowed');

	class STASIANA_Model extends CI_Model{	

		function cek_login($table,$where){		
			return $this->db->get_where($table,$where);
		}	

        function laporan(){
            return $this->db->get('laporan');

        }

        function upload(){
            $config['upload_path'] = '.asset/img/';
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

        function laporkan($data,$table){
            $this->db->insert($table,$data);
          }

		public function get_provinsi(){
            $this->db->order_by('nama_provinsi', 'asc');
            return $this->db->get('provinsi')->result();
        }
	 
        public function get_kota(){
            // kita joinkan tabel kota dengan provinsi
            $this->db->order_by('nama_kota', 'asc');
            $this->db->join('provinsi', 'kota.id_provinsi_fk = provinsi.id_provinsi');
            return $this->db->get('kota')->result();
        }
 
        public function get_kecamatan(){
            // kita joinkan tabel kecamatan dengan kota
            $this->db->order_by('nama_kecamatan', 'asc');
            $this->db->join('kota', 'kecamatan.id_kota_fk = kota.id_kota');
            return $this->db->get('kecamatan')->result();
        }

        // untuk edit ambil dari id level paling bawah
        public function get_selected_by_id_kecamatan($id_kecamatan){
            $this->db->where('id_kecamatan', $id_kecamatan);
            $this->db->join('kota', 'kecamatan.id_kota_fk = kota.id_kota');
            $this->db->join('provinsi', 'kota.id_provinsi_fk = provinsi.id_provinsi');
            return $this->db->get('kecamatan')->row();
        }
 
    }