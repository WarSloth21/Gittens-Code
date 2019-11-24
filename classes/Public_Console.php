<?php
require 'Public_ConsoleModel.php';
require 'Public_ConsoleView.php';

class Public_Console extends Page
{
    public function makeModel() : Model
    {
        return new Public_ConsoleModel(DB_USER, DB_PASS, DB_NAME, DB_HOST);
    }

    public function makeView() : AbstractView
    {
        return new Public_ConsoleView();
    }
}