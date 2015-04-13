<?php if(!defined('BASEPATH')) exit ('NO direct script access allowed');

class Message_model extends CI_model{
function __construct() {
        parent::__construct();
 }
function  show($table = 'message'){
                ////查詢整個資料表
   $query = $this->db->get($table);
   return $query;

                                  }
function insert($table = 'message',$data){
    $this->db->insert($table,$data);
//在資料庫加入資料
                                        }
function show_where($table = 'message',$id){
    $this->db->where('id',$id);
//當ID吻合$ID
$query = $this->db->get($table);
return $query;
                                          }
function update($table = 'message',$data,$id){
    $this->db->where('id',$id);
    $this->db->update($table,$data);
//當ID吻合$ID，更新內容
                                            }
function delete($table= 'message',$id){
    $this->db->where('id',$id);
    $this->db->delete($table);
//當ID吻合$ID，刪除內容

                                       }

}

?>