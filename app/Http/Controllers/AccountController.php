<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use App\Models\Account;

class AccountController extends Controller
{
    public function index()
    {
        return Account::all();
    }

    public function store(StoreAccountRequest $request)
    {
        $account = Account::create($request->validated());

        return $account;
    }

    public function show(Account $account)
    {
        return $account;
    }

    public function update(UpdateAccountRequest $request, Account $account)
    {
        return $account->update($request->validated());
    }

    public function destroy(Account $account)
    {
        return $account->delete();
    }
}
