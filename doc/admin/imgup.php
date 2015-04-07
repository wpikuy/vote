
<?php 
	class Img { 
		private $filename;

		function __construct($name = ''){ 
			$this->filename = $name ;
		}

		function check(){ 
			if (is_uploaded_file($_FILES[$this->filename]['tmp_name'])) {
				# code...
			}

		}
	}
	
 ?>