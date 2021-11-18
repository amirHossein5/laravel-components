<?php

namespace AmirHossein5\LaravelComponents;

trait PretendsToBeAFile
{
    protected function pretendsResponseIsFile($file, $mimeType)
    {
        $expires = strtotime('+1 year');
        $lastModified = filemtime($file);
        $cacheControl = 'public, max-age=31536000';

        if ($this->matchesCache($lastModified)) {
            return response()->make('', 304, [
                'Expires' => $this->httpDate($expires),
                'Cache-Control' => $cacheControl,
            ]);
        }

        return response()->file($file, [
            'Content-Type' => "$mimeType; charset=utf-8",
            'Expires' => $this->httpDate($expires),
            'Cache-Control' => $cacheControl,
            'Last-Modified' => $this->httpDate($lastModified),
        ]);
    }

    private function matchesCache($lastModified): bool
    {
        $ifModifiedSince = $_SERVER['HTTP_IF_MODIFIED_SINCE'] ?? '';

        return @strtotime($ifModifiedSince) === $lastModified;
    }

    private function httpDate($timestamp)
    {
        return sprintf('%s GMT', gmdate('D, d M Y H:i:s', $timestamp));
    }
}
