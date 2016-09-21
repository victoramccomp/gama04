<?php


class UploadImage{
		private $file;
		private $folder;

		function __construct($file, $folder){
			$this->file = $file;
			$this->folder = $folder;
		}

		private function getExtension(){
			//retorna a extensao da imagem
			return $extension = strtolower(end(explode('.', $this->file['name'])));
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
			//localizacao do arquivo
			$location = $this->folder . $temp_name;

			//move o arquivo
			if (! move_uploaded_file($this->file['tmp_name'], $location)){
				if ($this->file['error'] == 1){
					return "Tamanho excede o permitido";
				}else{
					return "Erro " . $this->file['error'];
        }
			}

		  return "Sucesso";
		}
	}
?>
