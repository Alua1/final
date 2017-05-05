
<?php
class imagesA extends CI_Controller {

        public function view($page = 'index')
        {
                $file = LIBPATH.DS.'images'.DS.$id.'.png' ;
				if(file_exists($file)){
				echo $file."</br>";
				echo "<img src='".$file."' >" ;
		}