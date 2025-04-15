<section id="update-media-item">

<!--suppress HtmlUnknownTarget -->
    <form action="operations/updateData.php" method="post" enctype="multipart/form-data">
        <div class="form-control">
            <label>
                Title
                <input type="text" name="title" id="title" />
            </label>
            <label>
                Description
                <textarea name="description" id="description" rows="5"></textarea>
            </label>
        </div>
        <input type="hidden" name="media_id" value="<?php echo $_GET['media_id']?>">
        <button type="submit">Update</button>
    </form>

</section>