<?php
/**
 * Description of LoginAdmin
 *
 * @author Lenovo
 */
class Loginadmin extends CI_Controller{
   
    function select() {
            
            $response = array();
            $data['data'] = array();
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $result = $this->Loginadmin_m->login($username,$password)->result();    function select() {
            
            $response = array();
            $data['data'] = array();


            if (sizeof($result) > 0) {
                foreach ($result as $value) {
                    $response['username'] = $value->username;
                    array_push($data['data'], $response);
                }

                $data['status'] = 0;
                $data['response'] = 'Data Ditemukan';

                die(json_encode($data));
            } else {
                $response['status'] = 1;
                $response['response'] = 'Tidak data yang ditampilkan';

                die(json_encode($response));
            }
        }
}
}
