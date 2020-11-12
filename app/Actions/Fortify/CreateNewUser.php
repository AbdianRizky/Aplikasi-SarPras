<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $validator =  Validator::make($input, [
            'name' => ['required', 'string', 'max:100'],
            'angkatan' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'email' => [
                'required',
                'string',
                'email',
                'max:100',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ]);

        // dd($validator)->message();



        return User::create([
            'name' => $input['name'],
            'angkatan_id' => $input['angkatan'],
            'jurusan_id' => $input['jurusan'],
            'kelas_id' => $input['kelas'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
