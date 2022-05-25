<?php
session_start();
$_SESSION['index']=="";
session_unset();
session_destroy();
?>
<script language="javascript">
document.location="../../index.html";
</script>
