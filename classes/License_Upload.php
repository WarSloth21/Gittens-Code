<?php
require 'License_UploadModel.php';
require 'License_UploadView.php';

class License_Upload extends Page
{
    public function makeModel() : Model
    {
        return new License_UploadModel(DB_USER, DB_PASS, DB_NAME, DB_HOST);
    }

    public function makeView() : AbstractView
    {
        return new License_UploadView();
    }
}