<?php
/**
2.  * �ʼ����ͺ���
3.  */
    function sendMail($to, $subject, $content) {
  
Vendor('PHPMailer.PHPMailerAutoload');
 
$mail = new PHPMailer(); //ʵ����
 $mail->IsSMTP(); // ����SMTP
 $mail->Host=C('MAIL_HOST'); //smtp�����������ƣ�������126����Ϊ����
 $mail->SMTPAuth = C('MAIL_SMTPAUTH'); //����smtp��֤
 $mail->Username = C('MAIL_USERNAME'); //���������
 $mail->Password = C('MAIL_PASSWORD') ; //��������
 $mail->From = C('MAIL_FROM'); //�����˵�ַ��Ҳ������������ַ��
 $mail->FromName = C('MAIL_FROMNAME'); //����������
 $mail->AddAddress($to,"name");
 $mail->WordWrap = 50; //����ÿ���ַ�����
 $mail->IsHTML(C('MAIL_ISHTML')); // �Ƿ�HTML��ʽ�ʼ�
 $mail->CharSet=C('MAIL_CHARSET'); //�����ʼ�����
 $mail->Subject =$subject; //�ʼ�����
 $mail->Body = $content; //�ʼ�����
 $mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //�ʼ����Ĳ�֧��HTML�ı�����ʾ
 if(!$mail->Send()) {
 echo "Message could not be sent. <p>";
 echo "Mailer Error: " . $mail->ErrorInfo;
 exit();
 } else {
 echo "Message has been sent";
 }
}
/**
 * ����Ƿ��½
 * @return boolean �Ƿ��ڵ�½״̬
 */
function CheckLogin() {

$login = session('userid');
  if (!empty($login)) {
    return true;
  } else {
    return false;
  }
}
?>