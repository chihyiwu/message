<?php if(!defined('BASEPATH')) exit ('NO direct script access allowed');
/*


*/
class Message extends CI_Controller {
    function __construct() {
        parent::__construct();
        //構造函數，父類別繼承
   header("Content-type:text/html;charset=utf-8");
        //設置編碼
        $this->load->helper(array('form','url'));
        $this->load->model('message_model');
        $this->load->database();
        $this->load->library('table');
        //autoload加載內容
                           }
    function index(){
        $this->load->view('message_view');
        //載入message_view表
                   }
    function  post(){
    $data =array (
        'id'=>'',
        'name'=>  $this->input->post('name'),
        'mail'=>  $this->input->post('mail'),
        'title'=>  $this->input->post('title'),
        'content'=>  $this->input->post('content'),
        'date'=>date('Y-m-d'),
                );
    $this->message_model->insert('message',$data);
    redirect(site_url());
    //發佈留言
                   }
    
    function edit(){
        $this->load->view('edit_view');
    //載入修改留言的表edit_view
                   }
    function delete(){
        $this->message_model->delete('message',$this->uri->segment(3));
        redirect(site_url());
        //刪除特定的留言
                    }
     function update(){

         $data = array (
                       'name'=>$this->input->post('name'),
                       'mail'=>$this->input->post('mail'),
                       'title'=>  $this->input->post('title'),
                       'content'=>  $this->input->post('content')
                       );
                       $this->message_model->update('message',$data,$this->uri->segment(3));
                       redirect(site_url());
                        //更新特定留言內容
                      }
        
}
?>