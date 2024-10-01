<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class BackupDatabase extends Command
{
    protected $signature = 'backup:database';
    protected $description = 'Backup the database and send it via email';

    public function handle()
    {
        $backupFile = 'backup_' . date('Y-m-d_H-i-s') . '.sql';
        $backupPath = storage_path('app/' . $backupFile);

        $command = sprintf(
            'mysqldump --user=%s --password=%s --host=%s %s > %s',
            env('DB_USERNAME'),
            env('DB_PASSWORD'),
            env('DB_HOST'),
            env('DB_DATABASE'),
            $backupPath
        );

        system($command);

        if (!file_exists($backupPath)) {
            $this->error('Database backup failed!');
            return;
        }

        Mail::raw('Please find the attached database backup.', function ($message) use ($backupFile, $backupPath) {
            $message->to(env('MAIL_FROM_ADDRESS'))
                ->subject('Database Backup')
                ->attach($backupPath);
        });

        $this->info('Database backup created and sent via email successfully.');

        unlink($backupPath);
    }
}
