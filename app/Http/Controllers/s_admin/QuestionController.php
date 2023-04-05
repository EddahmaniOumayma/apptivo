<?php

namespace App\Http\Controllers\s_admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Questions = Question::with(['exam' => function($query){
        },
        'answers'=>function($query){} ])->get();
       return view('s_admin.questions.index',compact('Questions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exams=Exam::all();
        return view('s_admin.questions.ajouter',compact('exams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'correct' => 'required|in:0,1',
            'exam_id'=>'required',

        ]);
        Question::create($request->all());

      
        return redirect()->route('questions.index');

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $Question=Question::find($id);
        $exams=Exam::all();
        return view('s_admin.questions.modifier',compact('exams','Question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
  
       
       $rules = [
        'question' => 'required|string|max:255',
        'exam_id'=>'required',
        'correct' => 'required|in:0,1',

    ];


$validator = Validator::make($request->all(),$rules);
if ($validator->fails()) {

   
 dd($validator->messages());
        return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
    }





// update 
$Question = Question::find($id);
$Question->question = $request->input('question');
$Question->correct = $request->input('correct');
$Question->save();
// Redirect to user profile page Here
return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Question=Question::find($id);
        $Question->delete();
        return redirect()->route('questions.index');
    }
}
