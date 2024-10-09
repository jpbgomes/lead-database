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

        $databaseName = config('database.connections.mysql.database');
        $databaseUser = config('database.connections.mysql.username');
        $databasePassword = config('database.connections.mysql.password');
        $databaseHost = config('database.connections.mysql.host');

        $command = sprintf(
            'mysqldump --user=%s --password=%s --host=%s %s 2>&1 > %s',
            escapeshellarg($databaseUser),
            escapeshellarg($databasePassword),
            escapeshellarg($databaseHost),
            escapeshellarg($databaseName),
            escapeshellarg($backupPath)
        );

        $output = null;
        $resultCode = null;
        exec($command, $output, $resultCode);

        if ($resultCode !== 0) {
            $this->error('Error during database backup: ' . implode("\n", $output));
            return;
        }

        if (!file_exists($backupPath) || filesize($backupPath) === 0) {
            $this->error('Failed to create a non-empty database backup file!');
            return;
        }

        Mail::raw("Database backup file '{$databaseName}' attached", function ($message) use ($backupPath, $timestamp) {
            $message->to('josepedrogomes27@gmail.com')
                ->subject("SQL Backup / {$timestamp}")
                ->attach($backupPath);
        });

        $this->info('Database backup created and emailed successfully.');

        unlink($backupPath);

        exec('sudo php artisan config:cache');
        exec('sudo php artisan view:clear');
        exec('sudo php artisan config:clear');

        $this->info('Cache and views cleared successfully.');
    }
}
