<?php

namespace App\Http\Controllers\School;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PushNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PushNotificationController extends Controller
{
    public function index()
    {
        $school = getSchoolInfoByUsername(Auth::user()->username);
        $push_notifications = PushNotification::where('school_id',$school->id)->OrderBy('id','DESC')->paginate(10);
        
        return view('school.push-notifications.index', compact('push_notifications'));
    }
    public function create()
    {
        return view('school.push-notifications.create');
    }
    public function edit($id)
    {
        $push_notification = PushNotification::where('id', $id)->first();
        $types = json_decode($push_notification->type);
        return view('school.push-notifications.edit', compact('push_notification','types'));
    }
    public function view($id)
    {
        $push_notification = PushNotification::where('id', $id)->first();
        return view('school.push-notifications.view', compact('push_notification'));
    }
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nofication_type' => 'required',
            'title' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->with(['errors' => $validator->errors()]);
        } else {
            $type = json_encode($request->nofication_type);
            $school = getSchoolInfoByUsername(Auth::user()->username);
            $notification = new PushNotification();
            $notification->school_id = $school->id;
            $notification->type = $type;
            $notification->title = $request->title;
            $notification->message = $request->message;
            $notification->save();

            // $deviceToken = 'dlZV5C7wTsS2GvfqyE3kMj:APA91bE2LU4p72wW2t1NznT85pXQXo1QpQy7vfUEQPMPcDZfESi9Fi6G3xG9IhuUrGq9Uss93t9nKgjkalJBEerS6GYY9y-YX3TySU5FS8RAsPZNieGZ8KcWwckAuHyWAyfovFQCwnUL';
            // $this->sendMobPushNotification($deviceToken,$request->title,$request->message);

            if ($notification) {
                return to_route("school.notification-index")->with('success', 'Notification Added Successfully!');
            } else {
                return back()->with('error', 'Something went Wrong!');
            }
        }
    }
    public function destroy(Request $request)
    {
        $push_notification = PushNotification::find($request->id);
        $push_notification->delete();

        return redirect()->route('school.notification-index')->with('success', 'Notification Deleted Successfully!');
    }
    public function update(Request $request)
    {
        $type = json_encode($request->nofication_type);
        $notification = PushNotification::find($request->id);
        $notification->type = $type;
        $notification->title = $request->title;
        $notification->message = $request->message;
        $notification->save();

        if ($notification) {
            return redirect()->route('school.notification-index')->with('success', 'Notification Updated Successfully!');
        } else {
            return back()->with('message', 'Something went wrong!');
        }
    }

    public function send_notification($id)
    {
        $deviceToken = array();
        $school = getSchoolInfoByUsername(Auth::user()->username);
        $push_notification = PushNotification::find($id);
        $type = json_decode(strtolower($push_notification->type));
         $users = User::select('device_token')->where('school_id',$school->id)->whereNotNull('device_token')->whereIn('type',$type)->get();
        foreach($users as $token)
        {
            $this->sendMobPushNotification($token->device_token,$push_notification->title,$push_notification->message);
        }
        // $deviceToken = 'dlZV5C7wTsS2GvfqyE3kMj:APA91bE2LU4p72wW2t1NznT85pXQXo1QpQy7vfUEQPMPcDZfESi9Fi6G3xG9IhuUrGq9Uss93t9nKgjkalJBEerS6GYY9y-YX3TySU5FS8RAsPZNieGZ8KcWwckAuHyWAyfovFQCwnUL';
        return back()->with('success','Notification Sent Successfully!');
    }
}
