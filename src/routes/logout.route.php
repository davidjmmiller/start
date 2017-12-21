<?php

// Clearing the session
$_SESSION['session_active'] = 0;
header("Refresh:3; url=/login");
?>
<h1>Session finished</h1>
<p>The session has been finished successfully.</p>
