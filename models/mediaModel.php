<?php

require_once __DIR__.'/Connection.php';
require_once __DIR__.'/prepare_funcs.php';

class MediaModel extends Connection{
    private $table_name = "media";
    public $id;
    public $title;
    public $description;
    public $images;
    public $uploaded_at;

    public function add(){
        try{
            $query = prepare_insert_query(
                parent::$connection,
                $this->table_name,
                array(
                    // "id" => $this->id,
                    "title" => $this->title,
                    "description" => $this->description,
                    "images" => $this->images,
                )
            );
            return $query->execute();
        }catch(Exception $e){
            die("Error in adding media: ".$e);
        }
    }

    public function get(){
        try{
            $query = prepare_select(
                parent::$connection,
                $this->table_name,
                $this->id,
            );
            $query->execute();
            $result = $query->get_result();
            $result = $result->fetch_assoc();

            return $result;
        }catch(Exception $e){
            die("Error occur while fetching media data");
        }
    }

    public function get_all(){
        try{
            $query = prepare_select_all(
                parent::$connection,
                $this->table_name,
            );
            $result = $query->fetch_all(MYSQLI_ASSOC);
            return $result;
        }catch(Exception $e){
            die("Error occur while fetching media data");
        }
    }

    public function update(){
        try{

            $datas = array(
                "title" => $this->title,
                "description" => $this->description,
            );
            if(isset($this->images)){
                $datas["images"] = $this->images;
            }
            $datas["id"] = $this->id;
            $query = prepare_update_query(
                parent::$connection,
                $this->table_name,
                $datas    
            );

            return $query->execute();
        }catch(Exception $e){
            die("Error in updating media: ".$e);
        }
    }

    public function delete(){
        try{
            $query = prepare_delete_query(
                parent::$connection,
                $this->table_name,
                $this->id,
            );

            return $query->execute();
        }catch(Exception $e){
            die("Error in deleting media: ".$e);
        }
    }
    private function convert_image(){

    }
}

// $media = new MediaModel();
// $media->id = 2;
// // print_r($media->get_all());
// $media->title = "Something";
// $media->description = "Some desc";
// $media->images = "Image1, Image2 up. Image3";
// $media->update();

// $media->add();