<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreGrades;
use App\Models\Grade;
use Dotenv\Result\Success;
use Illuminate\Http\Request;

<<<<<<< HEAD
=======

>>>>>>> 08be6a5d6fc6d74d055b37761577a065cc1b988f
class GradeController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
<<<<<<< HEAD

  }
=======
   $grades=Grade::all();
   return view('pages.Grades.Grades',['grades'=>$grades]);
 }
>>>>>>> 08be6a5d6fc6d74d055b37761577a065cc1b988f

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

  }

}

?>
