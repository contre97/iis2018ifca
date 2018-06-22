<?php
unlink('./Uploading-files-to-Google-Drive-with-PHP-master/files/12371768402-03-B005-00000007.xml');

	if(file_exists("./Uploading-files-to-Google-Drive-with-PHP-master/files/12371768402-03-B005-00000007.xml"))
    {
		echo "Ha habido un problema al borrar el archivo";
    }
 
    else
    {
        echo "La boleta se borro";
    }
?>
 <a href="./">Volver</a>