<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Attendance;
use Attribute;
use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\Log;
class TimerCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'timer:cron';

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
        try{

            $employee=Attendance::where('date',Carbon::now()->format('Y-m-d'))->where('sign_out',null)->get();
            foreach($employee as $employee){
                if( $employee->is_absent == 0){
                    if($employee->total_time == null ){
                        $startTime = Carbon::parse($employee->signin_at);
                        $endTime = Carbon::parse(Carbon::now());
                        $total_time = $endTime->diffInSeconds($startTime);
                        $total_time = gmdate('H:i:s', $total_time);
                        $total_time=explode(':',$total_time);
                    }else{
                        $total_time=explode(':',$employee->total_time);
                    }

                    $seconds = $total_time[0] * 3600 + $total_time[1] * 60 + $total_time[2];
                    $total_time=gmdate("H:i:s", $seconds+60);
                    $employee->total_time=$total_time;
                    $employee->update();
                    
                }
            }
            $employee=Attendance::where('date',Carbon::yesterday()->format('Y-m-d'))->where('sign_out',null)->get();
            $newAttendance= new Attendance();
            foreach($employee as $employee){
                $id=$employee->id;
                $employee->sign_out=Carbon::now()->toDateTimeString();
                $employee->update();
                $newAttendance->employee_id = $id;
                $newAttendance->date = Carbon::now()->format('Y-m-d');
                $newAttendance->signin_at = Carbon::now()->toDateTimeString();
                $newAttendance->is_absent = 0;
                $newAttendance->sign_out = null;
                $newAttendance->save();
            }

        }catch(\Exception $e){
            \Log::error($e);
        }

    }
}
