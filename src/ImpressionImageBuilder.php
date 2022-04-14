<?php

class ImpressionImageBuilder
{
    private array $languages = array();
    private array $technologies = array();
    private string $backgroundImageFilePath = "";
    private float $padding = 5.0;
    private float $spacing = 5.0;
    private string $assetsPath = "";

    public function __construct(string $backgroundImageFilePath = "", array $languages = array(), array $technologies = array())
    {
    }

    public function rasterizeImage(string $outputFilePath)
    {
        if (!isset($outputFilePath)) {
            throw new Exception("The output file path was not defined. Unable to continue.");
        }

        if (!isset($this->backgroundImageFilePath)) {
            throw new Exception("The background image filepath specified is invalid or null");
        }

        if (!file_exists($this->backgroundImageFilePath)) {
            throw new Exception("The background image \"$this->backgrondImageFilePath\" does not exist.");
        }

        $imagick = new Imagick(realpath($this->backgroundImageFilePath));
    }

    private function getAssetImage(string $prefix, string $name)
    {
        if (isset($prefix)) {
            throw new Exception("The prefix was not defined. Unable to determine.");
        }
    }
}
