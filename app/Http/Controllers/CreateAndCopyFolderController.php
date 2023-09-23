<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CreateAndCopyFolderController extends Controller
{
    public function CreateFolder ()
    {
        // Tentukan nama folder yang ingin Anda buat
        $folderName = 'Folder Baru';

        // Tentukan path lengkap untuk folder tujuan
        $destinationPath = public_path($folderName);            // Gunakan ini jika membuat folder di public

        $destinationPath = resource_path('views/'.$folderName); // Gunakan ini jika anda membuat folder di views

        // Cek apakah folder sudah ada atau belum
        if (!File::isDirectory($destinationPath)) {
            // Buat folder jika belum ada
            File::makeDirectory($destinationPath, 0755, true, true);
            
            echo "Folder berhasil dibuat.";
        } else {
            echo "Folder sudah ada.";
        }
    }

    public function CopyFolder ()
    {
        
    }
}
