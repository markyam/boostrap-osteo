<?php 
//$action=$_REQUEST['action']; 
if (!isset($_REQUEST['action']))    /* display the contact form */ 
{ 
?>
<form name="contact" method="post" action="">
	<input type="hidden" name="action" value="submit"> 
	<div class="row collapse-at-2 half">
		<div class="6u">
			<input name="name" placeholder="Nom" type="text" />
		</div>
		<div class="6u">
			<input name="email" placeholder="Email" type="text" />
		</div>
	</div>
	<div class="row half">
		<div class="12u">
			<textarea name="message" placeholder="Message"></textarea>
		</div>
	</div>
	<div class="row collapse-at-2 half">
		<div class="6u">
			<input type="submit" value="Envoyer" />
		</div>
		<div class="6u">
			<input type="reset" value="Reset" />
		</div>
	</div>
</form>
<?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
    { 
    	echo '<h3 class="byline">Tous les champs sont requis</h3>'; 
    } 
    else
    {         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message via osteopathe-saintry.fr"; 
        mail("vincent.bredeloup@gmail.com", $subject, $message, $from); 
        echo '<h3 class="byline">Email envoyé!</h3>'; 
    } 
}   
?> 