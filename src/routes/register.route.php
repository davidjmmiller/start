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
    'required' => array(
        'en' => 'Required',
        'es' => 'Requerido'
    ),

);
$form_sent = $_SERVER['REQUEST_METHOD'] == 'POST';

if ($form_sent){

    // Getting all variables
    $f_firstname = $_POST['firstname'];
    $f_lastname = $_POST['lastname'];
    $f_address = $_POST['address'];
    $f_login = $_POST['login'];
    $f_password = $_POST['password'];

    // Validation
    if (trim($f_firstname == '')){
        $invalid = true;
        $form_errors['firstname'] = t('required');
    }

}


?>
<div class="container registration-form">
    <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
        <fieldset>
            <legend><?php t('personalinfo');?></legend>
            <div class="frm-item">
                <label for="frm-firstname"><?php t('firstname');?><label><input <?php if($form_sent){ echo 'value="'.$f_firstname.'"'; } ?> id="frm-firstname" type="text" name="firstname">
            </div>
            <div class="frm-item">
                <label for="frm-lastname"><?php t('lastname');?><label><input <?php if($form_sent){ echo 'value="'.$f_lastname.'"'; } ?> id="frm-lastname" type="text" name="lastname">
            </div>
            <div class="frm-item">
                <label for="frm-address"><?php t('address');?><label><textarea  id="frm-address" name="address"><?php if($form_sent){ echo $f_address; } ?></textarea>
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
