<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        $formModel = new Category;
        $formModel->fill(Input::get());

        if(isset($_GET['submit'])){
            $models = Category::Search();
        }else{
           $models =  Category::paginate(2);
        }
        
                
        if (\Request::ajax()) {

            return view('category.ajax',  compact('models'));
        }

    	
        return view('category.index', compact('models', 'formModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        

        $this->validate($request, Category::getValidationRules());

        $input = $request->all();
	    Category::create($input);

	    Session::flash('flash_message', 'Task successfully added!');

	    return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       
        $model = Category::findOrFail($id);
       
      	return view('category.show', array('model' => $model));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
         $model = Category::findOrFail($id);

    return view('category.edit')->withModel($model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        //
       $model = Category::findOrFail($id);

	    $this->validate($request, Category::getValidationRules());

	    $model->fill( $request->all() )->save();

	    Session::flash('flash_message', 'Category successfully updated!');

	    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $model = Category::findOrFail($id);

	    $model->delete();

	    Session::flash('flash_message', 'Category successfully deleted!');

	    return redirect()->route('category.index');
    }
}
