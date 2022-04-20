<?php

namespace App\Http\Controllers;


use App\DataTables\UsersDataTable;
use App\Models\Category;
use App\Models\Promocode;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function dashboard()
    {
        $usersCount = User::count();
        return view('admin.dashboard')
            ->with('pageTitle', 'Admin - Dashboard')
            ->with('usersCount', $usersCount);
    }

    public function users(UsersDataTable $dataTable)
    {
        return $dataTable->render('admin.users', ['pageTitle' => 'Admin - Users']);
    }

    public function subcategories()
    {
        $categories = Category::select(['id', 'title'])
            ->get()
            ->toArray();

        $subcategories = Subcategory::select(['id', 'title', 'category_id'])
            ->get();

        return view('admin.subcategories')
            ->with('pageTitle', 'Admin - Subcategories')
            ->with('categories', $categories)
            ->with('subcategories', $subcategories);
    }

    public function subcategoriesStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
        ]);
        $subcategory = new Subcategory();
        $subcategory->title = $request->input('title');
        $subcategory->category_id = $request->input('category');
        $subcategory->slug = Str::slug($request->input('title'), '-');

        $subcategory->save();
        return redirect()->route('admin.subcategories');
    }

    public function subcategoriesDestroy($id)
    {
        Subcategory::destroy($id);

        return redirect()->route('admin.subcategories')
            ->with('success', 'Post Deleted');
    }

    public function promocodes()
    {
        $promocodes = Promocode::select(['id', 'code', 'expires_at'])
                ->get();

        return view('admin.promocodes')
            ->with('promocodes', $promocodes);
    }

    public function promocodesStore(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'expires_at' => 'required',
        ]);

        $promocode = new Promocode();
        $promocode->code = $request->input('code');
        $promocode->expires_at = $request->input('expires_at');
        $promocode->save();
        return redirect()->route('admin.promocodes');
    }

    public function promocodesEdit($id)
    {
        $promocode = Promocode::find($id);

        return view('admin.promocodesEdit')->with('promocode', $promocode);
    }

    public function promocodesUpdate(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'expires_at' => 'required',
        ]);

        $promocode = Promocode::find($id);
        $promocode->code = $request->input('code');
        $promocode->expires_at = $request->input('expires_at');
        $promocode->save();

        return redirect()->route('admin.promocodes')->with('promocode', $promocode);
    }
    public function promocodesDestroy($id)
    {
        Promocode::destroy($id);

        return redirect()->route('admin.promocodes');
    }
}
