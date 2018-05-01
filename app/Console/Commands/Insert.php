<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
class Insert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:table {table : Table data to insert}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert data from sql insert files for specified table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if($this->argument('table') === 'all'){
            return $this->handleAll();
        }
        $table = $this->argument('table');
        $this->info('Running handler for table: ' . $table);
        foreach (file('database/inserts/integrity_' . $table . '.sql') as $insert){
            try {
    //            $insert = file_get_contents('database/inserts/integrity_' . $table . '.sql');
    //            file_put_contents('test.txt',json_encode($inserts));
                DB::insert(str_replace('"','\"',$insert));
            } catch (\Exception $e){
                $this->warn('Error occurred while running command: ' . $e->getMessage());
            }
        }

        $this->info('Successfully inserted data for ' . $table);

        return 0;
    }

    public function handleAll(){
        $this->info('Running handler for all tables');
        $all_tables = array_map('reset', DB::select('SHOW TABLES'));

//        file_put_contents('text.txt', json_encode($all_tables));
        try{
            foreach ($all_tables as $table){
                $this->handle($table);
            }
        } catch (\Exception $e){
            $this->warn('Error occurred while running command: ' . $e->getMessage());
        }
        $this->info('Successfully inserted data for all tables');
        return 0;
    }
}
