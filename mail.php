$to = 'ankushcoonjul@gmail.com';                 // replace this mail with yours
$firstname = $_POST["name"];
$lastname = $_POST["lname"];
$email= $_POST["email"];
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$txt= $_POST["text"];
 
$message ='<table style="width:100%">
    <tbody><tr>
        <td>'.$firstname.'  '.$laststname.'</td>
    </tr>
    <tr><td>Email: '.$email.'</td></tr>
    <tr><td>Message : '.$txt.'</td></tr>
</tbody>

</table>';
 
if (@mail($to, $email, $message, $headers))
{
    echo 'The message has been sent.';
}else{
    echo 'failed';
}