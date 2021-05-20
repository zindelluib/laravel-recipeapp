<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserRecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $recipes  =  Recipe::where('user_id',Auth::id())
                    ->get();
        return view('recipespage',['recipes' => $recipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipeform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated  = $request->validate([
            'recipename' => 'required',
        ]);

        $recipe  = new Recipe;
        $recipe->name  = $request->input('recipename');
        $recipe->description  = $request->input('description');
        $recipe->user_id  = Auth::id();
        $saved  = $recipe->save();
        
        return redirect('user-recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe  = Recipe::find($id);
        if($recipe){
            return view('recipedetail',['recipe' => $recipe]);
        }

        return redirect('user-recipes');


        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   
}
