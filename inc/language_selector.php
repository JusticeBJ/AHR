<?php

if (isset($_POST['languages_select']) == 'en') {
    echo 'English session';
    $fr_select = '';
    $en_select = 'selected';
}
elseif(isset($_POST['languages_select']) == 'fr') {
    echo 'Session Francaise ';
    $fr_select = 'selected';
    $en_select = '';
}
else{
    echo 'Nothing Submited';
}