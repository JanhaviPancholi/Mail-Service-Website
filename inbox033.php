<html>
<! –– CSS for Search bar and the logout button.––> 
<style>
input[type=submit] {
    padding:10px 20px; 
    background:#64d1bb; 
    border:0 none;
    cursor:pointer;
    webkit-border-radius: 5px;
    border-radius: 5px; 
}
input[type=text] {
  padding: 10px;
  width: 70%;
  border: 1px;
  margin-top: 10 px;
  margin-right: 16 px;
  font-size: 17px;
}
</style>

<! –– Form for the search bar ––> 
<form action=# method="POST" onsubmit="result" align="center">
<input id="text" type="text" placeholder="Type here" name="SearchBar">
<input id="submit" type="submit" value="Search" name="submit">
</form>

<! –– Form for Logging out and redirecting to Login page ––> 
<form action="login033.php" method="post" style="color:black" align="right">
<input type="submit" value="Logout">
</form>

<?php

//dates, mail ids of sender and messages are stored in arrays
$dates= array(2,25,4,6,15);
$mails= array( 'hi23@gmail.com','and@gmail.com','hello@gmail.com','12@gmail.com','hey@gmail.com');
$msg= array('Hi Scott <br>Thanks for the e-mail <br> It is always nice to hear from you',
'I have no information about any such tests <br> Could you please let me know if you know anything about it <br> Thank you kindly',
'How are you ? <br> Long time no see <br> Hope all is well in your world',
'Thanks for your reply <br> You are always so quick !',
'Hope you are well and that the second semester is going smoothly for you <br> Looking forward to Saturday');


//searching the sender by writing full email id in searchbar
if(isset($_POST['submit'])){
	$search= $_POST['SearchBar'];
	if(array_search($search,$mails)){
		$index= array_search($search,$mails);
		echo '<span style="color:red;">Search Result:</span><p  style="padding: 1px; border: 0.5px solid red;">Date: '.$dates[$index]." September 2021<br>"."From: ".$mails[$index]."<br><br>".$msg[$index]."<br></p>";
}}

//this function is searching through the content and giving the first output
if(isset($_POST['SearchBar'])){
	$keyword= $_POST['SearchBar'];
	
for($i=0;  $i<5; $i++) {
	$searchss= explode(' ',$msg[$i]);
	$a = in_array($keyword,$searchss);
	if($a==1) {
		echo '<span style="color:red;">Search Result:</span><p  style="padding: 1px; border: 0.5px solid red;">Date: '.$dates[$i]." September 2021<br>"."From: ".$mails[$i]."<br><br>".$msg[$i]."<br></p>";
	$i=5;}
}}

//sorting is done by dates from latest to oldest
array_multisort($dates, SORT_DESC,$mails,$msg);

//using for loop with conditions, displayed all the mails with echo function.
//as dates were of the same months I have added the september 2021 with echo function
for($row=0; $row<5; $row++){
	echo '<p style="padding: 10px; border: 2px solid green;">Date: '.$dates[$row]." September 2021<br>"."From: ".$mails[$row]."<br><br>".$msg[$row]."<br></p>";
}
?>

