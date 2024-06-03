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

        // $userArray = [];

        // $tests = DB::table('tests')
        //             ->orderBy('id')
        //             ->cursorPaginate();


        // $tests = Test::all();

        $tests = Test::where('user_age', '>', 80)
                    ->paginate(5);



        
        return view('test',[
            'tests' => $tests,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        // $tests = Test::all();

        // $existingRecord = Test::firstOrCreate(
        //     ['name' => 'Eloquent is awesome 2'],
        //     [
        //         'user_id' => 6,
        //         'balance' => 1000,
        //         'user_age' => 90,
        //         'description' => 'This is a description 3',
        //     ]
        // );
        
        // dd($existingRecord);

        $existingRecord = Test::firstOrNew(
            ['name' => 'Eloquent is awesome 5'],
            [
                'user_id' => 6,
                'name' => 'Eloquent is awesome 5',
                'balance' => 1000,
                'user_age' => 90,
                'description' => 'This is a description 5',
            ]
        );
        $existingRecord->save();
        dd($existingRecord);


    
        // $tests = Test::where('name','Eloquent is awesome 3')->first() ?: 
        // Test::create(
        //     [
        //         'user_id' => 6,
        //         'name' => 'Eloquent is awesome 3',
        //         'balance' => 1000,
        //         'user_age' => 90,
        //         'description' => 'This is a description 3',
        //     ]
        // );


        // return view('create',[
        //     'tests' => $tests,
        // ]);
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
        // $test = Test::where('user_id',$test->id)->firstOrFail();

    

        return view('show',[
            'test' => $test,
        ]);
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
