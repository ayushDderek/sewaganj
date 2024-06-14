<?php

namespace app\models;

use app\core\Application;
use app\core\CategoryModel;
use app\core\Model;

class Service extends CategoryModel
{
    public string $name = '';
    public string $description = '';
    public int $price;
    public string $category = '';
    public string $image = '';

    public function tableName(): string
    {
        return 'Services';
    }

    public function primaryKey(): string
    {
        return 'id';
    }

    public function save()
    {
        $target_dir = Application::$ROOT_DIR . "/public/upload/services";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        return parent::save();
    }

    public function rules(): array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'description' => [self::RULE_REQUIRED],
            'price' => [self::RULE_REQUIRED],
            'category' => [self::RULE_REQUIRED],
            'image' => [self::RULE_REQUIRED]
        ];
    }

    public function labels(): array
    {
        return [
            'name' => 'Service Name',
            'Description' => 'Give a Description',
            'price' => 'Min Amount',
            'category' => 'Category',
            'image' => 'Choose a Service Image'
        ];
    }

    public function attributes(): array
    {
        return ['name', 'Description', 'price', 'category', 'image'];
    }

    public function getImagePath(): string
    {
        return 0;
    }
}