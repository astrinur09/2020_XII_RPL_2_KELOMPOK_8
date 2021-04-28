<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Student;
use App\User;
use App\Calon;
use Auth;
use App\Candidate;
use App\VoteOfCandidates;
use App\Member;
use DB;


use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware(['auth']);
        
    }

    
    public function index()
    {
         $candidates = Candidate::join('students as chairman','cdt_chairman_id','=','chairman.std_id')
                              ->join('students as vice_chairman', 'cdt_vice_chairman_id','=','vice_chairman.std_id')
                              ->join('users as chairman_users','chairman.std_usr_id','=','chairman_users.usr_id')
                              ->join('users as vice_chairman_users','vice_chairman.std_usr_id','=','vice_chairman_users.usr_id')
                                ->join(
                                    DB::raw(
                                        '( select voc_candidates_id , count(voc_candidates_id) as total_votes from vote_of_candidates where vote_of_candidates.deleted_at is null group by voc_candidates_id
                                        ) as vote_results'), 'vote_results.voc_candidates_id', '=', 'cdt_id'
                                )
                                ->select(
                                    'chairman_users.usr_name as chairman_name',
                                    'vice_chairman_users.usr_name as vice_chairman_name',
                                    'cdt_visi',
                                    'cdt_misi',
                                    'cdt_chairman_id',
                                    'cdt_id',
                                    'vote_results.total_votes'

                                    // , 
                                    // DB::raw(VoteOfCandidates::join('candidates', 'voc_candidates_id', '=', 'cdt_id')->where('voc_candidates_id', '=', 'cdt_id')->count()->groupBy('voc_candidates_id'))
                                    )

                ->whereCdtIsActive('1')->get();
                //dd($candidates);
        return view('admin.dashboard',compact('candidates'));
    }

    public function table()
    {
        return view ('admin.table');
    }

     public function Voting()
    {
        $candidates = Candidate::join('students as chairman','cdt_chairman_id','=','chairman.std_id')
                              ->join('students as vice_chairman', 'cdt_vice_chairman_id','=','vice_chairman.std_id')
                              ->join('users as chairman_users','chairman.std_usr_id','=','chairman_users.usr_id')
                              ->join('users as vice_chairman_users','vice_chairman.std_usr_id','=','vice_chairman_users.usr_id')
                                ->join(
                                    DB::raw(
                                        '( select voc_candidates_id , count(voc_candidates_id) as total_votes from vote_of_candidates where vote_of_candidates.deleted_at is null group by voc_candidates_id
                                        ) as vote_results'), 'vote_results.voc_candidates_id', '=', 'cdt_id'
                                )
                                ->select(
                                    'chairman_users.usr_name as chairman_name',
                                    'vice_chairman_users.usr_name as vice_chairman_name',
                                    'cdt_visi',
                                    'cdt_misi',
                                    'cdt_chairman_id',
                                    'cdt_id',
                                    'vote_results.total_votes'

                                    // , 
                                    // DB::raw(VoteOfCandidates::join('candidates', 'voc_candidates_id', '=', 'cdt_id')->where('voc_candidates_id', '=', 'cdt_id')->count()->groupBy('voc_candidates_id'))
                                    )
                ->whereCdtIsActive('1')->get();
                //dd($candidates);
                // $candidates2 = candidate::join('vote_of_candidates', function($join){
                //     return $join->on('voc_candidates_id','=','cdt_id')->count();

                // })->get();
                //$count=VoteOfCandidates::where('voc_candidates_id',1)->count();
                //dd($candidates);
        return view ('admin.voting',compact('candidates'));
    }
     
     public function tambahVotingSiswa($id)
    {
        
        $voc = VoteOfCandidates::whereVocStudentsId(Auth::user()->usr_id)->first();
        //dd($voc);
        if ($voc) {
           return back()->withError('Maaf anda tidak bisa voting lagi');
        }else{
             $candidate = new VoteOfCandidates(); 
        $candidate->voc_candidates_id = $id;
    
        $candidate->voc_students_id = Auth::user()->usr_id;
        //dd($candidate);
        $candidate->save();
        return redirect ('student/voting');
        }

       
    }


    public function profil()
    {
        return view('admin.profil');
    }
    public function studentProfil()
    {
        return view('student.profil');
    }



    public function menajemensiswa()
    {
        $student = Student::join('users','std_usr_id','=','usr_id')->get();
        //dd($student);
        return view('admin.menajemensiswa',compact('student'));
    }

    public function detailSiswa($id){
        $user = Student::join('users','std_usr_id','=','usr_id')->whereUsrId($id)->first();
        return view('admin.detail-siswa',compact('user'));
    }

    public function menajemencalon()
    {
        $candidate = Candidate::join('students as chairman','cdt_chairman_id','=','chairman.std_id')
                              ->join('students as vice_chairman', 'cdt_vice_chairman_id','=','vice_chairman.std_id')
                              ->join('users as chairman_users','chairman.std_usr_id','=','chairman_users.usr_id')
                              ->join('users as vice_chairman_users','vice_chairman.std_usr_id','=','vice_chairman_users.usr_id')
                    
                     ->select(
                        'cdt_id',
                        'chairman_users.usr_name as chairman_name',
                        'vice_chairman_users.usr_name as vice_chairman_name',
                        'cdt_visi',
                        'cdt_misi', 
                        )
                     ->whereCdtIsActive('0')
                     ->get(); 
        $num = 1;
        //dd($candidate);
        return view('admin.menajemencalon',compact('candidate','num'));
    }

      public function menajemenanggota()
    {
        $member = Member::join('students','mbr_students_id','=','std_id')
                        ->join('users','std_usr_id','=','usr_id')
                        ->get(); 
        $num = 1;
        return view('admin.menajemenanggota',compact('member','num'));
    }

     public function createMember()
    {
        $students = Student::join('users','std_usr_id','=','usr_id')->get();
        return view('admin.create-member', compact('students'));
    }

    public function createStudent()
    {
        return view('admin.create-student');
    }
    
    public function createCalon()
    {
        $students = Student::join('users','std_usr_id','=','usr_id')->get();
        //dd($students);
        return view('admin.create-calon',compact('students'));
    }

    public function activation($id)
    {
        $candidate = Candidate::whereCdtId($id)->first();
        $candidate->cdt_is_active = '1';
        $candidate->save();

        $v_candidate = new VoteOfCandidates();
        $v_candidate->voc_candidates_id = $candidate->cdt_id;
        $v_candidate->voc_students_id = null;
        $v_candidate->save();


       
        return redirect('admin/voting')->withSuccess('Calon Telah Bisa Di Voting');
    }


    public function saveCalon(Request $request)
    {

        $candidate = new Candidate();
        $candidate->cdt_chairman_id      = $request->chairman;
        $candidate->cdt_vice_chairman_id = $request->vice_chairman;
        $candidate->cdt_visi             = $request->visi;
        $candidate->cdt_misi             = $request->misi;
        $candidate->cdt_is_active        = '0';

        $student = Student::whereStdId($candidate->cdt_chairman_id)->first();
        $student->status = '1';
        $student->save();

        $students = Student::whereStdId($candidate->cdt_vice_chairman_id)->first();
        $students->status = '1';
        $students->save();
        //dd($candidate);
        $candidate->save();
        return redirect('admin/Manajemencalon');


       


       
    }


 public function editCalon($id)
    {
        $Candidate = Candidate::whereCdtId($id)->first();
         $students = Student::join('users','std_usr_id','=','usr_id')->get();
        
        //dd($Calon);
        return view('admin.edit-calon', compact('Candidate','students'));
    }

     public function saveEditCalon(Request $request)
    {
        //dd($request);
        $cdt_id = $request->cdt_id;
        //dd($cln_id);
         $edit_cdt = Candidate::whereCdtId($cdt_id)->first();
         //dd($candidate);
        
        $edit_cdt->cdt_visi                    = $request->visi;
        $edit_cdt->cdt_misi                    = $request->misi;
        $edit_cdt->cdt_is_active               = '0';
        //dd($edit_cdt);
        $edit_cdt->save();
        return redirect('admin/Manajemencalon');
    }

     public function saveMember(Request $request)
    {

         $member = new Member();
         $member->mbr_students_id    = $request->name;
         $member->reason             = $request->reason;
         $member->division           = $request->Division;
        // dd($member);
         $member->save();

         $student = Student::whereStdId($request->name)->first();
         $student->status = '1';
         $student->save();

        return redirect('admin/Manajemenanggota');


       
    }





     public function editMember($id)
    {
        $member = Member::join('students','mbr_students_id','=','std_id')
                        ->join('users','std_usr_id','=','usr_id')
                        ->wherembrId($id)->first();
        
        //dd($Member);
        return view('admin.edit-member', compact('member'));
    }

     public function saveEditMember(Request $request)
    {
        $mbr_id = $request->mbr_id;
        //dd($mbr_id);
         $Member = Member::wherembrId($mbr_id)->first();
         //dd($Member);
        $Member->mbr_students_id  = $request->name;
        $Member->reason           = $request->reason;
        $Member->division         = $request->division;
        //dd($candidate);
        $Member->save();
        return redirect('admin/Manajemenanggota');
    }



     public function editStudent($id)
    {
        $student = Student::join('users','std_usr_id','=','usr_id')
                          ->whereStdUsrId($id)->first();
        //dd($student);
        return view('admin.edit-student', compact('student'));
    }


     public function deleteStudent($id)
    {
        $student = Student::whereStdId($id)->delete();

        //dd($student);
        return back();
    }
    
    public function deleteCalon($id)
    {
        $calon = Candidate::whereCdtId($id)->first();
        $calon->delete();

        //dd($student);
        return back();
    }


     public function deleteMember($id)
    {
        $student = Student::whereStdId($id)->first();
        $student->status = '0';
        $student->save();
        $Member = Member::whereMbrStudentsId($id)->first();
        $Member->delete();

        //dd($Member);
        return back();
    }


     public function saveEditStudent(Request $request)
    {
        $id = $request->std_usr_id;
        $student = Student::whereStdUsrId($id)->first();
        $student->nis          = $request->nis;      
        $student->class        = $request->class; 
        $student->gender       = $request->gender;  
        //dd($student);
        $student->save();   

        $user = User::whereUsrId($id)->first();
        $user->usr_name = $request->usr_name;
        $user->save();
        
        return redirect('admin/menajemensiswa')->withSuccess('Data telah diubah');
    }



     public function editprofil($id)
    {
        $student = Student::whereStdId($id)->first();
        return view('admin.editprofil',compact('student'));
    }
     public function editProfileStudent($id)
    {
        $student = Student::whereStdId($id)->first();
        return view('student.edit-profil',compact('student'));
    }

     public function saveEditProfile(Request $request)
    {
        $id = $request->id;
       if ($request->password) {
           $user = User::whereUsrId($id)->first();
            $user->usr_name         = $request->name;
            $user->usr_email        = $request->email;
            $user->usr_password     = Hash::make($request->password);
            //dd($user);
            $user->save();
            return redirect('admin/profil')->withSuccess('Profil Telah Diubah');
       }else{
         $user = User::whereUsrId($id)->first();
            $user->usr_name         = $request->name;
            $user->usr_email        = $request->email;
            //dd($user);
            $user->save();
            return redirect('admin/profil')->withSuccess('Profil Telah Diubah');
       }
           
       
        
        

    }public function saveEditProfileStudent(Request $request)
    {
        $id = $request->id;
       if ($request->password) {
           $user = User::whereUsrId($id)->first();
            $user->usr_name         = $request->name;
            $user->usr_email        = $request->email;
            $user->usr_password     = Hash::make($request->password);
            //dd($user);
            $user->save();
            return redirect('student/profil')->withSuccess('Profil Telah Diubah');
       }else{
         $user = User::whereUsrId($id)->first();
            $user->usr_name         = $request->name;
            $user->usr_email        = $request->email;
            //dd($user);
            $user->save();
            return redirect('student/profil')->withSuccess('Profil Telah Diubah');
       }
       
        

    }


    public function saveStudent(Request $request)
    {
        
        $nis = Student::whereNis($request->nis)->first();
        //dd($student);
        if ($nis) 
        {
             return back()->withError('Nis tidak boleh sama');
        }else{

            $user = new User();
            $user->usr_name = $request->usr_name;
            $user->save();

            $student = new Student();
            $student->std_usr_id   = $user->usr_id;
            $student->nis          = $request->nis;  
            $student->major        = $request->major;
            $student->class        = $request->class; 
            $student->gender       = $request->gender; 
            //dd($student);
            $student->save();   

            return redirect('admin/menajemensiswa')->withSuccess('Siswa Telah Ditambahkan');
        }
        
    }

    public function indexStudent(){
         $candidates = Candidate::join('students as chairman','cdt_chairman_id','=','chairman.std_id')
                              ->join('students as vice_chairman', 'cdt_vice_chairman_id','=','vice_chairman.std_id')
                              ->join('users as chairman_users','chairman.std_usr_id','=','chairman_users.usr_id')
                              ->join('users as vice_chairman_users','vice_chairman.std_usr_id','=','vice_chairman_users.usr_id')
                                ->join(
                                    DB::raw(
                                        '( select voc_candidates_id , count(voc_candidates_id) as total_votes from vote_of_candidates where vote_of_candidates.deleted_at is null group by voc_candidates_id
                                        ) as vote_results'), 'vote_results.voc_candidates_id', '=', 'cdt_id'
                                )
                                ->select(
                                    'chairman_users.usr_name as chairman_name',
                                    'vice_chairman_users.usr_name as vice_chairman_name',
                                    'cdt_visi',
                                    'cdt_misi',
                                    'cdt_chairman_id',
                                    'cdt_id',
                                    'vote_results.total_votes'

                                    // , 
                                    // DB::raw(VoteOfCandidates::join('candidates', 'voc_candidates_id', '=', 'cdt_id')->where('voc_candidates_id', '=', 'cdt_id')->count()->groupBy('voc_candidates_id'))
                                    )

                ->whereCdtIsActive('1')->get();
        return view('student.dashboard',compact('candidates'));
    }

    public function votingStudent()
    {
        $candidates = Candidate::join('students as chairman','cdt_chairman_id','=','chairman.std_id')
                              ->join('students as vice_chairman', 'cdt_vice_chairman_id','=','vice_chairman.std_id')
                              ->join('users as chairman_users','chairman.std_usr_id','=','chairman_users.usr_id')
                              ->join('users as vice_chairman_users','vice_chairman.std_usr_id','=','vice_chairman_users.usr_id')
                                ->join(
                                    DB::raw(
                                        '( select voc_candidates_id , count(voc_candidates_id) as total_votes from vote_of_candidates where vote_of_candidates.deleted_at is null group by voc_candidates_id
                                        ) as vote_results'), 'vote_results.voc_candidates_id', '=', 'cdt_id'
                                )
                                ->select(
                                    'chairman_users.usr_name as chairman_name',
                                    'vice_chairman_users.usr_name as vice_chairman_name',
                                    'cdt_visi',
                                    'cdt_misi',
                                    'cdt_chairman_id',
                                    'cdt_id',
                                    'vote_results.total_votes'

                                    // , 
                                    // DB::raw(VoteOfCandidates::join('candidates', 'voc_candidates_id', '=', 'cdt_id')->where('voc_candidates_id', '=', 'cdt_id')->count()->groupBy('voc_candidates_id'))
                                    )
                ->whereCdtIsActive('1')->get();
                //dd($candidates);
                // $candidates2 = candidate::join('vote_of_candidates', function($join){
                //     return $join->on('voc_candidates_id','=','cdt_id')->count();

                // })->get();
                //$count=VoteOfCandidates::where('voc_candidates_id',1)->count();
                //dd($candidates);
        return view ('student.voting',compact('candidates'));

    }
}
