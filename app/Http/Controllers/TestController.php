<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tests = DB::table('tests')
        //             ->insertGetId([
        //                 'user_id' => 8,
        //                 'name' => 'Test X',
        //             ]);
        // dd($tests);

        // DB::transaction(function(){
        //     DB::table('tests')
        //         ->where('user_id', 6)
        //         ->lockForUpdate()
        //         ->decrement('balance',100);

        //     DB::table('tests')
        //         ->where('user_id',7)
        //         ->increment('balance',100);
        // });

        $userArray = [];

        $tests = DB::table('tests')
                    ->whereFullText('description','est')
                    ->orWhereFullText('description','nemo')
                    ->get();
        dd($tests);
        
        // return view('test',[
        //     'tests' => $tests,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestRequest $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
}
