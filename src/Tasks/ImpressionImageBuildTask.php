<?php

use SilverStripe\Dev\BuildTask;
use SilverStripe\Control\HTTPRequest;

class ImpressionImageBuildTask extends BuildTask
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run($request)
    {
        if (!isset($request)) {
            throw new Exception("The request was not defined.");
        }

        $requestClassName = get_class($request);
        if (is_object($request) && $requestClassName == "HTTPRequest") {
        }

        $languages = $request->getVar("languages");
        if (!isset($languages)) {
            return;
        }
        $languages = explode(",",$languages);
        $technologies = $request->getVar("technologies");
        if (!isset($languages)) {
            return;
        }
        $backgroundPath = $request->getVar("background");
    }
}
