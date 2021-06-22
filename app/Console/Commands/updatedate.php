<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class updatedate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updatedate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $mon = Carbon::now()->addDays(1)->toDateString();
            $tue = Carbon::now()->addDays(2)->toDateString();
            $wed = Carbon::now()->addDays(3)->toDateString();
            $thu = Carbon::now()->addDays(4)->toDateString();
            $fri = Carbon::now()->addDays(5)->toDateString();
            $sat = Carbon::now()->addDays(6)->toDateString();
            $sun = Carbon::now()->addDays(7)->toDateString();
            DB::table('periods')->where('day','Monday')->update([
                'Date' => $mon
            ]);
            DB::table('periods')->where('day','Tuesday')->update([
                'Date' => $tue
            ]);
            DB::table('periods')->where('day','Wednesday')->update([
                'Date' => $wed
            ]);
            DB::table('periods')->where('day','Thursday')->update([
                'Date' => $thu
            ]);
            DB::table('periods')->where('day','Friday')->update([
                'Date' => $fri
            ]);
            DB::table('periods')->where('day','Saturday')->update([
                'Date' => $sat
            ]);
            DB::table('periods')->where('day','Sunday')->update([
                'Date' => $sun
            ]);
        
        echo "Updated dates.";
    }
}
