<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class DatabaseBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravelr5:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a daily backup of the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (! Storage::exists('backup')) {
            Storage::makeDirectory('backup');
        }
 
        $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".gz";
    
        $command = "mysqldump" 
                . " --user=" . env('DB_USERNAME') 
                ." --password=" . env('DB_PASSWORD')
                . " --host=" . env('DB_HOST') 
                . " " .env('DB_DATABASE') 
                . "  | gzip > " 
                . storage_path() 
                . "/app/backup/" 
                . $filename;
 
        $returnVar = NULL;
        $output  = NULL;
 
        exec($command, $output, $returnVar);
    }
}
