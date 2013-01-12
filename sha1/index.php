<?php
if (isset($_POST['toSha']) && strlen($_POST['toSha']) > 1) :
    echo 'Votre SHA1 converted String : ';
    echo sha1('password');
else :
?>
<h3>Convert to SHA1 :</h3>
<form action="" method="post">
    <input type="text" value="" placeholder="Your String" name="toSha" />
    <input type="submit" value="To SHA 1" />
</form>
<?php
endif;

