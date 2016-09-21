<?php


class UploadImage{
		private $file;


    public function __set($var, $value){
              $this->$var = $value;
    }

    public function get($var){
              return $this->$var;
    }


		private function getExtension(){
			//retorna a extensao da imagem
			return $extension = end((explode('.', $this->file['name'])));
		}

		private function checkImage($extension){
			$extensions = array('gif', 'jpeg', 'jpg', 'png');

			if(in_array($extension, $extensions)){
				return true;
      }
		}

		public function save(){
			$extension = $this->getExtension();
			//gera um nome unico para a imagem em funcao do tempo
			$temp_name = time() . '.' . $extension;
      $url = "http://img.coolture.com.br/";

        $filename  = $this->file["tmp_name"];
        $handle    = fopen($filename, "r");
        $data      = fread($handle, filesize($filename));
        $POST_DATA = array(
          'fileName' => $temp_name,
          'fileData' => base64_encode($data)
        );
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url.'upload.php');
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
        $response = curl_exec($curl);
        curl_close ($curl);
        if($response === FALSE) {
            print_r(curl_error($ch));
            return false;
        }else{
            return $url."files/".$temp_name;
        }
		}
	}
?>
