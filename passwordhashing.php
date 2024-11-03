<?
//cost is how much the randomness should be there in the hased valuemore the cost more the time increases and more the security increases. in password default static salt is used whereas in password bcrypt dynamic salt is automatically generated
$time=microtime(true);
$option=[
    'cost'=>7,    
];
echo password_hash("rasmuslerdorf",PASSWORD_BCRYPT,$option);
echo"\nTook".(microtime(true)-$time) . "sec";