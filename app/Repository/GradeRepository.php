<?php

namespace App\Repository;

use App\Models\Grade;

class GradeRepository implements GradeRepositoryInterface
{
    public function getAllGrades(){
        return Grade::all();

    }
    public function StoreGrades($request){
        try {
            $validated = $request->validated();
            $Grade = new Grade();
            /*
            $translations = [
                'en' => $request->Name_en,
                'ar' => $request->Name
            ];
            $Grade->setTranslations('Name', $translations);
            */
            $Grade->Name = ['en' => $request->Name_en, 'ar' => $request->Name];
            $Grade->Notes = $request->Notes;
            $Grade->save();
            // toastr()->success(trans('messages.success'));
            return redirect()->route('Grades.create');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }
}
