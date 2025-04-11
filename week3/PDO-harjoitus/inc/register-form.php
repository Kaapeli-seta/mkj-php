<?php
global $SITE_URL;
require_once __DIR__ . "/../config/config.php";
?>


<section id="insert-auth">

    <!--suppress HtmlUnknownTarget -->
    <form action="<?php echo $SITE_URL?>/operations/insertUser.php" method="post" enctype="multipart/form-data">
        <div class="form-control">
            <label>
                Username:
                <input type="text" name="username" id="username" />
            </label>
            <label>
                Email:
                <input type="text" name="email" id="email" />
            </label>
            <label>
            Password
                <input type="text" name="password" id="password" />
            </label>
        </div>

        <button type="submit" value="Register" name="submit" >register</button>
    </form>

</section>