<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'contacts' => DB::table('contacts')->get(),
            'appointments' => DB::table('book_appointments')->get(),
        ];
        return view('admin.dashboard', $data);
    }

    public function contact()
    {
        $data = DB::table('contacts')->orderbyDesc('created_at')->get();

        if ($data) {
            return view('admin.contact', ['data' => $data]);
        }
        return redirect()->back()->withErrors(['message' => 'No data Found']);
    }

    public function appointments()
    {
        $data = DB::table('book_appointments')->orderByDesc('id')->get();
        if ($data) {
            return view('admin.appointments', ['data' => $data]);
        }
        return redirect()->back()->withErrors(['message' => 'No data Found']);
    }

    public function statusAccept($id){
        $data=DB::table('book_appointments')->where('id',$id)->first();

        $status=$data->status;

        if($status == "BOOKED"){
               $result=DB::table('book_appointments')->where('id',$id)->update(['status'=>'ACCEPTED']);
               if($result){
                return redirect('_admin/secure/appointment')->with('success', 'Status Changed');
            }
            return back()->withInput()->with('error', 'Plese try Again');
        }
    }

    public function statusCancle($id){
        $data=DB::table('book_appointments')->where('id',$id)->first();

        $status=$data->status;

        if($status == "ACCEPTED"){
               $result=DB::table('book_appointments')->where('id',$id)->update(['status'=>'CANCELLED']);
               if($result){
                return redirect('_admin/secure/appointment')->with('success', 'Status Changed');
            }
            return back()->withInput()->with('error', 'Plese try Again');
        }
    }

    public function statusConvert($id){
        $data=DB::table('book_appointments')->where('id',$id)->first();

        $status=$data->status;

        if($status == "ACCEPTED"){
               $result=DB::table('book_appointments')->where('id',$id)->update(['status'=>'CONVERTED']);
               if($result){
                return redirect('_admin/secure/appointment')->with('success', 'Status Changed');
            }
            return back()->withInput()->with('error', 'Plese try Again');
        }
    }

    public function deleteContact($id)
    {
        DB::table('contacts')->where('id', $id)->delete();
        return redirect('_admin/secure/contact')->with('success', 'Contact deleted successfully');
    }

    public function deleteAppointment($id)
    {
        DB::table('book_appointments')->where('id', $id)->delete();
        return redirect('_admin/secure/appointment')->with('success', 'Appointment deleted successfully');
    }

    public function changePassword(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|min:6|confirmed',
            ]);

            $user = auth()->user();

            if (!Hash::check($request->input('current_password'), $user->password)) {
                return back()->with('error', 'Current password is incorrect');
            }

            DB::table('users')
                ->where('id', $user->id)
                ->update(['password' => Hash::make($request->input('new_password'))]);

            return back()->with('success', 'Password updated successfully');
        }
        return view('admin.change-password');
    }
}
