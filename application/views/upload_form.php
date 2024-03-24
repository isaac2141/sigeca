<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subir Archivo</title>
</head>
<body>
    <h2>Subir Archivo</h2>
    <?php echo form_open_multipart('uploadcontroller/do_upload');?>
    <input type="file" name="userfile" size="20" />
    <br /><br />
    <input type="submit" value="Subir" />
    </form>
</body>
</html>

