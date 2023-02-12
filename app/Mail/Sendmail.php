<?php

namespace App\Mail;
use App\Dashboard;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\school;
class Sendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $request;
    public function __construct($student)
    {
        
       //
    }

    /**
     * Build the message. 
     *
     * @return $this
     */
    public function build(request $request)
    {
        //$student_name = $request->student_name;
        //$school_name = DB::table('schools')->where('id',$schoolid)->get('school_name')->pluck('school_name');
       
        return $this->view('show.good')->with([
            'payerfirstname'=>$request->first_name,
            'studentname' => $request->student_name
            ]);
    }
}
