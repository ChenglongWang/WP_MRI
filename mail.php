<?php
$txt = "hello";

// ���µ������ַ�ĳ����
$mail = 'anjingdelonglong@gmail.com';  

// �����ʼ�
mail($mail, "My subject", $txt);

echo 'message was sent!';
?>