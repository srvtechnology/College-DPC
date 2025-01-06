<?php

namespace App\Http\Controllers\School;

use App\Models\Classes;
use App\Models\Session;
use App\Models\Student;
use App\Models\Section;
use App\Models\FeeStructure;
use Illuminate\Http\Request;
use App\Models\StudentFeePayment;
use App\Models\StudentClassAssign;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
class FeesController extends Controller
{
    protected $school;
    protected $session;
    public function __construct()
    {
        // dd(\Cache::get('ses'));
        $this->session = \Cache::get('ses');
        view()->share('session',\Cache::get('ses'));
        $this->middleware(function ($request, $next) {
            $this->initializeVariables();

            return $next($request);
        });

    }

    protected function initializeVariables()
    {
        $this->school = getSchoolInfoByUsername(Auth::user()->username);
    }

    public function index()
    {
        $classes = Classes::where('school_id', $this->school->id)->where('is_deleted','0')->OrderBy('name','ASC')->get();
        $query = FeeStructure::where('school_id',$this->school->id)->where('is_deleted','0')->where('session_id',$this->session->id)->OrderBy('id','DESC');
        $sections = Section::where(['school_id' => $this->school->id,'is_deleted'=>'0'])->OrderBy("id","desc")->paginate(10);

        if(!empty(request()->class_id))
        {
            $query->where('class_id',request()->class_id);
        }

        if(!empty(request()->section_id))
        {
            $query->where('section_id',request()->section_id);
        }

        $fee_structures = $query->paginate(10);

        return view("school.fees.fee-structure.index")->with(compact('fee_structures','classes','sections'));
    }

    public function create()
    {
        $classes = Classes::where('school_id', $this->school->id)->where('is_deleted','0')->get();
        $sections = Section::where(['school_id' => $this->school->id,'is_deleted'=>'0'])->OrderBy("id","desc")->get();
        return view("school.fees.fee-structure.create")->with(compact('classes','sections'));
    }

    public function store(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'amount' =>'required',
            'class_id' =>'required',
            'section_id' =>'required',
         ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // $count = FeeStructure::where('school_id',$this->school->id)
        // ->where('class_id',$request->class_id)->where('amount',$request->amount)->count();
        $count = FeeStructure::where('class_id',$request->class_id)->where('section_id',$request->section_id)->where('session_id',$this->session->id)->count();

        if($count > 0)
        {
            return back()->with('error','Fee Structure already exists');
        }

        $fee_structure = new FeeStructure;
        $fee_structure->class_id = $request->class_id;
        $fee_structure->section_id = $request->section_id;
        $fee_structure->school_id = $this->school->id;
        $fee_structure->amount = $request->amount;
        $fee_structure->session_id = $request->session_id;
        $fee_structure->created_by = Auth::user()->id;
        $fee_structure->save();

        return to_route("school.fees.fee-structure")->with('success','Fee Structure created successfully');
    }

    public function edit($id)
    {
        $classes = Classes::where('school_id', $this->school->id)->where('is_deleted','0')->get();
        $fee_structure = FeeStructure::findOrFail($id);
        $sections = Section::where('school_id', $this->school->id)->where('is_deleted','0')->get();

        return view("school.fees.fee-structure.edit")->with(compact('classes','fee_structure','sections'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' =>'required',
            'class_id' =>'required',
            'section_id' =>'required',
         ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $count = FeeStructure::where('school_id',$this->school->id)
        ->where('id','!=',$request->id)
        ->where('class_id',$request->class_id)->where('amount',$request->amount)->count();

        if($count > 0)
        {
            return back()->with('error','Fee Structure already exists');
        }

        $fee_structure = FeeStructure::find($request->id);
        $fee_structure->class_id = $request->class_id;
        $fee_structure->section_id = $request->section_id;
        $fee_structure->amount = $request->amount;
        $fee_structure->save();

        return to_route("school.fees.fee-structure")->with('success','Fee Structure updated successfully');
    }

    public function delete(Request $request)
    {
        $fee_structure = FeeStructure::where('id', $request->id)->update([
            'is_deleted' => '1'
        ]);

        return back()->with('success','Fee Structure Deleted Successfully');
    }

    public function fee_payment_index()
    {
        // try {
        //     \Artisan::call('migrate', [
        //         '--path' => 'database/migrations/2023_10_25_103952_add_column_session_id_to_student_fee_payments_table.php',
        //     ]);
        //     return 'Migration executed successfully.';
        // } catch (\Exception $e) {
        //     return 'Migration failed: ' . $e->getMessage();
        // }
        // // 2023_10_25_103952_add_column_session_id_to_student_fee_payments_table.php
        // $fee_payment_history = StudentFeePayment::with('student', 'feeStructure')
        // ->join('fee_structures', 'student_fee_payments.fee_structure_id', '=', 'fee_structures.id')
        // ->where('student_fee_payments.school_id', $this->school->id)
        // ->where('student_fee_payments.is_deleted','0')
        // ->select('student_fee_payments.student_id', 'student_fee_payments.fees_month', 'student_fee_payments.fee_structure_id', \DB::raw('SUM(student_fee_payments.amount) as total_amount'))
        // ->groupBy('student_fee_payments.student_id', 'student_fee_payments.fees_month', 'student_fee_payments.fee_structure_id')
        // ->orderBy('student_fee_payments.fees_month', 'DESC')
        // ->paginate(10);

        // $fee_payment_all_students = StudentFeePayment::join('fee_structures', 'student_fee_payments.fee_structure_id', '=', 'fee_structures.id')
        // ->where('student_fee_payments.school_id', $this->school->id)
        // ->where('student_fee_payments.is_deleted','0')
        // ->select('student_fee_payments.student_id', 'student_fee_payments.fees_month', 'student_fee_payments.fee_structure_id', \DB::raw('SUM(student_fee_payments.amount) as total_amount'))
        // ->groupBy('student_fee_payments.student_id', 'student_fee_payments.fees_month', 'student_fee_payments.fee_structure_id')
        // ->orderBy('student_fee_payments.fees_month', 'DESC')
        // ->get();

        // $fee_payment_all_date = StudentFeePayment::join('fee_structures', 'student_fee_payments.fee_structure_id', '=', 'fee_structures.id')
        // ->where('student_fee_payments.school_id', $this->school->id)
        // ->where('student_fee_payments.is_deleted','0')
        // ->select('student_fee_payments.fees_month')
        // ->groupBy('student_fee_payments.fees_month')
        // ->orderBy('student_fee_payments.fees_month', 'DESC')
        // ->get();

        $classes = Classes::where('school_id', $this->school->id)->where('is_deleted','0')->OrderBy('name','ASC')->get();
        // $student_class_assigns = [];
        // if(!empty(request()->class_id) AND !empty(request()->section_id))
        // {
        //     $student_class_assigns = StudentClassAssign::where('school_id',$this->school->id)->where('class_id',request()->class_id)->where('section_id',request()->section_id)->get();
        // }

        $studentsfee_payment = StudentFeePayment::with(['student','class','section'])
        ->where('session_id',$this->session->id)
        ->orderBy('student_fee_payments.fees_month', 'DESC')
        ->paginate(10);
        return view("school.fees.fee-payment.index")->with(compact('studentsfee_payment','classes'));
    }

    public function fee_payment_create($student_id)
    {
        $student = Student::findOrFail($student_id);
        $classes = Classes::where('school_id', $this->school->id)->where('is_deleted','0')->get();
        $current_session = Session::where(['school_id' => $this->school->id,'is_deleted' => '0','is_active' => '1'])->first();

        return view("school.fees.fee-payment.create")->with(compact('classes','current_session','student'));
    }

    public function admin_fee_payment_create()
    {
        // $student = Student::findOrFail($student_id);
        $sections = Section::where('school_id', $this->school->id)->where('is_deleted','0')->get();
        $classes = Classes::where('school_id', $this->school->id)->where('is_deleted','0')->get();
        // $current_session = Session::where(['school_id' => $this->school->id,'is_deleted' => '0','is_active' => '1'])->first();

        return view("school.fees.fee-payment.admin-fee-create",compact('classes','sections'));
    }
    public function admin_fee_payment_delete($id){
        // return $id;
        $feePayment = StudentFeePayment::findOrFail($id);
        $feePayment->delete();
        return back()->with('success', 'Payment record deleted successfully.');
    }
    public function getStudentsByClassId($id)
    {
        $class = Classes::find($id);
        if($class)
        {
            $student_assign_classess = StudentClassAssign::where('school_id',$this->school->id)->where('class_id',$class->id)->get()->pluck('student_id');
            $students = Student::select('id','first_name','last_name')->whereIn('id',$student_assign_classess)->OrderBy("id","DESC")->get();
            $fee_structure = FeeStructure::where('class_id',$class->id)->where('is_deleted','0')->latest()->first();

            return [
                'students' => $students,
                'fee_structure' => $fee_structure
            ];
        }
    }

    public function fee_payment_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' =>'required',
            'student_id' =>'required',
            'month' => 'required',
            'type' => 'required',
            'amount' => 'required',
         ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if(empty($request->fee_structure_id))
        {
            return back()->with('error','Fee Sturcture is not added against this class');
        }

        $previous_student_payment = StudentFeePayment::where('school_id',$this->school->id)
        ->where('fees_month',$request->month)
        ->where('fee_structure_id',$request->fee_structure_id)
        ->where('class_id',$request->class_id)
        ->where('student_id',$request->student_id)
        ->first();

        if($previous_student_payment)
        {
            $fee_structure = FeeStructure::find($request->fee_structure_id);
            $paid_amount = StudentFeePayment::where('school_id',$this->school->id)
            ->where('fees_month',$request->month)
            ->where('class_id',$request->class_id)
            ->where('student_id',$request->student_id)
            ->sum('amount');

            $remaining_amount = $fee_structure->amount - $paid_amount;

            if($remaining_amount == 0)
            {
                return back()->with('error','Payment already paid for this month');
            }

            if($request->amount > $remaining_amount AND $remaining_amount != 0)
            {
                return back()->with('error','Amount exceeded');
            }

        }
        $session = Session::where('school_id',$this->school->id)->where('is_deleted','0')->where('is_active','1')->first();

        $payment = new StudentFeePayment;
        $payment->school_id = $this->school->id;
        $payment->session_id = $session->id;
        $payment->fee_structure_id = $request->fee_structure_id;
        $payment->class_id = $request->class_id;
        $payment->student_id = $request->student_id;
        $payment->reference_no = date("YmdHis").rand(000,9999);
        $payment->fees_month = $request->month;
        $payment->payment_type = $request->type;
        $payment->amount = $request->amount;
        $payment->session_id = $request->session_id;
        $payment->date = date("Y-m-d H:i:s");
        $payment->created_by = Auth::user()->id;
        $payment->save();

        return back()->with('success','Fee Payment Successfully');
    }
    public function admin_fee_payment_store(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'class_id' =>'required',
            'student_id' =>'required',
            'type' => 'required',
            'amount' => 'required',
         ]);
         if ($request->class_id == null) {
           return back()->with('error','Please select department first');
         }
         if ($request->student_id == null) {
            return back()->with('error','Please select student first');
          }
          if ($request->actual_fee == 0) {
            return back()->with('error','Please add fee structure first');
          }
          if ($request->due_amount == 0.00) {
            return back()->with('error','You can not pay fee because your due amount is 0');
          }
          if ($request->type == null) {
            return back()->with('error','Please select payment type first');
          }

        $session = Session::where('school_id',$this->school->id)->where('is_deleted','0')->where('is_active','1')->first();

        $payment = new StudentFeePayment;
        $payment->school_id = $this->school->id;
        $payment->session_id = $session->id;
        $payment->fee_structure_id = $request->fee_structure_id;
        $payment->class_id = $request->class_id;
        $payment->section_id = $request->section_id;
        $payment->student_id = $request->student_id;
        $payment->reference_no = date("YmdHis").rand(000,9999);
        $payment->fees_month = $request->month;
        $payment->payment_type = $request->type;
        $payment->amount = $request->amount;
        $payment->actual_fee = $request->actual_fee;
        $payment->discount_amount = $request->discount_amount;
        $payment->date = date("Y-m-d H:i:s");
        $payment->created_by = Auth::user()->id;
        $payment->receive_amount = $request->receive_amount;
        $payment->due_amount = $request->due_amount;
        $payment->refferel_name = $request->refferal_name;
        $payment->refferel_amount = $request->refferal_amount;
        $payment->refferel_phone = $request->refferal_contact;
        $payment->payment_received_type = $request->fee_received_type;
        $payment->seat_booking_amount = $request->seat_booking_amount;
        $payment->booking_payment_type = $request->booking_payment_type;
        if($request->hasFile("receipt"))
        {
            $image = $request->file('receipt');
            $imageName = Auth::user()->id.time() . '.' . $image->extension();
            $image->move(public_path('uploads/schools/receipt'), $imageName);
            $payment->receipt = $imageName;
        }
        
        // return $payment;
        $payment->save();

        return back()->with('success','Fee Payment Successfully');
    }

    public function fee_payment_detail($student_id)
    {
        $student = Student::findOrFail($student_id);
        $check = StudentFeePayment::where('student_id',$student_id)->count();
        if($check == 0)
        {
            return to_route("school.fees.fee-payment",['class_id' => $student->assignClasses[0]->class->id])->with('error','NO record Found');
        }
        $fee_payment_history_latest = StudentFeePayment::with('student', 'feeStructure')
        ->where('student_id',$student_id)
        ->where('is_deleted','0')
        ->latest()->first();

        $fee_payment_history = StudentFeePayment::with('student', 'feeStructure')
        ->where('student_id',$student_id)
        ->where('is_deleted','0')
        ->get();

        $unique_month_fee_payment_history = StudentFeePayment::with('student', 'feeStructure')
        ->where('student_id',$student_id)
        ->distinct()
        ->get('fees_month');

        return view("school.fees.fee-payment.detail")->with(compact('fee_payment_history','fee_payment_history_latest','unique_month_fee_payment_history'));
    }

    public function fee_payment_edit($id)
    {
        $fee_payment_history = StudentFeePayment::with('student', 'feeStructure')->where('id', $id)->firstOrFail();
        $classes = Classes::where('school_id', $this->school->id)->where('is_deleted','0')->get();
        $students = $this->getStudentsByClassId($fee_payment_history->class_id);
        $students = $students['students'];
        $current_session = Session::where(['school_id' => $this->school->id,'is_deleted' => '0','is_active' => '1'])->first();

        return view("school.fees.fee-payment.edit")->with(compact('fee_payment_history','classes','students','current_session'));
    }

    public function fee_payment_specific_update(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'month' => 'required',
            'type' => 'required',
            'amount' => 'required',
         ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if(empty($request->fee_structure_id))
        {
            return back()->with('error','Fee Sturcture is not added against this class');
        }
        $payment = StudentFeePayment::find($request->id);
        if(empty($payment->session_id))
        {
            $session = Session::where('school_id',$this->school->id)->where('is_deleted','0')->where('is_active','1')->first();
            $payment->session_id = $session->id;
        }

        $previous_student_payment = StudentFeePayment::where('school_id',$this->school->id)
        ->where('fees_month',$request->month)
        ->where('fee_structure_id',$request->fee_structure_id)
        ->where('class_id',$payment->class_id)
        ->where('student_id',$payment->student_id)
        ->first();

        if($previous_student_payment)
        {
            $fee_structure = FeeStructure::find($request->fee_structure_id);
            $paid_amount = StudentFeePayment::where('school_id',$this->school->id)
            ->where('fees_month',$request->month)
            ->where('fee_structure_id',$request->fee_structure_id)
            ->where('class_id',$payment->class_id)
            ->where('student_id',$payment->student_id)
            ->sum('amount');

            $remaining_amount = $fee_structure->amount - $paid_amount;

            if($remaining_amount == 0)
            {
                $final_paid_amount = StudentFeePayment::find($request->id);
                $final_remaining_amount = $paid_amount - $final_paid_amount->amount + $request->amount;

                if($final_remaining_amount > $fee_structure->amount)
                {
                    return back()->with('error','Payment already paid for this month');
                }
            }

            if($request->amount > $fee_structure->amount AND $remaining_amount != 0)
            {
                return back()->with('error','Amount exceeded');
            }

        }

        $payment->fee_structure_id = $request->fee_structure_id;
        $payment->fees_month = $request->month;
        $payment->payment_type = $request->type;
        $payment->amount = $request->amount;
        $payment->save();

        return to_route('school.fees.fee-payment.detail',$payment->student_id)->with('success','Fee Payment Successfully');
    }

    public function fee_payment_delete(Request $request)
    {
        $fee_structure = StudentFeePayment::where('student_id', $request->id)->delete();
        return back()->with('success','Student Fee Payment Deleted Successfully');
    }

    public function fee_payment_specific_delete(Request $request)
    {
        $fee_structure = StudentFeePayment::where('id', $request->id)->first();
        if(!$fee_structure)
        {
            return to_route("school.fees.fee-payment");
        }
        $fee_structure->delete();
        return back()->with('success','Student Fee Payment Deleted Successfully');
    }


    public function getClassesByYear(Request $request){
        // return $request;
        $sectionData = Section::where('id',$request->year)->first();
        $sectionAssignData = $sectionData->assignedClasses;
        // return $sectionAssignData;
        $sectionAssignArray = [];
        foreach ($sectionAssignData as $index => $section) {
            $sectionAssignArray[] = $section->class;
        }
        return response()->json($sectionAssignArray);
    }
    public function getStudentsByClass(Request $request){
        // return $request;
        $students = StudentClassAssign::with(['student' => function($query) {
    $query->where('is_deleted',"!=","1"); // Filter out soft-deleted students
}])
    ->where('class_id', $request->class_id)
    ->where('section_id', $request->year)
    ->get();
        //  $students = StudentClassAssign::with('student')->where('class_id',$request->class_id)->where('section_id',$request->year)->get();
         $fee = FeeStructure::where('class_id',$request->class_id)->where('section_id',$request->year)->first();
         return response()->json([
            'students' => $students,
            'fee' => $fee ? $fee->amount : null,
        ]);
    }





    // payment history


    public function fee_payment_history_index()
    {
        // try {
        //     \Artisan::call('migrate', [
        //         '--path' => 'database/migrations/2023_10_25_103952_add_column_session_id_to_student_fee_payments_table.php',
        //     ]);
        //     return 'Migration executed successfully.';
        // } catch (\Exception $e) {
        //     return 'Migration failed: ' . $e->getMessage();
        // }
        // // 2023_10_25_103952_add_column_session_id_to_student_fee_payments_table.php
        // $fee_payment_history = StudentFeePayment::with('student', 'feeStructure')
        // ->join('fee_structures', 'student_fee_payments.fee_structure_id', '=', 'fee_structures.id')
        // ->where('student_fee_payments.school_id', $this->school->id)
        // ->where('student_fee_payments.is_deleted','0')
        // ->select('student_fee_payments.student_id', 'student_fee_payments.fees_month', 'student_fee_payments.fee_structure_id', \DB::raw('SUM(student_fee_payments.amount) as total_amount'))
        // ->groupBy('student_fee_payments.student_id', 'student_fee_payments.fees_month', 'student_fee_payments.fee_structure_id')
        // ->orderBy('student_fee_payments.fees_month', 'DESC')
        // ->paginate(10);

        // $fee_payment_all_students = StudentFeePayment::join('fee_structures', 'student_fee_payments.fee_structure_id', '=', 'fee_structures.id')
        // ->where('student_fee_payments.school_id', $this->school->id)
        // ->where('student_fee_payments.is_deleted','0')
        // ->select('student_fee_payments.student_id', 'student_fee_payments.fees_month', 'student_fee_payments.fee_structure_id', \DB::raw('SUM(student_fee_payments.amount) as total_amount'))
        // ->groupBy('student_fee_payments.student_id', 'student_fee_payments.fees_month', 'student_fee_payments.fee_structure_id')
        // ->orderBy('student_fee_payments.fees_month', 'DESC')
        // ->get();

        // $fee_payment_all_date = StudentFeePayment::join('fee_structures', 'student_fee_payments.fee_structure_id', '=', 'fee_structures.id')
        // ->where('student_fee_payments.school_id', $this->school->id)
        // ->where('student_fee_payments.is_deleted','0')
        // ->select('student_fee_payments.fees_month')
        // ->groupBy('student_fee_payments.fees_month')
        // ->orderBy('student_fee_payments.fees_month', 'DESC')
        // ->get();

        // $classes = Classes::where('school_id', $this->school->id)->where('is_deleted','0')->OrderBy('name','ASC')->get();
        // $student_class_assigns = [];
        // if(!empty(request()->class_id) AND !empty(request()->section_id))
        // {
        //     $student_class_assigns = StudentClassAssign::where('school_id',$this->school->id)->where('class_id',request()->class_id)->where('section_id',request()->section_id)->get();
        // }

        $studentsfee_payment = StudentFeePayment::with(['student'])
        ->select('student_id', \DB::raw('SUM(actual_fee) as actual_fee_amount'))
        ->where('session_id',$this->session->id)
        ->groupBy('student_id')
        ->orderBy('id', 'DESC')
        ->paginate(10);
        return view("school.fees.fee-payment-history.index")->with(compact('studentsfee_payment'));
    }

    public function fee_payment_history_detail($id){
        // return $id;
        $student_all_fees = StudentFeePayment::where('student_id',$id)->where('session_id',$this->session->id)->with('student','section','class')->paginate(10);
       return view("school.fees.fee-payment-history.detail")->with(compact('student_all_fees'));
    }
    public function getStudentdueAmount(Request $request){
        // return $request;
        $student_fee_payment = StudentFeePayment::where('student_id', $request->student_id)
        ->where('class_id', $request->class_id)
        ->where('section_id', $request->year)
        ->latest()
        ->first();
        $student_fee_payment_count = StudentFeePayment::where('student_id', $request->student_id)
        ->where('class_id', $request->class_id)
        ->where('section_id', $request->year)
        ->count();
        $total_fee = FeeStructure::where('class_id',$request->class_id)->where('section_id',$request->year)->pluck('amount');
         $due_amount = $student_fee_payment ? $student_fee_payment->due_amount : $total_fee;
        return response()->json([
            'due_amount' => $due_amount,
            'payment_count' => $student_fee_payment_count
        ]);
    }

    public function admin_fee_payment_invoice($id){
        // return $id;
        $order = StudentFeePayment::where('id',$id)->with(['student','class','section'])->first();
        // return view('school.fees.fee-payment.invoice', compact('order'));
       $pdf = PDF::loadView('school.fees.fee-payment.invoice', compact('order'));
       $pdf->getDomPDF()->set_option("isHtml5ParserEnabled", true);
       $pdf->getDomPDF()->set_option("isPhpEnabled", true);
       $pdf->getDomPDF()->get_canvas()->set_opacity(0.1);
       
    //   return view('school.fees.fee-payment.invoice', compact('order'));
       return $pdf->download('receipt-' . $order->id . '.pdf');
    }



    public function fee_payment_refferal_data()
    {
        $studentsfee_payment = StudentFeePayment::with(['student','class','section'])
        ->where('session_id',$this->session->id)
        ->where('refferel_name','!=', null)
        ->where('refferel_amount','!=', null)
        ->where('refferel_phone','!=', null)
        ->orderBy('student_fee_payments.fees_month', 'DESC')
        ->paginate(10);
        return view("school.fees.fee-payment.refferal")->with(compact('studentsfee_payment'));
    }
}
