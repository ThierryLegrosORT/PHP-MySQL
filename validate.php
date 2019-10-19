<?php
$auth = 'kangourou';
if (isset($_POST['pass']) and $_POST['pass'] == $auth) {
    echo 'Bravo !<br />Red button code is:<br />1234-ABCD-5678-EFGH';
} else {
    echo "The entered password is wrong. <br />We have called the NSA and they are probably behind your door right now.<br /> TOC TOC Neo.";
}