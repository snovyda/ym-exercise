<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function getCompanies()
    {
        /* =============== TEST STRING ================= */
        $companies = User::find(auth()->id())
            ->companies()
            ->orderBy('title')
            ->get();

        return response()->json($companies);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function storeCompany(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json(['status' => 'error', 'message' => $errors->messages()], 422);
        }

        try {
            $data = $request->all();

            // Create new company
            $company = Company::create($data);

            // And attach it to current user
            $user = User::find(auth()->id());
            $user->companies()->attach($company->id);

            return response()->json($company, 201);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 422);
        }
    }
}
