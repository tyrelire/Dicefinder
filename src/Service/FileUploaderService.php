<?php

namespace App\Service;

use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class FileUploaderService
{
    public function upload(UploadedFile $file, SluggerInterface $slugger, string $targetDirectory): string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug($originalFilename);
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

        try {
            $file->move($targetDirectory, $newFilename);
        } catch (FileException $e) {
            throw new \Exception('Impossible d\'uploader le fichier.');
        }

        return $newFilename;
    }

    public function removeFile(string $filename, string $targetDirectory): void
    {
        $filePath = $targetDirectory . '/' . $filename;
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }
}
