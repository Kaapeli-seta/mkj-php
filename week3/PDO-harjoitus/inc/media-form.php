
<section id="insert-media-item">

    <!--suppress HtmlUnknownTarget -->
    <form action="operations/insertData.php" method="post" enctype="multipart/form-data">
        <div class="form-control">
            <label>
                Select image to upload:
                <input type="file" name="file" id="file" />
            </label>
            <label>
                Title
                <input type="text" name="title" id="title" />
            </label>
            <label>
                Description
                <textarea name="description" id="description" rows="5"></textarea>
            </label>
        </div>
        <button type="submit" value="Upload Image" name="submit" >Upload</button>
    </form>

</section>