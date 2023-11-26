<?php
    require_once 'templates.php';
    sessionMy();
?>

<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2-Part Form</title>
        <link rel="stylesheet" href="./style/style.css">
        <?php
        function hasUppercase($str) {
            return preg_match('/[A-Z]/', $str) === 1;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $fileSize = (3*1024*1024); //3Mb

            //#### Upload with restrictions ####
            //If there are no errors (error == 0), continue
            if ($_FILES["file"]["error"] == 0)
            {
                $errors = FALSE;
                //The user may only upload a file with a size under the defined size:
                if ($_FILES["file"]["size"] > $fileSize){
                    echo "<p>Invalid file size. Must be less than ". $fileSize/1024/1024 ."Mb.</p>";
                    $errors = TRUE;
                }

                if(!hasUppercase($_FILES["file"]["name"])){
                    echo "<p>File does not have uppercase</p>";
                    $errors = TRUE;
                }
                if(strlen($_FILES["file"]["name"]) > 50 ){
                    echo "<p>File name is tooooo big</p>";
                    $errors = TRUE;
                }
                $acceptedFileTypes = ["image/gif", "image/jpg", "image/jpeg", "image/gif"];

                $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
                $uploadedFileType = finfo_file($fileinfo, $_FILES["file"]["tmp_name"]);
                var_dump($uploadedFileType);
                if(!in_array($uploadedFileType, $acceptedFileTypes))
                {
                    echo "<p>Invalid file type. Must be gif, jpg , jpeg or gif.</p>";
                    $errors = TRUE;
                }
                if(!$errors){
                    $targetDirectory = "tmp/";
                    $targetPath = $targetDirectory . $_FILES["file"]["name"];
                    
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
                        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
                        echo "Type: " . $uploadedFileType . "<br />";
                        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
                        echo "Stored in: " . $targetPath;
                    } else {
                        echo "Error moving the file to the target directory.";
                    }
                }
                
                
            }else{
                echo "Error: " . $_FILES["file"]["error"] . "<br />";
                echo "See <a href='https://www.php.net/manual/en/features.file-upload.errors.php' target='_BLANK'>PHP.net</a> for the explanation of the error messages."; 
            }

        }  

        ?>  
    </head>

    <body>
        <?php topBar()?>
        <main>
            <h1 class="center">Leave your comment</h1>
            
            <form class="center" action="uploadFile.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                
                    <div class="main__file-handler">
                        <label for="file">Choose a file:</label>
                        <input type="file" name="file" id="file" accept=".png, .jpeg, .jpg, .gif ">
                        <br>
                        <div class="center">
                            <input type="submit" value="Upload File">
                        </div>
                    </div>
                </fieldset>
            </form>

        </main>

        <?php footerGen()?>
    </body>
    
</html>