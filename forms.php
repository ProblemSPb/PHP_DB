<?php

// methods get and post
// get отправляет все в адресную строку, все видимо, включая пароль
// post отправляет все на сервер

?>

<form action="" method="post">  <!--  get отправляет все в адресную строку, все видимо, включая пароль -->
    <input type="text" name="userName" placeholder="Your Username" value="<?php if(isset($_POST['userName']) && !empty($_POST['userName'])) {echo $_POST['userName'];} ?>">
    <br><br>
    <input type="password" name="userPass" placeholder="Your Password">
    <br><br>
    Gender<br>
    <input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && !empty($_POST['gender']) && $_POST['gender'] == 'Female') {echo 'gender';} ?>>Female
    <br>
    <input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && !empty($_POST['gender']) && $_POST['gender'] == 'Male') { echo 'gender';} ?> >Male
    <br>
    <input type="radio" name="gender" value="Cat" <?php if(isset($_POST['gender']) && !empty($_POST['gender']) && $_POST['gender'] == 'Cat') { echo 'gender';} ?> >I am a cat. Meow!
    <br><br>
    <textarea name="userDescription" placeholder="Type here..."><?php if(isset($_POST['userDescription']) && !empty($_POST['userDescription'])) {echo $_POST['userDescription'];} ?></textarea>
    <input type="submit" name="submitUser" value="Send">

    <br><br>
    <input type="checkbox" name="remember" value="1" <?php if(isset($_POST['remember']) && !empty($_POST['remember'])) { echo 'checked';} ?> >Remember me

</form>

<ul style="list-style: none;">
    <li>
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?page=1'?>"> Page 1 </a> &nbsp;
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?page=2'?>"> Page 2 </a> &nbsp;
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?page=3'?>"> Page 3 </a> &nbsp;
    </li>
</ul>


<?php
// выводим get array
// он содержит все параметры после ? в адресной строке

echo '<pre>';
if(!empty($_POST)){
    print_r($_POST);
}


if(!empty($_POST)) {
    echo 'тут идет запись данных';
    echo '<br>';
    echo $_POST['userName'];
    echo '<br>';
    echo $_POST['userPass'];
    echo '<br>';
    echo $_POST['gender'];
    echo '<br>';
    echo $_POST['userDescription'];
    echo '<br>';
    echo $_POST['remember'];
}

?>

