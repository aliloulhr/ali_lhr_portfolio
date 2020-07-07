<?php 
    

			  $file = "cv/CV_Lahreche_v 2.pdf";
			   if(file_exists($file)){
		            header('Content-description: File transfer');
                    header('Content-type: application/octet-stream');
                    header('Content-disposition: attachement; filename='.basename($file));
                    header('Content-length: '.filesize($file));
		            header('Expires: 0');
	        	    header('Pragma: public');
                    readfile($file);

    }
		  
	 
?>