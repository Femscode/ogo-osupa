<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use PDF;
use App\Contact;
use App\Prices;
use RealRashid\SweetAlert\Facades\Alert;;
use App\Atonigba;
use App\Video;
// Use Alert;
use Mail;
use App\Planfortommorrow;
class UserController extends Controller
{
    public function index(){
    	$data['videos'] = Video::latest()->paginate(2); 
        $data['prices'] = Prices::first()->get();
    	return view('home',$data);
    }
    public function planfortommorrowhome() {
      $data['prices'] = Prices::get();
      return view('planfortommorrowhome',$data);
    }
    public function createPrice(Request $request,$id) {
        $price = Prices::find($id);
       
        $price->plan = $request->plan;
        $price->investment_amount = $request->investment_amount;
        $price->profit = $request->profit;
        $price->duration = $request->duration;
        $price->save();
        
        return redirect()->back()->with('success','Price Updated Successfully');
    }
    public function createvideo(Request $request) {
      $input = $request->all();
  

  $video = $request->video;
            $filename = $video->hashName();
            $path = public_path().'/videos/';
            $video->move($path, $filename);
            Video::create([
              'title' => $request->title,
              'video' => $filename
            ]);
        // Video::create($request->all());
        return redirect()->route('admin');
        return redirect()->back()->with('message','Video created successfully');
    }
    public function deletevideo($id) {
        $video = Video::find($id);
        $video->delete();
        return redirect()->back()->with('toast_success','Video deleted successfully');
    }
public function contact(Request $request) {
    $input = $request->all();
   
    $subject = $input['services'];
    $email = $input['email'];
    $headers = 'From: ogoosupacontact@ogoosupaconcept.com' . "\r\n" .
    'Reply-To: ogoosupacontact@ogoosupaconcept.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
     $message = "Hi Admin " .$input['name']. " with the number " .$input['phone']. " Just contacted you on " .$input['services']; 
     $message2 = "Hi " .$input['name']. "Thanks for contacting us at Ogoosupa Concept, your message has been received and we will get back to you shortly. Thanks regard!";
    if($request->services == 'Plan For Tommorrow') {
    mail('fasanyafemi@gmail.com', $subject , $message,$headers);
    mail('aremoogoosupa@gmail.com', $subject , $message,$headers);
    mail('ogoosupasecretary@gmail.com');
    mail('lanrejohnson965@gmail.com', $subject , $message,$headers);
    // mail('fasanyafemi@gmail.com', $subject , $message,$headers);
    
    mail($email,'Ogoosupa Concept', $message2, $headers);
    }
// dd( mail('fasanyafemi@gmail.com', 'thesubject', 'themessega'));
// lanrejohnson965@gmail.com
    Contact::create($input);
    return "Message sent successfully";
}
    public function planfortommorrowform() {
        return view('planfortommorrowform');
    }
    public function atonigbaform() {
        return view('atonigbaform');
    }
    public function admin() {
        $data['customers'] = Contact::latest()->paginate(10);
        $data['plan_for_tommorrow'] = Contact::where('services','Plan For Tommorrow')->paginate(10);
        $data['atonigba'] = Contact::where('services','Human right protection')->paginate(10);
        $data['media'] = Contact::where('services','Media and Entertainment')->paginate(10);
        $data['advertisement'] = Contact::where('services','Broadcasting and Advertisement')->paginate(10);
        $data['downloadplanfortommorrow'] = Planfortommorrow::latest()->paginate(10);
        $data['downloadatonigba'] = Atonigba::latest()->paginate(10);
        $data['videos'] = Video::latest()->paginate(5);
        $data['prices'] = Prices::get();
        
        return view('admin',$data);
    }
    public function saveatonigbaform(Request $request) {
        $input = $request->all();
        $image = $input['image']->extension();
        $input['image']->store('images');
        
        Atonigba::create($input);
return redirect('/')->with('toast_success', 'Form Submitted Successfully!');
    }
    public function saveplanfortommorrowform(Request $request) {
        
        $input = $request->all();
        $image = $input['image']->extension();
        $input['image']->store('images');
        Planfortommorrow::create($input);
        
return redirect('/')->with('toast_success', 'Form Submitted Successfully!');
    }
    public function downloadatonigba($id) {
        $atonigba = Atonigba::find($id);

        $pdf = PDF::loadView('atonigba', [
            'name' => $atonigba->name,
            'email' => $atonigba->email,
            'phone' => $atonigba->phone,
            'state' => $atonigba->state,
            'category' => $atonigba->category,
            'address' => $atonigba->address,
            'occupation' => $atonigba->occupation,
            'guarnator_name' => $atonigba->guarnator_name,
            'quarantor_number' => $atonigba->quarantor_number,
            'guarantor_address' => $atonigba->guarantor_address,
            'guarantor_occupation' => $atonigba->guarantor_occupation,
            'image' => $atonigba->image,
            'driver_lincence' => $atonigba->driver_lincence,
            'created_at' => $atonigba->created_at,
            ]);
            $myform = $atonigba->id;
            $pdf->save(public_path('atonigba/'. $myform));
            $pdf->download($atonigba->name. $myform.'/atonigba' .'.pdf');              
           
    }
    public function downloadplanfortommorrow($id) {
        $planfortommorrow = Planfortommorrow::find($id);


        $pdf = PDF::loadView('planfortommorrow', [
            'name' => $planfortommorrow->name,
            'email' => $planfortommorrow->email,
            'phone' => $planfortommorrow->category,
            'address' => $planfortommorrow->address,
            'state' => $planfortommorrow->state,
            'occupation' => $planfortommorrow->occupation,
            'category' => $planfortommorrow->category,
            'guarantor_name' => $planfortommorrow->guarantor_name,
            'guarantor_number' => $planfortommorrow->guarantor_number,
            'guarantor_address' => $planfortommorrow->guarantor_address,
            'guarantor_occupation' => $planfortommorrow->guarantor_occupation,
            'image' => $planfortommorrow->image,
            'driver_lincence' => $planfortommorrow->driver_lincence,
            'created_at' => $planfortommorrow->created_at,
            ]);

        $myform = $planfortommorrow->id;
        $pdf->save(public_path('planfortommorrow/'. $myform));
    
        
        $pdf->download($planfortommorrow->name. $myform.'/planfortommorrowform' .'.pdf');              
        
    
    }
    public function moudownload() {
      

    $pdf = PDF::loadView('mou', [
    'email' => 'investment->email',
    'amount' => 'investment->amount',
    'created_at' => 'investment->created_at',
    ]);
    $mymou = 'mou';
    $pdf->save(public_path('mou/'. $mymou));

    $mouNo = 4;
    $pdf->download('mou'. $mouNo .'.pdf');              
    
}

}
