<?php

namespace App;

class File
    /**
     * Managing files class
     */

{



    private string $uploadDirectory;
    private string $secondUploadDirectory;
    private mixed $fileData;
    private string|array $extension;
    private mixed $tempFile;
    private string $name;
    private string $target;
    private string $secondTarget;
    private mixed $mimeType;
    private array $acceptedMimeTypes = ["image/jpg","image/jpeg", "image/png", "image/gif"];

    public function __construct($index)
    {
        //Manage the directory where files are taken
        $this->uploadDirectory = dirname(__DIR__, 2) . "public/image/";

        //Manage the admin directory where files are taken
        $this->secondUploadDirectory = dirname(__DIR__, 2) . "admin/image/";

        //Manage the file itself and get it information
        $this->fileData = $_FILES[$index];

        //Define the extension of the file to define it usage
        $this->extension = pathinfo($this->fileData['name'], PATHINFO_EXTENSION);

        //Define the name by an id and the extension defined above
        $this->name = uniqid().".".$this->extension;

        //Manage the target of the file after we used it
        $this->target = $this->uploadDirectory.$this->name;

        //Manage the second target of the file after we used it
        $this->secondTarget = $this->secondUploadDirectory.$this->name;

        //Params
        $this->mimeType = $this->fileData["type"];

        //Params
        $this->tempFile = $this->fileData["tmp_name"];
    }

    public function upload( $previousFileName ){

            $data = $previousFileName;
            $dirhandle = opendir("image");
            $dir= "image";

            if ($previousFileName){
                unlink($dir."/".$previousFileName);
            }

            move_uploaded_file($this->tempFile, $this->target);
            move_uploaded_file($this->tempFile, $this->secondTarget);

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isImage(){

        return in_array($this->mimeType, $this->acceptedMimeTypes);
    }



}