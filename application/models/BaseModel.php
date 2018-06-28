<?php
class BaseModel extends CI_model{

public function common_insert($data,$table){
    $this->db->where('email',$data['email']);
    $res = $this->db->get($table);
    $count = $res->num_rows();
    if($count > 0)
    {
      return 3;
    }
    else
    {
    $res = $this->db->insert($table,$data);
    if($res)
    return 1;
    else
    return 2;
}
}
public function insert_hobby($data,$table){
  $res = $this->db->insert($table,$data);
  if($res)
  return 1;
  else
  return 2;
}
public function common_select($table,$count,$cond){
  if(!empty($cond) && !empty($count)){
    $this->db->where($cond);
  }
  if(empty($count) && !empty($cond)){
    $this->db->where($cond);
  }
  $rs = $this->db->get($table);
  if(!empty($count)){
    $resp = $rs->num_rows();
    return $resp;
  }else{
    return $rs;
  }
}
public function common_update($id,$data,$table){
    $this->db->where('user_id',$id);
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

public function common_join($table1,$table2){
    $this->db->from($table2);
    $this->db->join('user','hobby.user_id=user.user_id','inner');
    $records = $this->db->get();
    return $records;
}
public function search_records($before_after,$table,$search){
  $this->db->group_start();
   $this->db->like('name', $search);
   $this->db->or_like('email', $search);
   $this->db->or_like('dob', $search);
   $this->db->group_end();
  $data= $this->db->get($table);
  return $data;

}
public function pagination($per_page,$si){
  $this->db->order_by('user_id',"DESC");
  $this->db->from('user');
  $this->db->limit($per_page,$si);
  $res = $this->db->get();
  return $res;
}

}
?>
