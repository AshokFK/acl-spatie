<?php

namespace App\Http\Controllers;

use App\Helpers\Alert;
use App\Models\Permission;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::paginate(10);
        return view("permissions.index", compact("permissions"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("permissions.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        Permission::create($request->all());
        Alert::flash('success', 'Created successfully');
        return redirect()->route("permissions.index");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        return view('permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $permission->update($request->all());

        Alert::flash('success', 'Updated successfully');
        return redirect()->route('permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        Alert::flash('success', 'Deleted successfully');
        return redirect()->route('permissions.index');
    }
}
