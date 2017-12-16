<?php
$t = array(
    'firstname' => array(
      'en' => 'First Name',
      'es' => 'Nombre'
    ),
    'lastname' => array(
        'en' => 'Last Name',
        'es' => 'Apellidos'
    ),
    'address' => array(
        'en' => 'Address',
        'es' => 'Dirección'
    ),
    'personalinfo' => array(
        'en' => 'Personal Information',
        'es' => 'Información Personal'
    ),
    'accountinfo' => array(
        'en' => 'Account Information',
        'es' => 'Información la cuenta'
    ),
    'login' => array(
        'en' => 'Login',
        'es' => 'Nombre de usuario'
    ),
    'password' => array(
        'en' => 'Password',
        'es' => 'Contraseña'
    ),
);
?>
<div class="container registration-form">
    <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
        <fieldset>
            <legend><?php t('personalinfo');?></legend>
            <div class="frm-item">
                <label for="frm-firstname"><?php t('firstname');?><label><input id="frm-firstname" type="text" name="name">
            </div>
            <div class="frm-item">
                <label for="frm-lastname"><?php t('lastname');?><label><input id="frm-lastname" type="text" name="lastname">
            </div>
            <div class="frm-item">
                <label for="frm-addres"><?php t('address');?><label><textarea id="frm-address" name="address"></textarea>
            </div>
        </fieldset>
        <fieldset>
            <legend><?php t('accountinfo');?></legend>
            <div class="frm-item">
                <label for="frm-login"><?php t('login');?><label><input id="frm-login" type="text" name="login">
            </div>
            <div class="frm-item">
                <label for="frm-password"><?php t('password');?><label><input id="frm-password" type="password" name="password">
            </div>
        </fieldset>
        <input class="btn btn-default" type="submit" value="Save" />
        <a class="btn btn-warning" href="/login">Cancel</a>
    </form>
</div>
