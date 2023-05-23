<?php
session_start();
session_unset();
session_destroy();
session_abort();
?>
<script>
    alert('You have been loged out!');
    window.location="/project22/loginpage.html";
</script>
