<?php
include_once 'email_config.php';
session_start();





		$first_name=$_SESSION['user_name'];
		$email=$_SESSION['email'];
	
class  notification
{

	


	public function recieve_confirmation_email_for_register_subjects(){
		$message=" Thank You for  Registration in our website,all terms of security will be hold during your browsing in the medistore site ";
                        $email_body="Welcome :".$first_name."<br>";
                        $email_body.="<table>";
                      
              
                        $email_body .='<tr>
                    <td>'.$message.'</td>

                    </tr>';
                      
                        $email_body.="</table>";
                        $email_body.="<br><center><font color='blue'><font face='Times New Roman' size='2'><i>© All Copyrights Reserved For <a href='l' title='http://localhost/myproject/medistore/login.php'>ONE PLUS+ TEAM</i></font></a></font></center>";
                        $subject="Course Registration";
                        SendEmail($email, $subject, $email_body);
}







}










?>