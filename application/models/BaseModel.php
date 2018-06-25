<?php
class BaseModel extends CI_model{

public function common_insert($data,$table){
    $resp = $this->db->insert($table,$data);
    if($resp)
            return true;
        else
            return false;
}
public function common_select($table){
    $resp = $this->db->get($table);
    return $resp;
}
public function common_update($data,$table){
    $this->db->where($data);
    $resp = $this->db->update($table,$data);
    if($resp)
            return true;
        else
            return false;
}
public function common_delete($data,$table){
    $this->db->where($data);
    $resp = $this->db->delete($table);
    if($resp)
            return true;
        else
            return false;
}

}
?>