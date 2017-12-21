<h1>DEFAULT PAGE</h1>
<ul>
    <li><?php l('Home','/');?></li>
    <li><?php
        if (!isset($_SESSION['session_active'])):
            l('Login','/login');
        else:
            l('Logout','/logout');
        endif;
        ?>
    </li>
</ul>

