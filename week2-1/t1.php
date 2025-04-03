<?php
ini_set('display_errors', 0);
require_once __DIR__ . '/inc/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    $color = $_POST['color'];
    $size = $_POST['size'];
    $style = $_POST['style'];

    $style_string = "color:$color;";
    $style_string .= "font-size:$size;";
    // $style_string .= "font-weight:$style[0];";
    if(in_array('bold', $style)){
        $style_string .= "font-weight: bold;";
    }

    if(in_array('italic', $style)){
        $style_string .= "font-style: italic;";
    }

    ?>
<p style="<?php echo $style_string; ?>"> Lorem ipsum</p>
<?php
endif;
?>

<h1>Tehtävä 1</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            <label for="red">Red</label>
            <input type="radio" name="color" id="red" value="red">
            <label for="green">Green</label>
            <input type="radio" name="color" id="green" value="green">
            <label for="blue">Blue</label>
            <input type="radio" name="color" id="blue" value="blue">
        </div>

        <div>
            <label for="size">Choose a size:</label>
            <select name="size" id="size">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </div>

        <div>
            <label for="bold">Bold</label>
            <input type="checkbox" name="style[]" id="bold" value="bold">
            <label for="italic">Italic</label>
            <input type="checkbox" name="style[]" id="italic" value="italic">
        </div>

        <button type="submit">Submit</button>
    </form>

<?php
require_once __DIR__ . '/inc/footer.php';
?>