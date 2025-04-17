<?php
global $SITE_URL;
require_once __DIR__ . "/../config/config.php";
?>

<section id="insert-auth">

    <!--suppress HtmlUnknownTarget -->
    <form action="<?php echo $SITE_URL; ?>/operations/login.php" method="POST">
        <div class="form-control">
            <label>
                Username:
                <input type="text" name="username" id="username" />
            </label>
            <label>
                Password
                <input type="text" name="password" id="password" />
            </label>
        </div>

        <button type="submit" value="Login" name="submit" >login</button>
    </form>

</section>