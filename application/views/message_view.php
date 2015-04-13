<html>
<head>
    <title>使用ＣＩ模組建造留言版</title>
</head>
<body>
        <h1>使用ＣＩ模組建造留言版</h1>
<?php

$query = $this->message_model->show();
//message_model模型
if($query->num_rows() > 0 ) {
$this->table->set_heading('姓名','信箱','標題','內容','留言時間','留言處理');
//輸出表頭內容
foreach($query->result() as $row){
//編輯輸出
$edit= anchor('message/edit/'.$row->id,'編輯');
$delete= anchor('message/delete/'.$row->id,'刪除');

//
$this->table->add_row(array($row->name,$row->mail,$row->title,$row->content,$row->date,$edit,$delete));
//每次編輯就輸出一行資料
}
echo $this->table->generate();
//輸出表格
                            }

echo form_open('message/post');
echo '姓名:' .form_input('name');
echo '<br>信箱:'.form_input('mail');
echo '<br>標題:'.form_input('title');
echo '<br>內容:'.form_textarea('content');
echo form_submit('submit','送出');

echo form_close();

?>

</body>
</html>



