<?php

namespace App\Services;

use Illuminate\Validation\Rule;
use \App\Models\User;

class UserService
{
    /**
     * Create a user
     *
     * @param array $validated
     * @return null|User
     */
    public static function create(array $validated)
    {
        return User::create([
            ...$validated,
            'password' => \Hash::make($validated['password'])
        ]);
    }

    /**
     * 
     * 
     * =================================
     * 
     * FIELDS AND RULES DEFINITION
     * 
     * =================================
     * 
     * 
     */

    /**
     * 
     * 
     * FIELDS
     * 
     * 
     */

    /**
     * Get Basic user data fields
     *
     * @return array
     */
    public static function getBasicDataFields()
    {
        return [
            'first_name' => null,
            'last_name' => null,
            'username' => null,
            'gender' => 'n'
        ];
    }

    /**
     * Get password data fields
     *
     * @return array
     */
    public static function getPasswordDataFields()
    {
        return [
            'password' => null,
            'password_confirmation' => null
        ];
    }

    /**
     * Get create data fields
     *
     * @return array
     */
    public static function getCreateDataFields()
    {
        return array_merge(
            self::getBasicDataFields(),
            [
                'email' => null,
            ],
            self::getPasswordDataFields()
        );
    }

    /**
     * 
     * 
     * RULES
     * 
     * 
     */

    /**
     * Get Basic data rules
     *
     * @return array
     */
    public static function getBasicDataRules()
    {
        return [
            'data' => ['array'],
            'data.first_name' => ['required', 'string', 'max:25'],
            'data.last_name' => ['required', 'string', 'max:50'],
            'data.username' => ['required', 'string', 'max:25'],
            'data.gender' => ['nullable', 'string', Rule::in('n', 'm', 'f')]
        ];
    }

    /**
     * Get password data rules
     *
     * @return array
     */
    public static function getPasswordDataRules()
    {
        return [
            'data' => ['array'],
            'data.password' => ['required', 'confirmed'],
        ];
    }

    /**
     * Get create data Rules
     *
     * @return array
     */
    public static function getCreateDataRules()
    {
        return array_merge(
            self::getBasicDataRules(),
            [
                'data.email' => ['required', 'email', 'unique:users,email'],
            ],
            self::getPasswordDataRules()
        );
    }
}