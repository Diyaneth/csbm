<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\admission;
use App\Models\message;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('home.index');
        }
        
    }

    //navbar
    public function index()
    {
        return view('home.index');
    }

    public function about_us()
    {
        return view('home.about_us');
    }

    public function courses()
    {
        return view('home.courses');
    }

    public function governors()
    {
        return view('home.governors');
    }

    public function directors()
    {
        return view('home.directors');
    }

    public function coporate()
    {
        return view('home.coporate');
    }

    public function lecture_Panel()
    {
        return view('home.lecture_Panel');
    }

    public function coporate_team()
    {
        return view('home.coporate_team');
    }
    
    public function educational()
    {
        return view('home.educational');
    }

    public function clients()
    {
        return view('home.clients');
    }

    public function events_CBL()
    {
        return view('home.events_CBL');
    }

    public function events_EWCL()
    {
        return view('home.events_EWCL');
    }

    public function events_EWCL_2018()
    {
        return view('home.events_EWCL_2018');
    }

    public function gallery_CBL()
    {
        return view('home.gallery_CBL');
    }

    public function gallery_EWCL()
    {
        return view('home.gallery_EWCL');
    }

    public function gallery_EWCL_2018()
    {
        return view('home.gallery_EWCL_2018');
    }

    public function apply()
    {
        return view('home.apply');
    }

    public function contact()
    {
        return view('home.contact');
    }

    //courses
    public function management()
    {
        return view('home.management');
    }

    public function ICT()
    {
        return view('home.ICT');
    }

    public function languages()
    {
        return view('home.languages');
    }

    public function social()
    {
        return view('home.social');
    }

    public function business()
    {
        return view('home.business');
    }

    //programs
    //management


    public function sales()
    {
        return view('management.sales');
    }

    public function core()
    {
        return view('management.core');
    }

    public function fbusiness()
    {
        return view('management.fbusiness');
    }

    public function PD()
    {
        return view('management.PD');
    }

    public function csales()
    {
        return view('management.csales');
    }

    public function HDbusiness()
    {
        return view('management.HDbusiness');
    }

    public function taxation()
    {
        return view('management.taxation');
    }

    public function minimba()
    {
        return view('management.minimba');
    }

    public function finance()
    {
        return view('management.finance');
    }

    public function solid()
    {
        return view('management.solid');
    }

    public function trade()
    {
        return view('management.trade');
    }

    public function practical()
    {
        return view('management.practical');
    }

    public function effective()
    {
        return view('management.effective');
    }

    //IT
    
    public function advanced()
    {
        return view('IT.advanced');
    }

    public function certificate()
    {
        return view('IT.certificate');
    }

    public function digital()
    {
        return view('IT.digital');
    }

    public function diploma()
    {
        return view('IT.diploma');
    }

    public function graphic()
    {
        return view('IT.graphic');
    }

    //languages

    public function benglish()
    {
        return view('languages.benglish');
    }

    public function ielts()
    {
        return view('languages.ielts');
    }

    public function penglish()
    {
        return view('languages.penglish');
    }

    public function pte()
    {
        return view('languages.pte');
    }

    public function public()
    {
        return view('languages.public');
    }

    public function toefl()
    {
        return view('languages.toefl');
    }

    //social

    public function care()
    {
        return view('social.care');
    }

    public function drugs()
    {
        return view('social.drugs');
    }

    public function mental()
    {
        return view('social.mental');
    }

    public function pedagogy()
    {
        return view('social.pedagogy');
    }

    public function sports()
    {
        return view('social.sports');
    }

    //add admission

    public function add_admission(Request $request)
    {
        $admission=new admission;
        $admission->Course=$request->Course;
        $admission->Name=$request->Name;
        $admission->NIC=$request->NIC;
        $admission->DOB=$request->DOB;
        $admission->Phone_number=$request->Phone_number;
        $admission->Email=$request->Email;
        $admission->Qualification=$request->Qualification;
        $admission->Location=$request->Location;
        $admission->Days=$request->Days;

        $admission->save();
        return redirect()->back();
    }

    //send message

    public function send_message(Request $request)
    {
        $message=new message;
        $message->name=$request->name;
        $message->email=$request->email;
        $message->phone_no=$request->phone_no;
        $message->subject=$request->subject;
        $message->message=$request->message;
        

        $message->save();
        return redirect()->back();
    }
}
