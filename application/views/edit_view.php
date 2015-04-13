<html>
<head>
    <title>使用ＣＩ模組建造留言版</title>
</head>
<body>
        <h1>使用ＣＩ模組建造留言版</h1>
<?php

$query = $this->message_model->show_where('message',$this->uri->segment(3));
$row = $query->row();
//
echo form_open('message/update/'.$this->uri->segment(3));
echo '姓名:' .form_input('name',$row->name);
echo '<br>信箱:'.form_input('mail',$row->mail);
echo '<br>標題:'.form_input('title',$row->title);
echo '<br>內容:'.form_textarea('content',$row->content);
echo form_submit('submit','送出');
//將查詢結果顯示在修改位置上面
echo form_close();

?>

</body>
</html>