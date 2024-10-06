<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class BackupDatabase extends Command
{
    protected $signature = 'backup:database';
    protected $description = 'Backup da base de dados e envio por email';

    public function handle()
    {
        $backupFile = 'backup_' . date('Y-m-d_H-i-s') . '.sql';
        $backupPath = storage_path('app/' . $backupFile);
        $timestamp = date('Y-m-d H:i:s');
        $databaseName = env('DB_DATABASE');

        $command = sprintf(
            'mysqldump --user=%s --password=%s --host=%s %s > %s',
            env('DB_USERNAME'),
            env('DB_PASSWORD'),
            env('DB_HOST'),
            $databaseName,
            $backupPath
        );

        system($command);

        if (!file_exists($backupPath)) {
            $this->error('Falha no backup da base de dados!');
            return;
        }

        Mail::raw("Ficheiro em anexo do backup da base de dados '{$databaseName}'", function ($message) use ($backupPath, $timestamp) {
            $message->to('josepedrogomes27@gmail.com')
                ->subject("Backup SQL / {$timestamp}")
                ->attach($backupPath);
        });

        $this->info('Backup da base de dados criado e enviado por email com sucesso.');

        unlink($backupPath);
    }
}