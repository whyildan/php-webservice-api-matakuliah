<?php
/**
 * @author      Whyildan Wahyu Pratama <whyldan.9g@gmail.com>
 * @link        https://github.com/whyldan
 *
 */

class Helper
{
    public function getUrlSegment(): string
    {
        $uri = $_SERVER['REQUEST_URI'];

        
        $url = explode('/', $uri);

        if (isset($url[3])) {
            $url = '/' . $url[2] . '/' . $url[3];
        } else if (isset($url[2])) {
            $url = '/' . $url[2];
        } else if (isset($url[1])) {
            $url = '/' . $url[1];
        };

        return $url;
    }

    public function getUrl(): string
    {
        $uri = $_SERVER['REQUEST_URI'];
        
        return $uri;
    }

    public function getMethod(): string
    {
        $method = $_SERVER['REQUEST_METHOD'];

        return $method;
    }
}
