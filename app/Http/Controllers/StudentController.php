<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function add_student(){
		return view('admin.create');
	}
	
	public function save_student(Request $request){
		$this->validate($request, [
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required',
			'mobile' => 'required',
		]);
		
		$student = new Student;
		$student->first_name = $request->firstname;
		$student->last_name = $request->lastname;
		$student->email_id = $request->email;
		$student->mobile_no = $request->mobile;
		
		$student->save();
		return redirect(route('show_student'))->with('successMsg', 'Student data saved successfully..');
	}
	
	public function show_student(){
		$students = Student::paginate(5);
		return view('admin.students', compact('students'));
	}
	
	public function edit_student($id){
		$student = Student::find($id);
		return view('admin.edit', compact('student'));
	}
	
	public function update_student(Request $request, $id){
		$this->validate($request, [
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required',
			'mobile' => 'required',
		]);
		
		$student = Student::find($id);
		$student->first_name = $request->firstname;
		$student->last_name = $request->lastname;
		$student->email_id = $request->email;
		$student->mobile_no = $request->mobile;
		
		$student->save();
		return redirect(route('show_student'))->with('successMsg', 'Student data updated successfully..');
	}
	
	public function delete_student($id){
		$student = Student::find($id);
		$student->delete();
		return redirect(route('show_student'))->with('successMsg', 'Student data deleted successfully..');
	}
}
