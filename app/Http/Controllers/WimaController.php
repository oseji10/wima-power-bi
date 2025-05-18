<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Databank;
use DB;
class WimaController extends Controller
{
    public function retrieveGender()
{
    $retrieve = Databank::select('gender')->get();

    $genderCount = $retrieve->groupBy('gender')->mapWithKeys(function ($group, $gender) {
        return [$gender => $group->count()];
    });

    // Convert the collection to a string with the format "Gender: Count, Gender: Count, ..."
    $result = $genderCount->map(function ($count, $gender) {
        return "$gender: $count";
    })->implode(', ');

    return $result;
}

//     public function retrieveState()
// {
//     $retrieve = Databank::select('state')->get();

//     $stateCount = $retrieve->groupBy('state')->mapWithKeys(function ($group, $state) {
//         return [$state => $group->count()];
//     });

//     // Convert the collection to a string with the format "State: Count, State: Count, ..."
//     $result = $stateCount->map(function ($count, $state) {
//         return "$state: $count";
//     })->implode(', ');

//     return response()->json($result);
// }

// public function retrieveState()
// {
  
//     $result = DB::table('databank')
//         ->select('state', DB::raw('COUNT(*) as candidate_count'))
//         ->groupBy('state')
//         ->get();

//     // Transform the result into the desired JSON format
//     $formatted = $result->mapWithKeys(function ($item) {
//         return [$item->state => $item->candidate_count];
//     })->toArray();

//     return response()->json([$formatted]);
// }


public function retrieveState()
{
    // $states = Databank::orderBy('state')->select('id', 'state')->count('state')->groupby('state')->get();
    $states = Databank::select('state', DB::raw('COUNT(*) as state_count'))
    ->whereNotNull('state')
    ->groupBy('state')
    ->orderBy('state')
    ->get();
    return response()->json($states);
}

public function retrieveQualification()
{
     $qualification = Databank::select('qualification', DB::raw('COUNT(*) as qualification_count'))
    ->whereNotNull('qualification')
    ->groupBy('qualification')
    ->orderBy('qualification')
    ->get();
    return response()->json($qualification);
}

public function retrieveReligion()
{
     $religion = Databank::select('religion', DB::raw('COUNT(*) as religion_count'))
    ->whereNotNull('religion')
    ->groupBy('religion')
    ->orderBy('religion')
    ->get();
    return response()->json($religion);
}

public function retrieveAvailability()
{
     $availability = Databank::select('availability', DB::raw('COUNT(*) as availability_count'))
    ->whereNotNull('availability')
    ->groupBy('availability')
    ->orderBy('availability')
    ->get();
    return response()->json($availability);
}

}