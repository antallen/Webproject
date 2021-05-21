<?php
class EmailFormantException extends Exception{
    function printMessage(){
        echo "例外訊息： ". $this->getMessage(). "\n";
        echo "例外訊息編碼： ". $this->getCode(). "\n";
    }
}
function checkEmail($email){
    if (!strpos($email,"@")) throw new EmailFormantException("E-mail 格式需要包含「@」字元！",100);
}
try{
    checkEmail('abc$hello.com');
} catch(EmailFormantException $e){
    $e->printMessage();
}
?>