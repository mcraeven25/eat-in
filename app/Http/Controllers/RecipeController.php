<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RecipeController extends Controller
{
    public function index()
    {
        return view('recipes.index', [
            'recipes' => Recipe::latest()->filter(request(['tag', 'search']))->simplePaginate(12)
        ]);
    }

    public function show(Recipe $recipe)
    {
        $user = User::query()
            ->where('id', 'LIKE', "%{$recipe['user_id']}%")
            ->get()[0];

        return view('recipes.show', [
            'recipe' => $recipe,
            'user' => $user,

        ]);
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {

        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'procedure' => 'required',
            'time' => 'required',

        ]);

        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Recipe::create($formFields);

        return redirect('/')->with('message', 'Recipe Added Successfully!');
    }

    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', ['recipe' => $recipe]);
    }

    public function update(Request $request, Recipe $recipe)
    {

        if ($recipe->user_id != auth()->id()) {
            abort(403, "Unauthorized Action");
        }

        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'procedure' => 'required',
            'time' => 'required',

        ]);

        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }


        $recipe->update($formFields);

        return back()->with('message', 'Recipe Updated Successfully!');
    }

    public function destroy(Recipe $recipe)
    {
        if ($recipe->user_id != auth()->id()) {
            abort(403, "Unauthorized Action");
        }
        $recipe->delete();
        return redirect('/')->with('message', 'Recipe has been delete successfully!');
    }

    public function retrieve()
    {

        return view('recipes.retrieve', ['recipes' => auth()->user()->recipe()->latest()->filter(request(['tag', 'search']))->simplePaginate(12)]);
    }

    public function userRecipe(Request $request)
    {
        $id = $request->query('user_id');

        $recipes = Recipe::query()
            ->where('user_id', 'LIKE', "%{$id}%")
            ->get();

        return view('recipes.user', [
            'recipes' => $recipes
        ]);
    }
}
